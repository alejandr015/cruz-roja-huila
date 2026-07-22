@extends('layouts.app')

@section('title', 'Atención Eventos Masivos - Cruz Roja Huila')
@section('meta_description', 'Dispositivo de atención prehospitalaria de la Cruz Roja Colombiana Seccional Huila para eventos masivos: ambulancia, brigadistas, módulo de estabilización y plan de emergencia.')

@section('content')

{{-- ============================================================ --}}
{{-- HERO --}}
{{-- ============================================================ --}}
<section class="evm-hero text-white position-relative overflow-hidden">
    <div class="container position-relative z-2 pt-5">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb breadcrumb-hero mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Inicio</a></li>
                <li class="breadcrumb-item text-white-50">Qué Hacemos</li>
                <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Atención Eventos Masivos</li>
            </ol>
        </nav>

        <div class="anime-fade-up" style="max-width: 700px;">
            <span class="badge-outline-hero mb-3 d-inline-block">
                <i class="fas fa-people-group me-2"></i>DISPOSITIVO DE COBERTURA
            </span>
            <h1 class="display-3 fw-black lh-1 mb-4">Atención Eventos<br><span class="text-hero-accent">Masivos</span></h1>
            <p class="lead opacity-85 fs-5 mb-5">
                Cobertura prehospitalaria para conciertos, eventos deportivos, religiosos y culturales en todo el Huila.
            </p>
        </div>

        <!-- Franja de componentes (vidrio, en línea) -->
        <div class="evm-glass-strip anime-fade-up" style="animation-delay:.15s">
            <div class="evm-glass-item"><i class="fas fa-truck-medical"></i><span>Ambulancia Básica</span></div>
            <div class="evm-glass-item"><i class="fas fa-hand-holding-medical"></i><span>Brigadistas</span></div>
            <div class="evm-glass-item"><i class="fas fa-house-medical"></i><span>Módulo de Estabilización</span></div>
            <div class="evm-glass-item"><i class="fas fa-clipboard-list"></i><span>Plan de Emergencia</span></div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- QUÉ INCLUYE — BENTO GRID --}}
{{-- ============================================================ --}}
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-kit-medical me-2"></i>Nuestro Dispositivo
            </span>
            <h2 class="display-6 fw-black mb-3" style="color: var(--azul-institucional);">¿Qué Incluye?</h2>
            <p class="lead text-muted max-w-700 mx-auto">Cuatro componentes que se adaptan al tamaño y riesgo de cada evento.</p>
        </div>

        <div class="evm-bento">
            <div class="evm-bento-card evm-bento-card--lg hover-up">
                <div class="evm-bento-icon bg-danger"><i class="fas fa-truck-medical"></i></div>
                <h5 class="fw-bold text-dark mb-2">Ambulancia Básica</h5>
                <p class="text-muted small mb-0">Vehículo de atención prehospitalaria disponible en el lugar durante todo el evento, listo para trasladar pacientes si es necesario.</p>
            </div>
            <div class="evm-bento-card evm-bento-card--lg hover-up">
                <div class="evm-bento-icon bg-primary-evm"><i class="fas fa-hand-holding-medical"></i></div>
                <h5 class="fw-bold text-dark mb-2">Brigadistas en Primeros Auxilios</h5>
                <p class="text-muted small mb-0">Personal capacitado y ubicado estratégicamente para atender cualquier eventualidad entre el público asistente.</p>
            </div>
            <div class="evm-bento-card hover-up">
                <div class="evm-bento-icon bg-primary-evm"><i class="fas fa-house-medical"></i></div>
                <h6 class="fw-bold text-dark mb-2">Módulo de Estabilización y Clasificación</h6>
                <p class="text-muted small mb-0">Punto de triage para la atención inicial y clasificación de pacientes.</p>
            </div>
            <div class="evm-bento-card hover-up">
                <div class="evm-bento-icon bg-danger"><i class="fas fa-clipboard-list"></i></div>
                <h6 class="fw-bold text-dark mb-2">Plan de Emergencia</h6>
                <p class="text-muted small mb-0">Protocolo de acción diseñado según el tipo, aforo y riesgo del evento.</p>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- CÓMO SOLICITARLO --}}
{{-- ============================================================ --}}
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-clipboard-question me-2"></i>Proceso
            </span>
            <h2 class="display-6 fw-black mb-3" style="color: var(--azul-institucional);">Cómo Solicitarlo</h2>
        </div>

        <div class="row g-4 justify-content-center text-center">
            @php
                $pasos = [
                    ['num' => '1', 'title' => 'Solicita tu Cobertura', 'desc' => 'Contáctanos con los datos del evento: fecha, lugar y aforo estimado.'],
                    ['num' => '2', 'title' => 'Evaluamos el Riesgo', 'desc' => 'Diseñamos el plan de atención según el tipo y tamaño del evento.'],
                    ['num' => '3', 'title' => 'Desplegamos el Equipo', 'desc' => 'Nuestro personal y ambulancia llegan listos el día del evento.'],
                ];
            @endphp
            @foreach($pasos as $p)
            <div class="col-md-4">
                <div class="evm-step-circle mx-auto mb-3">{{ $p['num'] }}</div>
                <h6 class="fw-bold text-dark mb-2">{{ $p['title'] }}</h6>
                <p class="text-muted small mb-0">{{ $p['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection

@section('styles')
<style>
    /* ─── HERO ─── */
    .evm-hero {
        background-image: linear-gradient(135deg, rgba(0, 45, 114, 0.92) 0%, rgba(17, 26, 36, 0.95) 100%), url('{{ asset("reales/real-34.jpeg") }}');
        background-size: cover;
        background-position: center;
        padding-bottom: 70px;
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
    .max-w-700 { max-width: 700px; }

    /* ─── GLASS STRIP ─── */
    .evm-glass-strip {
        display: flex;
        flex-wrap: wrap;
        gap: .75rem;
        background: rgba(255,255,255,.08);
        border: 1px solid rgba(255,255,255,.15);
        border-radius: 20px;
        padding: 1.2rem 1.5rem;
        backdrop-filter: blur(6px);
    }
    .evm-glass-item {
        display: flex;
        align-items: center;
        gap: .6rem;
        font-size: .85rem;
        font-weight: 600;
        color: #fff;
        padding-right: 1rem;
        border-right: 1px solid rgba(255,255,255,.15);
    }
    .evm-glass-item:last-child { border-right: none; padding-right: 0; }
    .evm-glass-item i { color: #ff5a6e; }
    @media (max-width: 767px) {
        .evm-glass-item { border-right: none; padding-right: 0; }
    }

    /* ─── ANIMATION ─── */
    .anime-fade-up { animation: fadeUp .9s ease-out forwards; }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(40px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .hover-up { transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
    .hover-up:hover {
        transform: translateY(-6px);
        box-shadow: var(--shadow-premium, 0 20px 45px rgba(0,0,0,.12)) !important;
    }

    .section-eyebrow { display: block; }
    .max-w-700 { max-width: 700px; }

    /* ─── BENTO GRID ─── */
    .evm-bento {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: auto auto;
        gap: 1.5rem;
    }
    .evm-bento-card {
        background: var(--gris-fondo, #F4F7F9);
        border-radius: 24px;
        padding: 2rem;
        grid-column: span 2;
        transition: all .3s ease;
    }
    .evm-bento-card--lg { grid-column: span 2; }
    .evm-bento-icon {
        width: 56px; height: 56px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.3rem;
        margin-bottom: 1.2rem;
    }
    .bg-primary-evm { background: var(--azul-institucional); }
    @media (max-width: 767px) {
        .evm-bento { grid-template-columns: 1fr; }
        .evm-bento-card, .evm-bento-card--lg { grid-column: span 1; }
    }

    /* ─── PASOS ─── */
    .evm-step-circle {
        width: 64px; height: 64px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid var(--cruz-roja);
        color: var(--cruz-roja);
        font-weight: 800;
        font-size: 1.4rem;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: var(--shadow-premium, 0 10px 30px rgba(0,0,0,.08));
    }

    /* ─── REQUEST BANNER ─── */
    .evm-request-banner {
        background: linear-gradient(135deg, var(--azul-institucional) 0%, #1a2332 100%);
        box-shadow: var(--shadow-premium, 0 10px 30px rgba(0,0,0,.08));
    }
    .evm-request-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        text-decoration: none;
        color: #333;
        background: var(--gris-fondo, #F4F7F9);
        border-radius: 14px;
        padding: .9rem 1.1rem;
        transition: transform .2s ease;
    }
    .evm-request-item:hover { transform: translateX(4px); color: #333; }
    .evm-request-item i {
        width: 40px; height: 40px;
        border-radius: 50%;
        background: rgba(237, 28, 36, .1);
        color: var(--cruz-roja);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
</style>
@endsection
