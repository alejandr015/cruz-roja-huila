@extends('layouts.app')

@section('title', 'Informes de Gestión - Cruz Roja Huila')
@section('meta_description', 'Informes de gestión y transparencia institucional de la Cruz Roja Colombiana Seccional Huila.')

@section('content')

{{-- ============================================================ --}}
{{-- HERO --}}
{{-- ============================================================ --}}
<section class="ig-hero text-white position-relative overflow-hidden">
    <div class="ig-hero-pattern" aria-hidden="true"></div>
    <div class="ig-hero-blob ig-hero-blob--1" aria-hidden="true"></div>
    <div class="ig-hero-blob ig-hero-blob--2" aria-hidden="true"></div>
    <i class="fas fa-chart-line ig-float-icon ig-float-icon--1" aria-hidden="true"></i>
    <i class="fas fa-file-invoice ig-float-icon ig-float-icon--2" aria-hidden="true"></i>
    <i class="fas fa-magnifying-glass-chart ig-float-icon ig-float-icon--3" aria-hidden="true"></i>

    <div class="container position-relative z-2 py-5">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb breadcrumb-hero mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Inicio</a></li>
                <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Informes de Gestión</li>
            </ol>
        </nav>

        <div class="anime-fade-up">
            <span class="ig-hero-badge mb-3 d-inline-block">
                <i class="fas fa-shield-halved me-2"></i>TRANSPARENCIA INSTITUCIONAL
            </span>
            <h1 class="display-4 fw-black mb-3">Informes de Gestión</h1>
            <p class="lead opacity-85 fs-5 mb-0 max-w-600">
                Rendición de cuentas y resultados de nuestra labor humanitaria en el Huila.
            </p>
        </div>
    </div>

    <div class="ig-hero-wave" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#f8f9fa"/>
        </svg>
    </div>
</section>


{{-- ============================================================ --}}
{{-- COMING SOON --}}
{{-- ============================================================ --}}
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="ig-card mx-auto text-center anime-fade-up">
            <div class="ig-icon-circle mx-auto mb-4">
                <i class="fas fa-file-chart-column"></i>
            </div>
            <span class="ig-badge mb-3 d-inline-block">
                <i class="fas fa-hourglass-half me-2"></i>PRÓXIMAMENTE
            </span>
            <h2 class="fw-black mb-3" style="color: var(--azul-institucional);">Estamos preparando esta sección</h2>
            <p class="text-muted fs-6 lh-lg mb-4 mx-auto" style="max-width: 480px;">
                Muy pronto encontrarás aquí nuestros informes de gestión y de transparencia institucional. Vuelve a visitarnos.
            </p>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    /* ─── HERO ─── */
    .ig-hero {
        background-image: linear-gradient(135deg, var(--azul-institucional) 0%, #1a2332 100%);
        padding: 60px 0 90px;
    }
    .breadcrumb-hero { background: transparent; padding: 0; }
    .breadcrumb-hero .breadcrumb-item + .breadcrumb-item::before { color: rgba(255,255,255,.4); }
    .max-w-600 { max-width: 600px; }

    .ig-hero-pattern {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        opacity: 0.06;
        background-image: radial-gradient(white 1px, transparent 0);
        background-size: 24px 24px;
        z-index: 1;
    }
    .ig-hero-blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: .3;
        pointer-events: none;
        z-index: 0;
    }
    .ig-hero-blob--1 {
        width: 480px; height: 480px;
        background: radial-gradient(circle, #e8002d 0%, transparent 70%);
        top: -160px; right: -100px;
    }
    .ig-hero-blob--2 {
        width: 340px; height: 340px;
        background: radial-gradient(circle, #3d7ee0 0%, transparent 70%);
        bottom: -100px; left: -60px;
    }

    .ig-float-icon {
        position: absolute;
        color: rgba(255,255,255,.1);
        z-index: 1;
        pointer-events: none;
    }
    .ig-float-icon--1 { font-size: 5rem; top: 18%; right: 8%; transform: rotate(-8deg); }
    .ig-float-icon--2 { font-size: 3.5rem; bottom: 22%; right: 22%; transform: rotate(10deg); }
    .ig-float-icon--3 { font-size: 4rem; top: 55%; right: 42%; transform: rotate(-4deg); display: none; }
    @media (max-width: 767px) {
        .ig-float-icon { display: none; }
    }

    .ig-hero-badge {
        background: rgba(237, 28, 36, 0.9);
        color: #fff;
        font-size: .75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        padding: .45rem 1.1rem;
        border-radius: 50px;
        text-transform: uppercase;
        backdrop-filter: blur(4px);
    }

    .ig-hero-wave {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        line-height: 0;
        z-index: 2;
    }
    .ig-hero-wave svg { display: block; width: 100%; height: 50px; }

    .anime-fade-up { animation: fadeUp .9s ease-out forwards; }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(30px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* ─── COMING SOON CARD ─── */
    .ig-card {
        background: #fff;
        border-radius: 32px;
        box-shadow: var(--shadow-premium, 0 20px 45px rgba(0,0,0,.08));
        padding: 4rem 2.5rem;
        max-width: 560px;
    }
    .ig-icon-circle {
        width: 90px; height: 90px;
        border-radius: 50%;
        background: rgba(0, 45, 114, .08);
        color: var(--azul-institucional);
        font-size: 2.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: igPulse 2.4s ease-in-out infinite;
    }
    @keyframes igPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.06); }
    }
    .ig-badge {
        background: rgba(237, 28, 36, .1);
        color: var(--cruz-roja);
        font-size: .75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        padding: .5rem 1.2rem;
        border-radius: 50px;
        text-transform: uppercase;
    }
    .ig-btn {
        display: inline-flex;
        align-items: center;
        background: var(--cruz-roja);
        color: #fff;
        font-weight: 700;
        padding: .8rem 2rem;
        border-radius: 50px;
        text-decoration: none;
        box-shadow: 0 10px 30px rgba(237,28,36,.3);
        transition: transform .25s ease;
    }
    .ig-btn:hover { transform: scale(1.05); color: #fff; }
</style>
@endsection
