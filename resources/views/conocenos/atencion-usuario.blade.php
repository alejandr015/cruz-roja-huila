@extends('layouts.app')

@section('title', 'Atención al Usuario - Cruz Roja Huila')
@section('meta_description', 'Conoce los canales oficiales de la Cruz Roja Colombiana Seccional Huila para radicar Peticiones, Quejas, Reclamos, Sugerencias y Felicitaciones (PQRSF).')

@section('content')

{{-- ============================================================ --}}
{{-- HERO SECTION --}}
{{-- ============================================================ --}}
<section class="hero-au text-white position-relative overflow-hidden">
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
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Atención al Usuario</li>
                    </ol>
                </nav>

                <span class="badge-hero mb-3 d-inline-block">
                    <i class="fas fa-headset me-2"></i>PETICIONES, QUEJAS, RECLAMOS, SUGERENCIAS Y FELICITACIONES
                </span>

                <h1 class="display-3 fw-black lh-1 mb-4">Atención al<br><span class="text-hero-accent">Usuario</span></h1>
                <p class="lead opacity-85 fs-5 mb-5 max-w-600">
                    Tu opinión nos ayuda a mejorar. Estos son nuestros canales oficiales para radicar tu PQRSF.
                </p>

            </div>

            <div class="col-lg-5 d-none d-lg-flex justify-content-center align-items-center">
                <div class="hero-image-card anime-fade-up" style="animation-delay:0.3s">
                    <img src="{{ asset('reales/real-18.jpeg') }}" alt="Atención al usuario Cruz Roja Seccional Huila" class="img-fluid rounded-4 shadow-lg" style="object-fit:cover; height:420px; width:100%;">
                    <div class="hero-image-badge">
                        <i class="fas fa-comments text-danger me-2"></i>
                        <span>Escuchamos tu voz</span>
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
{{-- ASOCIACIÓN DE USUARIOS --}}
{{-- ============================================================ --}}
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-people-group me-2"></i>Participación de los Usuarios
            </span>
            <h2 class="display-5 fw-black mb-3" style="color: var(--azul-institucional);">Asociación de Usuarios</h2>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-6">
                <div class="au-info-card hover-up h-100 p-4 p-md-5 bg-light rounded-5 shadow-sm border-0">
                    <div class="principle-icon-circle bg-danger text-white rounded-circle mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 60px; height: 60px;">
                        <i class="fas fa-users fa-lg"></i>
                    </div>
                    <h4 class="fw-bold mb-3 text-dark">¿Qué es una Asociación de Usuarios?</h4>
                    <p class="text-muted mb-0 lh-lg">Es una agrupación de personas que vela por el cumplimiento de los derechos y deberes de los usuarios y sus familias, en condiciones de calidad, trato digno y oportunidad, de acuerdo con los principios y valores institucionales. Es una organización sin ánimo de lucro, conformada por un número plural de usuarios, de vinculación voluntaria.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="au-info-card hover-up h-100 p-4 p-md-5 bg-light rounded-5 shadow-sm border-0">
                    <div class="principle-icon-circle bg-primary-au text-white rounded-circle mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 60px; height: 60px;">
                        <i class="fas fa-bullseye fa-lg"></i>
                    </div>
                    <h4 class="fw-bold mb-3 text-dark">Objetivo</h4>
                    <p class="text-muted mb-0 lh-lg">Velar por la adecuada prestación de los servicios de salud que brinda la Institución Prestadora de Salud (IPS) Cruz Roja Seccional Huila, respetando los atributos de calidad, promoviendo el cumplimiento de los deberes del usuario y la protección y defensa de sus derechos.</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- CANALES DE ATENCIÓN --}}
{{-- ============================================================ --}}
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-phone-volume me-2"></i>Cómo Contactarnos
            </span>
            <h2 class="display-5 fw-black mb-3" style="color: var(--azul-institucional);">Canales de Atención</h2>
            <p class="lead text-muted max-w-700 mx-auto">Elige el medio que prefieras para radicar tu inquietud, reclamo, felicitación o sugerencia.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @php
                $canales = [
                    ['icon' => 'fa-whatsapp', 'brand' => true, 'title' => 'WhatsApp / Teléfono', 'desc' => '+57 317 297 1272', 'href' => 'https://wa.me/573172971272', 'external' => true],
                    ['icon' => 'fa-envelope', 'brand' => false, 'title' => 'Correo Institucional', 'desc' => 'info@cruzrojahuila.org', 'href' => 'mailto:info@cruzrojahuila.org', 'external' => false],
                    ['icon' => 'fa-map-marker-alt', 'brand' => false, 'title' => 'Atención Presencial', 'desc' => 'Sede Neiva, Lun-Vie 8AM-12PM / 2PM-6PM', 'href' => route('conocenos.donde-estamos'), 'external' => false],
                    ['icon' => 'fa-clock', 'brand' => false, 'title' => 'Tiempo de Respuesta', 'desc' => 'Máximo 15 días hábiles', 'href' => null, 'external' => false],
                ];
            @endphp

            @foreach($canales as $index => $c)
            <div class="col-6 col-lg-3 d-flex align-items-stretch">
                @php $tag = $c['href'] ? 'a' : 'div'; @endphp
                <{{ $tag }} @if($c['href']) href="{{ $c['href'] }}" @if($c['external']) target="_blank" rel="noopener" @endif @endif class="principle-enhanced-card hover-up w-100 text-center p-4 rounded-5 bg-white shadow-sm border-0 position-relative overflow-hidden mb-4 text-decoration-none">
                    <div class="card-number-bg">{{ sprintf('%02d', $index + 1) }}</div>
                    <div class="principle-icon-circle bg-danger text-white rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center shadow-sm" style="width: 60px; height: 60px;">
                        <i class="fa{{ $c['brand'] ? 'b' : 's' }} {{ $c['icon'] }} fa-lg"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-2">{{ $c['title'] }}</h6>
                    <p class="text-muted small mb-0">{{ $c['desc'] }}</p>
                </{{ $tag }}>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- QUÉ ES CADA SOLICITUD --}}
{{-- ============================================================ --}}
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-list-check me-2"></i>Tipos de Solicitud
            </span>
            <h2 class="display-5 fw-black mb-3" style="color: var(--azul-institucional);">¿Qué es una PQRSF?</h2>
            <p class="lead text-muted max-w-700 mx-auto">Identifica el tipo de solicitud que corresponde a tu caso.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @php
                $pqrsf = [
                    ['icon' => 'fa-circle-question', 'title' => 'Petición', 'desc' => 'Consulta o solicitud de información sobre nuestros servicios.'],
                    ['icon' => 'fa-face-frown', 'title' => 'Queja', 'desc' => 'Inconformidad con la conducta o atención de nuestro equipo.'],
                    ['icon' => 'fa-triangle-exclamation', 'title' => 'Reclamo', 'desc' => 'Exigencia por la prestación deficiente de algún servicio.'],
                    ['icon' => 'fa-lightbulb', 'title' => 'Sugerencia', 'desc' => 'Propuesta para mejorar nuestros procesos y servicios.'],
                    ['icon' => 'fa-heart', 'title' => 'Felicitación', 'desc' => 'Reconocimiento a nuestra labor humanitaria.'],
                ];
            @endphp

            @foreach($pqrsf as $index => $p)
            <div class="col-6 col-md-4 col-lg-2 d-flex align-items-stretch">
                <div class="pqrsf-card hover-up w-100 text-center p-4 rounded-5 bg-light shadow-sm border-0">
                    <div class="principle-icon-circle bg-danger-subtle text-danger rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 55px; height: 55px;">
                        <i class="fas {{ $p['icon'] }}"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-2">{{ $p['title'] }}</h6>
                    <p class="text-muted small mb-0">{{ $p['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- CTA CIERRE --}}
{{-- ============================================================ --}}
<section class="cta-au text-white position-relative overflow-hidden">
    <div class="container py-5 text-center position-relative z-1 anime-fade-up">
        <h2 class="fw-black mb-3">¿Tienes algo que decirnos?</h2>
        <p class="lead opacity-85 mb-4 max-w-600 mx-auto">Radica tu solicitud directamente por WhatsApp o correo electrónico.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="https://wa.me/573172971272" target="_blank" rel="noopener" class="cta-btn-primary">
                <i class="fab fa-whatsapp me-2"></i>Escríbenos por WhatsApp
            </a>
            <a href="mailto:info@cruzrojahuila.org" class="cta-btn-outline">
                <i class="fas fa-envelope me-2"></i>Enviar Correo
            </a>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    /* ─── HERO ─── */
    .hero-au {
        background-image: linear-gradient(135deg, rgba(0, 45, 114, 0.92) 0%, rgba(17, 26, 36, 0.94) 100%), url('{{ asset("reales/real-18.jpeg") }}');
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

    .section-eyebrow { display: block; }
    .max-w-600 { max-width: 600px; }
    .max-w-700 { max-width: 700px; }

    /* ─── ASOCIACIÓN DE USUARIOS ─── */
    .au-info-card {
        border-left: 4px solid var(--cruz-roja);
        transition: all 0.3s ease;
    }
    .bg-primary-au { background: var(--azul-institucional); }

    /* ─── CANALES CARDS ─── */
    .principle-enhanced-card {
        border-top: 5px solid var(--cruz-roja) !important;
        transition: all 0.3s ease;
        color: inherit;
    }
    .principle-enhanced-card:hover { border-top-color: var(--azul-institucional) !important; }

    .card-number-bg {
        position: absolute;
        top: 15px;
        right: 25px;
        font-size: 5.5rem;
        font-weight: 800;
        color: rgba(0, 45, 114, 0.05);
        line-height: 1;
        user-select: none;
        transition: color 0.3s;
    }
    .principle-enhanced-card:hover .card-number-bg { color: rgba(237, 28, 36, 0.07); }

    /* ─── PQRSF CARDS ─── */
    .pqrsf-card {
        border-bottom: 4px solid transparent;
        transition: all 0.3s ease;
    }
    .pqrsf-card:hover { border-bottom-color: var(--cruz-roja); }

    /* ─── CTA CIERRE ─── */
    .cta-au {
        background-image: linear-gradient(135deg, var(--azul-institucional) 0%, #1a2332 100%);
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
        border: 1px solid rgba(255,255,255,.4);
        text-decoration: none;
        transition: all .25s ease;
    }
    .cta-btn-outline:hover {
        background: rgba(255,255,255,.1);
        border-color: #fff;
        color: #fff;
    }
</style>
@endsection
