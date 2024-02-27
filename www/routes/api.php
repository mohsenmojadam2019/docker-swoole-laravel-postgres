<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TransacaoController;
use Illuminate\Support\Facades\Route;




Route::get('clientes', [ClienteController::class, 'index']);
Route::get('clientes/{id}', [ClienteController::class, 'show']);

Route::post('clientes/{id}/transacoes', [TransacaoController::class, 'store']);


