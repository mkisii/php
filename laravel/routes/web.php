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

Route::get('/', function () {
    return view('app');
});

Route::get('/about', 'App\Http\Controllers\UserController@about');
Route::get('/services', 'App\Http\Controllers\UserController@services');
//Route::get('/register', "App\Http\Controllers\UserRegistration@postRegister");
Route::get('/register', function(){
    return view('register');
});

Route::post('/user/register', array('uses'=>'UserRegistration@postRegister'));
