<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmazenamentoController;
use App\Http\Controllers\CadGrupoProdutoController;
use App\Http\Controllers\CidadesController;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SaidaController;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('armazenamento', ArmazenamentoController::class);

Route::resource('grupo', CadGrupoProdutoController::class);

Route::resource('cidade', CidadesController::class);

Route::resource('estado', EstadosController::class);

Route::resource('fornecedor', FornecedoresController::class);

Route::resource('marca', MarcaController::class);

Route::resource('unidade', MedidaController::class);

Route::resource('paises',PaisesController::class);

Route::resource('produtos',ProdutoController::class);

Route::resource('saida',SaidaController::class);