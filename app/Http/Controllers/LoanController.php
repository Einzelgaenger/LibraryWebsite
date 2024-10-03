<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    public function index()
    {
        // Retrieve loans for the authenticated user
        $loans = Loan::where('user_id', Auth::id())->get();
        return view('loans.index', compact('loans'));
    }

    public function create(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);

        // Check if the book is available
        $book = Book::findOrFail($request->book_id);
        if (!$book->is_available) {
            return redirect()->back()->withErrors(['book' => 'Buku tidak tersedia untuk dipinjam.']);
        }

        // Create a new loan
        $loan = new Loan();
        $loan->user_id = Auth::id();
        $loan->book_id = $book->id; // Set book_id from the retrieved book
        $loan->loaned_at = now();
        $loan->due_date = now()->addDays(7); // Tenggat waktu 7 hari
        $loan->save();

        // Update book availability
        $book->is_available = false;
        $book->save();

        return redirect()->route('loans.index')->with('success', 'Buku berhasil dipinjam!');
    }
}
