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

Route::get('/dashboard', function () {
    return view('index');
});

Route::view('login', 'login');

Route::view('profile', 'profile');

Route::view('changepassword', 'changepassword');

Route::view('totaltests', 'totaltests');

Route::view('newtests', 'newtests');

Route::view('testresults', 'testresults');

Route::view('testdetails', 'testdetails');

Route::view('takeaction', 'takeaction');