@extends('layouts.app')

@section('title', 'Sala de Prensa - Cruz Roja Huila')

@section('content')

<!-- Banner Sala de Prensa (Animado CSS) -->
<section class="page-header position-relative overflow-hidden d-flex align-items-center justify-content-center" style="min-height: 45vh;">
    <!-- Fondo Animado -->
    <div class="animated-bg-gradient position-absolute w-100 h-100 top-0 start-0"></div>
    
    <!-- Patrón de Puntos Sutil -->
    <div class="bg-pattern-overlay position-absolute w-100 h-100 top-0 start-0"></div>

    <div class="container text-center text-white position-relative" style="z-index: 2;">
        <div class="badge bg-white text-danger mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-weight: 600; letter-spacing: 1px; font-size: 0.85rem;">
            <i class="fas fa-bullhorn me-1"></i> CENTRO DE COMUNICACIONES
        </div>
        <h1 class="display-3 fw-bolder mb-3" style="text-shadow: 0 4px 15px rgba(0,0,0,0.2);">Sala De Prensa</h1>
        <p class="lead fw-normal mx-auto" style="max-width: 650px; text-shadow: 0 2px 10px rgba(0,0,0,0.2); font-size: 1.25rem;">
            Manténgase informado sobre nuestras últimas noticias, campañas humanitarias y boletines oficiales.
        </p>
    </div>
</section>

