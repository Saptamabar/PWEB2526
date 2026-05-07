@extends('layout')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl md:text-3xl font-bold mb-4">Detail Kategori</h1>
    <div class="bg-white p-6 rounded shadow-md max-w-lg mx-auto">
        <div class="space-y-2">
            <p><strong>ID:</strong> {{ $category['id'] }}</p>
            <p><strong>Nama:</strong> {{ $category['nama'] }}</p>
        </div>
        <a href="{{ route('categories.index') }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Kembali</a>
    </div>
</div>
@endsection
