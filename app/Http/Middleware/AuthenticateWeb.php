<?php

namespace App\Http\Middleware;

use Closure;
use Database\Seeders\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateWeb
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->session()->get('token');

        if (!$token) {
            return redirect()->route('login');
        }

        $response = Http::withToken($token)->get('http://localhost:3000/api/user');
        if ($response->status() != 200) {
            return redirect()->route('login');
        }

        $user = json_decode($response->body(), true);
        if ($user == 401) {
            return redirect()->route('login');
        }

        return $next($request);

    }
}
