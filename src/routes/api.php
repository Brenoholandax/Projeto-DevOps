<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExemploController;
use App\Http\Controllers\ProdutoController;



Route::get('/',[ExemploController::class ,'index']);

// BRENO
Route::get('produto',[ProdutoController::class ,'listar']);
Route::post('produto',[ProdutoController::class ,'cadastrarProduto']);



// Route::group(['middleware' => ['JWTToken']], function () {
// });





