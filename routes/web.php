<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome');
});
// Ruta para mostrar el formulario de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');


// Ruta para manejar el proceso de registro
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
