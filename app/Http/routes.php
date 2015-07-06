<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

// Authentication routes...
Route::get('/', 'Auth\AuthController@getLogin');
Route::get('home', function() {
    return view('home');
});
//Route::post('login', 'Auth\AuthController@postLogin');
Route::post('login', function() {
    return redirect('home');
});
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');
