<?php

namespace App\Http\Controllers;

class QueHacemosController extends Controller
{
    /**
     * Gestión del Riesgo
     */
    public function gestionRiesgo()
    {
        return view('que-hacemos.gestion-riesgo');
    }

    /**
     * Construcción de Paz
     */
    public function construccionPaz()
    {
        return view('que-hacemos.construccion-paz');
    }

    /**
     * Atención de Emergencias
     */
    public function atencionEmergencias()
    {
        return view('que-hacemos.atencion-emergencias');
    }

    /**
     * Atención de Eventos Masivos
     */
    public function eventosMasivos()
    {
        return view('que-hacemos.eventos-masivos');
    }
}
