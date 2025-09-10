<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\SaludoJuanPerezController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/saludo', [SaludoController::class, 'index']);
Route::get('/saludo-personal', [SaludoJuanPerezController::class, 'index']);