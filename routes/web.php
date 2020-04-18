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

Route::get('/translations', 'TranslationController@index')->name('translations');
Route::get('/translations/create', 'TranslationController@create')->name('translations.create');
Route::get('/translations/{translation}', 'TranslationController@show')->name('translations.show');
Route::get('/translations/{translation}/edit', 'TranslationController@edit')->name('translations.edit');

Route::get('/definitions', 'DefinitionController@index')->name('definitions');
Route::get('/definitions/create', 'DefinitionController@create')->name('definitions.create');
Route::get('/definitions/{definition}', 'DefinitionController@show')->name('definitions.show');
Route::get('/definitions/{definition}/edit', 'DefinitionController@edit')->name('definitions.edit');
