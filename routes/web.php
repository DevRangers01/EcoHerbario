<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrassController;

Route::get('/plantas', [GrassController::class, 'getAllEspecies'])->name('plantas.index');
Route::get('/plantas/{id}', [GrassController::class, 'getEspecieById'])->name('plantas.show');
Route::post('/plantas', [GrassController::class, 'createEspecie'])->name('plantas.create');
Route::delete('/plantas/{id}', [GrassController::class, 'deleteEspecie'])->name('plantas.delete');
Route::get('/', function () {

    return view('inicio');
  
    });

