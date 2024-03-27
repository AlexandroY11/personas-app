<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MunicipioController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class, 'index')->name('home');

Route::resource('comunas', ComunaController::class);
Route::resource('municipios', MunicipioController::class);
