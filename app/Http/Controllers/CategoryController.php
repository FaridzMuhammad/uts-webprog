<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = category::all();
        return view('content.category', ['category' => $category]);
    }

    public function store(Request $request)
    {
        $category = category::create($request->all());
        return back()->with('success', 'Category berhasil ditambahkan');
    }


    public function update(Request $request, $id)
    {
        $category = category::find($id);
        $category->save();

        return back()->with('success', 'Category berhasil diupdate');
    }

    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();

        return back()->with('success', 'Category berhasil dihapus');
    }
}
