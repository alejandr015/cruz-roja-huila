@extends('layouts.app')

@section('title', 'Atención de Emergencias - Cruz Roja Huila')
@section('meta_description', 'Líneas de intervención de la Cruz Roja Colombiana Seccional Huila en Atención de Emergencias, según la Ley 1523 de 2012 de Gestión del Riesgo de Desastres.')

@section('content')

{{-- ============================================================ --}}
{{-- HERO --}}
{{-- ============================================================ --}}
<section class="ae-hero text-white position-relative overflow-hidden">
    <div class="container position-relative z-2 py-5">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb breadcrumb-hero mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Inicio</a></li>
                <li class="breadcrumb-item text-white-50">Qué Hacemos</li>
                <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Atención de Emergencias</li>
            </ol>
        </nav>

        <div class="anime-fade-up" style="max-width: 700px;">
            <span class="badge-outline-hero mb-3 d-inline-block">
                <i class="fas fa-truck-medical me-2"></i>RESPUESTA HUMANITARIA
            </span>
            <h1 class="display-3 fw-black lh-1 mb-4">Atención de<br><span class="text-hero-accent">Emergencias</span></h1>
            <p class="lead opacity-85 fs-5 mb-0">
                Desarrollamos acciones humanitarias en favor de las personas más vulnerables, ante situaciones de riesgo que puedan desencadenar una emergencia o desastre.
            </p>
        </div>
    </div>
</section>




{{-- ============================================================ --}}
{{-- MARCO DE ACTUACIÓN --}}
{{-- ============================================================ --}}
<section class="py-5 bg-white">
    <div class="container text-center">
        <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
            <i class="fas fa-gavel me-2"></i>Marco de Actuación
        </span>
        <h2 class="display-6 fw-black mb-4" style="color: var(--azul-institucional);">Nuestro Compromiso Institucional</h2>
        <p class="fs-5 text-muted lh-lg max-w-700 mx-auto mb-0">
            Actuamos de acuerdo con nuestra Misión Institucional y en el marco de la <strong>Ley 1523 de 2012</strong> de Gestión del Riesgo de Desastres, contando con las siguientes líneas de intervención.
        </p>
    </div>
</section>


