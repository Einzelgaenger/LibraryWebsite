@extends('layout')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>Penulis: {{ $book->author }}</p>
    <p>Kategori: {{ $book->category }}</p>
    <p>Jumlah Halaman: {{ $book->pages }}</p>
    <p>Tahun Terbit: {{ $book->published_year }}</p>
    <p>Status: {{ $book->is_available ? 'Tersedia' : 'Tidak Tersedia' }}</p>

    <form action="{{ route('loans.create') }}" method="POST">
        @csrf
        <input type="hidden" name="book_id" value="{{ $book->id }}">
        <button type="submit" {{ !$book->is_available ? 'disabled' : '' }}>Pinjam</button>
    </form>
@endsection
