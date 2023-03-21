<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view('login.login');
    }

    function login(Request $request){
        Session::flash('email',$request->email);
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ],[
            'email.required'=>'Email harus diisi',
            'password.required'=>'Password harus diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if (auth()->attempt($infologin)) {
            return redirect('admin/dashboard')->with('success','Login berhasil');
        }else{
            return redirect('admin')->withErrors('Username dan Password salah');
        }
    }
    function logout(){
        Auth::logout();
        return redirect('admin')->with('success','Logout berhasil');
    }
}
