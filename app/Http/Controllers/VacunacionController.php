<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacunacionController extends Controller
{
    /**
     * Página principal de vacunación
     */
    public function index()
    {
        return view('vacunacion.index');
    }

    /**
     * Vacunación para Niños y Gestantes
     */
    public function ninosGestantes()
    {
        return view('vacunacion.ninos-gestantes');
    }

    /**
     * Vacunación para Adultos
     */
    public function adultos()
    {
        return view('vacunacion.adultos');
    }

    /**
     * Vacunación para Adolescentes
     */
    public function adolescentes()
    {
        return view('vacunacion.adolescentes');
    }
    
    /**
     * Vacunación de riesgos laborales
     */
    public function riesgosLaborales()
    {
        return view('vacunacion.riesgos-laborales');
    }
}