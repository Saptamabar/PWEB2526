@extends('layout')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl md:text-3xl font-bold mb-4">Daftar Kategori</h1>
    <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-600 transition duration-300">Tambah Kategori</a>
    <div class="overflow-x-auto">
        <table class="table-auto w-full border-collapse border border-gray-300 min-w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Nama</th>
                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $category['id'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $category['nama'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('categories.show', $category['id']) }}" class="text-blue-500 hover:text-blue-700">Lihat</a>
                        <a href="{{ route('categories.edit', $category['id']) }}" class="text-yellow-500 hover:text-yellow-700 ml-2">Edit</a>
                        <form action="{{ route('categories.destroy', $category['id']) }}" method="POST" class="inline">
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
