@extends('layouts.app')

@section('title', 'Dónde Estamos - Cruz Roja Huila')
@section('meta_description', 'Visita la sede principal de la Cruz Roja Colombiana Seccional Huila en Neiva o conoce nuestra cobertura humanitaria en los 37 municipios del departamento.')

@section('content')

{{-- ============================================================ --}}
{{-- HERO SECTION --}}
{{-- ============================================================ --}}
<section class="hero-de text-white position-relative overflow-hidden">
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
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Dónde Estamos</li>
                    </ol>
                </nav>

                <span class="badge-hero mb-3 d-inline-block">
                    <i class="fas fa-location-dot me-2"></i>SEDE PRINCIPAL Y COBERTURA REGIONAL
                </span>

                <h1 class="display-3 fw-black lh-1 mb-4">Dónde<br><span class="text-hero-accent">Estamos</span></h1>
                <p class="lead opacity-85 fs-5 mb-5 max-w-600">
                    Nuestra sede en Neiva es el punto de partida de una labor humanitaria que llega a los 37 municipios del Huila.
                </p>

                <div class="d-flex gap-4 flex-wrap">
                    <div class="hero-stat">
                        <span class="hero-stat__number">1</span>
                        <span class="hero-stat__label">Sede principal en Neiva</span>
                    </div>
                    <div class="hero-stat-divider" aria-hidden="true"></div>
                    <div class="hero-stat">
                        <span class="hero-stat__number">37</span>
                        <span class="hero-stat__label">Municipios con cobertura</span>
                    </div>
                    <div class="hero-stat-divider" aria-hidden="true"></div>
                    <div class="hero-stat">
                        <span class="hero-stat__number">54</span>
                        <span class="hero-stat__label">Años sirviendo al Huila</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 d-none d-lg-flex justify-content-center align-items-center">
                <div class="hero-image-card anime-fade-up" style="animation-delay:0.3s">
                    <img src="{{ asset('reales/real-17.jpeg') }}" alt="Sede de la Cruz Roja Colombiana Seccional Huila en Neiva" class="img-fluid rounded-4 shadow-lg" style="object-fit:cover; height:420px; width:100%;">
                    <div class="hero-image-badge">
                        <i class="fas fa-map-marker-alt text-danger me-2"></i>
                        <span>Sede Principal — Neiva, Huila</span>
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
{{-- INFO + MAPA --}}
{{-- ============================================================ --}}
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Info Column -->
            <div class="col-lg-5">
                <div class="bg-white p-4 p-md-5 rounded-5 shadow-sm h-100 d-flex flex-column">
                    <h3 class="fw-bold mb-4" style="color: var(--azul-institucional);">Nuestra Sede Principal</h3>
                    <p class="text-muted mb-4">Desde aquí coordinamos las operaciones de emergencia y nuestros servicios de salud y educación para todo el departamento.</p>

                    <div class="location-details mt-2">
                        <div class="d-flex mb-4 align-items-start">
                            <div class="icon-box bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1 text-dark">Dirección</h6>
                                <p class="text-muted mb-0">Calle 26 &, Cra 5a - A, Comuna 2, Neiva, Huila</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4 align-items-start">
                            <div class="icon-box bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1 text-dark">WhatsApp / Teléfono</h6>
                                <p class="text-muted mb-0">+57 317 297 1272</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4 align-items-start">
                            <div class="icon-box bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1 text-dark">Correo Electrónico</h6>
                                <p class="text-muted mb-0">info@cruzrojahuila.org</p>
                            </div>
                        </div>

                        <div class="d-flex mb-0 align-items-start">
                            <div class="icon-box bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1 text-dark">Horario de Atención</h6>
                                <p class="text-muted mb-0">Lunes a Viernes: 8:00 AM - 12:00 PM / 2:00 PM - 6:00 PM</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-3 flex-wrap mt-auto pt-5">
                        <a href="https://maps.app.goo.gl/KNbGmaZng2Db2us47" target="_blank" rel="noopener" class="quick-action-btn">
                            <i class="fas fa-route me-2"></i>Cómo llegar
                        </a>
                        <a href="https://wa.me/573172971272" target="_blank" rel="noopener" class="quick-action-btn quick-action-btn--whatsapp">
                            <i class="fab fa-whatsapp me-2"></i>Escríbenos
                        </a>
                    </div>
                </div>
            </div>

            <!-- Map Column -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm overflow-hidden rounded-5 h-100" style="min-height: 400px;">
                    <iframe
                        src="https://www.google.com/maps?q=Cruz+Roja+Colombiana+Seccional+Huila,+Calle+26+%23+5a-A,+Neiva,+Huila&output=embed"
                        width="100%" height="100%" style="border:0; min-height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- COBERTURA --}}
{{-- ============================================================ --}}
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-map-location-dot me-2"></i>Nuestra Presencia
            </span>
            <h2 class="display-5 fw-black mb-3" style="color: var(--azul-institucional);">Cobertura en el Departamento</h2>
            <p class="lead text-muted max-w-700 mx-auto">Desde nuestra sede principal extendemos la labor humanitaria a los 37 municipios del Huila.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @php
                $cobertura = [
                    ['icon' => 'fa-truck-medical', 'title' => 'Respuesta Inmediata', 'desc' => 'Equipos de socorro listos para desplazarse a cualquier municipio ante contingencias o desastres naturales.'],
                    ['icon' => 'fa-stethoscope', 'title' => 'Brigadas de Salud', 'desc' => 'Vacunación, medicina general y laboratorios clínicos en las zonas más apartadas y vulnerables.'],
                    ['icon' => 'fa-graduation-cap', 'title' => 'Educación Continua', 'desc' => 'Técnicos laborales, diplomados y cursos disponibles de forma presencial y virtual para todo el Huila.'],
                ];
            @endphp

            @foreach($cobertura as $index => $c)
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="principle-enhanced-card hover-up w-100 p-4 bg-light rounded-5 shadow-sm border-0 position-relative overflow-hidden mb-4 d-flex flex-column justify-content-between" style="min-height: 210px;">
                    <div>
                        <div class="card-number-bg">{{ sprintf('%02d', $index + 1) }}</div>
                        <div class="principle-icon-circle bg-danger text-white rounded-circle mb-3 d-flex align-items-center justify-content-center shadow-sm" style="width: 60px; height: 60px;">
                            <i class="fas {{ $c['icon'] }} fa-lg"></i>
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">{{ $c['title'] }}</h5>
                        <p class="text-muted small mb-0">{{ $c['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- CTA CIERRE --}}
{{-- ============================================================ --}}
<section class="cta-de text-white position-relative overflow-hidden">
    <div class="container py-5 text-center position-relative z-1 anime-fade-up">
        <h2 class="fw-black mb-3">¿Nos visitas?</h2>
        <p class="lead opacity-85 mb-4 max-w-600 mx-auto">Te esperamos en nuestra sede de Neiva o a través de nuestros canales de atención.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="https://www.google.com/maps/dir/?api=1&destination=Cruz+Roja+Colombiana+Seccional+Huila%2C+Neiva" target="_blank" rel="noopener" class="cta-btn-primary">
                <i class="fas fa-route me-2"></i>Cómo Llegar
            </a>
            <a href="{{ route('contacto') }}" class="cta-btn-outline">
                <i class="fas fa-envelope me-2"></i>Contáctanos
            </a>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    /* ─── HERO ─── */
    .hero-de {
        background-image: linear-gradient(135deg, rgba(0, 45, 114, 0.92) 0%, rgba(17, 26, 36, 0.94) 100%), url('{{ asset("reales/real-17.jpeg") }}');
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

    .icon-box { transition: transform 0.3s; }
    .location-details > div:hover .icon-box { transform: scale(1.1); }

    .section-eyebrow { display: block; }
    .max-w-600 { max-width: 600px; }
    .max-w-700 { max-width: 700px; }

    /* ─── QUICK ACTION BUTTONS ─── */
    .quick-action-btn {
        display: inline-flex;
        align-items: center;
        background: rgba(220, 53, 69, .08);
        color: #b0212f;
        border: 1px solid rgba(220, 53, 69, .15);
        padding: .7rem 1.3rem;
        border-radius: 50px;
        font-weight: 600;
        font-size: .9rem;
        text-decoration: none;
        transition: all .25s ease;
    }
    .quick-action-btn:hover {
        background: #dc3545;
        color: #fff;
        transform: translateY(-2px);
    }
    .quick-action-btn--whatsapp {
        background: rgba(37, 211, 102, .1);
        color: #1a9e4f;
        border-color: rgba(37, 211, 102, .2);
    }
    .quick-action-btn--whatsapp:hover {
        background: #25d366;
        color: #fff;
    }

    /* ─── COBERTURA CARDS ─── */
    .principle-enhanced-card {
        border-top: 5px solid var(--cruz-roja) !important;
        transition: all 0.3s ease;
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

    /* ─── CTA CIERRE ─── */
    .cta-de {
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
