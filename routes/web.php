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

Route::get('/ingredients', 'IngredientController@index')->name('ingredients');
Route::get('/ingredients/create', 'IngredientController@create')->name('ingredients.create');
Route::get('/ingredients/{ingredient}', 'IngredientController@show')->name('ingredients.show');
Route::get('/ingredients/{ingredient}/edit', 'IngredientController@edit')->name('ingredients.edit');

Route::get('/recipes', 'RecipeController@index')->name('recipes');
Route::get('/recipes/create', 'RecipeController@create')->name('recipes.create');
Route::get('/recipes/{recipe}', 'RecipeController@show')->name('recipes.show');
Route::get('/recipes/{recipe}/edit', 'RecipeController@edit')->name('recipes.edit');
