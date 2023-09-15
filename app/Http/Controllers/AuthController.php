<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8000/api/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        if ($response->successful()) {
            // Authentication successful, store user data or tokens as needed
            $userData = $response->json();
            return view('admin.dashboard')->with('userData', $userData);
            // return $userData;
        } else {
            // Authentication failed, handle error
            return $response->json();
            // return view('auth.login', ['error' => $errorMessage]);
        }
    }
}
