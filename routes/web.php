<?php

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

Route::get('/todos', 'TodoController@getAllTodos');
Route::post('/todos', 'TodoController@createTodos');
Route::get('/todos/{tid}', 'TodoController@getTodo');
Route::put('/todos/{tid}', 'TodoController@updateTodo');
Route::delete('/todos/{tid}', 'TodoController@deleteTodo');

Route::get('/home', 'HomeController@index');
