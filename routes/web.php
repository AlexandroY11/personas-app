<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PaisController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class, 'index')->name('home');

Route::resource('comunas', ComunaController::class);
Route::resource('municipios', MunicipioController::class);
Route::resource('departamentos', DepartamentoController::class);
Route::resource('paises', PaisController::class);
