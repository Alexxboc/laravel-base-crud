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
    return view('welcome');
})->name('welcome');

/* Rotte per CRUD games*/
Route::get('/comics', 'GameController@index')->name('comics.index');
Route::get('/comics/create', 'GameController@create')->name('comics.create');
Route::post('/comics', 'GameController@store')->name('comics.store');
Route::get('/comics/{game}', 'GameController@show')->name('comics.show');

