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

Route::get('/', "EmployeeController@index")->name("home");
Route::get('/show/{id}', "EmployeeController@show")->name("show");

Route::get('/edit/{id}', "EmployeeController@edit")->name("edit");
Route::post('/update/{id}', "EmployeeController@update")->name("update");

Route::get('/indextasks', "TaskController@indextasks")->name("indextasks");
Route::get('/showtask/{id}', "TaskController@showtask")->name("showtask");

Route::get('/edittask/{id}', "TaskController@edittask")->name("edittask");
Route::post('/updatetask/{id}', "TaskController@update")->name("updatetask");
