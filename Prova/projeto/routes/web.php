<?php

use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ColetaController;
use App\Http\Controllers\PessoaController;
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
    return view('telaPrincipal');
})->name('principal');

Route::get('/homeAdm', function () {
    return view('administrativo.homeAdm');
})->name('homeAdm');


Route::resource('/agendamento', AgendamentoController::class);
Route::resource('/pessoa', PessoaController::class);
Route::resource('/coleta', ColetaController::class);
