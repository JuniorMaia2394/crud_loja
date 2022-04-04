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
    return view('welcome');
});

//home
Route::get('/home', 'App\Http\Controllers\HomeController@home')->name('home');

//route cliente
Route::get('/cliente/novo', 'App\Http\Controllers\ClienteController@create');
Route::post('/cliente/novo', 'App\Http\Controllers\ClienteController@store')->name('registrar_cliente');
Route::get('/cliente/ver/{id}', 'App\Http\Controllers\ClienteController@show')->name('ver_cliente');
Route::get('/clientes/ver/all', 'App\Http\Controllers\ClienteController@clientes')->name('ver_clientes');
Route::get('/cliente/editar/{id}', 'App\Http\Controllers\ClienteController@edit');
Route::post('/cliente/editar/{id}', 'App\Http\Controllers\ClienteController@update')->name('alterar_cliente');
Route::get('/cliente/excluir/{id}', 'App\Http\Controllers\ClienteController@delete');
Route::post('/cliente/excluir/{id}', 'App\Http\Controllers\ClienteController@destroy')->name('excluir_cliente');


//route pedido
Route::get('/pedido/novo', 'App\Http\Controllers\PedidoController@create');
Route::post('/pedido/novo', 'App\Http\Controllers\PedidoController@store')->name('registrar_pedido');
Route::get('/pedido/ver/{id}', 'App\Http\Controllers\PedidoController@show')->name('ver_pedido');
Route::get('/pedidos/ver/all', 'App\Http\Controllers\PedidoController@pedidos')->name('ver_pedidos');
Route::get('/pedido/editar/{id}', 'App\Http\Controllers\PedidoController@edit');
Route::post('/pedido/editar/{id}', 'App\Http\Controllers\PedidoController@update')->name('alterar_pedido');
Route::get('/pedido/excluir/{id}', 'App\Http\Controllers\PedidoController@delete');
Route::post('/pedido/excluir/{id}', 'App\Http\Controllers\PedidoController@destroy')->name('excluir_pedido');

//route produto
Route::get('/produto/novo', 'App\Http\Controllers\ProdutosController@create');
Route::post('/produto/novo', 'App\Http\Controllers\ProdutosController@store')->name('registrar_produto');
Route::get('/produto/ver/{id}', 'App\Http\Controllers\ProdutosController@show')->name('ver_produto');
Route::get('/produtos/ver/all', 'App\Http\Controllers\ProdutosController@produtos')->name('ver_produtos');
Route::get('/produto/editar/{id}', 'App\Http\Controllers\ProdutosController@edit');
Route::post('/produto/editar/{id}', 'App\Http\Controllers\ProdutosController@update')->name('alterar_produto');
Route::get('/produto/excluir/{id}', 'App\Http\Controllers\ProdutosController@delete');
Route::post('/produto/excluir/{id}', 'App\Http\Controllers\ProdutosController@destroy')->name('excluir_produto');

//route login
Route::get('/login', 'App\Http\Controllers\LoginController@login');
