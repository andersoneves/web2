<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', [ProdutoController::class, 'index']);

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/cadastro', [ProdutoController::class, 'cadastro']);
Route::post('/produtos/salvar', [ProdutoController::class, 'salvar']);


