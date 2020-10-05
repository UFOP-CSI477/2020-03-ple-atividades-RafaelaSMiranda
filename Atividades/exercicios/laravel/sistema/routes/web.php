<?php

use App\Http\Controllers\CidadeController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProdutoController;
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

use App\Models\Produto;

Route::get('/', function () {
    return view('paginaPrincipal');
})->name('principal');

Route::get('/adm', function () {
    return view('paginaInicialAdm');
})->name('principalAdm');

Route::get('/relatorios', function () {
    return view('paginaInicialRelatorios');
})->name('paginaRelatorios');



// Route::get('/produtos', function () {

//     $produtos = Produto::all();

//     // return $produtos[1]["id"];
//     return view('produtos', ['produtos' => $produtos]);
// });

// Route::get('/produtos/{id}', function ($id) {

//     $produtos = Produto::find($id);

//     if ($produtos == null) {
//         return 'ID inválido';
//     }
//     return view('produtos', ['produtos' => $produtos]);
// });

Route::resource('/produtos', ProdutoController::class);
Route::resource('/cidades', CidadeController::class);
Route::resource('/estados', EstadoController::class);
Route::resource('/compras', CompraController::class);
Route::resource('/pessoas', PessoaController::class);
