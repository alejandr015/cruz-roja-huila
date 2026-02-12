<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Log;
use App\Models\Admin;

class AuthController extends Controller
{
    /**
     * Mostrar formulario de login
     */
    public function showLogin()
    {
        // Si ya está logueado, redirigir al dashboard
        if (session()->has('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('auth.login');
    }

    /**
     * Procesar login con protección contra fuerza bruta
     */
    public function login(Request $request)
    {
        // PROTECCIÓN: Crear clave única por IP para rate limiting
        $throttleKey = 'login-attempt:' . $request->ip();
        
        // PROTECCIÓN: Verificar si hay demasiados intentos (máximo 5 intentos)
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            $minutes = ceil($seconds / 60);
            
            // Registrar intento de ataque en logs
            Log::warning('Demasiados intentos de login bloqueados', [
                'ip' => $request->ip(),
                'username_attempt' => $request->username,
                'user_agent' => $request->userAgent(),
                'blocked_for_seconds' => $seconds,
            ]);
            
            return back()->withErrors([
                'login' => "⚠️ Demasiados intentos fallidos. Por seguridad, debes esperar {$minutes} minuto(s) antes de intentar nuevamente.",
            ])->withInput($request->only('username'));
        }

        // Validar campos
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ], [
            'username.required' => 'El usuario es obligatorio',
            'password.required' => 'La contraseña es obligatoria',
        ]);

        // Buscar admin
        $admin = Admin::where('username', $request->username)->first();

        // Verificar si existe y la contraseña es correcta
        if ($admin && Hash::check($request->password, $admin->password)) {
            // ÉXITO: Login correcto - limpiar intentos fallidos
            RateLimiter::clear($throttleKey);

            // Registrar login exitoso en logs
            Log::info('Login exitoso', [
                'admin_id' => $admin->id,
                'admin_username' => $admin->username,
                'admin_nombre' => $admin->nombre,
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'timestamp' => now(),
            ]);

            // Crear sesión
            session([
                'admin_logged_in' => true,
                'admin_id' => $admin->id,
                'admin_nombre' => $admin->nombre,
                'admin_username' => $admin->username,
                'last_activity' => time(),
            ]);

            return redirect()->route('admin.dashboard')
                ->with('success', '¡Bienvenido ' . $admin->nombre . '!');
        }

        // FALLO: Login incorrecto
        // PROTECCIÓN: Incrementar contador de intentos fallidos
        // Bloquear por 5 minutos (300 segundos) después de 5 intentos
        RateLimiter::hit($throttleKey, 300);
        
        // Registrar intento fallido en logs
        Log::warning('Intento de login fallido', [
            'ip' => $request->ip(),
            'username_attempt' => $request->username,
            'intentos_actuales' => RateLimiter::attempts($throttleKey),
            'max_intentos' => 5,
            'user_agent' => $request->userAgent(),
            'timestamp' => now(),
        ]);

        // Login fallido - Mostrar error
        return back()->withErrors([
            'login' => 'Usuario o contraseña incorrectos',
        ])->withInput($request->only('username'));
    }

    /**
     * Cerrar sesión
     */
    public function logout(Request $request)
    {
        $username = session('admin_username');
        
        // Registrar logout en logs
        Log::info('Logout', [
            'admin_username' => $username,
            'ip' => $request->ip(),
            'timestamp' => now(),
        ]);

        session()->flush();
        
        return redirect()->route('login')
            ->with('success', 'Sesión cerrada correctamente');
    }
}