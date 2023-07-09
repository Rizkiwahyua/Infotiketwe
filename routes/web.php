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


Route::post('/tambah-data-movie', [App\Http\Controllers\MovieController::class, 'store'])->name('movie.store');
Route::get('/data-movie', [App\Http\Controllers\MovieController::class, 'dataMovie'])->name('data-movie');
Route::get('/movie/{id}', [App\Http\Controllers\MovieController::class, 'show'])->name('movie.show');
Route::get('/data-movie/edit/{id}', [App\Http\Controllers\MovieController::class, 'edit'])->name('movie.edit');
Route::put('/data-movie/{id}', [App\Http\Controllers\MovieController::class, 'update'])->name('movie.update');
Route::delete('/data-movie/{id}', [App\Http\Controllers\MovieController::class, 'destroy'])->name('movie.destroy');


Route::post('/tambah-data-event', [App\Http\Controllers\EventController::class, 'store'])->name('event.store');
Route::get('/data-event', [App\Http\Controllers\EventController::class, 'dataEvent'])->name('data-event');
Route::get('/event/{id}', [App\Http\Controllers\EventController::class, 'show'])->name('event.show');
Route::get('/data-event/edit/{id}', [App\Http\Controllers\EventController::class, 'edit'])->name('event.edit');
Route::put('/data-event/{id}', [App\Http\Controllers\EventController::class, 'update'])->name('event.update');
Route::delete('/data-event/{id}', [App\Http\Controllers\EventController::class, 'destroy'])->name('event.destroy');



use App\Http\Controllers\ConcertController;
Route::post('/tambah-data-konser', [ConcertController::class, 'store'])->name('concert.store');
Route::get('/data-konser', [ConcertController::class, 'datakonser'])->name('concert.index');
Route::get('/konser/{id}', [ConcertController::class, 'show'])->name('concert.show');
Route::get('/data-konser/edit/{id}', [ConcertController::class, 'edit'])->name('concert.edit');
Route::put('/data-konser/{id}', [ConcertController::class, 'update'])->name('concert.update');
Route::delete('/data-konser/{id}', [ConcertController::class, 'destroy'])->name('concert.destroy');







