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

Route::get('/', 'GuestController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/actors', 'ActorController@index')->name('actors');
Route::get('/actors/create', 'ActorController@create')->name('actors.create');
Route::get('/actors/{actor}', 'ActorController@show')->name('actors.show');
Route::get('/actors/{actor}/edit', 'ActorController@edit')->name('actors.edit');

Route::get('/movies', 'MovieController@index')->name('movies');
Route::get('/movies/create', 'MovieController@create')->name('movies.create');
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show');
Route::get('/movies/{movie}/edit', 'MovieController@edit')->name('movies.edit');
