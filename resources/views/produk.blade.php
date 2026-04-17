@extends('layout')

@section('content')
    <h1>Ini Halaman Produk</h1>
    <h2>Daftar produk</h2>
    @foreach ($produk as $items)
        <div class="bg-red-500 p-5 m-5 rounded-2xl text-white">
            <p>Nama : {{ $items["Nama"] }}</p>
            <p>Harga : {{ $items["Harga"] }}</p>
            <p>Jumlah : {{ $items["Jumlah"] }}</p>
        </div>
    @endforeach
@endsection
