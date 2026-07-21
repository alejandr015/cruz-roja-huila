@extends('layouts.app')

@section('title', 'Misión y Visión - Cruz Roja Huila')
@section('meta_description', 'Conoce la Misión y Visión de la Cruz Roja Colombiana Seccional Huila: nuestra razón de ser y el camino que recorremos para consolidarnos como referente humanitario en el departamento.')

@section('content')

{{-- ============================================================ --}}
{{-- HERO SECTION --}}
{{-- ============================================================ --}}
<section class="hero-mv text-white position-relative overflow-hidden">
    <div class="hero-pattern" aria-hidden="true"></div>
    <div class="hero-blob hero-blob--1" aria-hidden="true"></div>
    <div class="hero-blob hero-blob--2" aria-hidden="true"></div>

    <div class="container position-relative z-2 py-5">
        <div class="row align-items-center min-vh-hero">
            <div class="col-lg-7 anime-fade-up">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb breadcrumb-hero mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Inicio</a></li>
                        <li class="breadcrumb-item text-white-50">Conózcanos</li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Misión y Visión</li>
                    </ol>
                </nav>

                <span class="badge-hero mb-3 d-inline-block">
                    <i class="fas fa-compass me-2"></i>RAZÓN DE SER Y RUMBO INSTITUCIONAL
                </span>

                <h1 class="display-3 fw-black lh-1 mb-4">
                    Misión y<br>
                    <span class="text-hero-accent">Visión</span>
                </h1>
                <p class="lead opacity-85 fs-5 mb-5 max-w-600">
                    El propósito que nos mueve cada día y el horizonte que perseguimos para consolidarnos como la institución humanitaria referente del departamento del Huila.
                </p>

                <div class="d-flex gap-4 flex-wrap">
                    <div class="hero-stat">
                        <span class="hero-stat__number">37</span>
                        <span class="hero-stat__label">Municipios atendidos</span>
                    </div>
                    <div class="hero-stat-divider" aria-hidden="true"></div>
                    <div class="hero-stat">
                        <span class="hero-stat__number">2025</span>
                        <span class="hero-stat__label">Horizonte de nuestra Visión</span>
                    </div>
                    <div class="hero-stat-divider" aria-hidden="true"></div>
                    <div class="hero-stat">
                        <span class="hero-stat__number">7</span>
                        <span class="hero-stat__label">Ejes estratégicos de acción</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 d-none d-lg-flex justify-content-center align-items-center">
                <div class="hero-image-card anime-fade-up" style="animation-delay:0.3s">
                    <img src="{{ asset('reales/real-15.jpeg') }}" alt="Voluntarios de la Cruz Roja Seccional Huila en acción humanitaria" class="img-fluid rounded-4 shadow-lg" style="object-fit:cover; height:420px; width:100%;">
                    <div class="hero-image-badge">
                        <i class="fas fa-heart text-danger me-2"></i>
                        <span>Humanidad en acción en todo el Huila</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-wave" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#f8f9fa"/>
        </svg>
    </div>
</section>


