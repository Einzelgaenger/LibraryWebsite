@extends('layout')

@section('content')
    <h1>Riwayat Peminjaman</h1>
    <table>
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            @foreach($loans as $loan)
                <tr>
                    <td>{{ $loan->book->title }}</td>
                    <td>{{ $loan->created_at->format('d/m/Y') }}</td>
                    <td>{{ $loan->return_date ? $loan->return_date->format('d/m/Y') : 'Belum Kembali' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
