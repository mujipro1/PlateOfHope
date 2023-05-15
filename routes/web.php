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

Route::get('/RegVolunteer', function () {
    return view('register');
});

Route::get('/RegAssistance', function () {
    return view('register');
});

Route::group(['middleware' => 'inactivity'], function () {
    Route::get('/volunteer', 'App\Http\Controllers\UserController@index')->name('volunteer');
    Route::get('/assistance', 'App\Http\Controllers\UserController@index')->name('assistance');
});

Route::post('/login-auth', 'App\Http\Controllers\UserController@login')->name('login-auth');

Route::post('/submit-form', 'App\Http\Controllers\FeedBackController@store')->name('submit-form');

Route::post('/new-reg', 'App\Http\Controllers\RegisterController@store')->name('new-reg');