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
    return view('index');
});

Route::get('inicio', function () {
    return view('index');
});

Route::get('iniciosesion', function () {
    return view('iniciosesion');
});

Route::get('registro', function () {
    return view('registro');
});

Route::get('compra', function () {
    return view('compra');
});


//Rutas Administrador
Route::get('admin', function () {
    return view('admin/ds');
});

Route::get('registrarproductos', function () {
    return view('registrarprodcutos');
});







