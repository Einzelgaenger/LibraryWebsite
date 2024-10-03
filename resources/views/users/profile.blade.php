@extends('layout')

@section('content')
    <h1>Profil Pengguna</h1>
    <p>Nama: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Telepon: {{ $user->phone }}</p>
    <p>Alamat: {{ $user->address }}</p>
@endsection
