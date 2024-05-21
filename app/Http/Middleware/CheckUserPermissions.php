<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Verificar si el usuario actual tiene el permiso adecuado
        if (!Auth::user()->hasPermissionTo('estadisticas')) {
            // Redirigir al usuario a otra página o mostrar un mensaje de error
            return redirect()->route('home')->with('error', 'No tienes permiso para acceder a esta sección.');
        }

        return $next($request);
    }
}
