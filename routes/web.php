<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('navbar', function () {
    return view('navbar');
});

Route::get('login', function () {
    return view('login');
});

Route::get('header', function () {
    return view('header');
});


Route::get('foren', function () {
    return view('foren');
});

Route::get('index', function () {
    return view('index');
});

Route::get('even', function () {
    return view('even');
});

Route::get('acara', function () {
    return view('acara');
});