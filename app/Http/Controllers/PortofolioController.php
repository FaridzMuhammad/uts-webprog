<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill;
use App\Models\category;

class PortofolioController extends Controller
{
    function index(){
        $skill = skill::with('category')->get();

        $dataSkill = [];
        foreach ($skill as $item){
            $data=[
                'title' => $item->title,
                'category_name' => $item->category->name,
                'percentage' => $item->percentage,
            ];
            array_push($dataSkill, $data);
        }
        return view('personal', ['skill' => $dataSkill]);
    }
}
