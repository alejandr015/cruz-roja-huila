@extends('layouts.app')

@section('title', 'Acción Humanitaria - Cruz Roja Huila')

@section('content')
<!-- Hero Section -->
<section class="py-5 text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);">
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb animate__animated animate__fadeIn">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white opacity-75 text-decoration-none">Inicio</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Acción Humanitaria</li>
                    </ol>
                </nav>
                <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInUp">Acción Humanitaria</h1>
                <p class="lead mb-0 animate__animated animate__fadeInUp animate__delay-1s">Protegiendo la vida y la dignidad en los momentos más difíciles. Nuestra misión es aliviar el sufrimiento humano con imparcialidad y neutralidad.</p>
                <div class="mt-4 animate__animated animate__fadeInUp animate__delay-2s">
                    <a href="#principios" class="btn btn-light btn-lg rounded-pill px-4 shadow-sm me-3">Nuestros Principios</a>
                    <a href="#proceso" class="btn btn-outline-light btn-lg rounded-pill px-4">Cómo Ayudamos</a>
                </div>
            </div>
            <div class="col-lg-6 text-center d-none d-lg-block animate__animated animate__zoomIn">
                <i class="fas fa-hand-holding-heart" style="font-size: 18rem; opacity: 0.15;"></i>
            </div>
        </div>
    </div>
    <!-- Elementos decorativos -->
    <div class="position-absolute top-50 start-0 translate-middle-y opacity-10" style="font-size: 30rem;">+</div>
</section>

<!-- Stats Impact Section -->
<section class="py-5 bg-white shadow-sm position-relative" style="margin-top: -50px; border-radius: 50px 50px 0 0; z-index: 10;">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
                <div class="p-3">
                    <h2 class="display-4 fw-bold text-danger mb-0">37</h2>
                    <p class="text-muted fw-bold">Municipios Atendidos</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-3">
                    <h2 class="display-4 fw-bold text-danger mb-0">1.2k+</h2>
                    <p class="text-muted fw-bold">Voluntarios Activos</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-3">
                    <h2 class="display-4 fw-bold text-danger mb-0">50k</h2>
                    <p class="text-muted fw-bold">Personas Ayudadas</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-3">
                    <h2 class="display-4 fw-bold text-danger mb-0">24/7</h2>
                    <p class="text-muted fw-bold">Disponibilidad</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Info Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4" style="color: var(--cruz-roja);">Salvando Vidas en el Huila</h2>
                <p class="fs-5 text-muted mb-4">La Acción Humanitaria de la Cruz Roja Colombiana Seccional Huila es el conjunto de actividades destinadas a salvar vidas, aliviar el sufrimiento y mantener la dignidad humana durante y después de crisis y desastres.</p>
                <div class="d-flex align-items-start mb-4">
                    <div class="bg-danger-subtle p-3 rounded-circle me-3">
                        <i class="fas fa-shield-alt text-danger"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Protección y Auxilio</h5>
                        <p class="text-muted mb-0">No solo entregamos ayuda material, también protegemos el derecho a la vida y la integridad física de las personas.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <div class="bg-danger-subtle p-3 rounded-circle me-3">
                        <i class="fas fa-balance-scale text-danger"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Neutralidad Absoluta</h5>
                        <p class="text-muted mb-0">Ayudamos a todos por igual, sin importar creencias políticas, religiosas o sociales.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm p-4 text-center hover-up" style="border-radius: 25px;">
                            <i class="fas fa-house-damage fa-3x text-danger mb-3"></i>
                            <h5 class="fw-bold">Gestión del Riesgo</h5>
                            <p class="small text-muted mb-0">Prevención y respuesta rápida ante desastres naturales.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm p-4 text-center hover-up" style="border-radius: 25px;">
                            <i class="fas fa-medkit fa-3x text-danger mb-3"></i>
                            <h5 class="fw-bold">Salud Médica</h5>
                            <p class="small text-muted mb-0">Brigadas de salud en zonas aisladas y de conflicto.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm p-4 text-center hover-up" style="border-radius: 25px;">
                            <i class="fas fa-box-open fa-3x text-danger mb-3"></i>
                            <h5 class="fw-bold">Alimentación</h5>
                            <p class="small text-muted mb-0">Kits nutricionales para familias en crisis extrema.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm p-4 text-center hover-up" style="border-radius: 25px;">
                            <i class="fas fa-faucet fa-3x text-danger mb-3"></i>
                            <h5 class="fw-bold">Agua Segura</h5>
                            <p class="small text-muted mb-0">Acceso a agua potable y sistemas de saneamiento.</p>
                        </div>
                    </div>
                    <!-- Card 5: Conflicto -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm p-4 text-center hover-up" style="border-radius: 25px;">
                            <i class="fas fa-dove fa-3x text-danger mb-3"></i>
                            <h5 class="fw-bold">Víctimas del Conflicto</h5>
                            <p class="small text-muted mb-0">Apoyo integral a personas afectadas por el conflicto armado.</p>
                        </div>
                    </div>
                    <!-- Card 6: RCF -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm p-4 text-center hover-up" style="border-radius: 25px;">
                            <i class="fas fa-search-location fa-3x text-danger mb-3"></i>
                            <h5 class="fw-bold">RCF</h5>
                            <p class="small text-muted mb-0">Restablecimiento de Contactos Familiares para personas separadas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Principles Section -->
