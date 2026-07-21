@extends('layouts.app')

@section('title', 'Sala de Prensa - Cruz Roja Huila')

@section('content')

<!-- Hero Section Prensa Premium -->
<section class="py-5 text-white position-relative overflow-hidden" style="min-height: 500px; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7)), url('{{ asset('reales/real-20.jpeg') }}'); background-size: cover; background-position: center; border-radius: 0 0 50px 50px;">
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-8 animate-fade-up">
                <span class="badge bg-danger mb-4 px-4 py-2 rounded-pill shadow-lg" style="letter-spacing: 2px; font-weight: 700; text-transform: uppercase;">
                    <i class="fas fa-bullhorn me-2"></i> Sala de Prensa Digital
                </span>
                <h1 class="display-3 fw-bold mb-4">Comunicación <span class="text-danger">Humanitaria</span></h1>
                <p class="lead mb-5 fs-4 opacity-100" style="max-width: 750px; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                    Informando sobre nuestras acciones, campañas y el impacto positivo en el Huila y toda Colombia.
                </p>
                <div class="d-flex gap-3">
                    <a href="#noticias-externas" class="btn btn-danger btn-lg rounded-pill px-5 shadow-lg fw-bold">Ver Novedades</a>
                    <a href="{{ route('contacto') }}" class="btn btn-outline-light btn-lg rounded-pill px-5 fw-bold glass-button">Contacto Prensa</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Decoración -->
    <div class="position-absolute bottom-0 start-0 w-100 h-25" style="background: linear-gradient(to top, rgba(0,0,0,0.5), transparent);"></div>
</section>

<div class="container py-5">
    
    <!-- Noticias Destacadas e Internas -->
    <section class="mb-5 pb-5">
        <div class="text-center mb-5 mt-4">
            <h2 class="display-5 fw-bold mb-3" style="color: var(--azul-institucional);">Lo Último en <span class="text-danger">Huila</span></h2>
            <div class="divider-center border-danger"></div>
            <p class="text-muted lead mt-3">Crónicas y reportajes de nuestra acción en el territorio.</p>
        </div>
        
        <div class="row g-4">
            @php
            $todasSemanales = config('noticias.semanales');
            $semanaAño = now()->weekOfYear;
            $inicio = ($semanaAño * 2) % count($todasSemanales);
            $noticiasSemanales = array_slice($todasSemanales, $inicio, 3);
            if (count($noticiasSemanales) < 3) {
                $noticiasSemanales = array_merge($noticiasSemanales, array_slice($todasSemanales, 0, 3 - count($noticiasSemanales)));
            }
            @endphp

            @foreach($noticiasSemanales as $index => $noticia)
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden news-card-premium">
                    <div class="news-img-wrap">
                        <img src="{{ asset($noticia['imagen']) }}" alt="{{ $noticia['titulo'] }}" class="img-fluid" onerror="this.src='{{ asset('img/CruzRoja.jpg') }}'">
                        <div class="news-overlay">
                            <span class="badge bg-danger rounded-pill px-3">Institucional</span>
                        </div>
                    </div>
                    <div class="card-body p-4 bg-white">
                        <div class="d-flex align-items-center mb-3">
                            <i class="far fa-calendar-alt text-danger me-2"></i>
                            <small class="text-muted fw-bold">{{ now()->subDays(($index + 1) * 3)->format('d M, Y') }}</small>
                        </div>
                        <h4 class="card-title fw-bold h5 mb-3">{{ $noticia['titulo'] }}</h4>
                        <p class="card-text text-muted small">{{ Str::limit($noticia['descripcion'], 130) }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <a href="#" class="btn btn-link text-danger p-0 fw-bold text-decoration-none">
                            LEER MÁS <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Menciones en Medios RSS (API Noticias de Google) -->
    <section id="noticias-externas" class="py-5 bg-light rounded-5 px-4 px-md-5 my-5 shadow-sm border border-white">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-end mb-5">
            <div class="mb-3 mb-md-0">
                <h2 class="display-6 fw-bold mb-2" style="color: var(--azul-institucional);">Presencia en <span class="text-danger">Medios</span></h2>
                <p class="text-muted mb-0">Lo que otros dicen de nosotros en la actualidad nacional y regional.</p>
            </div>
            <a href="https://news.google.com/search?q=Cruz+Roja+Colombiana" target="_blank" class="btn btn-outline-dark rounded-pill px-4 fw-bold mb-1">
                Ver todo en Google News <i class="fas fa-external-link-alt ms-2"></i>
            </a>
        </div>
        
        <div class="row g-4">
            @if(isset($rssNoticias) && count($rssNoticias) > 0)
                @foreach($rssNoticias as $news)
                <div class="col-md-6 col-lg-4">
                    <div class="news-api-card">
                        <div class="card-inner">
                            <div class="source-badge">
                                <i class="fas fa-rss-square me-2"></i>{{ $news['fuente'] }}
                            </div>
                            <h5 class="fw-bold mb-3 title-link">{{ $news['titulo'] }}</h5>
                            <div class="desc-box mb-4">
                                <p class="text-muted small mb-0">{{ Str::limit(strip_tags($news['descripcion']), 140) }}</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <span class="text-muted xsmall"><i class="far fa-calendar-alt me-2"></i>{{ $news['fecha'] }}</span>
                                <a href="{{ $news['enlace'] }}" target="_blank" class="btn btn-sm btn-link text-danger fw-bold p-0 text-decoration-none border-bottom border-danger border-2 mb-1">
                                    IR A LA NOTICIA
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-12">
                    <div class="text-center py-5">
                        <div class="spinner-border text-danger mb-3" role="status">
                            <span class="visually-hidden">Cargando...</span>
                        </div>
                        <p class="text-muted">No se pudieron cargar las noticias externas en este momento.</p>
                    </div>
                </div>
            @endif
        </div>
    </section>

</div>

@endsection

@section('styles')
<style>
    :root {
        --cruz-roja: #ED1C24;
        --azul-institucional: #1a2332;
    }

    .animate-fade-up { animation: fadeUp 1s ease-out forwards; }
    @keyframes fadeUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }

    .divider-center {
        width: 80px;
        height: 4px;
        background: var(--cruz-roja);
        margin: 0 auto;
        border-radius: 2px;
    }

    .glass-button {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .news-card-premium {
        border-radius: 20px;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: 1px solid #eee !important;
    }

    .news-card-premium:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.1) !important;
    }

    .news-img-wrap {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .news-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 1.5s ease;
    }

    .news-card-premium:hover .news-img-wrap img {
        transform: scale(1.15);
    }

    .news-overlay {
        position: absolute;
        top: 15px;
        left: 15px;
    }

    .news-api-card {
        background: white;
        border-radius: 24px;
        padding: 30px;
        height: 100%;
        box-shadow: 0 10px 25px rgba(0,0,0,0.03);
        border: 1px solid rgba(0,0,0,0.05);
        transition: border-color 0.3s;
        display: flex;
        flex-direction: column;
    }

    .news-api-card:hover {
        border-color: var(--cruz-roja);
    }

    .source-badge {
        font-size: 0.7rem;
        font-weight: 800;
        color: var(--cruz-roja);
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }

    .title-link {
        color: var(--azul-institucional);
        line-height: 1.4;
        transition: color 0.2s;
    }

    .news-api-card:hover .title-link {
        color: var(--cruz-roja);
    }

    .xsmall { font-size: 0.75rem; }
    
    #noticias-externas {
        border-radius: 40px !important;
    }
</style>
@endsection
