<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill;

class PortofolioController extends Controller
{
    function index(){
        $skill = skill::all();
        return view('personal', ['skill' => $skill]);
    }
}
