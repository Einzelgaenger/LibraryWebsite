@extends('layout')

@section('content')
    <h1>Katalog Buku</h1>
    <div>
        @foreach($books as $book)
            <div>
                <h2><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></h2>
                <p>Penulis: {{ $book->author }}</p>
                <p>Kategori: {{ $book->category }}</p>
                <p>Jumlah Halaman: {{ $book->pages }}</p>
                <p>Tahun Terbit: {{ $book->published_year }}</p>
                <p>Status: {{ $book->is_available ? 'Tersedia' : 'Tidak Tersedia' }}</p>
            </div>
        @endforeach
    </div>
@endsection
