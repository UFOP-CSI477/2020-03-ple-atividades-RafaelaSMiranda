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
    return view('pages.home');
}) -> name('pages.home');

Route::get('/cardapio', function () {
    return view('pages.cardapio');
}) -> name('pages.cardapio');

Route::get('/pedido', function () {
    return view('pages.finalizar');
}) -> name('pages.finalizar');

Route::get('/perfil', function () {
    return view('pages.perfil');
}) -> name('pages.perfil');
