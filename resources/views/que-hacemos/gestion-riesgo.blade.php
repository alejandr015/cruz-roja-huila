@extends('layouts.app')

@section('title', 'Gestión del Riesgo - Cruz Roja Huila')
@section('meta_description', 'Reducción, Respuesta, Recuperación y Desarrollo: conoce el programa de Gestión del Riesgo de la Cruz Roja Colombiana Seccional Huila y sus áreas de intervención.')

@section('content')

{{-- ============================================================ --}}
{{-- HERO SECTION --}}
{{-- ============================================================ --}}
<section class="gr-hero text-white position-relative overflow-hidden">
    <div class="container position-relative z-2 pt-5 pb-4">
        <nav aria-label="breadcrumb" class="mb-4 text-center">
            <ol class="breadcrumb justify-content-center breadcrumb-hero mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Inicio</a></li>
                <li class="breadcrumb-item text-white-50">Qué Hacemos</li>
                <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Gestión del Riesgo</li>
            </ol>
        </nav>

        <div class="text-center anime-fade-up">
            <span class="badge-outline-hero mb-3 d-inline-block">
                <i class="fas fa-house-flood-water me-2"></i>GESTIÓN DEL RIESGO DE DESASTRES
            </span>
            <h1 class="display-3 fw-black lh-1 mb-4 mx-auto max-w-800">
                Reducción, Respuesta<br><span class="text-hero-accent">y Recuperación</span>
            </h1>
            <p class="lead opacity-85 fs-5 mb-0 max-w-600 mx-auto">
                Trabajamos junto a las comunidades del Huila antes, durante y después de una emergencia, para que cada vez estén mejor preparadas.
            </p>
        </div>
    </div>

    <!-- Ribbon flotante: ciclo oficial del programa -->
    <div class="container gr-ribbon-wrap position-relative z-2">
        <div class="gr-ribbon shadow-lg anime-fade-up" style="animation-delay:.2s">
            <div class="gr-ribbon-item">
                <div class="gr-ribbon-icon"><i class="fas fa-magnifying-glass-chart"></i></div>
                <span>Reducción</span>
            </div>
            <div class="gr-ribbon-divider" aria-hidden="true"><i class="fas fa-chevron-right"></i></div>
            <div class="gr-ribbon-item">
                <div class="gr-ribbon-icon"><i class="fas fa-truck-medical"></i></div>
                <span>Respuesta</span>
            </div>
            <div class="gr-ribbon-divider" aria-hidden="true"><i class="fas fa-chevron-right"></i></div>
            <div class="gr-ribbon-item">
                <div class="gr-ribbon-icon"><i class="fas fa-seedling"></i></div>
                <span>Recuperación y Desarrollo</span>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- NUESTRO ENFOQUE --}}
{{-- ============================================================ --}}
<section class="gr-enfoque bg-white">
    <div class="container text-center">
        <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
            <i class="fas fa-compass me-2"></i>Nuestro Enfoque
        </span>
        <h2 class="display-6 fw-black mb-4" style="color: var(--azul-institucional);">Antes, durante y después de la emergencia</h2>
        <p class="fs-5 text-muted lh-lg max-w-700 mx-auto mb-0">
            La Gestión del Riesgo de Desastres fortalece las capacidades de las comunidades del Huila para reducir su vulnerabilidad, responder con rapidez ante una emergencia y recuperarse fortalecidas, en los 37 municipios del departamento.
        </p>
    </div>
</section>


