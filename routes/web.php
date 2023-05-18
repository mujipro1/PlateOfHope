<?php

use Illuminate\Support\Facades\Route;
use App\FeedBack;

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
    $feedbacks = FeedBack::orderBy('feedback_id', 'desc')->take(4)->get();
    return view('home', compact('feedbacks'));
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
    Route::get('/ngoLogin', 'App\Http\Controllers\UserController@index')->name('ngoLogin');
});

Route::get('/ngoRegistration', function(){
    return view('registerNGO');
});

Route::get('/test', function(){
    return view('ngo');
});

Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');
Route::get('/-logout', 'App\Http\Controllers\UserController@logoutV')->name('-logout');
Route::get('/logoutNGO', 'App\Http\Controllers\UserController@logoutN')->name('logoutNGO');

Route::post('/ngoReg-auth', 'App\Http\Controllers\NGOController@register')->name('ngoReg-auth');

Route::post('/login-auth', 'App\Http\Controllers\UserController@login')->name('login-auth');
Route::post('/submit-form', 'App\Http\Controllers\FeedBackController@store')->name('submit-form');
Route::post('/new-reg', 'App\Http\Controllers\RegisterController@store')->name('new-reg');
Route::post('/new-donation', 'App\Http\Controllers\NGOController@donation')->name('new-donation');

Route::post('/cityNGOsV', 'App\Http\Controllers\UserController@updateCityV')->name('cityNGOsV');
Route::post('/cityNGOsA', 'App\Http\Controllers\UserController@updateCityA')->name('cityNGOsA');


Route::post('/applyfor', 'App\Http\Controllers\NGOController@applyFor')->name('applyfor');
Route::post('/VolunteerSuccess', 'App\Http\Controllers\UserController@backToVolunteer')->name('VolunteerSuccess');