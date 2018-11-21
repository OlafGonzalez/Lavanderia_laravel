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


//rutas de usuario

Route::resource('inicio','ClientesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::POST('login','Auth\LoginController@login');


Route::resource('/Usuario/nuevo','UserrrConTroller');

Route::POST('nuevo','UserrrConTroller@store');

Route::resource('/Usuario/pedidosPendientes','PedidosController');

Route::resource('/Usuario/pedidosEntregados','PedidosEController');


//Rotas para admin

Route::resource('admin','AdminController');

Route::resource('adminPedidos1','AdminPedidosEController');

