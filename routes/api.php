<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalesController;
use App\Http\Controllers\EspeciesController;
use App\Http\Controllers\RecintosController;
use App\Http\Controllers\CuidadoresController;
use App\Http\Controllers\ActividadesController;


Route::resource('/Animales', AnimalesController::class);
Route::resource('/Especies', EspeciesController::class);
Route::resource('/Recintos', RecintosController::class);
Route::resource('/Cuidadores', CuidadoresController::class);
Route::resource('/Actividades', ActividadesController::class);

Route::get('/user', function (Request $request) {

    return $request->user();
})->middleware('auth:sanctum');