{{-- ============================================================ --}}
{{-- LÍNEAS DE INTERVENCIÓN — lista vertical escalonada --}}
{{-- ============================================================ --}}
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-list-ol me-2"></i>Ley 1523 de 2012
            </span>
            <h2 class="display-6 fw-black mb-3" style="color: var(--azul-institucional);">Líneas de Intervención</h2>
        </div>

        <div class="ae-vline mx-auto">
            @php
                $lineas = [
                    ['icon' => 'fa-magnifying-glass-chart', 'title' => 'Reducción y Conocimiento del Riesgo', 'desc' => 'Identificamos y analizamos las condiciones de riesgo del territorio para actuar antes de que se conviertan en un desastre.'],
                    ['icon' => 'fa-truck-medical', 'title' => 'Manejo del Desastre: Preparación y Respuesta', 'desc' => 'Preparamos a comunidades y voluntarios, y respondemos de inmediato cuando ocurre una emergencia.'],
                    ['icon' => 'fa-seedling', 'title' => 'Recuperación', 'desc' => 'Acompañamos a las comunidades afectadas en su proceso de recuperación tras la emergencia.'],
                ];
            @endphp

            @foreach($lineas as $index => $l)
            <div class="ae-vline-item">
                <div class="ae-vline-marker">{{ $index + 1 }}</div>
                <div class="ae-vline-card hover-up">
                    <div class="d-flex align-items-start gap-3">
                        <div class="ae-vline-icon"><i class="fas {{ $l['icon'] }}"></i></div>
                        <div>
                            <h5 class="fw-bold text-dark mb-2">{{ $l['title'] }}</h5>
                            <p class="text-muted small mb-0">{{ $l['desc'] }}</p>
                        </div>
                    </div>
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
    .ae-hero {
        background-image: linear-gradient(135deg, rgba(0, 45, 114, 0.92) 0%, rgba(17, 26, 36, 0.95) 100%), url('{{ asset("reales/real-32.jpeg") }}');
        background-size: cover;
        background-position: center;
        padding-top: 60px;
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

    /* ─── HOTLINE ─── */
    .ae-hotline {
        background: var(--cruz-roja);
        padding: 1rem 0;
    }
    .ae-hotline-link {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        font-size: .92rem;
        transition: opacity .2s;
    }
    .ae-hotline-link:hover { opacity: .8; color: #fff; }

    /* ─── ANIMATION ─── */
    .anime-fade-up { animation: fadeUp .9s ease-out forwards; }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(40px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .hover-up { transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
    .hover-up:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadow-premium, 0 20px 45px rgba(0,0,0,.12)) !important;
    }

    .section-eyebrow { display: block; }

    /* ─── LÍNEAS — VERTICAL ─── */
    .ae-vline {
        max-width: 780px;
        position: relative;
        padding-left: 70px;
    }
    .ae-vline::before {
        content: '';
        position: absolute;
        left: 27px;
        top: 10px;
        bottom: 10px;
        width: 2px;
        background: repeating-linear-gradient(to bottom, var(--cruz-roja) 0, var(--cruz-roja) 6px, transparent 6px, transparent 12px);
    }
    .ae-vline-item {
        position: relative;
        margin-bottom: 1.5rem;
    }
    .ae-vline-item:last-child { margin-bottom: 0; }
    .ae-vline-marker {
        position: absolute;
        left: -70px;
        top: 0;
        width: 56px; height: 56px;
        border-radius: 50%;
        background: var(--cruz-roja);
        color: #fff;
        font-weight: 800;
        font-size: 1.3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 20px rgba(237,28,36,.3);
    }
    .ae-vline-card {
        background: #fff;
        border-radius: 20px;
        padding: 1.5rem 1.8rem;
        box-shadow: var(--shadow-premium, 0 10px 30px rgba(0,0,0,.08));
    }
    .ae-vline-icon {
        width: 46px; height: 46px;
        border-radius: 12px;
        background: rgba(0, 45, 114, .08);
        color: var(--azul-institucional);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 1.15rem;
    }
    @media (max-width: 575px) {
        .ae-vline { padding-left: 56px; }
        .ae-vline-marker { left: -56px; width: 44px; height: 44px; font-size: 1.1rem; }
    }

    /* ─── CONTACT BAR ─── */
    .ae-contact-bar { background: var(--gris-fondo, #F4F7F9); }
    .ae-contact-item {
        display: flex;
        align-items: center;
        gap: .9rem;
        text-decoration: none;
        background: #fff;
        border-radius: 16px;
        padding: 1rem 1.2rem;
        height: 100%;
        transition: transform .2s ease;
    }
    .ae-contact-item:hover { transform: translateY(-3px); }
    .ae-contact-item i {
        width: 42px; height: 42px;
        border-radius: 50%;
        background: rgba(237, 28, 36, .1);
        color: var(--cruz-roja);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    /* ─── CTA CIERRE ─── */
    .ae-cta {
        background-image: linear-gradient(135deg, var(--azul-institucional) 0%, #1a2332 100%);
        padding: 60px 0;
    }
    .ae-cta-btn {
        display: inline-flex;
        align-items: center;
        background: var(--cruz-roja);
        color: #fff;
        font-weight: 700;
        padding: 1rem 2.5rem;
        border-radius: 50px;
        text-decoration: none;
        box-shadow: 0 10px 30px rgba(237,28,36,.4);
        transition: transform .25s ease, box-shadow .25s ease;
        font-size: 1.05rem;
    }
    .ae-cta-btn:hover {
        transform: scale(1.05);
        color: #fff;
    }
</style>
@endsection
