<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Http::withToken(session('token'))->get('http://localhost:3000/api/category');
        $category = json_decode($data->body(), true);

        return view('content.category', ['category' => $category]);
    }

    public function store(Request $request)
    {
        $data = Http::withToken(session('token'))->post('http://localhost:3000/api/category', [
            'name' => $request->name,
        ]);
        $category = json_decode($data->body(), true);

        return back()->with('success', 'Category berhasil ditambahkan');
    }


    public function update(Request $request, $id)
    {
       $data = Http::withToken(session('token'))->post('http://localhost:3000/api/category/' . $id, [
            'name' => $request->name,
        ]);
        $category = json_decode($data->body(), true);

        return back()->with('success', 'Category berhasil diupdate');
    }

    public function destroy($id)
    {
        $data = Http::withToken(session('token'))->get('http://localhost:3000/api/category/' . $id);
        $category = json_decode($data->body(), true);

        return back()->with('success', 'Category berhasil dihapus');
    }
}
