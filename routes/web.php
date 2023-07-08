<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('navbar', function () {
//     return view('navbar');
// });

// Route::get('login', function () {
//     return view('login');
// });

// Route::get('header', function () {
//     return view('header');
// });


// Route::get('foren', function () {
//     return view('foren');
// });

// Route::get('beranda', function () {
//     return view('beranda');
// });

// Route::get('even', function () {
//     return view('even');
// });
Route::get('/', function () {
    return view('beranda');
});

Route::get('acara', function () {
    return view('acara');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda' );


Route::post('/tambah-data-ibu', [App\Http\Controllers\IbuController::class,'store2'])->name('ibu.store2');
Route::get('/dataibu', [App\Http\Controllers\IbuController::class, 'dataibu'])->name('dataibu');
Route::get('/ibu/{id}', [App\Http\Controllers\IbuController::class, 'show1'])->name('ibu.show');
Route::get('dataibu/edit/{id}', [App\Http\Controllers\IbuController::class, 'edit1'])->name('ibu.edit');
Route::put('dataibu/{id}', [App\Http\Controllers\IbuController::class, 'update1'])->name('ibu.update');
Route::delete('dataibu/{id}', [App\Http\Controllers\IbuController::class, 'destroy1'])->name('ibu.destroy');
