<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios/create', [UserController::class, 'create'])
    ->name('usuarios.create');

Route::post('/usuarios', [UserController::class, 'store'])
     ->name('usuarios.store');
