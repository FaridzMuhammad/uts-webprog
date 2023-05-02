<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill;

class SkillController extends Controller
{
    //

    public function index()
    {
        $skill = skill::all();
        return view('content.skill', ['skill' => $skill]);
    }

    public function create(Request $request)
    {
        $skill = skill::create($request->all());

        return back()->with('success', 'Skill berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $skill = skill::find($id);
        $skill->title = $request->title;
        $skill->percentage = $request->percentage;
        $skill->save();

        return back()->with('success', 'Skill berhasil diupdate');
    }


    public function delete($id)
    {
        $skill = skill::find($id);
        $skill->delete();

        return back()->with('success', 'Skill berhasil dihapus');
    }
}
