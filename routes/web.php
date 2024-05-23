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

Route::get('error404', function () {
    return view('error400');
});


//Rutas Administrador

Route::get('admin', function () {
    return view('admin/ds');
});

Route::get('registrarproductos', function () {
    return view('admin/productos/registrarproductos');
});

Route::get('actualizarproductos', function () {
    return view('admin/productos/actualizaryeliminarproductos');
});

Route::get('registrarproovedor', function () {
    return view('admin/proovedores/registrarproovedor');
});

Route::get('actualizarproovedor', function () {
    return view('admin/proovedores/actualizaryeliminarproveedor');
});

Route::get('devoluciones', function () {
    return view('admin/devoluciones/devoluciones');
});






