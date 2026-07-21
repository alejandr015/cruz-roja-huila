@extends('layouts.app')

@section('title', 'Construcción de Paz - Cruz Roja Huila')
@section('meta_description', 'Conoce cómo la Cruz Roja Colombiana Seccional Huila promueve la cultura de paz, la reconciliación y la convivencia en las comunidades del departamento.')

@section('content')

{{-- ============================================================ --}}
{{-- HERO SPLIT --}}
{{-- ============================================================ --}}
<section class="cp-hero position-relative">
    <div class="cp-hero-text text-white">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb breadcrumb-hero mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Inicio</a></li>
                <li class="breadcrumb-item text-white-50">Qué Hacemos</li>
                <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Construcción de Paz</li>
            </ol>
        </nav>

        <span class="badge-outline-hero mb-3 d-inline-block">
            <i class="fas fa-dove me-2"></i>RECONCILIACIÓN Y CONVIVENCIA
        </span>

        <h1 class="display-3 fw-black lh-1 mb-4 anime-fade-up">
            Construcción<br>de <span class="text-hero-accent">Paz</span>
        </h1>
        <p class="lead opacity-85 fs-5 mb-0 max-w-500 anime-fade-up" style="animation-delay:.15s">
            Sembramos cultura de paz, reconciliación y convivencia en las comunidades del Huila, desde la neutralidad y la imparcialidad.
        </p>
    </div>
    <div class="cp-hero-image">
        <img src="{{ asset('reales/real-11.jpeg') }}" alt="Construcción de Paz Cruz Roja Seccional Huila">
    </div>
</section>


{{-- ============================================================ --}}
{{-- ENFOQUE --}}
{{-- ============================================================ --}}
<section class="cp-enfoque bg-white">
    <div class="container text-center">
        <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
            <i class="fas fa-hand-holding-heart me-2"></i>Nuestro Compromiso
        </span>
        <h2 class="display-6 fw-black mb-4" style="color: var(--azul-institucional);">¿En qué consiste?</h2>
        <p class="fs-5 text-muted lh-lg max-w-700 mx-auto mb-0">
            Trabajamos por una cultura de paz, la reconciliación y la inclusión social en las comunidades del Huila, promoviendo el respeto de los derechos humanos y el derecho internacional humanitario en cada uno de los 37 municipios del departamento.
        </p>
    </div>
</section>


{{-- ============================================================ --}}
{{-- FRENTES DE TRABAJO — filas alternadas --}}
{{-- ============================================================ --}}
<section class="py-5 bg-light">
    <div class="container py-4">
        @php
            $frentes = [
                ['icon' => 'fa-people-arrows', 'title' => 'Reconciliación', 'desc' => 'Creamos espacios de encuentro y diálogo entre comunidades para fomentar la convivencia pacífica y superar las heridas del conflicto, siempre bajo los principios de neutralidad e imparcialidad.', 'img' => 'real-9.jpeg'],
                ['icon' => 'fa-scale-balanced', 'title' => 'Derecho Internacional Humanitario', 'desc' => 'Promovemos el conocimiento y respeto de los derechos humanos y el derecho internacional humanitario, como base para la protección de la vida y la dignidad de las personas.', 'img' => 'real-26.jpeg'],
                ['icon' => 'fa-hands-holding-child', 'title' => 'Inclusión Social', 'desc' => 'Trabajamos para que ninguna población del departamento quede por fuera del alcance de la ayuda humanitaria, priorizando a los grupos más vulnerables y apartados.', 'img' => 'real-10.jpeg'],
            ];
        @endphp

        @foreach($frentes as $index => $f)
        <div class="row align-items-center g-5 {{ !$loop->last ? 'mb-5 pb-2' : '' }}">
            <div class="col-lg-6 {{ $index % 2 == 1 ? 'order-lg-2' : '' }}">
                <div class="position-relative">
                    <img src="{{ asset('reales/' . $f['img']) }}" alt="{{ $f['title'] }} - Cruz Roja Seccional Huila" class="img-fluid rounded-5 shadow-lg">
                    <div class="floating-icon-badge {{ $index % 2 == 1 ? 'bg-primary-cp' : 'bg-danger' }}">
                        <i class="fas {{ $f['icon'] }}"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 {{ $index % 2 == 1 ? 'order-lg-1' : '' }}">
                <span class="cp-step-number">{{ sprintf('%02d', $index + 1) }}</span>
                <h3 class="fw-bold mb-3" style="color: var(--azul-institucional);">{{ $f['title'] }}</h3>
                <p class="text-muted fs-6 lh-lg mb-0">{{ $f['desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>


{{-- ============================================================ --}}
{{-- CITA — PRINCIPIO DE HUMANIDAD --}}
{{-- ============================================================ --}}
<section class="cp-quote text-white position-relative overflow-hidden">
    <div class="container position-relative z-1 py-4 text-center">
        <i class="fas fa-quote-left cp-quote-icon mb-4"></i>
        <p class="cp-quote-text mx-auto mb-4">
            "Promueve la comprensión mutua, la amistad, la cooperación y una paz duradera entre todos los pueblos."
        </p>
        <span class="fw-semibold opacity-75 text-uppercase" style="letter-spacing:1.5px; font-size:.85rem;">
            Principio Fundamental de Humanidad — Movimiento de la Cruz Roja
        </span>
    </div>
</section>


@endsection

@section('styles')
<style>
    /* ─── HERO SPLIT ─── */
    .cp-hero {
        display: grid;
        grid-template-columns: 1fr 1fr;
        min-height: 560px;
    }
    .cp-hero-text {
        background: linear-gradient(155deg, var(--azul-institucional) 0%, #1a2332 100%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 100px 5% 60px 8%;
    }
    .cp-hero-image { position: relative; overflow: hidden; }
    .cp-hero-image img {
        width: 100%; height: 100%;
        object-fit: cover;
        display: block;
        min-height: 320px;
    }
    @media (max-width: 991px) {
        .cp-hero { grid-template-columns: 1fr; }
        .cp-hero-text { padding: 140px 6% 50px; order: 1; }
        .cp-hero-image { order: 2; }
        .cp-hero-image img { min-height: 280px; }
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
        width: fit-content;
    }
    .text-hero-accent { color: #ff5a6e; }
    .max-w-500 { max-width: 500px; }
    .max-w-600 { max-width: 600px; }
    .max-w-700 { max-width: 700px; }

    /* ─── ANIMATION ─── */
    .anime-fade-up { animation: fadeUp .9s ease-out forwards; }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(40px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .section-eyebrow { display: block; }
    .cp-enfoque { padding: 90px 0 60px; }

    /* ─── FRENTES ─── */
    .cp-step-number {
        display: block;
        font-size: 3rem;
        font-weight: 900;
        color: rgba(0, 45, 114, .08);
        line-height: 1;
        margin-bottom: -.5rem;
    }
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
    .bg-primary-cp { background: var(--azul-institucional); }

    /* ─── QUOTE ─── */
    .cp-quote {
        background-image: linear-gradient(135deg, var(--cruz-roja) 0%, #8a0f16 100%);
        padding: 80px 0;
    }
    .cp-quote-icon {
        font-size: 2.5rem;
        opacity: .5;
    }
    .cp-quote-text {
        font-size: 1.9rem;
        font-weight: 700;
        line-height: 1.4;
        max-width: 780px;
        font-style: italic;
    }

    /* ─── CTA PANEL ─── */
    .cp-cta-panel {
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
