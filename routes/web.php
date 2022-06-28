<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SobreNosController;
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

//função Route::get*('/endereço', [NomeDoArquivoController::class, 'nomeDaFunçãoNoController'])
//*get, post, put, patch, delete, options

Route::get('/', [MainController::class, 'main']);

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);

Route::get('/contato', [ContatoController::class, 'contato']);
