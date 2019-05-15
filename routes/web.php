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

Route::get('/menu', function () {
    return view('base.menu');
});
Route::get('/', function () {
    return view('inicio');
});
Route::resource('tarefas', 'TarefaController');
Route::resource('users', 'UserController');
Route::resource('tipos', 'TipoController');

Auth::routes();
