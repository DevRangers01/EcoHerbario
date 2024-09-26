<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrassController;
use App\Http\Controllers\UsuarioController;

Route::get('/GrassController', [\App\Http\Controllers\GrassController::class, '__construct']);
Route::get('/especies', [GrassController::class, 'getAllEspecies']);
Route::get('/especies/{id}', [GrassController::class, 'getEspecieById']);
Route::post('/especies', [GrassController::class, 'createEspecie']);
Route::delete('/especies/{id}', [GrassController::class, 'deleteEspecie']);

Route::post('/register', [UsuarioController::class, 'createUser']);
Route::post('/login', [UsuarioController::class, 'login']);
Route::post('/logout', [UsuarioController::class, 'logout']);

