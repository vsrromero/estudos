<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutUsController;
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



//Route::verbohttp($uri, $callback / ação ao acessar a rota)
//função Route::get*('/endereço', [NomeDoArquivoController::class, 'Action / nomeDaFunçãoNoController']);
//*get, post, put, patch, delete, options

Route::get('/', [MainController::class, 'main']);

Route::get('/aboutUs', [AboutUsController::class, 'aboutUs']);

Route::get('/contact', [ContactController::class, 'contact']);

//name como parâmetro
//contact/Nome
Route::get('/contact/{name}', function(string $name) {
    echo "<h1>Hello $name</h1>";
});


