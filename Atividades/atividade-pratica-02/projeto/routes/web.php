<?php

use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RelatorioRegistroController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::get('/administrativo', function () {
    return view('administrativo.inicio');
})->name('adm');

Route::get('/admPrincipal', function () {
    return view('administrativo.telaPrincipal');
})->name('admPrincipal')->middleware('auth');

Route::resource('/equipamento', EquipamentoController::class);

Route::resource('/relatorioRegistro', RelatorioRegistroController::class)->middleware('auth');

Route::resource('/registro', RegistroController::class);

Route::resource('/user', UserController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
