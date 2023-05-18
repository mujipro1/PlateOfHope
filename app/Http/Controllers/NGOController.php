<?php

namespace App\Http\Controllers;

use App\NGO;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;    
use Illuminate\Support\Facades\Session;

class NGOController extends Controller
{
       public function register(Request $request){
        
        $validatedData = $request -> validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'city' => 'required',
            'description' => 'required',
        ]);

        
        //  Insert the form data into the database
        $image = NGO::count()+1;
        $image = "NGO".$image.".png";
        
        DB::table('ngo')->insert([
                
            'name' => $validatedData['name'],
            'contact' => $validatedData['contact'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
            'image' => $image,
            'description' => $validatedData['description']
        ]); 
        
        DB::table('user')->insert([
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => 'ngo'
        ]);
        
         if ($request->hasFile('png_files')) {
            $files = $request->file('png_files');
            dump($files);
                // Store the file in the specified directory (public/img/NGOs) with the new file name
            $path = $files->storeAs('public/img/NGOs', $image);
            }

         return redirect()->route('ngoLogin')->with('regNGO', 'NGO Registered Successfully! Please Login to continue');
    }

    public function donation(Request $request){
        $validatedData = $request -> validate([
            'address' => 'required',
            'city' => 'required',
            'date' => 'required',
            'volunteers' => 'required',
        ]);
    

        $days = $this->convertDays($this->calculateDay($validatedData['date']));
        $user = Session::get('ngo');

        $ngo = NGO::where('email', $user->email)->first();
        $ngo_id = $ngo->image;
        $ngo_id = preg_replace('/[^0-9]/', '', $ngo_id);

        DB::table('donation')->insert([
            'ngo_id' => $ngo_id,
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
            'date' => $validatedData['date'],
            'day' => $days,
            'no_of_volunteers' => $validatedData['volunteers'],
        ]);

        return redirect()->route('ngoLogin')->with('donation', 'Donation Registered Successfully!');

    }

    // calculate day from date
    private function calculateDay($date){
        $day = date('l', strtotime($date));
        
        $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        return array_search($day, $days)+1; 
    }
    private function convertDays($days){
        $days = explode(',', $days);
        $days = implode('', $days);
        return $days;        
    }

    public function applyFor(Request $request){
        $selectedCity = $request->input('city');
        $donation_id = $request->input('name');
        $id = $request->input('id');

        $donation = DB::table('donation')
        ->join('ngo', 'donation.ngo_id', '=', 'ngo.ngo_id')
        ->select('donation.*', 'ngo.name as ngo_name', 
        'ngo.image as image', 'ngo.contact as contact',
        'ngo.description as description', 'ngo.email as email')
        ->where('donation_id', $donation_id)
        ->get()->first();

        return view('applyfor', compact('id', 'donation', 'selectedCity'));

    }
}
