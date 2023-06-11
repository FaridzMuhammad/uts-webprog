<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryApiController extends Controller
{
    public function index()
    {
        $category = category::all();
        return response()->json([
            'category' => $category,
        ]);
    }

    public function store(Request $request)
    {
        $category = category::create($request->all());
        return response()->json([
            'category' => $category,
        ]);
    }


    public function update(Request $request, $id)
    {
        $category = category::find($id);
        // dd($request->all());
        $category = $category->update($request->all());

        if ($category) {
            return response()->json([
                'success' => true,
                'message' => 'Category Updated',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Category Not Updated',
            ], 500);
        }

        return response()->json([
            'category' => $category,
        ]);
    }

    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();

        return response()->json([
            'category' => $category,
        ]);
    }
}
