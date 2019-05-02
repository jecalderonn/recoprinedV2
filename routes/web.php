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
    return view('login');
});
Route::resource('docente','DocenteController');
Route::resource('investigador', 'InvestigadorController');
Route::resource('anexo', 'AnexoController');
Route::resource('avances', 'AvancesController');
Route::resource('prorroga', 'ProrrogaController');
Route::resource('jurado', 'JuradoController');
Route::resource('admin', 'AdminController');

Route::get('/prueba', function () {
    return view('prueba');
});