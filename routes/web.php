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

Route::get('/spells', 'SpellController@index')->name('spells');
Route::get('/spells/create', 'SpellController@create')->name('spells.create');
Route::get('/spells/{spell}', 'SpellController@show')->name('spells.show');
Route::get('/spells/{spell}/edit', 'SpellController@edit')->name('spells.edit');

Route::get('/kinds', 'KindController@index')->name('kinds');
Route::get('/kinds/create', 'KindController@create')->name('kinds.create');
Route::get('/kinds/{kind}', 'KindController@show')->name('kinds.show');
Route::get('/kinds/{kind}/edit', 'KindController@edit')->name('kinds.edit');
