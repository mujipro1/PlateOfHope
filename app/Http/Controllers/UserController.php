<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $routeName = $request->route()->getName();
        if ($routeName === 'RegVolunteer') {
            return view('register');
        }
        if ($routeName === 'RegAssistance') {
            return view('register');
        }
        if (!$request->user()) {
            return view('login');
        }
        else{
            if ($routeName === 'volunteer') {
                return view('volunteer');
            }
            if ($routeName === 'assistance') {
                return view('assistance');
            }
        }
    }
}
