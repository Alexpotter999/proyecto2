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
Route::get('/visualizar-tabla', 'App\Http\Controllers\TablaController@visualizar');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
route::post('login','App\Http\Controllers\LoginController@store');

/*Route::get('/asistencias', function () {
    return view('asistencia');
});*/
Route::get('asistencias','App\Http\Controllers\AsistenciasController@index');

Route::get('contador','App\Http\Controllers\AsistenciasController@contador');
/* use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'processLogin']);
Route::post('/logout', [LoginController::class, 'logout']); */
