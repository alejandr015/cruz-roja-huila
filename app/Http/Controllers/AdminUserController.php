<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminUserController extends Controller
{
    /**
     * Mostrar lista de administradores
     */
    public function index()
    {
        $admins = Admin::orderBy('created_at', 'desc')->get();
        return view('admin.usuarios.index', compact('admins'));
    }

    /**
     * Obtener administradores (API)
     */
    public function getAdmins()
    {
        $admins = Admin::select('id', 'username', 'nombre', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($admins);
    }

    /**
     * Crear nuevo administrador
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:admins,username|min:4|max:50',
            'nombre' => 'required|string|min:3|max:100',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'username.required' => 'El usuario es obligatorio',
            'username.unique' => 'Este usuario ya existe',
            'username.min' => 'El usuario debe tener al menos 4 caracteres',
            'nombre.required' => 'El nombre es obligatorio',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres',
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',
        ]);

        $admin = Admin::create([
            'username' => $request->username,
            'nombre' => $request->nombre,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Administrador creado correctamente',
            'admin' => $admin
        ]);
    }

    /**
     * Eliminar administrador
     */
    public function destroy($id)
    {
        // No permitir eliminar si es el único admin
        if (Admin::count() <= 1) {
            return response()->json([
                'success' => false,
                'message' => 'No puedes eliminar el único administrador del sistema'
            ], 400);
        }

        // No permitir eliminar tu propia cuenta
        if (session('admin_id') == $id) {
            return response()->json([
                'success' => false,
                'message' => 'No puedes eliminar tu propia cuenta'
            ], 400);
        }

        $admin = Admin::findOrFail($id);
        $admin->delete();

        return response()->json([
            'success' => true,
            'message' => 'Administrador eliminado correctamente'
        ]);
    }

    /**
     * Cambiar contraseña
     */
    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ], [
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',
        ]);

        $admin = Admin::findOrFail($id);
        $admin->password = Hash::make($request->password);
        $admin->save();

        return response()->json([
            'success' => true,
            'message' => 'Contraseña actualizada correctamente'
        ]);
    }
}