<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\skill;

class DashboardController extends Controller
{
    function index(){
        $skill = skill::all();
        return view('dashboard.dashboard', ['skill' => $skill]);
    }
}
