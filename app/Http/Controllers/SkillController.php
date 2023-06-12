<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill;
use App\Models\Category;
use Illuminate\Support\Facades\Http;

class SkillController extends Controller
{
    //

    public function index()
    {
        $data = Http::withToken(session('token'))->get('http://localhost:3000/api/skill');
        $skill = json_decode($data->body(), true);
        $categoryData = Http::withToken(session('token'))->get('http://localhost:3000/api/category');
        $category = json_decode($categoryData->body(), true);

        return view('content.skill', ['skill' => $skill, 'category' => $category]);
    }

    public function create(Request $request)
    {
        $data = Http::withToken(session('token')) -> get('http://localhost:3000/api/skill');
        $skill = json_decode($data->body(), true);

        return back()->with('success', 'Skill berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = Http::withToken(session('token'))->post('http://localhost:3000/api/skill/' . $id, [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'percentage' => $request->percentage,
        ]);
        $skill = json_decode($data->body(), true);

        return back()->with('success', 'Skill berhasil diupdate');
        // $skill = skill::find($id);
        // $skill->title = $request->title;
        // $skill->category_id = $request->category_id;
        // $skill->percentage = $request->percentage;
        // $skill->save();
        // return back()->with('success', 'Skill berhasil diupdate');
    }


    public function delete($id)
    {
        $data = Http::withToken(session('token'))->delete('http://localhost:3000/api/skill/' . $id);
        $skill = json_decode($data->body(), true);

        return back()->with('success', 'Skill berhasil dihapus');
    }
}
