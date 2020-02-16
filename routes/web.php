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
    return view('inicio');
});

Route::get('/admin', function () {
    return view('admin');
});


Route::get('/productos', 'ProductosController@index');

Route::get('/adminProductos', 'ProductosController@index');

Route::get('/producto/{id}', 'ProductosController@show');


Route::get('/categorias', 'CategoriasController@index');

Route::get('/adminCategorias', 'CategoriasController@index');

Route::post('/adminCategorias', 'CategoriasController@store');

Route::post('/editCategorias', 'CategoriasController@update');

Route::post('/borrarCategorias', 'CategoriasController@destroy');

Route::post('/adminProductos', 'ProductosController@store');

Route::post('/editProductos', 'ProductosController@update');

Route::post('/borrarProductos', 'ProductosController@destroy');
