<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categoris = Category::all();
        return view('admin.category.index', [
            'title' => 'Kategori Soal',
            'categoris' => $categoris
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validation = $request->validate([
            'name' => 'required',
            'image_categori' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $validation['image_categori'] = $request->file('image_categori')->store('categori', 'public');

        Category::create($validation);

        alert('success', 'Category created successfully!');
        return redirect()->back()->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
