<?php

namespace App\Http\Controllers;

use App\Models\InscripcionTecnico;
use Illuminate\Http\Request;

class InscripcionTecnicoController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'curso' => 'required|string|max:255',
            'duracion' => 'required|string',
            'inversion' => 'required|string',
            'modalidad' => 'required|string',
            'nombre' => 'required|string|max:255',
            'documento' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'fecha_nacimiento' => 'required|date',
            'ciudad' => 'nullable|string|max:100',
            'horario' => 'required|in:fin-de-semana,entre-semana,sabados,domingos',
        ], [
            'curso.required' => 'Debe seleccionar un programa',
            'nombre.required' => 'El nombre completo es obligatorio',
            'documento.required' => 'El documento es obligatorio',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'El correo electrónico debe ser válido',
            'telefono.required' => 'El teléfono es obligatorio',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria',
            'horario.required' => 'Debe seleccionar un horario',
        ]);

        try {
            InscripcionTecnico::create($validated);

            return redirect()
                ->back()
                ->with('success', '¡Inscripción enviada exitosamente! Nos pondremos en contacto pronto.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => 'Hubo un error al enviar la inscripción. Por favor, intente nuevamente.']);
        }
    }

    public function admin(Request $request)
    {
        $query = InscripcionTecnico::query();

        if ($request->filled('curso')) {
            $query->where('curso', 'like', '%' . $request->curso . '%');
        }

        if ($request->filled('estado')) {
            $query->where('estado', $request->estado);
        }

        if ($request->filled('buscar')) {
            $buscar = $request->buscar;
            $query->where(function($q) use ($buscar) {
                $q->where('nombre', 'like', "%{$buscar}%")
                  ->orWhere('documento', 'like', "%{$buscar}%")
                  ->orWhere('email', 'like', "%{$buscar}%");
            });
        }

        $inscripciones = $query->orderBy('created_at', 'desc')->paginate(15);

        $stats = [
            'total' => InscripcionTecnico::count(),
            'pendientes' => InscripcionTecnico::where('estado', 'pendiente')->count(),
            'contactados' => InscripcionTecnico::where('estado', 'contactado')->count(),
            'matriculados' => InscripcionTecnico::where('estado', 'matriculado')->count(),
        ];

        return view('admin.inscripciones-tecnicos', compact('inscripciones', 'stats'));
    }

    public function updateEstado(Request $request, InscripcionTecnico $inscripcion)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,contactado,matriculado,rechazado',
            'observaciones' => 'nullable|string',
        ]);

        $inscripcion->update([
            'estado' => $request->estado,
            'observaciones' => $request->observaciones,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Estado actualizado correctamente');
    }

    public function destroy(InscripcionTecnico $inscripcion)
    {
        $inscripcion->delete();

        return redirect()
            ->back()
            ->with('success', 'Inscripción eliminada correctamente');
    }
}