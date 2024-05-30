<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\index_usuario;

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
Route::get('/index', [App\Http\Controllers\indexController::class, 'home'])->name('index');
Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class, 'nosotros'])->name('nosotros');
Route::get('/servicios', [App\Http\Controllers\ServiciosController::class, 'servicios'])->name('servicios');
Route::get('/contacto', [App\Http\Controllers\ContactoController::class, 'contacto'])->name('contacto');


Route::get('/index_usuario', [App\Http\Controllers\indexController::class, 'index_usuario'])->name('index_usuario');

Route::get('/nosotros_usuario', [App\Http\Controllers\nosotros_usuario::class, 'nosotros_usuario'])->name('nosotros_usuario');
Route::get('/servicios_usuario', [App\Http\Controllers\servicios_usuario::class, 'servicios_usuario'])->name('servicios_usuario');
Route::get('/contacto_usuario', [App\Http\Controllers\contacto_usuario::class, 'contacto_usuario'])->name('contacto_usuario');

// Rutas que requieren autenticación
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/flota', [App\Http\Controllers\FlotaController::class, 'flota'])->name('flota');
    Route::get('/historial', [App\Http\Controllers\HistorialController::class, 'historial'])->name('historial');
    Route::get('/historial_usuario', [App\Http\Controllers\historial_usuario::class, 'historial_usuario'])->name('historial_usuario');
    Route::get('/estadisticas', [App\Http\Controllers\EstadisticasController::class, 'estadisticas'])->name('estadisticas');
    Route::resource('users', UserController::class);
    Route::get('/datos_bancarios', [App\Http\Controllers\DatosBancariosController::class, 'datos_bancarios'])->name('datos_bancarios');
    Route::get('/procesar_pago', [App\Http\Controllers\PagoController::class, 'procesar_pago'])->name('procesar_pago');
});
Auth::routes();
