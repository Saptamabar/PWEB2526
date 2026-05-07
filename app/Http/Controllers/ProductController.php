<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'id_kategori' => 1, 'nama' => 'Produk A', 'harga' => 10000, 'stok' => 50],
        ['id' => 2, 'id_kategori' => 2, 'nama' => 'Produk B', 'harga' => 20000, 'stok' => 30],
    ];

    private $categories = [
        ['id' => 1, 'nama' => 'Elektronik'],
        ['id' => 2, 'nama' => 'Pakaian'],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index', ['products' => $this->products, 'categories' => $this->categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create', ['categories' => $this->categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Simulasi store, redirect ke index
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = collect($this->products)->firstWhere('id', $id);
        $category = collect($this->categories)->firstWhere('id', $product['id_kategori']);
        return view('products.show', ['product' => $product, 'category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = collect($this->products)->firstWhere('id', $id);
        return view('products.edit', ['product' => $product, 'categories' => $this->categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Simulasi update, redirect ke index
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Simulasi delete, redirect ke index
        return redirect()->route('products.index');
    }
}
