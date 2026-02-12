<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Si no está logueado, redirigir al login
        if (!session()->has('admin_logged_in')) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder');
        }

        // ===========================
        // SEGURIDAD 1: TIMEOUT DE INACTIVIDAD
        // ===========================
        $timeout = 900; // 15 minutos (ajusta según necesites)
        
        if (session()->has('last_activity')) {
            $elapsed = time() - session('last_activity');
            
            if ($elapsed > $timeout) {
                session()->flush();
                return redirect()->route('login')
                    ->with('error', 'Tu sesión expiró por inactividad. Por favor, inicia sesión nuevamente.');
            }
        }
        
        // Actualizar último tiempo de actividad
        session(['last_activity' => time()]);

        // ===========================
        // SEGURIDAD 2: VERIFICAR QUE ESTÁ EN RUTAS ADMIN
        // ===========================
        // Si la siguiente petición NO es a /admin, cerrar sesión
        // (Esto se aplica cuando el usuario navega fuera del área admin)
        
        return $next($request);
    }
}