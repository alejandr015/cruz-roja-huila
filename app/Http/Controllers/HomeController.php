<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Servicio;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
        return redirect()->route('conocenos.principios');
    }

    /**
     * Principios
     */
    public function principios()
    {
        return view('conocenos.principios');
    }

    /**
     * Historia
     */
    public function historia()
    {
        return view('conocenos.historia');
    }

    /**
     * Misión y Visión
     */
    public function misionVision()
    {
        return view('conocenos.mision-vision');
    }

    /**
     * Dónde estamos
     */
    public function dondeEstamos()
    {
        return view('conocenos.donde-estamos');
    }

    /**
     * Atención al usuario
     */
    public function atencionUsuario()
    {
        return view('conocenos.atencion-usuario');
    }

    /**
     * Acción Humanitaria
     */
    public function accionHumanitaria()
    {
        return view('accion-humanitaria');
    }

    /**
     * Informes de Gestión
     */
    public function informesGestion()
    {
        return view('informes-gestion');
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
     * Obtener noticias desde Google News RSS con mayor precisión
     */
    private function getRssNoticias($limit = 6)
    {
        $noticias = [];
        $uniqueLinks = [];
        
        // Palabras clave específicas para Huila y Cruz Roja
        $queries = [
            'Cruz Roja Huila',
            'Cruz Roja Neiva',
            'Cruz Roja Colombiana',
            'Salud Huila',
            'Acción Humanitaria Colombia'
        ];
        
        try {
            foreach ($queries as $q) {
                $query = urlencode($q);
                $rssUrl = "https://news.google.com/rss/search?q={$query}&hl=es-419&gl=CO&ceid=CO:es-419";
                
                $response = Http::timeout(4)->get($rssUrl);
                
                if ($response->successful()) {
                    $rssData = simplexml_load_string($response->body());
                    if ($rssData && isset($rssData->channel->item)) {
                        foreach ($rssData->channel->item as $item) {
                            $link = (string) $item->link;
                            if (in_array($link, $uniqueLinks)) continue;
                            
                            $title = (string) $item->title;
                            $source = (string) $item->source;
                            
                            // Limpiar fuente del título
                            if (str_ends_with($title, ' - ' . $source)) {
                                $title = substr($title, 0, -strlen(' - ' . $source));
                            }
                            
                            $noticias[] = [
                                'titulo' => $title,
                                'enlace' => $link,
                                'fecha'  => date('d M Y', strtotime((string) $item->pubDate)),
                                'fuente' => $source,
                                'descripcion' => (string) $item->description
                            ];
                            $uniqueLinks[] = $link;
                            
                            if (count($noticias) >= ($limit * 2)) break;
                        }
                    }
                }
                
                if (count($noticias) >= ($limit * 2)) break;
            }
            
            // Mezclar para dinamismo
            shuffle($noticias);
            
            return array_slice($noticias, 0, $limit);

        } catch (\Exception $e) {
            \Log::error('Error fetching RSS news: ' . $e->getMessage());
        }
        
        return array_slice($noticias, 0, $limit);
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
        $queryLower = strtolower($query);
        
        if (!$query) {
            return redirect()->route('home');
        }

        // 1. Busqueda en Base de Datos (Noticias)
        $noticias = Noticia::activas()
            ->where(function($q) use ($query) {
                $q->where('titulo', 'LIKE', "%{$query}%")
                  ->orWhere('contenido', 'LIKE', "%{$query}%");
            })
            ->paginate(10, ['*'], 'noticias_page');

        // 2. Busqueda en Base de Datos (Servicios Manuales)
        $serviciosBase = Servicio::where('activo', true)
            ->where(function($q) use ($query) {
                $q->where('nombre', 'LIKE', "%{$query}%")
                  ->orWhere('descripcion', 'LIKE', "%{$query}%");
            })
            ->get()->toArray();

        // 3. Resultados de Secciones Estáticas (Smarter Search)
        $seccionesEstaticas = [
            [
                'nombre' => 'Oferta Educativa (Cursos, Técnicos y Diplomados)',
                'descripcion' => 'Conoce nuestra variedad de cursos, técnicos laborales y formación virtual.',
                'ruta' => 'educacion',
                'keywords' => ['cursos', 'educacion', 'tecnicos', 'diplomados', 'estudiar', 'clases', 'capacitacion', 'sse', 'servicio social'],
                'icono' => 'fas fa-graduation-cap'
            ],
            [
                'nombre' => 'Servicios de Salud (Citas y Vacunación)',
                'descripcion' => 'Agendamiento de citas médicas, vacunación y laboratorio clínico.',
                'ruta' => 'salud',
                'keywords' => ['salud', 'citas', 'medica', 'vacuna', 'laboratorio', 'medico', 'enfermeria'],
                'icono' => 'fas fa-heartbeat'
            ],
            [
                'nombre' => 'Voluntariado',
                'descripcion' => 'Únete a nuestra misión humanitaria y haz parte del equipo de voluntarios.',
                'ruta' => 'voluntariado',
                'keywords' => ['voluntario', 'unirse', 'ayudar', 'mision', 'humanitaria', 'ser voluntario'],
                'icono' => 'fas fa-hands-helping'
            ],
            [
                'nombre' => 'Sala de Prensa y Noticias',
                'descripcion' => 'Últimas noticias y comunicados oficiales de la Cruz Roja Huila.',
                'ruta' => 'prensa',
                'keywords' => ['noticias', 'prensa', 'comunicados', 'actualidad', 'blog'],
                'icono' => 'fas fa-newspaper'
            ],
            [
                'nombre' => 'Contacto y Ubicación',
                'descripcion' => 'Nuestra sede en Neiva, teléfonos y canales de atención.',
                'ruta' => 'contacto',
                'keywords' => ['contacto', 'ubicacion', 'telefono', 'donde estan', 'oficina', 'mapa', 'neiva'],
                'icono' => 'fas fa-map-marker-alt'
            ]
        ];

        $serviciosEstaticos = [];
        foreach ($seccionesEstaticas as $seccion) {
            foreach ($seccion['keywords'] as $keyword) {
                if (str_contains($queryLower, $keyword)) {
                    $serviciosEstaticos[] = (object)[
                        'nombre' => $seccion['nombre'],
                        'descripcion' => $seccion['descripcion'],
                        'ruta_nombre' => $seccion['ruta'],
                        'icono' => $seccion['icono']
                    ];
                    break; // Evitar duplicados para la misma sección
                }
            }
        }

        // Combinar resultados (Servicios DB + Secciones Estáticas)
        $servicios = collect($serviciosBase)->map(function($s) {
            return (object)[
                'nombre' => $s['nombre'],
                'descripcion' => $s['descripcion'],
                'ruta_nombre' => 'salud', // Por defecto a salud si es un servicio
                'icono' => $s['icono'] ?? 'fas fa-concierge-bell'
            ];
        })->merge($serviciosEstaticos);

        return view('buscar', compact('noticias', 'servicios', 'query'));
    }
}