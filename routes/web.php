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

Route::get('/carrito', 'CarritoController@index');

Route::post('/carrito', 'CarritoController@update');

Route::post('/borrarItem', 'CarritoController@destroy');

Route::post('/producto/{id}', 'CarritoController@store');


Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin', function () {
        return view('admin');
    });


    Route::get('/adminCategorias', 'CategoriasController@index');

    Route::get('/adminProductos', 'ProductosController@index');

    Route::get('/adminUsuarios', 'UsuariosController@index');

    Route::get('/adminPedidos', 'CarritoController@index');

});


Route::middleware(['auth'])->group(function(){
    Route::get('/perfil', function () {
        return view('perfil');
    });
});

Route::get('/accesoRestringido', function(){
    return view('accesoRestringido');
});

Route::get('/faq', function(){
    return view('faq');
});
Route::get('/contacto', function(){
    return view('contacto');
});
//Route::post('/contacto', function(){
  //  return view('comunicarse');
//});

Route::get('/productos', 'ProductosController@listadoProductos');

Route::get('/producto/{id}', 'ProductosController@show');

Route::get('/categorias', 'CategoriasController@index');

Route::post('/adminCategorias', 'CategoriasController@store');

Route::post('/editCategorias', 'CategoriasController@update');

Route::post('/borrarCategorias', 'CategoriasController@destroy');

Route::post('/adminProductos', 'ProductosController@store');

Route::post('/editProductos', 'ProductosController@update');

Route::post('/borrarProductos', 'ProductosController@destroy');

Route::post('/adminUsuarios', 'UsuariosController@store');

Route::post('/editUsuarios', 'UsuariosController@update');

Route::post('/borrarUsuarios', 'UsuariosController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/productos', 'ProductosController@listadoProductos');
