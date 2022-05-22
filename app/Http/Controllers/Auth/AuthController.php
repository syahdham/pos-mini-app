<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        try {
            if (Auth::attempt($request->validated())) {
                return redirect()->route('homepage');
            } else {
                return redirect()->route('login')->with('error', 'Email or Password invalid');
            }
        } catch (\Throwable $th) {
            return redirect()->route('login')->with('error', 'Internal server error');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('homepage');
    }
}
