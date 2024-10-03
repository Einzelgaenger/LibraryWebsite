@extends('layout')

@section('content')
    <h1>Registrasi</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nama Lengkap</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Kata Sandi</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Konfirmasi Kata Sandi</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <div>
            <label for="phone">Nomor Telepon</label>
            <input type="text" name="phone" required>
        </div>
        <div>
            <label for="address">Alamat</label>
            <input type="text" name="address" required>
        </div>
        <button type="submit">Daftar</button>
    </form>
@endsection
