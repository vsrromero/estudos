<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactSentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\TesteController;
use App\Http\Middleware\LogAccessMiddleware;
use Illuminate\Auth\Events\Login;
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

//common area
Route::get('/', [MainController::class, 'main'])->name('common.index'); //using middleware

Route::get('/aboutUs', [AboutUsController::class, 'aboutUs'])->name('common.aboutUs'); //using middleware
Route::get('/contact', [ContactController::class, 'contact'])->name('common.contact');
Route::post('/contact', [ContactController::class, 'saveDb'])->name('common.contact');
Route::get('/login', 'LoginController@index')->name('common.login');
Route::post('/login', 'LoginController@authenticate')->name('common.login');

//auxiliar routes
Route::get('/contactsent', [ContactSentController::class, 'contactSent'])->name('website.auxiliars.contactsent');

//grouped app routes
Route::prefix('/app')->middleware('log.access' , 'authenticator: standard, visitante')->group(function(){

    Route::get('/clients', [ClientsController::class, 'clients'])
        ->name('app.clients');

    Route::get('/suppliers', [SuppliersController::class, 'suppliers'])
        ->name('app.suppliers');

    Route::get('/products', [ProductsController::class, 'products'])
        ->name('app.products');
});

Route::fallback(function() {
    echo 'Page not found, <a href="'.route('common.index').'">click here</a> to back to main page.';
});

//Route general test

Route::get('/teste/{p1?}/{p2?}', [TesteController::class , 'teste'])->name('teste');




