<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

/* 
// Ruta para mostrar el formulario de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Ruta para manejar el proceso de registro
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
*/
// Rutas accesibles sin autenticación
Route::get('/index', [App\Http\Controllers\IndexController::class, 'home'])->name('index');
Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class, 'nosotros'])->name('nosotros');
Route::get('/servicios', [App\Http\Controllers\ServiciosController::class, 'servicios'])->name('servicios');
Route::get('/contacto', [App\Http\Controllers\ContactoController::class, 'contacto'])->name('contacto');

// Rutas que requieren autenticación
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/flota', [App\Http\Controllers\FlotaController::class, 'flota'])->name('flota');
    Route::get('/historial', [App\Http\Controllers\HistorialController::class, 'historial'])->name('historial');
    Route::get('/estadisticas', [App\Http\Controllers\EstadisticasController::class, 'estadisticas'])->name('estadisticas');
    Route::resource('users', UserController::class);
    Route::get('/datos_bancarios', [App\Http\Controllers\DatosBancariosController::class, 'datos_bancarios'])->name('datos_bancarios');
    Route::post('/procesar-pago', [App\Http\Controllers\PagoController::class, 'procesarPago'])->name('procesar_pago');
});
Auth::routes();
