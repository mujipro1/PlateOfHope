<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller{
    public function store(Request $request)
    {

        $registrationType = $request->input('registration_type');

        if($registrationType == 'volunteer')
        {
                $this->storeVol($request);
                return redirect()->route('volunteer')->with('regVolunteer', 'Volunteer Registered Successfully! Please Login to continue');
        }

        else if($registrationType == 'beneficiary')
        {
            $this->storeAssist($request);
            return redirect()->route('assistance')->with('regAssistance', 'Assistance Registered Successfully! Please Login to continue');            
        }
    }

    private function storeAssist(Request $request){

        $validatedData = $request -> validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'cnic' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'job' => 'required',
            'company' => 'required',
            'city' => 'required',
            'salary' => 'required',
        ]);


        //  Insert the form data into the database
         DB::table('beneficiary')->insert([
                
            'first_name' => $validatedData['firstname'],
            'last_name' => $validatedData['lastname'],
            'cnic' => $validatedData['cnic'],
            'phone_number' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'job' => $validatedData['job'],
            'company' => $validatedData['company'],
            'city' => $validatedData['city'],
            'salary' => $validatedData['salary']
         ]); 

         DB::table('user')->insert([
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => 'beneficiary'
         ]);
        
    }

    private function storeVol(Request $request){

        $validatedData = $request -> validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'cnic' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'job' => 'required',
            'company' => 'required',
            'city' => 'required',
            'days' => 'required',
        ]);

        DB::table('volunteer')->insert([
                
            'first_name' => $validatedData['firstname'],
            'last_name' => $validatedData['lastname'],
            'cnic' => $validatedData['cnic'],
            'phone_number' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'job' => $validatedData['job'],
            'company' => $validatedData['company'],
            'city' => $validatedData['city'],
            'availability' => $this->convertDays($request->input('days'))
        ]);
        
        DB::table('user')->insert([
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => 'volunteer'
        ]);        
        
    }
    
    private function convertDays($days){
        dump($days);
        $days = explode(',', $days);
        $days = implode('', $days);
        dump($days);
        return $days;        
    }
}
