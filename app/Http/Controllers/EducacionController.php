<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InscripcionCurso;

class EducacionController extends Controller
{
    /**
     * Página principal de educación
     */
    public function index()
    {
        return view('educacion.index');
    }

    /**
     * Técnicos Laborales
     */
    public function tecnicosLaborales()
    {
        return view('educacion.tecnicos-laborales');
    }

    /**
     * Diplomados
     */
    public function diplomados()
    {
        return view('educacion.diplomados');
    }

    /**
     * Cursos
     */
    public function cursos()
    {
        return view('educacion.cursos');
    }

    /**
     * Capacitaciones Empresariales
     */
    public function capacitacionesEmpresariales()
    {
        return view('educacion.capacitaciones-empresariales');
    }

    /**
     * Educación Virtual
     */
    public function educacionVirtual()
    {
        return view('educacion.educacion-virtual');
    }

    /**
     * Procesar inscripción a curso
     */
    /**
     * Procesar inscripción a curso
     */
    public function inscripcion(Request $request)
    {
        $request->validate([
            'curso' => 'required|string',
            'nombre' => 'required|string|max:100',
            'documento' => 'required|string|max:20',
            'email' => 'required|email',
            'telefono' => 'required|string',
            'fecha_nacimiento' => 'required|date',
            'ciudad' => 'nullable|string|max:100',
            'horario' => 'required|in:fin-de-semana,entre-semana,sabados,domingos',
            'observaciones' => 'nullable|string',
        ], [
            'curso.required' => 'El curso es obligatorio',
            'nombre.required' => 'El nombre es obligatorio',
            'documento.required' => 'El documento es obligatorio',
            'email.required' => 'El email es obligatorio',
            'telefono.required' => 'El teléfono es obligatorio',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria',
            'horario.required' => 'Debe seleccionar un horario',
        ]);

        InscripcionCurso::create($request->all());

        return redirect()->back()->with('success', '¡Inscripción exitosa! Nos pondremos en contacto contigo pronto.');
    }
}