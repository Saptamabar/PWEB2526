@extends('layout')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl md:text-3xl font-bold mb-4">Daftar Produk</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-600 transition duration-300">Tambah Produk</a>
    <div class="overflow-x-auto">
        <table class="table-auto w-full border-collapse border border-gray-300 min-w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Kategori</th>
                    <th class="border border-gray-300 px-4 py-2">Nama</th>
                    <th class="border border-gray-300 px-4 py-2">Harga</th>
                    <th class="border border-gray-300 px-4 py-2">Stok</th>
                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $product['id'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ collect($categories)->firstWhere('id', $product['id_kategori'])['nama'] ?? 'Unknown' }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $product['nama'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">Rp {{ number_format($product['harga']) }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $product['stok'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('products.show', $product['id']) }}" class="text-blue-500 hover:text-blue-700">Lihat</a>
                        <a href="{{ route('products.edit', $product['id']) }}" class="text-yellow-500 hover:text-yellow-700 ml-2">Edit</a>
                        <form action="{{ route('products.destroy', $product['id']) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
