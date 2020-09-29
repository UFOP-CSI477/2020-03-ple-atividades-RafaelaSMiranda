<?php

use App\Http\Controllers\EquipamentoController;
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

use App\Models\Equipamento;

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/equipamento', EquipamentoController::class);
Route::resource('/registro', EquipamentoController::class);
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
