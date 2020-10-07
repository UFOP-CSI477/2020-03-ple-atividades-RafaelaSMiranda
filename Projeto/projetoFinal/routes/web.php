<?php

use App\Http\Controllers\AdicionalController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidoProdutoController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Auth;
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
    return view('homeInicial');
}) -> name('home');

Route::get('/head', function () {
    return view('headCliente');
}) -> name('headCliente');


Route::get('/cardapio', function () {
    return view('produtos.cardapio');
}) -> name('cardapio');

Route::get('/perfil', function () {
    return view('cliente.perfil');
}) -> name('perfil');

Route::get('/sacola', function () {
    return view('pedido.sacola');
}) -> name('sacola');

Route::resource('/produto', ProdutoController::class);
Route::resource('/adicional', AdicionalController::class);
Route::resource('/pedidoProduto', PedidoProdutoController::class);
Route::resource('/produtoAdicional', ProdutoAdicionalController::class);
Route::resource('/pedido', PedidoController::class);
Route::resource('/carrinho', CarrinhoController::class);
Route::get('/carrinho/adicionar',function(){

    return redirect()->route('produto.index');
});



Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
