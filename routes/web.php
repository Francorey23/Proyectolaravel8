<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

//1. agregar la linea use App\Http\Controllers\PagesController;
//2. Aumentar en el path de la ruta App\Http\Controllers\
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

//Route::get('/index', 'App\Http\Controllers\PagesController@index');
Route::get('/index', [PagesController::class, 'index']);

Route::view('/', 'welcome');

Route::get('/RutaCategoria', 'App\Http\Controllers\PagesController@ContCategoria')->name('VistaCategoria');

//Route::get('/empleados', [EmpleadoController::class, 'create']);
//Route::get('/empleados', 'App\Http\Controllers\EmpleadoController@index');
//Route::get('/personas', 'App\Http\Controllers\PersonaController@index');

Route::resource('/empleados', 'App\Http\Controllers\EmpleadoController');
Route::resource('/personas', 'App\Http\Controllers\PersonaController');
Route::resource('/productos', 'App\Http\Controllers\ProductoController');