<section id="principios" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold fs-1" style="color: var(--cruz-roja);">Nuestros 7 Principios</h2>
            <p class="lead text-muted">La base de todo lo que hacemos, en cualquier parte del mundo.</p>
        </div>
        <div class="row g-4 justify-content-center">
            @php
                $principios = [
                    ['icon' => 'fa-hands', 'title' => 'Humanidad', 'text' => 'Buscamos prevenir y aliviar el sufrimiento en todas las circunstancias.'],
                    ['icon' => 'fa-balance-scale', 'title' => 'Imparcialidad', 'text' => 'Ayudamos sin distinción de nacionalidad, raza o religión.'],
                    ['icon' => 'fa-user-shield', 'title' => 'Neutralidad', 'text' => 'No tomamos parte en las hostilidades ni en las controversias.'],
                    ['icon' => 'fa-certificate', 'title' => 'Independencia', 'text' => 'Mantenemos nuestra autonomía para actuar según nuestros principios.'],
                    ['icon' => 'fa-heart', 'title' => 'Voluntariado', 'text' => 'Nuestra labor es desinteresada y nace de la voluntad de ayudar.'],
                    ['icon' => 'fa-users', 'title' => 'Unidad', 'text' => 'Solo existe una Cruz Roja en cada país, abierta a todos.'],
                    ['icon' => 'fa-globe', 'title' => 'Universalidad', 'text' => 'Todas las sociedades tienen los mismos derechos y deber de ayudarse.'],
                ];
            @endphp

            @foreach($principios as $p)
            <div class="col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 text-center principle-card">
                    <div class="principle-icon mb-3">
                        <i class="fas {{ $p['icon'] }} fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">{{ $p['title'] }}</h5>
                    <p class="small text-muted mb-0">{{ $p['text'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Process Flow Section -->
<section id="proceso" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 order-2 order-lg-1">
                <div class="timeline">
                    <!-- Step 1 -->
                    <div class="d-flex mb-5">
                        <div class="step-num me-4">1</div>
                        <div>
                            <h5 class="fw-bold">Evaluación Inmediata</h5>
                            <p class="text-muted">Nuestros equipos se desplazan al lugar para entender exactamente qué ayuda se necesita.</p>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="d-flex mb-5">
                        <div class="step-num me-4">2</div>
                        <div>
                            <h5 class="fw-bold">Movilización de Ayuda</h5>
                            <p class="text-muted">Activamos nuestros centros de acopio y voluntarios especializados.</p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="d-flex mb-5">
                        <div class="step-num me-4">3</div>
                        <div>
                            <h5 class="fw-bold">Intervención en Terreno</h5>
                            <p class="text-muted">Entregamos alimentos, salud, agua y apoyo psicosocial a los afectados.</p>
                        </div>
                    </div>
                    <!-- Step 4 -->
                    <div class="d-flex">
                        <div class="step-num me-4">4</div>
                        <div>
                            <h5 class="fw-bold">Recuperación</h5>
                            <p class="text-muted">Acompañamos a la comunidad para que pueda volver a la normalidad lo antes posible.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="p-5 rounded-5 shadow-lg position-relative overflow-hidden" style="background: var(--gris-oscuro); color: white;">
                    <h2 class="fw-bold mb-4">¿Cómo llega tu ayuda?</h2>
                    <p class="opacity-75 mb-4 fs-5">Cuando ocurre una emergencia en el Huila, nuestra respuesta es coordinada y eficiente gracias a una red de miles de voluntarios preparados para actuar.</p>
                    <a href="{{ route('voluntariado') }}" class="btn btn-outline-light rounded-pill px-4">Ver Voluntariado</a>
                    <i class="fas fa-truck-loading position-absolute" style="bottom: -10px; right: -10px; font-size: 10rem; opacity: 0.1;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Did you know Section -->
<section class="py-5 bg-danger text-white overflow-hidden position-relative">
    <div class="container position-relative z-1 py-4">
        <div class="row align-items-center">
            <div class="col-lg-2 text-center mb-4 mb-lg-0">
                <i class="fas fa-lightbulb fa-5x opacity-50"></i>
            </div>
            <div class="col-lg-10">
                <h3 class="fw-bold mb-3">¿Sabías que?</h3>
                <p class="fs-4 mb-0">El emblema de la Cruz Roja fue adoptado en 1863 como símbolo de protección neutral para quienes ayudan a los heridos en batalla. Hoy es uno de los símbolos más respetados del mundo.</p>
            </div>
        </div>
    </div>
    <div class="position-absolute top-0 end-0 opacity-10" style="font-size: 20rem; transform: rotate(15deg);">+</div>
</section>

<!-- Call to Action -->
<section class="py-5">
    <div class="container py-5">
        <div class="card border-0 rounded-5 shadow-2xl p-5 text-center bg-white overflow-hidden position-relative border">
            <div class="position-relative z-1 py-4">
                <h2 class="display-3 fw-bold mb-4" style="color: var(--cruz-roja);">Sé el Héroe que Alguien Necesita</h2>
                <p class="lead text-muted mb-5 max-w-2xl mx-auto">La Acción Humanitaria no solo es nuestra labor, es la tuya también. Cada aporte cuenta para salvar una vida.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="{{ route('voluntariado') }}" class="btn btn-danger btn-lg rounded-pill px-5 shadow-lg" style="background: var(--cruz-roja);">Inscribirme Como Voluntario</a>
                    <a href="{{ route('home') }}" class="btn btn-outline-dark btn-lg rounded-pill px-5">Regresar al Inicio</a>
                </div>
            </div>
            <div class="decoration bg-danger-subtle position-absolute" style="width: 300px; height: 300px; border-radius: 50%; top: -150px; right: -150px; opacity: 0.5;"></div>
            <div class="decoration bg-danger-subtle position-absolute" style="width: 200px; height: 200px; border-radius: 50%; bottom: -100px; left: -100px; opacity: 0.3;"></div>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    .hover-up {
        transition: all 0.3s ease;
    }
    .hover-up:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(237, 28, 36, 0.1) !important;
    }

    .principle-card {
        transition: all 0.3s ease;
        cursor: default;
        border: 1px solid transparent !important;
    }
    .principle-card:hover {
        background: #ED1C24 !important;
        color: white !important;
        transform: scale(1.05);
    }
    .principle-card:hover p, .principle-card:hover h5 {
        color: white !important;
    }
    .principle-icon {
        color: #ED1C24;
        transition: all 0.3s ease;
    }
    .principle-card:hover .principle-icon {
        color: white;
    }

    .step-num {
        width: 50px;
        height: 50px;
        background: #ED1C24;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
        flex-shrink: 0;
        box-shadow: 0 5px 15px rgba(237, 28, 36, 0.3);
    }

    .timeline {
        position: relative;
    }
    .timeline::before {
        content: '';
        position: absolute;
        left: 24px;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #dee2e6;
        z-index: 0;
    }

    .shadow-2xl {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    }

    .max-w-2xl {
        max-width: 700px;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection
