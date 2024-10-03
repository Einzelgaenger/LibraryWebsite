<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index'])->name('dashboard');


Route::get('/', [BookController::class, 'index'])->name('home');

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('books', [BookController::class, 'index'])->name('books.index');
Route::get('books/{id}', [BookController::class, 'show'])->name('books.show');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [UserController::class, 'profile'])->name('dashboard');
    Route::get('loans', [LoanController::class, 'index'])->name('loans.index');
    Route::post('loans', [LoanController::class, 'create'])->name('loans.create');
});
