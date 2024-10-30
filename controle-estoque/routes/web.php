<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', [ProdutosController::class, 'index']);
Route::get('/produtos/criar', [ProdutosController::class, 'create']);
