<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validar los datos del formulario
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redirigir al usuario a la página de inicio
            return redirect()->intended('/home');
        }

        // Autenticación fallida, redirigir de vuelta al formulario de inicio de sesión con un mensaje de error
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }
}
