@extends('layout')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl md:text-3xl font-bold mb-4">Tambah Kategori</h1>
    <form action="{{ route('categories.store') }}" method="POST" class="bg-white p-6 rounded shadow-md max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-gray-700 mb-2">Nama Kategori</label>
            <input type="text" name="nama" id="nama" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="flex flex-col sm:flex-row gap-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Simpan</button>
            <a href="{{ route('categories.index') }}" class="text-gray-500 hover:text-gray-700 px-4 py-2">Batal</a>
        </div>
    </form>
</div>
@endsection
