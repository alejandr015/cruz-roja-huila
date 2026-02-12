<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludController extends Controller
{
    /**
     * Página principal de salud
     */
    public function index()
    {
        return view('salud.index');
    }

    /**
     * Vacunaciones
     */
    public function vacunaciones()
    {
        return view('salud.vacunaciones');
    }

    /**
     * Pruebas Especiales
     */
    public function pruebasEspeciales()
    {
        return view('salud.pruebas-especiales');
    }

    /**
     * Inmunología
     */
    public function inmunologia()
    {
        return view('salud.inmunologia');
    }

    /**
     * Laboratorios Clínicos
     */
    public function laboratoriosClinicos()
    {
        return view('salud.laboratorios-clinicos');
    }

    /**
     * Exámenes de Rutina
     */
    public function examenesRutina()
    {
        return view('salud.examenes-rutina');
    }

    /**
     * Exámenes Laboratorio Empresarial
     */
    public function examenesLaboratorioEmpresarial()
    {
        return view('salud.examenes-laboratorio-empresarial');
    }

    /**
     * Agendar cita
     */
    public function agendarCita(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email',
            'telefono' => 'required|string',
            'servicio' => 'required|string',
            'fecha_preferida' => 'required|date',
        ]);

        // Aquí procesas la cita (guardar en BD, enviar email, etc.)

        return redirect()->back()->with('success', '¡Cita agendada! Te contactaremos pronto para confirmar.');
    }
}