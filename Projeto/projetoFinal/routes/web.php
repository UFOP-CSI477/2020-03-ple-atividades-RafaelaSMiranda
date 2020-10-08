<?php

use App\Http\Controllers\AdicionalController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidoProdutoController;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
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
}) -> name('homeInicial');

Route::get('/head', function () {
    return view('headCliente');
}) -> name('headCliente');

Route::get('/cardapio', function () {
    return view('produtos.cardapio');
}) -> name('cardapio');


Route::resource('/produto', ProdutoController::class);

Route::resource('/pedidoProduto', PedidoProdutoController::class);

Route::resource('/pedido', PedidoController::class);

Route::resource('/cliente', ClienteController::class);

Route::get('/adicionar/{produto}', [CarrinhoController::class, 'adicionar'])->name('sacolaAdicionar');
Route::get('/remover/{produto}', [CarrinhoController::class, 'remover'])->name('sacolaRemover');
Route::get('/cancelar', [CarrinhoController::class, 'cancelar'])->name('sacolaCancelar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
