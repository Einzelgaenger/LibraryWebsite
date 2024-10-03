<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
    // Display the borrowing form for a specific book
    public function create($bookId)
    {
        $book = Book::findOrFail($bookId);
        return view('borrows.create', compact('book'));
    }

    // Store a new loan record
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'return_date' => 'required|date|after:today',
        ]);

        Loan::create([
            'user_id' => Auth::id(),
            'book_id' => $request->book_id,
            'return_date' => $request->return_date,
        ]);

        return redirect()->route('dashboard')->with('success', 'Book borrowed successfully!');
    }

    // Display the user's borrowing history
    public function index()
    {
        $loans = Loan::where('user_id', Auth::id())->with('book')->get();
        return view('borrows.index', compact('loans'));
    }

    // Show the return form for a specific loan
    public function return($id)
    {
        $loan = Loan::findOrFail($id);
        return view('borrows.return', compact('loan'));
    }

    // Process the book return
    public function processReturn(Request $request, $id)
    {
        $request->validate([
            'rating' => 'nullable|integer|min:1|max:5',
            'review' => 'nullable|string|max:255',
        ]);

        $loan = Loan::findOrFail($id);
        $loan->update([
            'returned_at' => now(),
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        // Update the book's availability
        $loan->book->update(['is_available' => true]);

        return redirect()->route('dashboard')->with('success', 'Book returned successfully!');
    }
}