{{-- ============================================================ --}}
{{-- MISIÓN — split section --}}
{{-- ============================================================ --}}
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-1">
                <div class="position-relative">
                    <img src="{{ asset('reales/real-20.jpeg') }}" alt="Cruz Roja Huila salvando vidas" class="img-fluid rounded-5 shadow-lg">
                    <div class="floating-icon-badge bg-danger">
                        <i class="fas fa-bullseye"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2">
                <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                    <i class="fas fa-bullseye me-2"></i>Nuestra Razón de Ser
                </span>
                <h2 class="display-5 fw-black mb-4" style="color: var(--azul-institucional);">Misión</h2>
                <p class="fs-5 text-muted lh-lg mb-4">
                    Salvar vidas y aliviar el sufrimiento humano en todas las circunstancias, fortaleciendo las capacidades de las comunidades del Huila. Trabajamos por promover una cultura de paz, la inclusión social, la salud, la gestión del riesgo de desastres y la adaptación al cambio climático, junto con la educación, la promoción de los derechos humanos y el derecho internacional humanitario.
                </p>
                <p class="text-muted mb-4">
                    Todo esto es posible gracias al compromiso, la vocación de servicio y el espíritu humanitario de nuestros voluntarios, quienes actúan siempre de manera neutral, independiente e imparcial en cada rincón del departamento.
                </p>
                <div class="mv-highlight-tag">
                    <i class="fas fa-hand-holding-heart me-2"></i>
                    Guiados por el espíritu humanitario del voluntariado huilense
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- VISIÓN — split section (inverted) --}}
{{-- ============================================================ --}}
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2">
                <div class="position-relative">
                    <img src="{{ asset('reales/real-22.jpeg') }}" alt="Visión institucional Cruz Roja Huila" class="img-fluid rounded-5 shadow-lg">
                    <div class="floating-icon-badge bg-primary-mv">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                    <i class="fas fa-eye me-2"></i>Nuestro Horizonte
                </span>
                <h2 class="display-5 fw-black mb-4" style="color: var(--azul-institucional);">Visión</h2>
                <p class="fs-5 text-muted lh-lg mb-4">
                    Ser una institución humanitaria que trabaja en red con excelencia y calidad, sostenible y ampliamente reconocida dentro de la Sociedad Nacional de la Cruz Roja y en el departamento del Huila.
                </p>
                <p class="text-muted mb-4">
                    Aspiramos a consolidar nuestra contribución a la cultura de paz, la reconciliación y la inclusión social, fomentando la resiliencia en las poblaciones más vulnerables y promoviendo el respeto de los derechos humanos y del derecho internacional humanitario, a través de servicios de salud y educación de alta calidad y una capacidad de respuesta inmediata ante emergencias.
                </p>
                <div class="mv-highlight-tag mv-highlight-tag--blue">
                    <i class="fas fa-calendar-check me-2"></i>
                    Meta institucional proyectada al año 2025
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- EJES ESTRATÉGICOS --}}
{{-- ============================================================ --}}
<section class="py-5 bg-light position-relative">
    <div class="container py-4">
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-diagram-project me-2"></i>Cómo lo Llevamos a la Práctica
            </span>
            <h2 class="display-5 fw-black mb-3" style="color: var(--azul-institucional);">Nuestros Ejes Estratégicos</h2>
            <p class="lead text-muted max-w-700 mx-auto">Los frentes de trabajo a través de los cuales convertimos nuestra Misión y Visión en acciones concretas para el Huila.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @php
                $ejes = [
                    ['icon' => 'fa-dove', 'title' => 'Cultura de Paz', 'desc' => 'Promovemos la reconciliación y la convivencia pacífica en las comunidades del departamento.'],
                    ['icon' => 'fa-people-arrows', 'title' => 'Inclusión Social', 'desc' => 'Trabajamos para que ninguna población del Huila quede fuera del acceso a la ayuda humanitaria.'],
                    ['icon' => 'fa-notes-medical', 'title' => 'Salud', 'desc' => 'Servicios médicos, de vacunación y atención primaria con cobertura en todo el territorio.'],
                    ['icon' => 'fa-house-flood-water', 'title' => 'Gestión del Riesgo', 'desc' => 'Preparación, respuesta y adaptación al cambio climático ante desastres y emergencias.'],
                    ['icon' => 'fa-graduation-cap', 'title' => 'Educación', 'desc' => 'Formación técnica y comunitaria a través de nuestro Instituto de Educación.'],
                    ['icon' => 'fa-scale-balanced', 'title' => 'Derechos Humanos', 'desc' => 'Respeto y promoción de los derechos humanos y el derecho internacional humanitario.'],
                ];
            @endphp

            @foreach($ejes as $index => $e)
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="principle-enhanced-card hover-up w-100 p-4 bg-white rounded-5 shadow-sm border-0 position-relative overflow-hidden mb-4 d-flex flex-column justify-content-between" style="min-height: 230px;">
                    <div>
                        <div class="card-number-bg">{{ sprintf('%02d', $index + 1) }}</div>
                        <div class="principle-icon-circle bg-danger text-white rounded-circle mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 65px; height: 65px;">
                            <i class="fas {{ $e['icon'] }} fa-xl"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark">{{ $e['title'] }}</h4>
                        <p class="text-muted mb-0 small lh-relaxed">{{ $e['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- VALORES INSTITUCIONALES --}}
{{-- ============================================================ --}}
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-star me-2"></i>Nuestra Cultura
            </span>
            <h2 class="display-5 fw-black mb-3" style="color: var(--azul-institucional);">Valores Institucionales</h2>
            <p class="lead text-muted max-w-700 mx-auto">Los pilares de conducta que definen nuestro comportamiento profesional e institucional en cada actividad humanitaria.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @php
                $valores = [
                    ['icon' => 'fa-handshake', 'title' => 'Compromiso', 'desc' => 'Dedicación total para aliviar el sufrimiento humano y servir a la comunidad.'],
                    ['icon' => 'fa-shield-halved', 'title' => 'Integridad', 'desc' => 'Actuamos con honestidad, ética, rectitud y máxima transparencia en todo momento.'],
                    ['icon' => 'fa-heart', 'title' => 'Solidaridad', 'desc' => 'Empatía y apoyo incondicional ante las situaciones de dolor de los demás.'],
                    ['icon' => 'fa-award', 'title' => 'Excelencia', 'desc' => 'Búsqueda constante de calidad en todos los servicios médicos, educativos y humanitarios.']
                ];
            @endphp

            @foreach($valores as $index => $v)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                <div class="principle-enhanced-card principle-enhanced-card--blue hover-up w-100 text-center p-4 rounded-5 bg-white shadow-sm border-0 position-relative overflow-hidden mb-4">
                    <div class="card-number-bg">{{ sprintf('%02d', $index + 1) }}</div>
                    <div class="principle-icon-circle bg-danger text-white rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center shadow-sm" style="width: 60px; height: 60px;">
                        <i class="fas {{ $v['icon'] }} fa-lg"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">{{ $v['title'] }}</h5>
                    <p class="text-muted small mb-0">{{ $v['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



@endsection

@section('styles')
<style>
    /* ─── HERO ─── */
    .hero-mv {
        background-image: linear-gradient(135deg, rgba(0, 45, 114, 0.92) 0%, rgba(17, 26, 36, 0.94) 100%), url('{{ asset("reales/real-15.jpeg") }}');
        background-size: cover;
        background-position: center;
        padding: 60px 0 0 !important;
    }

    .min-vh-hero { min-height: 380px; }

    .hero-pattern {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        opacity: 0.05;
        background-image: radial-gradient(white 1px, transparent 0);
        background-size: 24px 24px;
        z-index: 1;
    }

    .hero-blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: .25;
        pointer-events: none;
        z-index: 0;
    }
    .hero-blob--1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, #e8002d 0%, transparent 70%);
        top: -150px; right: -100px;
    }
    .hero-blob--2 {
        width: 350px; height: 350px;
        background: radial-gradient(circle, #002d72 0%, transparent 70%);
        bottom: -80px; left: -60px;
    }

    .breadcrumb-hero { background: transparent; padding: 0; }
    .breadcrumb-hero .breadcrumb-item + .breadcrumb-item::before { color: rgba(255,255,255,.4); }

    .badge-hero {
        background: rgba(232, 0, 45, 0.9);
        color: #fff;
        font-size: .75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        padding: .45rem 1rem;
        border-radius: 50px;
        text-transform: uppercase;
        backdrop-filter: blur(4px);
    }

    .text-hero-accent { color: #ff5a6e; }

    .hero-stat { text-align: left; }
    .hero-stat__number {
        display: block;
        font-size: 2rem;
        font-weight: 900;
        color: #fff;
        line-height: 1;
    }
    .hero-stat__label {
        display: block;
        font-size: .8rem;
        color: rgba(255,255,255,.65);
        margin-top: .2rem;
        font-weight: 500;
    }
    .hero-stat-divider {
        width: 1px;
        background: rgba(255,255,255,.2);
        align-self: stretch;
    }

    .hero-image-card { position: relative; }
    .hero-image-badge {
        position: absolute;
        bottom: -18px;
        left: 20px;
        right: 20px;
        background: #fff;
        border-radius: 12px;
        padding: .75rem 1rem;
        font-size: .82rem;
        font-weight: 600;
        color: #333;
        box-shadow: 0 8px 30px rgba(0,0,0,.15);
        display: flex;
        align-items: center;
    }

    .hero-wave {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        line-height: 0;
    }
    .hero-wave svg { display: block; width: 100%; height: 60px; }

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

    /* ─── FLOATING ICON BADGE (Misión / Visión images) ─── */
    .floating-icon-badge {
        position: absolute;
        bottom: -22px;
        right: 30px;
        width: 64px; height: 64px;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.5rem;
        box-shadow: 0 10px 30px rgba(0,0,0,.25);
    }
    .bg-primary-mv { background: var(--azul-institucional); }

    .section-eyebrow { display: block; }

    /* ─── HIGHLIGHT TAG ─── */
    .mv-highlight-tag {
        display: inline-flex;
        align-items: center;
        background: rgba(220, 53, 69, .08);
        color: #b0212f;
        border-left: 4px solid #dc3545;
        padding: .8rem 1.2rem;
        border-radius: 12px;
        font-weight: 600;
        font-size: .92rem;
    }
    .mv-highlight-tag--blue {
        background: rgba(0, 45, 114, .07);
        color: var(--azul-institucional);
        border-left-color: var(--azul-institucional);
    }

    /* ─── ENHANCED CARDS (Ejes + Valores) ─── */
    .principle-enhanced-card {
        border-top: 5px solid var(--cruz-roja) !important;
        transition: all 0.3s ease;
    }
    .principle-enhanced-card:hover { border-top-color: var(--azul-institucional) !important; }
    .principle-enhanced-card--blue { border-top-color: var(--azul-institucional) !important; }
    .principle-enhanced-card--blue:hover { border-top-color: #dc3545 !important; }

    .card-number-bg {
        position: absolute;
        top: 15px;
        right: 25px;
        font-size: 5.5rem;
        font-weight: 800;
        color: rgba(0, 45, 114, 0.04);
        line-height: 1;
        user-select: none;
        transition: color 0.3s;
    }
    .principle-enhanced-card:hover .card-number-bg { color: rgba(237, 28, 36, 0.06); }

    .max-w-600 { max-width: 600px; }
    .max-w-700 { max-width: 700px; }

    /* ─── CTA CLOSING ─── */
    .cta-mv {
        background-image: linear-gradient(135deg, var(--azul-institucional) 0%, #1a2332 100%);
    }
    .cta-btn-primary {
        display: inline-block;
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
</style>
@endsection