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
use App\Http\Controllers\CepController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/busca-cep', [CepController::class, 'buscaCep']);
Route::get('/buscar', [CepController::class, 'buscarCepDigitado']);

Route::get('/calculadoras/combustivel', function () {
    return view('calculadoras.calculo-combustivel');
});