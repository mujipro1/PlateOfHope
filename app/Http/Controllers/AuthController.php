<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication successful
        return redirect()->intended('/dashboard');
    } else {
        // Authentication failed
        return back()->withErrors(['message' => 'Invalid credentials']);
    }
}

}
