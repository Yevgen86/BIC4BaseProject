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

Route::get('/inventions', 'InventionController@index')->name('inventions');
Route::get('/inventions/create', 'InventionController@create')->name('inventions.create');
Route::get('/inventions/{invention}', 'InventionController@show')->name('inventions.show');
Route::get('/inventions/{invention}/edit', 'InventionController@edit')->name('inventions.edit');

Route::get('/domains', 'DomainController@index')->name('domains');
Route::get('/domains/create', 'DomainController@create')->name('domains.create');
Route::get('/domains/{domain}', 'DomainController@show')->name('domains.show');
Route::get('/domains/{domain}/edit', 'DomainController@edit')->name('domains.edit');
