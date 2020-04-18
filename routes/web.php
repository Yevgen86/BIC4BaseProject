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

Route::get('/animals', 'AnimalController@index')->name('animals');
Route::get('/animals/create', 'AnimalController@create')->name('animals.create');
Route::get('/animals/{animal}', 'AnimalController@show')->name('animals.show');
Route::get('/animals/{animal}/edit', 'AnimalController@edit')->name('animals.edit');

Route::get('/species', 'SpeciesController@index')->name('species');
Route::get('/species/create', 'SpeciesController@create')->name('species.create');
Route::get('/species/{species}', 'SpeciesController@show')->name('species.show');
Route::get('/species/{species}/edit', 'SpeciesController@edit')->name('species.edit');
