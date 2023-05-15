<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedBackController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'feedback' => 'required',

    ]);

    // Insert the form data into the database
    DB::table('feedback')->insert([
        
        'first_name' => $validatedData['firstname'],
        'last_name' => $validatedData['lastname'],
        'email' => $validatedData['email'],
        'phone_number' => $validatedData['phone'],
        'comments' => $validatedData['feedback'],
    ]);

    return redirect()->back()->with('contact', 'Form submitted successfully!');
}
}

?>