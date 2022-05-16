<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Paginaweb;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
route::get('/menus',[Paginaweb::class,'menus'])->name('menus');
route::get('/convocatorias',[Paginaweb::class,'convocatorias'])->name('convocatorias');
route::get('/noticiasini',[Paginaweb::class,'noticiasini'])->name('noticiasini');