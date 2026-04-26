<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesajeController;
use App\Http\Controllers\FincaController;

// Rutas de Pesajes
Route::get('/pesajes', [PesajeController::class, 'index']);
Route::get('/pesajes/animal/{animal_id}', [PesajeController::class, 'porAnimal']);
Route::post('/pesajes', [PesajeController::class, 'store']);
Route::get('/pesajes/{id}', [PesajeController::class, 'show']);
Route::put('/pesajes/{id}', [PesajeController::class, 'update']);
Route::delete('/pesajes/{id}', [PesajeController::class, 'destroy']);
