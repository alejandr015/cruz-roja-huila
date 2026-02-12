<?php

namespace App\Http\Controllers;

use App\Models\InscripcionVirtual;
use Illuminate\Http\Request;

class InscripcionVirtualController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'curso' => 'required|string|max:255',
            'duracion' => 'required|string',
            'modalidad' => 'required|string',
            'nombre' => 'required|string|max:255',
            'documento' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'fecha_nacimiento' => 'required|date',
            'ciudad' => 'nullable|string|max:100',
            'pais' => 'nullable|string|max:100',
            'nivel_conocimiento' => 'required|in:ninguno,basico,intermedio,avanzado',
            'motivacion' => 'nullable|string|max:1000',
        ], [
            'curso.required' => 'Debe seleccionar un curso',
            'nombre.required' => 'El nombre completo es obligatorio',
            'documento.required' => 'El documento es obligatorio',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'El correo electrónico debe ser válido',
            'telefono.required' => 'El teléfono es obligatorio',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria',
            'nivel_conocimiento.required' => 'Debe indicar su nivel de conocimiento',
        ]);

        try {
            InscripcionVirtual::create($validated);

            return redirect()
                ->back()
                ->with('success', '¡Inscripción enviada exitosamente! Recibirás un correo con los datos de acceso a la plataforma.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => 'Hubo un error al enviar la inscripción. Por favor, intente nuevamente.']);
        }
    }

    public function admin(Request $request)
    {
        $query = InscripcionVirtual::query();

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
            'total' => InscripcionVirtual::count(),
            'pendientes' => InscripcionVirtual::where('estado', 'pendiente')->count(),
            'activos' => InscripcionVirtual::where('estado', 'activo')->count(),
            'completados' => InscripcionVirtual::where('estado', 'completado')->count(),
        ];

        return view('admin.inscripciones-virtuales', compact('inscripciones', 'stats'));
    }

    public function updateEstado(Request $request, InscripcionVirtual $inscripcion)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,aprobado,activo,completado,rechazado',
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

    public function destroy(InscripcionVirtual $inscripcion)
    {
        $inscripcion->delete();

        return redirect()
            ->back()
            ->with('success', 'Inscripción eliminada correctamente');
    }
}