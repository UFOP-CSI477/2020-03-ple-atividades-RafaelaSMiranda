<?php

use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RelatorioRegistroController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::get('/administrativo', function () {
    return view('administrativo.inicio');
})->name('adm');

Route::get('/admPrincipal', function () {
    return view('administrativo.telaPrincipal');
})->name('admPrincipal');

Route::resource('/equipamento', EquipamentoController::class);

Route::resource('/relatorioRegistro', RelatorioRegistroController::class);

Route::resource('/registro', RegistroController::class);

Route::resource('/user', UserController::class);



// Route::get('/ola', function () {
//     return 'Olá, mundo';
// });


// Route::get('/estados', function () {
//     $estados =  Estado::all();
//     return view('lista', ['dados' => $estados]);
// });

// Route::get('/estados/{id}', function ($id) {

//     $estado =  Estado::find($id);

//     if ($estado === null) {
//         return 'ID inválido';
//     }

//     return view('lista', ['dados' => $estado]);
// });
