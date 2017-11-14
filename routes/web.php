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

Route::get('/', 'MainController@home');

Auth::routes();

Route::resource('products', 'ProductsController');

/* GET /products => index
   POST /products => store
   GET /products/create => Formulario para crear
   GET /products/:id => Mostrar un producto con ID
   GET /products/:id/edit => formulario de edicion
   PUT/PATCH /products/:id => Actualiza el producto
   DELETE /products/:id => Elimina el producto
*/

Route::get('/home', 'HomeController@index')->name('home');
