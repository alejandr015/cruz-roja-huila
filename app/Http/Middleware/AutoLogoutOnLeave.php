<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutoLogoutOnLeave
{
    public function handle(Request $request, Closure $next)
    {
        // Si está logueado como admin pero NO está en ruta /admin/* o /login
        if (session()->has('admin_logged_in') && 
            !$request->is('admin*') && 
            !$request->is('login*') &&
            !$request->is('logout*')) {
            
            // Cerrar sesión automáticamente
            session()->flush();
            
            // Opcional: mostrar mensaje
            return redirect()->route('login')
                ->with('info', 'Has salido del área de administración. Tu sesión fue cerrada por seguridad.');
        }

        return $next($request);
    }
}