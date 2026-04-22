<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios/create', [UserController::class, 'create'])
    ->name('usuarios.create');

Route::post('/usuarios', [UserController::class, 'store'])
     ->name('usuarios.store');


Route::get('/usuarios', [UserController::class, 'index'])
     ->name('usuarios.index');     


Route::get('/usuarios/{id}/edit', [UserController::class, 'edit'])
    ->name('usuarios.edit');

Route::put('/usuarios/{id}', [UserController::class, 'update'])
    //  ->whereNumber('id');
    ->name('usuarios.update');

Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])
    ->name('usuarios.destroy');     

Route::post('/login', [LoginController::class, 'login'])
    ->name('login');  

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::get('/', [HomeController::class, 'index'])
    ->name('home');