<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MensajeContacto;

class ContactoController extends Controller
{
    /**
     * Página de contacto
     */
    public function index()
    {
        return view('contacto');
    }

    /**
     * Enviar mensaje de contacto
     */
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'telefono' => 'nullable|string|max:20',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string|min:10',
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email debe ser válido',
            'asunto.required' => 'El asunto es obligatorio',
            'mensaje.required' => 'El mensaje es obligatorio',
            'mensaje.min' => 'El mensaje debe tener al menos 10 caracteres',
        ]);

        MensajeContacto::create($request->all());

        return redirect()->back()->with('success', '¡Mensaje enviado exitosamente! Nos pondremos en contacto pronto.');
    }
}