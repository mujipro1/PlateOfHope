<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/volunteer', 'App\Http\Controllers\UserController@index')->name('volunteer');

Route::get('/assistance', 'App\Http\Controllers\UserController@index')->name('assistance');

Route::get('/RegVolunteer', 'App\Http\Controllers\UserController@index')->name('RegVolunteer');

Route::get('/RegAssistance', 'App\Http\Controllers\UserController@index')->name('RegAssistance');

Route::post('/logins', 'AuthController@login')->name('login');

Route::get('/test', function () {
    return view('assistance');
});
