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
Route::get('/index', 'UserController@index');
Route::get('/khalo', 'UserController@khalo');
Route::get('/miguel', 'UserController@miguel');
Route::get('/dali', 'UserController@dali');
Route::get('/picasso', 'UserController@picasso');
Route::get('/monet', 'UserController@monet');
