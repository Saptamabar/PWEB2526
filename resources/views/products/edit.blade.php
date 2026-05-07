@extends('layout')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl md:text-3xl font-bold mb-4">Edit Produk</h1>
    <form action="{{ route('products.update', $product['id']) }}" method="POST" class="bg-white p-6 rounded shadow-md max-w-lg mx-auto">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="id_kategori" class="block text-gray-700 mb-2">Kategori</label>
            <select name="id_kategori" id="id_kategori" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @foreach($categories as $category)
                <option value="{{ $category['id'] }}" {{ $product['id_kategori'] == $category['id'] ? 'selected' : '' }}>{{ $category['nama'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="nama" class="block text-gray-700 mb-2">Nama Produk</label>
            <input type="text" name="nama" id="nama" value="{{ $product['nama'] }}" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="harga" class="block text-gray-700 mb-2">Harga</label>
            <input type="number" name="harga" id="harga" value="{{ $product['harga'] }}" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="stok" class="block text-gray-700 mb-2">Stok</label>
            <input type="number" name="stok" id="stok" value="{{ $product['stok'] }}" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="flex flex-col sm:flex-row gap-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Update</button>
            <a href="{{ route('products.index') }}" class="text-gray-500 hover:text-gray-700 px-4 py-2">Batal</a>
        </div>
    </form>
</div>
@endsection
