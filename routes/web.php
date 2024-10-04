<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrassController;
use App\Http\Controllers\UsuarioController;

// Rotas para o GrassController
Route::get('/GrassController', [GrassController::class, '__construct']);
Route::get('/especies', [GrassController::class, 'getAllEspecies']);
Route::get('/especies/{id}', [GrassController::class, 'getEspecieById']);
Route::post('/especies', [GrassController::class, 'createEspecie']);
Route::delete('/especies/{id}', [GrassController::class, 'deleteEspecie']);

// Rotas de autenticação e registro
Route::get('/register', function() {
    return view('auth.register'); 
});

Route::post('/register', [UsuarioController::class, 'createUser']); 

Route::get('/login', function() {
    return view('auth.login'); 
});

Route::post('/login', [UsuarioController::class, 'login']); 

// Página que o usuário acessa após login bem-sucedido
Route::get('/homelogada', function () {
    return view('homelogada');
});

// Rota para logout
Route::post('/logout', [UsuarioController::class, 'logout']); 

// Página inicial após login
Route::get('/home', function() {
    return view('homesemlogin');
});
