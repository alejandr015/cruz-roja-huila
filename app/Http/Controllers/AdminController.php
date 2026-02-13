<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InscripcionCurso;
use App\Models\Voluntario;
use App\Models\MensajeContacto;
use App\Models\Donacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    /**
     * Mostrar el dashboard principal
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Obtener estadísticas generales
     */
    public function getEstadisticas()
    {
        // Cachear estadísticas por 5 minutos (300 segundos)
        // Esto reduce de 7 consultas SQL a 0 en cada recarga del dashboard
        $estadisticas = Cache::remember('admin.estadisticas', 300, function () {
            return [
                'cursos' => \App\Models\InscripcionCurso::where('estado', 'pendiente')->count(),
                'confirmados' => \App\Models\InscripcionCurso::where('estado', 'confirmado')->count(),
                'tecnicos' => \App\Models\InscripcionTecnico::where('estado', 'pendiente')->count(),
                'diplomados' => \App\Models\InscripcionDiplomado::where('estado', 'pendiente')->count(),
                'empresariales' => \App\Models\InscripcionEmpresarial::where('estado', 'pendiente')->count(),
                'virtuales' => \App\Models\InscripcionVirtual::where('estado', 'pendiente')->count(),
                'voluntarios' => \App\Models\Voluntario::count(),
            ];
        });

        return response()->json($estadisticas);
    }

    /**
     * Obtener todas las inscripciones a cursos (SOLO PENDIENTES)
     */
    public function getInscripciones(Request $request)
    {
        $query = \App\Models\InscripcionCurso::where('estado', 'pendiente'); // Solo pendientes

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nombre', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('curso', 'like', "%{$search}%");
            });
        }

        if ($request->filled('curso')) {
            $query->where('curso', 'like', "%{$request->curso}%");
        }

        $inscripciones = $query->orderBy('created_at', 'desc')->get();
        return response()->json($inscripciones);
    }

    /**
     * Obtener detalles de una inscripción específica
     */
    public function getInscripcionDetalle($id)
    {
        $inscripcion = InscripcionCurso::findOrFail($id);
        return response()->json($inscripcion);
    }

    /**
     * Eliminar una inscripción
     */
    public function deleteInscripcion($id)
    {
        try {
            $inscripcion = InscripcionCurso::findOrFail($id);
            $inscripcion->delete();

            Cache::forget('admin.estadisticas'); // ⭐ AGREGAR

            return response()->json([
                'success' => true,
                'message' => 'Inscripción eliminada correctamente'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar la inscripción'
            ], 500);
        }
    }

    /**
     * Actualizar estado de inscripción a curso
     */
    public function updateEstadoCurso(Request $request, $id)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,confirmado,rechazado',
            'observaciones' => 'nullable|string',
        ]);

        $inscripcion = \App\Models\InscripcionCurso::findOrFail($id);
        $inscripcion->update([
            'estado' => $request->estado,
            'observaciones' => $request->observaciones,
        ]);

        // ⭐ Invalidar cache para actualizar estadísticas
        Cache::forget('admin.estadisticas');

        return response()->json(['success' => true]);
    }

    /**
     * Obtener confirmados
     */
    public function getConfirmados(Request $request)
    {
        $query = \App\Models\InscripcionCurso::where('estado', 'confirmado');

        if ($request->filled('curso')) {
            $curso = $request->curso;
            $query->where('curso', 'like', "%{$curso}%");
        }

        if ($request->filled('buscar')) {
            $buscar = $request->buscar;
            $query->where(function ($q) use ($buscar) {
                $q->where('nombre', 'like', "%{$buscar}%")
                    ->orWhere('email', 'like', "%{$buscar}%")
                    ->orWhere('documento', 'like', "%{$buscar}%");
            });
        }

        $confirmados = $query->orderBy('updated_at', 'desc')->get();
        return response()->json($confirmados);
    }

    /**
     * Exportar cursos a Excel
     */
    public function exportarCursos(Request $request)
    {
        $tipo = $request->get('tipo', 'todos'); // todos, pendientes, confirmados
        $curso = $request->get('curso', '');

        $query = \App\Models\InscripcionCurso::query();

        if ($tipo === 'pendientes') {
            $query->where('estado', 'pendiente');
        } elseif ($tipo === 'confirmados') {
            $query->where('estado', 'confirmado');
        }

        if ($curso) {
            $query->where('curso', 'like', "%{$curso}%");
        }

        $inscripciones = $query->orderBy('created_at', 'desc')->get();

        $filename = 'inscripciones_' . $tipo . '_' . date('Y-m-d_His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv; charset=utf-8',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ];

        $callback = function () use ($inscripciones) {
            $file = fopen('php://output', 'w');
            fprintf($file, chr(0xEF) . chr(0xBB) . chr(0xBF));

            fputcsv($file, [
                'ID',
                'Fecha Inscripción',
                'Nombre',
                'Documento',
                'Email',
                'Teléfono',
                'Fecha Nacimiento',
                'Ciudad',
                'Curso',
                'Duración',
                'Modalidad',
                'Horario',
                'Estado',
                'Observaciones'
            ]);

            foreach ($inscripciones as $inscripcion) {
                fputcsv($file, [
                    $inscripcion->id,
                    $inscripcion->created_at->format('d/m/Y H:i'),
                    $inscripcion->nombre,
                    $inscripcion->documento,
                    $inscripcion->email,
                    $inscripcion->telefono,
                    $inscripcion->fecha_nacimiento ? $inscripcion->fecha_nacimiento->format('d/m/Y') : '',
                    $inscripcion->ciudad,
                    $inscripcion->curso,
                    $inscripcion->duracion ?? '',
                    $inscripcion->modalidad ?? '',
                    $inscripcion->horario,
                    $inscripcion->estado_texto,
                    $inscripcion->observaciones ?? ''
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    // ==============================================
    // TÉCNICOS LABORALES
    // ==============================================

    public function getTecnicos(Request $request)
    {
        $query = \App\Models\InscripcionTecnico::where('estado', 'pendiente'); // Solo pendientes

        if ($request->filled('buscar')) {
            $buscar = $request->buscar;
            $query->where(function ($q) use ($buscar) {
                $q->where('nombre', 'like', "%{$buscar}%")
                    ->orWhere('email', 'like', "%{$buscar}%")
                    ->orWhere('curso', 'like', "%{$buscar}%");
            });
        }

        $tecnicos = $query->orderBy('created_at', 'desc')->get();
        return response()->json($tecnicos);
    }

    public function getTecnicoDetalle($id)
    {
        $tecnico = \App\Models\InscripcionTecnico::findOrFail($id);
        return response()->json($tecnico);
    }

    public function deleteTecnico($id)
    {
        try {
            $tecnico = \App\Models\InscripcionTecnico::findOrFail($id);
            $tecnico->delete();

            // Invalidar cache de estadísticas
            Cache::forget('admin.estadisticas');

            return response()->json([
                'success' => true,
                'message' => 'Inscripción eliminada correctamente'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar la inscripción'
            ], 500);
        }
    }

    public function updateEstadoTecnico(Request $request, $id)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,contactado,matriculado,rechazado',
            'observaciones' => 'nullable|string',
        ]);

        $inscripcion = \App\Models\InscripcionTecnico::findOrFail($id);
        $inscripcion->update([
            'estado' => $request->estado,
            'observaciones' => $request->observaciones,
        ]);

        Cache::forget('admin.estadisticas'); // ⭐ AGREGAR

        return response()->json(['success' => true]);
    }

    // ==============================================
    // DIPLOMADOS
    // ==============================================

    public function getDiplomados(Request $request)
    {
        $query = \App\Models\InscripcionDiplomado::where('estado', 'pendiente'); // Solo pendientes

        if ($request->filled('buscar')) {
            $buscar = $request->buscar;
            $query->where(function ($q) use ($buscar) {
                $q->where('nombre', 'like', "%{$buscar}%")
                    ->orWhere('email', 'like', "%{$buscar}%")
                    ->orWhere('curso', 'like', "%{$buscar}%");
            });
        }

        $diplomados = $query->orderBy('created_at', 'desc')->get();
        return response()->json($diplomados);
    }

    public function getDiplomadoDetalle($id)
    {
        $diplomado = \App\Models\InscripcionDiplomado::findOrFail($id);
        return response()->json($diplomado);
    }

    public function deleteDiplomado($id)
    {
        try {
            $diplomado = \App\Models\InscripcionDiplomado::findOrFail($id);
            $diplomado->delete();

            // Invalidar cache de estadísticas
            Cache::forget('admin.estadisticas');

            return response()->json([
                'success' => true,
                'message' => 'Inscripción eliminada correctamente'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar la inscripción'
            ], 500);
        }
    }

    public function updateEstadoDiplomado(Request $request, $id)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,contactado,matriculado,rechazado',
            'observaciones' => 'nullable|string',
        ]);

        $inscripcion = \App\Models\InscripcionDiplomado::findOrFail($id);
        $inscripcion->update([
            'estado' => $request->estado,
            'observaciones' => $request->observaciones,
        ]);

        Cache::forget('admin.estadisticas'); // ⭐ AGREGAR

        return response()->json(['success' => true]);
    }

    // ==============================================
    // EMPRESARIALES
    // ==============================================

    public function getEmpresariales(Request $request)
    {
        $query = \App\Models\InscripcionEmpresarial::where('estado', 'pendiente'); // Solo pendientes

        if ($request->filled('buscar')) {
            $buscar = $request->buscar;
            $query->where(function ($q) use ($buscar) {
                $q->where('empresa', 'like', "%{$buscar}%")
                    ->orWhere('nombre_contacto', 'like', "%{$buscar}%")
                    ->orWhere('email', 'like', "%{$buscar}%")
                    ->orWhere('curso', 'like', "%{$buscar}%");
            });
        }

        $empresariales = $query->orderBy('created_at', 'desc')->get();
        return response()->json($empresariales);
    }

    public function getEmpresarialDetalle($id)
    {
        $empresarial = \App\Models\InscripcionEmpresarial::findOrFail($id);
        return response()->json($empresarial);
    }

    public function deleteEmpresarial($id)
    {
        try {
            $empresarial = \App\Models\InscripcionEmpresarial::findOrFail($id);
            $empresarial->delete();

            // Invalidar cache de estadísticas
            Cache::forget('admin.estadisticas');

            return response()->json([
                'success' => true,
                'message' => 'Solicitud eliminada correctamente'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar la solicitud'
            ], 500);
        }
    }

    public function updateEstadoEmpresarial(Request $request, $id)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,contactado,cotizado,confirmado,rechazado',
            'observaciones' => 'nullable|string',
        ]);

        $inscripcion = \App\Models\InscripcionEmpresarial::findOrFail($id);
        $inscripcion->update([
            'estado' => $request->estado,
            'observaciones' => $request->observaciones,
        ]);

        Cache::forget('admin.estadisticas'); // ⭐ AGREGAR

        return response()->json(['success' => true]);
    }

    // ==============================================
    // VIRTUALES
    // ==============================================

    public function getVirtuales(Request $request)
    {
        $query = \App\Models\InscripcionVirtual::where('estado', 'pendiente'); // Solo pendientes

        if ($request->filled('buscar')) {
            $buscar = $request->buscar;
            $query->where(function ($q) use ($buscar) {
                $q->where('nombre', 'like', "%{$buscar}%")
                    ->orWhere('email', 'like', "%{$buscar}%")
                    ->orWhere('curso', 'like', "%{$buscar}%");
            });
        }

        $virtuales = $query->orderBy('created_at', 'desc')->get();
        return response()->json($virtuales);
    }

    public function getVirtualDetalle($id)
    {
        $virtual = \App\Models\InscripcionVirtual::findOrFail($id);
        return response()->json($virtual);
    }

    public function deleteVirtual($id)
    {
        try {
            $virtual = \App\Models\InscripcionVirtual::findOrFail($id);
            $virtual->delete();

            // Invalidar cache de estadísticas
            Cache::forget('admin.estadisticas');

            return response()->json([
                'success' => true,
                'message' => 'Inscripción eliminada correctamente'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar la inscripción'
            ], 500);
        }
    }

    public function updateEstadoVirtual(Request $request, $id)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,aprobado,activo,completado,rechazado',
            'observaciones' => 'nullable|string',
        ]);

        $inscripcion = \App\Models\InscripcionVirtual::findOrFail($id);
        $inscripcion->update([
            'estado' => $request->estado,
            'observaciones' => $request->observaciones,
        ]);

        Cache::forget('admin.estadisticas'); // ⭐ AGREGAR

        return response()->json(['success' => true]);
    }

    // ==============================================
    // VOLUNTARIOS
    // ==============================================

    public function getVoluntarios(Request $request)
    {
        $query = Voluntario::query()->orderBy('created_at', 'desc');

        if ($request->has('disponibilidad') && $request->disponibilidad != '') {
            $query->where('modalidad', $request->disponibilidad);
        }

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nombre', 'like', "%{$search}%")
                    ->orWhere('apellido', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('telefono', 'like', "%{$search}%")
                    ->orWhere('documento', 'like', "%{$search}%")
                    ->orWhere('ciudad', 'like', "%{$search}%");
            });
        }

        $voluntarios = $query->get()->map(function ($voluntario) {
            $voluntario->nombre_completo = $voluntario->nombre_completo;
            $voluntario->edad = $voluntario->fecha_nacimiento
                ? \Carbon\Carbon::parse($voluntario->fecha_nacimiento)->age
                : null;
            return $voluntario;
        });

        return response()->json($voluntarios);
    }

    public function getVoluntarioDetalle($id)
    {
        $voluntario = Voluntario::findOrFail($id);
        $voluntario->nombre_completo = $voluntario->nombre_completo;
        $voluntario->edad = $voluntario->fecha_nacimiento
            ? \Carbon\Carbon::parse($voluntario->fecha_nacimiento)->age
            : null;
        return response()->json($voluntario);
    }

    public function deleteVoluntario($id)
    {
        try {
            $voluntario = Voluntario::findOrFail($id);
            $voluntario->delete();

            // Invalidar cache de estadísticas
            Cache::forget('admin.estadisticas');

            return response()->json([
                'success' => true,
                'message' => 'Voluntario eliminado correctamente'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar el voluntario'
            ], 500);
        }
    }

    // ==============================================
    // TODOS LOS INSCRITOS (VISTA UNIFICADA)
    // ==============================================

    public function getTodosInscritos(Request $request)
    {
        $categoria = $request->get('categoria', 'todos');
        $programa = $request->get('programa', '');
        $buscar = $request->get('buscar', '');

        $resultados = [];

        $agregarCategoria = function ($items, $categoriaTexto) {
            return $items->map(function ($item) use ($categoriaTexto) {
                $item->categoria = $categoriaTexto;
                return $item;
            });
        };

        // CURSOS
        if ($categoria === 'todos' || $categoria === 'cursos') {
            $query = \App\Models\InscripcionCurso::where('estado', 'confirmado');

            if ($programa) {
                $query->where('curso', 'like', "%{$programa}%");
            }
            if ($buscar) {
                $query->where(function ($q) use ($buscar) {
                    $q->where('nombre', 'like', "%{$buscar}%")
                        ->orWhere('email', 'like', "%{$buscar}%");
                });
            }

            $cursos = $query->get();
            $resultados = array_merge($resultados, $agregarCategoria($cursos, 'Curso')->toArray());
        }

        // TÉCNICOS
        if ($categoria === 'todos' || $categoria === 'tecnicos') {
            $query = \App\Models\InscripcionTecnico::where('estado', 'matriculado');

            if ($programa) {
                $query->where('curso', 'like', "%{$programa}%");
            }
            if ($buscar) {
                $query->where(function ($q) use ($buscar) {
                    $q->where('nombre', 'like', "%{$buscar}%")
                        ->orWhere('email', 'like', "%{$buscar}%");
                });
            }

            $tecnicos = $query->get();
            $resultados = array_merge($resultados, $agregarCategoria($tecnicos, 'Técnico')->toArray());
        }

        // DIPLOMADOS
        if ($categoria === 'todos' || $categoria === 'diplomados') {
            $query = \App\Models\InscripcionDiplomado::where('estado', 'matriculado');

            if ($programa) {
                $query->where('curso', 'like', "%{$programa}%");
            }
            if ($buscar) {
                $query->where(function ($q) use ($buscar) {
                    $q->where('nombre', 'like', "%{$buscar}%")
                        ->orWhere('email', 'like', "%{$buscar}%");
                });
            }

            $diplomados = $query->get();
            $resultados = array_merge($resultados, $agregarCategoria($diplomados, 'Diplomado')->toArray());
        }

        // EMPRESARIALES
        if ($categoria === 'todos' || $categoria === 'empresariales') {
            $query = \App\Models\InscripcionEmpresarial::where('estado', 'confirmado');

            if ($programa) {
                $query->where('curso', 'like', "%{$programa}%");
            }
            if ($buscar) {
                $query->where(function ($q) use ($buscar) {
                    $q->where('empresa', 'like', "%{$buscar}%")
                        ->orWhere('nombre_contacto', 'like', "%{$buscar}%")
                        ->orWhere('email', 'like', "%{$buscar}%");
                });
            }

            $empresariales = $query->get();
            $resultados = array_merge($resultados, $agregarCategoria($empresariales, 'Empresarial')->toArray());
        }

        // VIRTUALES
        if ($categoria === 'todos' || $categoria === 'virtuales') {
            $query = \App\Models\InscripcionVirtual::whereIn('estado', ['activo', 'completado']);

            if ($programa) {
                $query->where('curso', 'like', "%{$programa}%");
            }
            if ($buscar) {
                $query->where(function ($q) use ($buscar) {
                    $q->where('nombre', 'like', "%{$buscar}%")
                        ->orWhere('email', 'like', "%{$buscar}%");
                });
            }

            $virtuales = $query->get();
            $resultados = array_merge($resultados, $agregarCategoria($virtuales, 'Virtual')->toArray());
        }

        usort($resultados, function ($a, $b) {
            return strtotime($b['created_at']) - strtotime($a['created_at']);
        });

        return response()->json($resultados);
    }

    public function getProgramasPorCategoria(Request $request)
    {
        $categoria = $request->get('categoria');
        $programas = [];

        switch ($categoria) {
            case 'cursos':
                $programas = \App\Models\InscripcionCurso::where('estado', 'confirmado')
                    ->distinct()
                    ->pluck('curso')
                    ->toArray();
                break;
            case 'tecnicos':
                $programas = \App\Models\InscripcionTecnico::where('estado', 'matriculado')
                    ->distinct()
                    ->pluck('curso')
                    ->toArray();
                break;
            case 'diplomados':
                $programas = \App\Models\InscripcionDiplomado::where('estado', 'matriculado')
                    ->distinct()
                    ->pluck('curso')
                    ->toArray();
                break;
            case 'empresariales':
                $programas = \App\Models\InscripcionEmpresarial::where('estado', 'confirmado')
                    ->distinct()
                    ->pluck('curso')
                    ->toArray();
                break;
            case 'virtuales':
                $programas = \App\Models\InscripcionVirtual::whereIn('estado', ['activo', 'completado'])
                    ->distinct()
                    ->pluck('curso')
                    ->toArray();
                break;
        }

        return response()->json($programas);
    }

    public function exportarTodosInscritos(Request $request)
    {
        $categoria = $request->get('categoria', 'todos');
        $programa = $request->get('programa', '');

        $request->merge(['categoria' => $categoria, 'programa' => $programa]);
        $inscritosResponse = $this->getTodosInscritos($request);
        $inscritos = json_decode($inscritosResponse->getContent(), true);

        $filename = 'inscritos_' . $categoria . '_' . date('Y-m-d_His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv; charset=utf-8',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ];

        $callback = function () use ($inscritos) {
            $file = fopen('php://output', 'w');
            fprintf($file, chr(0xEF) . chr(0xBB) . chr(0xBF));

            fputcsv($file, [
                'Categoría',
                'Fecha Inscripción',
                'Nombre',
                'Email',
                'Teléfono',
                'Programa',
                'Estado',
                'Ciudad'
            ]);

            foreach ($inscritos as $inscrito) {
                fputcsv($file, [
                    $inscrito['categoria'],
                    date('d/m/Y H:i', strtotime($inscrito['created_at'])),
                    $inscrito['nombre'] ?? $inscrito['nombre_contacto'] ?? $inscrito['empresa'] ?? '',
                    $inscrito['email'],
                    $inscrito['telefono'],
                    $inscrito['curso'],
                    $inscrito['estado_texto'] ?? $inscrito['estado'],
                    $inscrito['ciudad'] ?? ''
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    // ==============================================
    // EXPORTAR GENÉRICO (LEGACY)
    // ==============================================

    public function exportar(Request $request)
    {
        $tipo = $request->input('tipo');
        $data = [];
        $filename = '';
        $headers = [];

        switch ($tipo) {
            case 'inscripciones':
                $data = InscripcionCurso::all();
                $filename = 'inscripciones_' . date('Y-m-d') . '.csv';
                $headers = ['ID', 'Fecha', 'Nombre', 'Documento', 'Email', 'Teléfono', 'Curso', 'Duración', 'Inversión', 'Modalidad', 'Ciudad', 'Horario', 'Estado'];
                break;

            case 'voluntarios':
                $data = Voluntario::all();
                $filename = 'voluntarios_' . date('Y-m-d') . '.csv';
                $headers = ['ID', 'Fecha', 'Modalidad', 'Nombre', 'Apellido', 'Email', 'Teléfono', 'Documento', 'Fecha Nacimiento', 'Ciudad', 'Dirección', 'Estado'];
                break;

            case 'mensajes':
                $data = MensajeContacto::all();
                $filename = 'mensajes_' . date('Y-m-d') . '.csv';
                $headers = ['ID', 'Fecha', 'Nombre', 'Email', 'Teléfono', 'Asunto', 'Mensaje', 'Leído'];
                break;

            case 'donaciones':
                $data = Donacion::all();
                $filename = 'donaciones_' . date('Y-m-d') . '.csv';
                $headers = ['ID', 'Fecha', 'Nombre Donante', 'Email', 'Teléfono', 'Tipo', 'Monto', 'Método Pago', 'Descripción'];
                break;
        }

        $callback = function () use ($data, $headers) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $headers);

            foreach ($data as $row) {
                fputcsv($file, $row->toArray());
            }

            fclose($file);
        };

        return response()->stream($callback, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }
}
