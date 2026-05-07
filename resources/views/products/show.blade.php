@extends('layout')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl md:text-3xl font-bold mb-4">Detail Produk</h1>
    <div class="bg-white p-6 rounded shadow-md max-w-lg mx-auto">
        <div class="space-y-2">
            <p><strong>ID:</strong> {{ $product['id'] }}</p>
            <p><strong>Kategori:</strong> {{ $category['nama'] }}</p>
            <p><strong>Nama:</strong> {{ $product['nama'] }}</p>
            <p><strong>Harga:</strong> Rp {{ number_format($product['harga']) }}</p>
            <p><strong>Stok:</strong> {{ $product['stok'] }}</p>
        </div>
        <a href="{{ route('products.index') }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Kembali</a>
    </div>
</div>
@endsection
