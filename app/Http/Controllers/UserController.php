<?php

namespace App\Http\Controllers;

use App\NGO;
use App\User;
use App\Donation;
use App\Volunteer;
use App\Beneficiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;    
use Illuminate\Support\Facades\Session;

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
            $selectedCity = $volunteer->city;
            
            // find ngos whose city matches with the logged in volunteer's city
            $donations = DB::table('donation')
            ->join('ngo', 'donation.ngo_id', '=', 'ngo.ngo_id')
            ->select('donation.*', 'ngo.name as ngo_name', 
            'ngo.image as image', 'ngo.contact as contact',
            'ngo.description as description')
            ->where('donation.city', $selectedCity)
            ->get();

            return view('volunteer', compact('volunteer', 'donations', 'selectedCity'));
        }
    
        if ($routeName === 'assistance') {
            $user = Session::get('assistance');
            if (!$user) {
                return view('login');
            }

            $beneficiary = Beneficiary::where('email', $user->email)->first();
            $selectedCity = $beneficiary->city;

            // find ngos whose city matches with the logged in volunteer's city
            $donations = DB::table('donation')
            ->join('ngo', 'donation.ngo_id', '=', 'ngo.ngo_id')
            ->select('donation.*', 'ngo.name as ngo_name', 
            'ngo.image as image', 'ngo.contact as contact',
            'ngo.description as description')
            ->where('donation.city', $selectedCity)
            ->get();

            return view('assistance', compact('beneficiary', 'donations','selectedCity'));
        }
        if ($routeName === 'ngoLogin') { // for ngo
            $user = Session::get('ngo');
            if (!$user) {
                return view('login');
            }

            $ngo = NGO::where('email', $user->email)->first();
            return view('ngo', compact('ngo'));
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
            if ($role === 'volunteer') {

                $volunteer = Volunteer::where('email', $user->email)->first();
                $selectedCity = $volunteer->city;
                
                // find ngos whose city matches with the logged in volunteer's city
                $donations = DB::table('donation')
                ->join('ngo', 'donation.ngo_id', '=', 'ngo.ngo_id')
                ->select('donation.*', 'ngo.name as ngo_name', 
                'ngo.image as image', 'ngo.contact as contact',
                'ngo.description as description')
                ->where('donation.city', $selectedCity)
                ->get();

                Session::put('volunteer', $user);
                return view('volunteer', compact('volunteer', 'donations', 'selectedCity'));


            } else if ($role === 'beneficiary') {

                $beneficiary = Beneficiary::where('email', $user->email)->first();
                $selectedCity = $beneficiary->city;

                // find ngos whose city matches with the logged in volunteer's city
                $donations = DB::table('donation')
                ->join('ngo', 'donation.ngo_id', '=', 'ngo.ngo_id')
                ->select('donation.*', 'ngo.name as ngo_name', 
                'ngo.image as image', 'ngo.contact as contact',
                'ngo.description as description')
                ->where('donation.city', $selectedCity)
                ->get();

    
                Session::put('assistance', $user);
                return view('assistance', compact('beneficiary', 'donations', 'selectedCity'));
            }
            else if ($role === 'ngo') {

                $ngo = NGO::where('email', $user->email)->first();
                
                Session::put('ngo', $user);
                return view('ngo', compact('ngo'));
            }
        }
        return redirect()->back()->withInput()->withErrors('Invalid email or password.');
    }
    
    public function logout(Request $request)
    {
        Session::forget('assistance');
        return redirect()->route('assistance');
    }
    public function logoutV(Request $request)
    {
        Session::forget('volunteer');
        return redirect()->route('volunteer');
    }

    public function logoutN(Request $request)
    {
        Session::forget('ngo');
        return redirect()->route('ngoLogin');
    }

    public function updateCityV(Request $request)
    {
        $selectedCity = $request->input('city');
       
        $donations = DB::table('donation')
        ->join('ngo', 'donation.ngo_id', '=', 'ngo.ngo_id')
        ->select('donation.*', 'ngo.name as ngo_name', 
        'ngo.image as image', 'ngo.contact as contact',
        'ngo.description as description')
        ->where('donation.city', $selectedCity)
        ->get();

        // get logged in volunteer object
        $user = Session::get('volunteer');
        $volunteer = Volunteer::where('email', $user->email)->first();

        return view('volunteer', compact('volunteer','donations', 'selectedCity'));
    }

    public function updateCityA(Request $request)
    {
        $selectedCity = $request->input('city');
        
        $user = Session::get('assistance');
        $beneficiary = Beneficiary::where('email', $user->email)->first();

        $donations = DB::table('donation')
        ->join('ngo', 'donation.ngo_id', '=', 'ngo.ngo_id')
        ->select('donation.*', 'ngo.name as ngo_name', 
        'ngo.image as image', 'ngo.contact as contact',
        'ngo.description as description')
        ->where('donation.city', $selectedCity)
        ->get();

        return view('assistance', compact('beneficiary','donations', 'selectedCity'));
    }
}
