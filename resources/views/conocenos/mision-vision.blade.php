@extends('layouts.app')

@section('title', 'Misión y Visión - Cruz Roja Huila')

@section('content')
<!-- Hero Section -->
<section class="py-5 text-white position-relative overflow-hidden" style="min-height: 350px; background: linear-gradient(135deg, var(--azul-institucional) 0%, #1a2332 100%);">
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-8 anime-fade-up">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white opacity-75 text-decoration-none">Inicio</a></li>
                        <li class="breadcrumb-item text-white opacity-75">Conózcanos</li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Misión y Visión</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold mb-3">Misión y Visión</h1>
                <p class="lead mb-0 fs-5 opacity-90">Nuestra razón de ser y el camino que recorremos para consolidarnos como líderes humanitarios en el departamento del Huila.</p>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Cards -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Misión -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm p-4 p-md-5 bg-white rounded-5 h-100 hover-up position-relative overflow-hidden" style="border-top: 5px solid var(--cruz-roja) !important;">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-circle bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-bullseye fa-2x"></i>
                        </div>
                        <h2 class="fw-bold mb-0 text-dark">Nuestra Misión</h2>
                    </div>
                    <p class="fs-5 text-muted lh-lg mb-0">
                        Prevenir y aliviar el sufrimiento humano en todas las circunstancias. Nos comprometemos a proteger la vida, la salud y a hacer respetar la dignidad de las personas, de manera neutral, independiente e imparcial, especialmente en situaciones de emergencia, desastres y contextos vulnerables en el departamento del Huila.
                    </p>
                </div>
            </div>

            <!-- Visión -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm p-4 p-md-5 bg-white rounded-5 h-100 hover-up position-relative overflow-hidden" style="border-top: 5px solid var(--azul-institucional) !important;">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-circle bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 70px; height: 70px; color: var(--azul-institucional) !important; background-color: rgba(0, 45, 114, 0.1) !important;">
                            <i class="fas fa-eye fa-2x"></i>
                        </div>
                        <h2 class="fw-bold mb-0 text-dark">Nuestra Visión</h2>
                    </div>
                    <p class="fs-5 text-muted lh-lg mb-0">
                        Consolidarnos como la organización humanitaria referente en el departamento del Huila, siendo reconocidos por la excelencia, cobertura y sostenibilidad de nuestros servicios de salud y educación, así como por la capacidad de respuesta inmediata ante emergencias, impulsados siempre por la pasión y el profesionalismo de nuestro voluntariado.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h6 class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 2px;">Nuestra Cultura</h6>
            <h2 class="display-5 fw-bold mb-3" style="color: var(--azul-institucional);">Valores Institucionales</h2>
            <p class="lead text-muted max-w-700 mx-auto">Los pilares de conducta que definen nuestro comportamiento profesional e institucional.</p>
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

            @foreach($valores as $v)
            <div class="col-md-6 col-lg-3">
                <div class="value-card text-center p-4 rounded-4 hover-up bg-light h-100 border-0">
                    <div class="value-icon text-danger mb-3" style="font-size: 2.5rem;">
                        <i class="fas {{ $v['icon'] }}"></i>
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
    .anime-fade-up {
        animation: fadeUp 1s ease-out forwards;
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .hover-up {
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .hover-up:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-premium) !important;
    }

    .value-card {
        border: 1px solid rgba(0,0,0,0.02) !important;
        transition: all 0.3s;
    }
    .value-card:hover {
        background-color: white !important;
    }

    .max-w-700 { max-width: 700px; }
</style>
@endsection
