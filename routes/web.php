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

Route::get('login', function () {return view('login');});
Route::get('register', function () {return view('register');});

Route::get('home', function () {return view('home');});
Route::get('profile', function () {return view('profile');});
Route::get('jadwal-kajian', function () {return view('jadwal-kajian');});