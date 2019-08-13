<?php
//use Symfony\Component\Routing\Route;

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

Route::get('/produtos','ProdutoController@lista');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostrar')->where ('id','[0-9]+');

Route::get('/produtos/novo','ProdutoController@novo');

Route::post('/produtos/adiciona',	'ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Route::get('/outra1',	function()
{
				return '<h1>Outra	lógica	com	Laravel</h1';
});

route::get('/outra2', function(){

                return '<h2>A logica se aplica nas mais diversas situações</h2';

});

