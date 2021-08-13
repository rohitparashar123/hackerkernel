<?php

use Illuminate\Routing\Route as RoutingRoute;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// user form routes
Route::get('/','UsersController@index');
Route::post('/save-form','UsersController@store');
Route::get('/display-form','UsersController@show');

//task form routes
Route::get('/task','TaskController@index');
Route::post('/save-task','TaskController@store');
Route::get('/display-task','TaskController@show');

// excel routes
Route::get('export', 'TaskController@export')->name('export');
Route::get('/search', 'TaskController@search')->name('search');

