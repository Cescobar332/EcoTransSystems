<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SesionController
{
    public function formularioInicioSesion()
    {
        return view('login');
    }
    public function inicioSesion(Request $request)
    {
        // Aquí maneja la lógica de inicio de sesión
        
    }
    public function recuperarContrasena()
    {
            // return view('recuperar_contrasena');
    }
    public function recContra(Request $request)
    {
        // Aquí maneja la lógica de recuperar contraseña
        
    }
}
