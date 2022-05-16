<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;


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

// Route::get('/{any?}', function () {
//     return view('welcome')->name('basepath');
// });
// route::get('pruebas',[ProductoController::class,'index'])->name('prueba');
// Route::get('tramite/enproceso', [Tramites::class, 'enproceso'])->name('En-proceso');
//[StaterkitController::class, 'collapsed_menu']
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/{any?}', App\Http\Controllers\PagesController::class)->name('basepath');


//Route::get('/{any?}', App\Http\Controllers\PagesController::class)->name('basepath');


// Route::get('/{any?}',App\Http\Controllers\PagesController::class)->name('baseruta')
//     ->where('any','.*');

    Route::get('/{any?}', function () {
        return view('welcome');
    })->name('baseruta')
        ->where('any','.*');