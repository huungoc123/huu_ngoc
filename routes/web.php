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
});
Route::get('categorys/', 'CategoryController@index');
Route::get('categorys/create', 'CategoryController@create');
Route::get('categorys/edit/{id}', 'CategoryController@edit');
Route::post('categorys/store', 'CategoryController@store');
Route::post('categorys/update/{id}', 'CategoryController@update');
Route::delete('categorys/delete/{id}', 'CategoryController@destroy');

Route::get('news/', 'NewsController@index');
Route::get('news/create', 'NewsController@create');
Route::get('news/edit/{id}', 'NewsController@edit');
Route::post('news/store', 'NewsController@store');
Route::post('news/update/{id}', 'NewsController@update');
Route::delete('news/delete/{id}', 'NewsController@destroy');

//Route::resource('categorys', 'CategoryController');