{{-- ============================================================ --}}
{{-- CICLO DE INTERVENCIÓN --}}
{{-- ============================================================ --}}
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-route me-2"></i>Ciclo del Programa
            </span>
            <h2 class="display-6 fw-black mb-3" style="color: var(--azul-institucional);">Cómo Actuamos</h2>
        </div>

        @php
            $ciclo = [
                ['icon' => 'fa-magnifying-glass-chart', 'title' => 'Reducción', 'desc' => 'Identificamos riesgos y capacitamos comunidades para disminuir su impacto antes de que ocurran.'],
                ['icon' => 'fa-truck-medical', 'title' => 'Respuesta', 'desc' => 'Movilizamos equipos de socorro para actuar con rapidez en el momento de la emergencia.'],
                ['icon' => 'fa-seedling', 'title' => 'Recuperación y Desarrollo', 'desc' => 'Acompañamos a las comunidades afectadas en su reconstrucción y fortalecimiento a largo plazo.'],
            ];
        @endphp

        <div class="d-flex flex-column flex-md-row align-items-stretch justify-content-center gr-timeline">
            @foreach($ciclo as $index => $c)
                <div class="gr-timeline-step hover-up">
                    <div class="gr-timeline-circle">
                        <i class="fas {{ $c['icon'] }}"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">{{ $c['title'] }}</h5>
                    <p class="text-muted small mb-0">{{ $c['desc'] }}</p>
                </div>
                @if(!$loop->last)
                    <div class="gr-timeline-arrow d-none d-md-flex align-items-center justify-content-center" aria-hidden="true">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- ÁREAS DE INTERVENCIÓN --}}
{{-- ============================================================ --}}
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-layer-group me-2"></i>Componentes del Programa
            </span>
            <h2 class="display-6 fw-black mb-3" style="color: var(--azul-institucional);">Áreas de Intervención</h2>
            <p class="lead text-muted max-w-700 mx-auto">Cinco frentes de trabajo que se activan de manera articulada ante cada emergencia.</p>
        </div>

        <div class="d-flex flex-wrap justify-content-center gap-4">
            @php
                $areas = [
                    ['icon' => 'fa-droplet', 'title' => 'Agua y Saneamiento', 'desc' => 'Acceso a agua segura y saneamiento básico.'],
                    ['icon' => 'fa-notes-medical', 'title' => 'Salud', 'desc' => 'Atención médica oportuna a la población afectada.'],
                    ['icon' => 'fa-tower-broadcast', 'title' => 'Comunicaciones', 'desc' => 'Información clara para la toma de decisiones.'],
                    ['icon' => 'fa-truck-fast', 'title' => 'Logística', 'desc' => 'Movilización de personal y ayuda humanitaria.'],
                    ['icon' => 'fa-hand-holding-heart', 'title' => 'Apoyo Psicosocial', 'desc' => 'Acompañamiento emocional a las comunidades.'],
                ];
            @endphp

            @foreach($areas as $index => $a)
            <div class="gr-area-chip hover-up {{ $index % 2 == 0 ? 'gr-area-chip--red' : 'gr-area-chip--blue' }}">
                <div class="gr-area-icon">
                    <i class="fas {{ $a['icon'] }}"></i>
                </div>
                <h6 class="fw-bold text-dark mb-2">{{ $a['title'] }}</h6>
                <p class="text-muted small mb-0">{{ $a['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- LOGROS --}}
{{-- ============================================================ --}}
<section class="gr-logros text-white position-relative overflow-hidden">
    <div class="container position-relative z-1 py-5">
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-white fw-bold text-uppercase mb-2 d-block opacity-75" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-award me-2"></i>Resultados del Programa
            </span>
            <h2 class="display-6 fw-black mb-0">Nuestros Logros</h2>
        </div>

        <div class="row g-4 justify-content-center text-center">
            @php
                $logros = [
                    ['icon' => 'fa-people-roof', 'text' => 'Aceptación de las comunidades afectadas'],
                    ['icon' => 'fa-bolt', 'text' => 'Mayor respuesta ante las emergencias'],
                    ['icon' => 'fa-handshake', 'text' => 'Participación activa en los consejos municipales y departamentales'],
                ];
            @endphp
            @foreach($logros as $l)
            <div class="col-md-4">
                <div class="gr-logro-icon mx-auto mb-3">
                    <i class="fas {{ $l['icon'] }}"></i>
                </div>
                <p class="fw-semibold mb-0 opacity-90">{{ $l['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>



@endsection

@section('styles')
<style>
    /* ─── HERO ─── */
    .gr-hero {
        background-image: linear-gradient(135deg, rgba(0, 45, 114, 0.94) 0%, rgba(17, 26, 36, 0.96) 100%), url('{{ asset("reales/real-21.jpeg") }}');
        background-size: cover;
        background-position: center;
        padding: 60px 0 90px !important;
    }

    .breadcrumb-hero { background: transparent; padding: 0; }
    .breadcrumb-hero .breadcrumb-item + .breadcrumb-item::before { color: rgba(255,255,255,.4); }

    .badge-outline-hero {
        background: rgba(255,255,255,.08);
        color: #fff;
        font-size: .75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        padding: .5rem 1.2rem;
        border-radius: 50px;
        text-transform: uppercase;
        border: 1px solid rgba(255,255,255,.35);
        backdrop-filter: blur(4px);
    }

    .text-hero-accent { color: #ff5a6e; }
    .max-w-600 { max-width: 600px; }
    .max-w-700 { max-width: 700px; }
    .max-w-800 { max-width: 800px; }

    /* ─── RIBBON FLOTANTE ─── */
    .gr-ribbon-wrap { margin-bottom: -55px; }
    .gr-ribbon {
        background: #fff;
        border-radius: 24px;
        padding: 1.5rem 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: .75rem 1.5rem;
    }
    .gr-ribbon-item {
        display: flex;
        align-items: center;
        gap: .75rem;
        font-weight: 700;
        color: var(--azul-institucional);
        font-size: 1.05rem;
    }
    .gr-ribbon-icon {
        width: 44px; height: 44px;
        border-radius: 50%;
        background: rgba(237, 28, 36, 0.1);
        color: var(--cruz-roja);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .gr-ribbon-divider { color: #ccc; font-size: .85rem; }
    @media (max-width: 767px) {
        .gr-ribbon-divider { display: none; }
        .gr-ribbon { padding: 1.5rem; }
    }

    /* ─── ANIMATION ─── */
    .anime-fade-up { animation: fadeUp .9s ease-out forwards; }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(40px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .hover-up { transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
    .hover-up:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-premium, 0 20px 45px rgba(0,0,0,.12)) !important;
    }

    .section-eyebrow { display: block; }

    /* ─── ENFOQUE ─── */
    .gr-enfoque { padding: 110px 0 60px; }

    /* ─── TIMELINE ─── */
    .gr-timeline-step {
        background: #fff;
        border-radius: 24px;
        box-shadow: var(--shadow-premium, 0 10px 30px rgba(0,0,0,.08));
        padding: 2.5rem 2rem;
        text-align: center;
        flex: 1 1 0;
        max-width: 320px;
        margin: 0 auto;
    }
    .gr-timeline-circle {
        width: 78px; height: 78px;
        border-radius: 50%;
        background: #fff;
        border: 3px solid var(--cruz-roja);
        color: var(--cruz-roja);
        font-size: 1.6rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.3rem;
    }
    .gr-timeline-arrow {
        color: var(--cruz-roja);
        font-size: 1.3rem;
        opacity: .5;
        padding: 0 .5rem;
    }

    /* ─── ÁREAS CHIPS ─── */
    .gr-area-chip {
        background: var(--gris-fondo, #F4F7F9);
        border-radius: 20px;
        padding: 2rem 1.5rem;
        width: 210px;
        text-align: center;
        transition: all .3s ease;
        border-bottom: 4px solid transparent;
    }
    .gr-area-chip--red { border-bottom-color: var(--cruz-roja); }
    .gr-area-chip--blue { border-bottom-color: var(--azul-institucional); }
    .gr-area-icon {
        width: 56px; height: 56px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 1.3rem;
        color: #fff;
    }
    .gr-area-chip--red .gr-area-icon { background: var(--cruz-roja); }
    .gr-area-chip--blue .gr-area-icon { background: var(--azul-institucional); }

    /* ─── LOGROS ─── */
    .gr-logros {
        background-image: linear-gradient(135deg, var(--azul-institucional) 0%, #1a2332 100%);
    }
    .gr-logro-icon {
        width: 72px; height: 72px;
        border-radius: 50%;
        background: rgba(255,255,255,.1);
        border: 1px solid rgba(255,255,255,.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6rem;
        color: #ff5a6e;
    }

    /* ─── CTA CIERRE ─── */
    .gr-cta {
        background-image: linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.65)), url('{{ asset("reales/real-33.jpeg") }}');
        background-size: cover;
        background-position: center;
    }
    .cta-btn-primary {
        display: inline-flex;
        align-items: center;
        background: #dc3545;
        color: #fff;
        font-weight: 700;
        padding: .9rem 2.2rem;
        border-radius: 50px;
        text-decoration: none;
        box-shadow: 0 10px 30px rgba(220,53,69,.35);
        transition: transform .25s ease, box-shadow .25s ease;
    }
    .cta-btn-primary:hover {
        transform: scale(1.05);
        box-shadow: 0 14px 38px rgba(220,53,69,.45);
        color: #fff;
    }
    .cta-btn-outline {
        display: inline-flex;
        align-items: center;
        background: transparent;
        color: #fff;
        font-weight: 700;
        padding: .9rem 2.2rem;
        border-radius: 50px;
        border: 1px solid rgba(255,255,255,.5);
        text-decoration: none;
        transition: all .25s ease;
    }
    .cta-btn-outline:hover {
        background: rgba(255,255,255,.15);
        border-color: #fff;
        color: #fff;
    }
</style>
@endsection
