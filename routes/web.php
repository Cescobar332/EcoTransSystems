<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\UsuarioController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', [UsuarioController::class, 'formularioRegistro'])->name('registro');
Route::post('/registro', [UsuarioController::class, 'guardarUsuario']);
Route::get('/login', [SesionController::class, 'formularioInicioSesion'])->name('login');
Route::post('/login', [SesionController::class, 'inicioSesion'])->name('login.post');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// Route::post('/dashboard/action', [DashboardController::class, 'store'])->name('dashboard.store');
// Route::get('/recuperar-contrasena', [SesionController::class, 'recuperarContrasena'])->name('recuperar_contrasena');
// Route::post('/recuperar-contrasena', [SesionController::class, 'recContra'])->name('recuperar_contrasena.post');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('usuarios', UsuarioController::class);

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
