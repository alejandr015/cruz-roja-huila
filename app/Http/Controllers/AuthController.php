<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AuthController extends Controller
{
    // Mostrar formulario de login
    public function showLogin()
    {
        // Si ya está logueado, redirigir al dashboard
        if (session()->has('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('auth.login');
    }

    // Procesar login
    public function login(Request $request)
    {
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
            // Crear sesión
            session([
                'admin_logged_in' => true,
                'admin_id' => $admin->id,
                'admin_nombre' => $admin->nombre,
                'admin_username' => $admin->username,
            ]);

            return redirect()->route('admin.dashboard')->with('success', '¡Bienvenido ' . $admin->nombre . '!');
        }

        // Login fallido
        return back()->withErrors([
            'login' => 'Usuario o contraseña incorrectos',
        ])->withInput($request->only('username'));
    }

    // Cerrar sesión
    public function logout()
    {
        session()->flush();
        return redirect()->route('login')->with('success', 'Sesión cerrada correctamente');
    }
}