<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Servicio;
use Illuminate\Support\Facades\Http;

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
            
        // Obtener Noticias desde Google News API/RSS
        $rssNoticias = $this->getRssNoticias(6);
        
        return view('home', compact('noticias', 'servicios', 'rssNoticias'));
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
            
        // Noticias externas (RSS)
        $rssNoticias = $this->getRssNoticias(12);
        
        return view('prensa.index', compact('noticiasSemanales', 'noticiasMensuales', 'rssNoticias'));
    }

    /**
     * Obtener noticias desde Google News RSS
     */
    private function getRssNoticias($limit = 6)
    {
        $rssNoticias = [];
        try {
            $rssUrl = 'https://news.google.com/rss/search?q=Cruz+Roja+Huila&hl=es-419&gl=CO&ceid=CO:es-419';
            $response = Http::timeout(5)->get($rssUrl);
            
            if ($response->successful()) {
                $rssData = simplexml_load_string($response->body());
                if ($rssData && isset($rssData->channel->item)) {
                    $count = 0;
                    foreach ($rssData->channel->item as $item) {
                        if ($count >= $limit) break;
                        
                        $title = (string) $item->title;
                        $source = (string) $item->source;
                        
                        // Limpiar el '- Fuente' del título si existe
                        if (str_ends_with($title, ' - ' . $source)) {
                            $title = substr($title, 0, -strlen(' - ' . $source));
                        }
                        
                        $rssNoticias[] = [
                            'titulo' => $title,
                            'enlace' => (string) $item->link,
                            'fecha'  => date('d M Y', strtotime((string) $item->pubDate)),
                            'fuente' => $source
                        ];
                        $count++;
                    }
                }
            }
        } catch (\Exception $e) {
            // Falla silenciosa
        }
        
        return $rssNoticias;
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