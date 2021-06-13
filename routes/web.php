<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ActorsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');

Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/{actor}', [ActorsController::class, 'show'])->name('actors.show');

// Route::get('/', 'MoviesController@index')->name('movies.index');
// Route::get('/movies/{id}', 'MoviesController@show')->name('movies.show');
// //or
// Route::get('/movies/{movie}', 'MoviesController@show')->name('movies.show');

// Route::get('/tv', 'TvController@index')->name('tv.index');
// Route::get('/tv/{id}', 'TvController@show')->name('tv.show');

// Route::get('/actors', 'ActorsController@index')->name('actors.index');
// Route::get('/actors/page/{page?}', 'ActorsController@index');

// Route::get('/actors/{id}', 'ActorsController@show')->name('actors.show');