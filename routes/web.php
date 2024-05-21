<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});
/* // Ruta para mostrar el formulario de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

 */
/* // Ruta para manejar el proceso de registro
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/estadisticas', [App\Http\Controllers\estadisticasController::class, 'estadisticas'])->name('estadisticas');
Route::get('/contacto', [App\Http\Controllers\contactoController::class, 'contacto'])->name('contacto');
Route::get('/index', [App\Http\Controllers\indexController::class, 'home'])->name('index');
Route::get('/nosotros', [App\Http\Controllers\nosotrosController::class, 'nosotros'])->name('nosotros');
Route::get('/servicios', [App\Http\Controllers\serviciosController::class, 'servicios'])->name('servicios');
Route::get('/datos_bancarios', [App\Http\Controllers\DatosBancariosController::class, 'datos_bancarios'])->name('datos_bancarios');
Route::post('/procesar-pago', [App\Http\Controllers\PagoController::class, 'procesarPago'])->name('procesar_pago');
Route::resource('users', UserController::class);