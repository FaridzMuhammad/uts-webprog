<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Category;

class SkillApiController extends Controller
{
    public function index()
    {
        $skill = skill::with('category')->get();

        $dataSkill = [];
        foreach ($skill as $value) {
            $data = [
                'id' => $value->id,
                'title' => $value->title,
                'category_id' => $value->category_id,
                'category_name' => $value->category->name,
                'percentage' => $value->percentage,
            ];
            array_push($dataSkill, $data);
        }

        return response()->json(
            $dataSkill,
        );
    }

    public function store(Request $request)
    {
        $skill = skill::create($request->all());
        return response()->json([
            'skill' => $skill,
        ]);
    }

    public function update(Request $request, $id)
    {
        $skill = skill::find($id);
        $category = category::find($id);
        // dd($request->all());
        $skill = $skill->update($request->all());

        if ($skill) {
            return response()->json([
                'success' => true,
                'message' => 'Skill Updated',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Skill Not Updated',
            ], 500);
        }

        return response()->json([
            'skill' => $skill,
        ]);
    }

    public function destroy($id)
    {
        $skill = skill::find($id);
        $skill->delete();

        return response()->json([
            'skill' => $skill,
        ]);
    }
}
