<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadGrupoProdutoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ArmazenamentoController;
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

Route::resource('grupo', CadGrupoProdutoController::class);

Route::resource('marca', MarcaController::class);

Route::resource('armazenamento', ArmazenamentoController::class);