<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/test1', 'HomeController@test');

Route::get('/projects', 'ProjectController@project');

Route::get('/tasks', 'TaskController@index');

Route::get('/tasks/create', 'TaskController@create');

Route::post('/tasks', 'TaskController@store');

Route::get('/tasks/{task:id}', 'TaskController@show');

Route::get('/tasks/{task:id}/edit', 'TaskController@edit');

Route::put('/tasks/{task:id}', 'TaskController@update');

Route::delete('/tasks/{task:id}', 'TaskController@destroy');
Auth::routes();

Route::get('/', 'TaskController@indexRedirect');
