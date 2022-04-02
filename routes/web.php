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

//route cliente

//route pedido

//route produto
Route::get('/produto/novo', 'App\Http\Controllers\ProdutosController@create');
Route::post('/produto/novo', 'App\Http\Controllers\ProdutosController@store')->name('registrar_produto');
Route::get('/produto/ver/{id}', 'App\Http\Controllers\ProdutosController@show')->name('ver_produto');
Route::get('/produto/editar/{id}', 'App\Http\Controllers\ProdutosController@edit');
Route::post('/produto/editar/{id}', 'App\Http\Controllers\ProdutosController@update')->name('alterar_produto');
Route::get('/produto/excluir/{id}', 'App\Http\Controllers\ProdutosController@delete');
Route::post('/produto/excluir/{id}', 'App\Http\Controllers\ProdutosController@destroy')->name('excluir_produto');



Route::get('/login', 'App\Http\Controllers\LoginController@login');
