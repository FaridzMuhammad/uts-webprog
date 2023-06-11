<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class SessionController extends Controller
{
    function index(){
        return view('login.login');
    }

    public function login_proses(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $response = Http::post('http://localhost:3000/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $data = json_decode($response->body(), true);

        if ($data['authorization']['token']) {
            $request->session()->put('token', $data['authorization']['token']);

            return redirect()->route('dashboard');
        }
        else {
            return redirect()->route('login');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function register(){
        return view('login.register');
    }

    public function register_proses(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8',
        ]);

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ];

        User::create($data);

        $login = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if (Auth::attempt($login)) {
            return redirect('/view/dashboard');
        }else{
            return redirect('/login');
        }

    }
}
