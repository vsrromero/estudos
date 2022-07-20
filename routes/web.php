<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactSentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SuppliersController;
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
//*get, post, put, patch, delete, options

//common area
Route::get('/', [MainController::class, 'main'])->name('common.index'); //using middleware

Route::get('/aboutUs', [AboutUsController::class, 'aboutUs'])->name('common.aboutUs'); //using middleware
Route::get('/contact', [ContactController::class, 'contact'])->name('common.contact');
Route::post('/contact', [ContactController::class, 'saveDb'])->name('common.contact');
Route::get('/login/{error?}', 'AuthenticationController@index')->name('common.login');
Route::post('/login', 'AuthenticationController@authenticate')->name('common.login');

//auxiliar routes
Route::get('/contactsent', [ContactSentController::class, 'contactSent'])->name('website.auxiliars.contactsent');

//grouped app routes
//Middlewares: AuthenticationMiddleware = authenticator - LogAccessMiddleware = log.acces
Route::prefix('/app')->middleware('log.access' , 'authenticator:standard,visitante')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('app.home');
    Route::get('/clients', [ClientsController::class, 'index'])->name('app.clients');
    //routes suppliers
    Route::get('/suppliers', [SuppliersController::class, 'index'])->name('app.suppliers');
    Route::post('/suppliers/list', [SuppliersController::class, 'list'])->name('app.suppliers.list');
    Route::get('/suppliers/add', [SuppliersController::class, 'addForm'])->name('app.suppliers.addForm');
    Route::post('/suppliers/add', [SuppliersController::class, 'add'])->name('app.suppliers.add');
    //end routes suppliers
    Route::get('/products', [ProductsController::class, 'index'])->name('app.products');
    Route::get('/signout', [AuthenticationController::class, 'signOut'])->name('app.signout');
});

//Return a message in case of accessing a missing page
Route::fallback(function() {
    echo 'Page not found, <a href="'.route('common.index').'">click here</a> to back to main page.';
});
