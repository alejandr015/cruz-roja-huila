<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Servicio;

class HomeController extends Controller
{
    /**
     * Página principal
     */
    public function index()
    {
        $noticias = Noticia::activas()
            ->recientes()
            ->take(3)
            ->get();
        
        $servicios = Servicio::where('activo', true)
            ->orderBy('orden')
            ->get();
        
        return view('home', compact('noticias', 'servicios'));
    }

    /**
     * Página Conócenos
     */
    public function conocenos()
    {
        return view('conocenos');
    }

    /**
     * Sala de Prensa
     */
    public function prensa()
    {
        // Noticias de esta semana (últimos 7 días)
        $noticiasSemanales = Noticia::activas()
            ->where('fecha_publicacion', '>=', now()->subDays(7))
            ->recientes()
            ->get();
        
        // Noticias de este mes (últimos 30 días, excluyendo las de esta semana)
        $noticiasMensuales = Noticia::activas()
            ->whereBetween('fecha_publicacion', [now()->subDays(30), now()->subDays(7)])
            ->recientes()
            ->get();
        
        return view('prensa.index', compact('noticiasSemanales', 'noticiasMensuales'));
    }

    /**
     * Detalle de noticia
     */
    public function noticiaDetalle($id)
    {
        $noticia = Noticia::findOrFail($id);
        $relacionadas = Noticia::activas()
            ->where('id', '!=', $id)
            ->where('categoria', $noticia->categoria)
            ->take(3)
            ->get();
        
        return view('prensa.detalle', compact('noticia', 'relacionadas'));
    }

    /**
     * Búsqueda
     */
    public function buscar(Request $request)
    {
        $query = $request->input('q');
        
        $noticias = Noticia::activas()
            ->where(function($q) use ($query) {
                $q->where('titulo', 'LIKE', "%{$query}%")
                  ->orWhere('contenido', 'LIKE', "%{$query}%");
            })
            ->paginate(10);
        
        return view('buscar', compact('noticias', 'query'));
    }
}