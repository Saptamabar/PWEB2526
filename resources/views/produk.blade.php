@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-12 md:py-16">
    <div class="text-center mb-12">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Daftar Produk</h1>
        <p class="text-gray-600 text-sm md:text-base">Temukan berbagai produk yang tersedia</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
        @foreach ($produk as $item)
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <div class="text-3xl md:text-4xl mb-4">🌱</div>
            <h3 class="text-lg md:text-xl font-semibold text-gray-800 mb-2">{{ $item["Nama"] }}</h3>
            <p class="text-gray-600 mb-2">Harga: Rp {{ number_format($item["Harga"]) }}</p>
            <p class="text-gray-600">Stok: {{ $item["Jumlah"] }}</p>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-12">
        <a href="{{ route('landingpage.index') }}" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition duration-300">Kembali ke Home</a>
    </div>
</div>
@endsection