<div class="container my-5">
    
    <!-- Esta Semana -->
    <section class="mb-5">
        <h2 class="section-heading mb-4">Esta Semana</h2>
        
        <div class="row g-4">
            @php
            // Obtiene noticias del config y rota según la semana del año
            $todasSemanales = config('noticias.semanales');
            $semanaAño = now()->weekOfYear;
            
            // Rota las noticias cada semana (muestra 2 diferentes cada semana)
            $inicio = ($semanaAño * 2) % count($todasSemanales);
            $noticiasSemanales = array_slice($todasSemanales, $inicio, 2);
            
            // Si no hay suficientes, agrega desde el inicio
            if (count($noticiasSemanales) < 2) {
                $noticiasSemanales = array_merge(
                    $noticiasSemanales, 
                    array_slice($todasSemanales, 0, 2 - count($noticiasSemanales))
                );
            }
            @endphp

            @foreach($noticiasSemanales as $index => $noticia)
            <div class="col-md-6">
                <div class="noticia-card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div class="noticia-imagen" style="background-image: url('{{ asset($noticia['imagen']) }}');"></div>
                        </div>
                        <div class="col-md-7">
                            <div class="noticia-contenido">
                                <h3 class="noticia-titulo">{{ $noticia['titulo'] }}</h3>
                                <p class="noticia-descripcion">{{ $noticia['descripcion'] }}</p>
                                <p class="noticia-fecha">
                                    <i class="far fa-calendar-alt me-2"></i>
                                    Fecha: {{ now()->subDays(($index + 1) * 2)->format('d/m/Y H:i') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Este Mes -->
    <section class="mb-5">
        <h2 class="section-heading mb-4">Este Mes</h2>
        
        <div class="row g-4">
            @php
            // Obtiene noticias del config y rota según el mes
            $todasMensuales = config('noticias.mensuales');
            $mes = now()->month;
            
            // Rota las noticias cada mes (muestra 2 diferentes cada mes)
            $inicio = ($mes * 2) % count($todasMensuales);
            $noticiasMensuales = array_slice($todasMensuales, $inicio, 2);
            
            // Si no hay suficientes, agrega desde el inicio
            if (count($noticiasMensuales) < 2) {
                $noticiasMensuales = array_merge(
                    $noticiasMensuales, 
                    array_slice($todasMensuales, 0, 2 - count($noticiasMensuales))
                );
            }
            @endphp

            @foreach($noticiasMensuales as $index => $noticia)
            <div class="col-md-6">
                <div class="noticia-card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div class="noticia-imagen" style="background-image: url('{{ asset($noticia['imagen']) }}');"></div>
                        </div>
                        <div class="col-md-7">
                            <div class="noticia-contenido">
                                <h3 class="noticia-titulo">{{ $noticia['titulo'] }}</h3>
                                <p class="noticia-descripcion">{{ $noticia['descripcion'] }}</p>
                                <p class="noticia-fecha">
                                    <i class="far fa-calendar-alt me-2"></i>
                                    Fecha: {{ now()->subDays(($index + 1) * 7)->format('d/m/Y H:i') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Menciones en Medios -->
    <section class="mb-5 mt-5">
        <h2 class="section-heading mb-4">Menciones en Medios</h2>
        
        <div class="row g-4">
            @if(isset($rssNoticias) && count($rssNoticias) > 0)
                @foreach($rssNoticias as $news)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 news-card shadow-sm border-0" style="transition: transform 0.3s; border-radius: 12px; overflow: hidden;">
                        <div class="card-body d-flex flex-column p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-danger" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                                    <i class="far fa-newspaper me-1"></i> {{ $news['fuente'] }}
                                </span>
                            </div>
                            <h5 class="card-title fw-bold mb-3" style="line-height: 1.4; color: #333;">{{ $news['titulo'] }}</h5>
                            
                            <p class="card-text text-muted mb-4 mt-auto" style="font-size: 0.9rem;">
                                <i class="far fa-calendar-alt me-2 text-danger"></i> Fecha: {{ $news['fecha'] }}
                            </p>
                            
                            <a href="{{ $news['enlace'] }}" target="_blank" class="btn btn-outline-danger w-100 mt-auto" style="border-radius: 8px;">
                                Leer artículo completo <i class="fas fa-external-link-alt ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-12 text-center text-muted my-4 py-5 bg-white rounded-3 shadow-sm border">
                    <i class="fas fa-rss fa-3x mb-3 text-secondary" style="opacity: 0.5;"></i>
                    <p class="fs-5">No hay noticias en medios disponibles en este momento.</p>
                </div>
            @endif
        </div>
    </section>

</div>

@endsection

@section('styles')
<style>
    .section-heading {
        font-size: 2rem;
        font-weight: 700;
        color: #1a2332;
        position: relative;
        padding-bottom: 10px;
    }

    .section-heading::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 80px;
        height: 4px;
        background: #ED1C24;
    }

    .noticia-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
        cursor: pointer;
    }

    .noticia-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(237, 28, 36, 0.15);
    }

    .noticia-imagen {
        height: 220px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .noticia-imagen-placeholder {
        background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);
    }

    .noticia-contenido {
        padding: 25px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .noticia-titulo {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1a2332;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .noticia-descripcion {
        color: #666;
        font-size: 0.95rem;
        margin-bottom: 15px;
        flex-grow: 1;
    }

    .noticia-fecha {
        color: #999;
        font-size: 0.85rem;
        margin-bottom: 0;
        display: flex;
        align-items: center;
    }

    .noticia-fecha i {
        color: #ED1C24;
    }

    @media (max-width: 768px) {
        .noticia-imagen {
            height: 180px;
        }

        .noticia-contenido {
            padding: 20px;
        }

        .section-heading {
            font-size: 1.5rem;
        }
        
        .page-header h1 {
            font-size: 2.5rem;
        }
    }

    /* Estilos Premium Background Animado */
    .animated-bg-gradient {
        /* Gradiente animado en tonos rojos institucionales */
        background: linear-gradient(-45deg, #8B0000, #ED1C24, #C41419, #660000);
        background-size: 400% 400%;
        animation: gradientBG 12s ease infinite;
    }

    @keyframes gradientBG {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .bg-pattern-overlay {
        background-image: radial-gradient(rgba(255, 255, 255, 0.15) 2px, transparent 2px);
        background-size: 30px 30px;
        opacity: 0.6;
    }

    .page-header {
        border-bottom: 5px solid #ED1C24;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
</style>
@endsection