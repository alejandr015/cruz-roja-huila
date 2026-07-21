<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voluntario;
use Illuminate\Support\Facades\Validator;

class VoluntariadoController extends Controller
{
    /**
     * Página principal de voluntariado
     */
    public function index()
    {
        return view('voluntariado.index');
    }

    /**
     * Socorristas
     */
    public function socorristas()
    {
        return view('voluntariado.socorristas');
    }

    /**
     * Juventudes
     */
    public function juventudes()
    {
        return view('voluntariado.juventudes');
    }

    /**
     * Damas Grises
     */
    public function damasGrises()
    {
        return view('voluntariado.damas-grises');
    }

    /**
     * Niños y Gestantes
     */
    public function ninosGestantes()
    {
        return view('voluntariado.ninos-gestantes');
    }

    /**
     * Adultos
     */
    public function adultos()
    {
        return view('voluntariado.adultos');
    }

    /**
     * Adolescentes
     */
    public function adolescentes()
    {
        return view('voluntariado.adolescentes');
    }

    /**
     * Cómo ser voluntario
     */
    public function comoSerVoluntario()
    {
        return view('voluntariado.como-ser-voluntario');
    }

    /**
     * Procesar inscripción de voluntario
     */
    public function inscribirse(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'modalidad' => 'required|in:juveniles,damas-grises,socorristas',
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'email' => 'required|email|unique:voluntarios,email',
            'telefono' => 'required|string|max:20',
            'documento' => 'required|string|unique:voluntarios,documento',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'required|string',
            'ciudad' => 'nullable|string|max:100',
        ], [
            'modalidad.required' => 'Debe seleccionar una modalidad de voluntariado',
            'nombre.required' => 'El nombre es obligatorio',
            'email.required' => 'El email es obligatorio',
            'email.unique' => 'Este email ya está registrado',
            'documento.unique' => 'Este documento ya está registrado',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $voluntario = Voluntario::create($request->all());

        return redirect()->route('voluntariado')->with('success', '¡Gracias por inscribirte! Pronto nos pondremos en contacto contigo.');
    }
}