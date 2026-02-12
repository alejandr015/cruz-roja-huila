<?php

namespace App\Http\Controllers;

use App\Models\InscripcionEmpresarial;
use Illuminate\Http\Request;

class InscripcionEmpresarialController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'curso' => 'required|string|max:255',
            'duracion' => 'required|string',
            'modalidad' => 'required|string',
            'empresa' => 'required|string|max:255',
            'nit' => 'required|string|max:50',
            'sector' => 'nullable|string|max:100',
            'numero_participantes' => 'required|integer|min:1',
            'nombre_contacto' => 'required|string|max:255',
            'cargo' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'ciudad' => 'nullable|string|max:100',
            'fecha_preferida' => 'nullable|date',
            'mensaje' => 'nullable|string|max:1000',
        ], [
            'curso.required' => 'Debe seleccionar una capacitación',
            'empresa.required' => 'El nombre de la empresa es obligatorio',
            'nit.required' => 'El NIT es obligatorio',
            'numero_participantes.required' => 'Debe indicar el número de participantes',
            'nombre_contacto.required' => 'El nombre del contacto es obligatorio',
            'cargo.required' => 'El cargo es obligatorio',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'El correo electrónico debe ser válido',
            'telefono.required' => 'El teléfono es obligatorio',
        ]);

        try {
            InscripcionEmpresarial::create($validated);

            return redirect()
                ->back()
                ->with('success', '¡Solicitud enviada exitosamente! Nos pondremos en contacto para enviar la cotización.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => 'Hubo un error al enviar la solicitud. Por favor, intente nuevamente.']);
        }
    }

    public function admin(Request $request)
    {
        $query = InscripcionEmpresarial::query();

        if ($request->filled('empresa')) {
            $query->where('empresa', 'like', '%' . $request->empresa . '%');
        }

        if ($request->filled('estado')) {
            $query->where('estado', $request->estado);
        }

        if ($request->filled('buscar')) {
            $buscar = $request->buscar;
            $query->where(function($q) use ($buscar) {
                $q->where('empresa', 'like', "%{$buscar}%")
                  ->orWhere('nit', 'like', "%{$buscar}%")
                  ->orWhere('nombre_contacto', 'like', "%{$buscar}%")
                  ->orWhere('email', 'like', "%{$buscar}%");
            });
        }

        $inscripciones = $query->orderBy('created_at', 'desc')->paginate(15);

        $stats = [
            'total' => InscripcionEmpresarial::count(),
            'pendientes' => InscripcionEmpresarial::where('estado', 'pendiente')->count(),
            'contactados' => InscripcionEmpresarial::where('estado', 'contactado')->count(),
            'confirmados' => InscripcionEmpresarial::where('estado', 'confirmado')->count(),
        ];

        return view('admin.inscripciones-empresariales', compact('inscripciones', 'stats'));
    }

    public function updateEstado(Request $request, InscripcionEmpresarial $inscripcion)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,contactado,cotizado,confirmado,rechazado',
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

    public function destroy(InscripcionEmpresarial $inscripcion)
    {
        $inscripcion->delete();

        return redirect()
            ->back()
            ->with('success', 'Solicitud eliminada correctamente');
    }
}