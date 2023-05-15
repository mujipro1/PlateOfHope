<?php

namespace App\Http\Controllers;

use App\User;
use App\Beneficiary;
use App\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;    
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $routeName = $request->route()->getName();
    
        if ($routeName === 'volunteer') {
            $user = Session::get('volunteer');
            if (!$user) {
                return view('login');
            }
            
            $volunteer = Volunteer::where('email', $user->email)->first();
            
            return view('volunteer', compact('volunteer'));
        }
    
        if ($routeName === 'assistance') {
            $user = Session::get('assistance');
            if (!$user) {
                return view('login');
            }

            $beneficiary = Beneficiary::where('email', $user->email)->first();

            return view('assistance', compact('beneficiary'));
        }
    }
    
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');

        // Fetch the user from the database based on the email
        $user = User::where('email', $email)
                    ->where('role', $role)
                    ->first();

        if ($user && Hash::check($password, $user->password)) {
            // if($user){
            if ($role === 'volunteer') {

                $volunteer = DB::table('volunteer')
                ->select('first_name', 'last_name')
                ->where('email', $user->email)
                ->first();

                $firstName = $volunteer->first_name;
                $lastName = $volunteer->last_name;

                Session::put('volunteer', $user);
                return view('volunteer', compact('firstName', 'lastName'));

            } else if ($role === 'beneficiary') {

                $beneficiary = DB::table('beneficiary')
                ->select('first_name', 'last_name')
                ->where('email', $user->email)
                ->first();
            
                $firstName = $beneficiary->first_name;
                $lastName = $beneficiary->last_name;

                Session::put('assistance', $user);
                return view('assistance', compact('firstName', 'lastName'));
            }
        }
        return redirect()->back()->withInput()->withErrors('Invalid email or password.');
    }
    
    public function logout(Request $request)
    {
        Session::forget('volunteer');
        Session::forget('assistance');
        return redirect()->route('login');
    }
}
