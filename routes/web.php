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
Route::get('categorys/', 'CategoryControlle@index');
Route::get('categorys/create', 'CategoryControlle@create');
Route::post('categorys/store', 'CategoryControlle@store');
//Route::resource('categorys', 'CategoryControlle', [
//    'names' => [
//        'index' => '/',
//        'edit' => 'edit',
//        'create' => 'create',
//    ]
//]);
