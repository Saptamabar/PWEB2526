<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories = [
        ['id' => 1, 'nama' => 'Elektronik'],
        ['id' => 2, 'nama' => 'Pakaian'],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categories.index', ['categories' => $this->categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Simulasi store, redirect ke index
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = collect($this->categories)->firstWhere('id', $id);
        return view('categories.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = collect($this->categories)->firstWhere('id', $id);
        return view('categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Simulasi update, redirect ke index
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Simulasi delete, redirect ke index
        return redirect()->route('categories.index');
    }
}
