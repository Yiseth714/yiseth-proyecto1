<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\GestionController;

Route::get('/', function () {
    return view('home.home');
});
Route::get('/plantila', function () {
    return view('layouts.plantila'); 
})->name('layouts.plantila');

Route::resource('Opciones', RegistroController::class);
Route::resource('Eventos', EventosController::class);
Route::resource('Gestion', GestionController::class);