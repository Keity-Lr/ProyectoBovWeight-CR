<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesajeController;
use App\Http\Controllers\FincaController;

// RUTAS DE PESAJE
Route::prefix('pesajes')->group(function () {

    Route::get('/', [PesajeController::class, 'listar']);
    Route::get('/animal/{animal_id}', [PesajeController::class, 'obtenerPorAnimal']);
    Route::post('/', [PesajeController::class, 'crear']);
    Route::get('/{id}', [PesajeController::class, 'obtener']);
    Route::put('/{id}', [PesajeController::class, 'actualizar']);
    Route::delete('/{id}', [PesajeController::class, 'eliminar']);
//--------------------------------------

});

Route::prefix('fincas')->group(function () {

    Route::post('/', [FincaController::class, 'crearFinca']);
    Route::get('/', [FincaController::class, 'listarFincas']);
    Route::get('/{id}', [FincaController::class, 'obtenerFinca']);
    Route::put('/{id}', [FincaController::class, 'actualizarFinca']);
    Route::delete('/{id}', [FincaController::class, 'eliminarFinca']);
    Route::get('/usuario/{id}', [FincaController::class, 'obtenerFincasPorUsuario']);
});