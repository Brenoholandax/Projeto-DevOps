<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\FormularioController;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListaController;

//Route::get('/',[HomeController::class, 'index']);

Route::get('/',[FormularioController::class, 'index']);
Route::get('/formulario',[FormularioController::class, 'index']);
Route::post('/formulario/registrar',[FormularioController::class, 'store']);


Route::get('/lista',[ListaController::class,'index']);
//Route::get('/lista/show', [ListaController::class, 'show']);
