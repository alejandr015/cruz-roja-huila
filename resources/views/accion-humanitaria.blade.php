@extends('layouts.app')

@section('title', 'Acción Humanitaria - Cruz Roja Huila')

@section('content')
<!-- Hero Section Premium -->
<section class="py-5 text-white position-relative overflow-hidden" style="min-height: 500px; background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('reales/real-20.jpeg') }}'); background-size: cover; background-position: center;">
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-8 anime-fade-up">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white opacity-75 text-decoration-none">Inicio</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Acción Humanitaria</li>
                    </ol>
                </nav>
                <h1 class="display-3 fw-bold mb-4">Acción Humanitaria</h1>
                <p class="lead mb-0 fs-4 opacity-90">Protegiendo la vida y la dignidad en los momentos más difíciles. Nuestra misión es aliviar el sufrimiento humano con imparcialidad, neutralidad e independencia absoluta.</p>
                <div class="mt-5">
                    <a href="#principios" class="btn btn-danger btn-lg rounded-pill px-5 py-3 shadow-lg me-3 fw-bold">Nuestros Principios</a>
                    <a href="#proceso" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-bold">Cómo Ayudamos</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Impact Section -->
<section class="py-5 bg-white position-relative" style="margin-top: -60px; border-radius: 60px 60px 0 0; z-index: 10; box-shadow: 0 -20px 40px rgba(0,0,0,0.05);">
    <div class="container py-4">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
                <div class="p-3">
                    <h2 class="display-4 fw-bold text-danger mb-0">37</h2>
                    <p class="text-muted fw-bold text-uppercase small" style="letter-spacing: 1px;">Municipios Atendidos</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-3">
                    <h2 class="display-4 fw-bold text-danger mb-0">1.2k+</h2>
                    <p class="text-muted fw-bold text-uppercase small" style="letter-spacing: 1px;">Voluntarios Activos</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-3">
                    <h2 class="display-4 fw-bold text-danger mb-0">50k</h2>
                    <p class="text-muted fw-bold text-uppercase small" style="letter-spacing: 1px;">Personas Ayudadas</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-3">
                    <h2 class="display-4 fw-bold text-danger mb-0">24/7</h2>
                    <p class="text-muted fw-bold text-uppercase small" style="letter-spacing: 1px;">Disponibilidad</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Info Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-6">
                <h6 class="text-danger fw-bold text-uppercase mb-3" style="letter-spacing: 2px;">Compromiso Vital</h6>
                <h2 class="display-5 fw-bold mb-4" style="color: var(--azul-institucional);">Salvando Vidas en el Huila</h2>
                <p class="fs-5 text-muted mb-5">La Acción Humanitaria de la Cruz Roja Colombiana Seccional Huila es el conjunto de actividades destinadas a salvar vidas, aliviar el sufrimiento y mantener la dignidad humana durante y después de crisis y desastres.</p>
                
                <div class="d-flex align-items-start mb-5 hover-up p-3 rounded-4 bg-light">
                    <div class="bg-danger text-white p-3 rounded-circle me-4 shadow-sm">
                        <i class="fas fa-shield-alt fa-lg"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Protección y Auxilio Institucional</h5>
                        <p class="text-muted mb-0">No solo entregamos ayuda material, también protegemos el derecho a la vida y la integridad física mediante el respeto al DIH.</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-start hover-up p-3 rounded-4 bg-light">
                    <div class="bg-danger text-white p-3 rounded-circle me-4 shadow-sm">
                        <i class="fas fa-balance-scale fa-lg"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Neutralidad e Imparcialidad</h5>
                        <p class="text-muted mb-0">Ayudamos a todos por igual, garantizando que la ayuda llegue a quien más la necesita sin discriminación alguna.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card-action hover-up">
                            <i class="fas fa-house-damage fa-3x mb-3 text-danger"></i>
                            <h5>Gestión del Riesgo</h5>
                            <p class="small text-muted mb-0">Prevención, preparación y respuesta rápida ante desastres naturales en territorio.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-action hover-up">
                            <i class="fas fa-medkit fa-3x mb-3 text-danger"></i>
                            <h5>Salud Médica</h5>
                            <p class="small text-muted mb-0">Brigadas de salud primaria en zonas de difícil acceso y contextos de conflicto.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-action hover-up">
                            <i class="fas fa-box-open fa-3x mb-3 text-danger"></i>
                            <h5>Asistencia Nutricional</h5>
                            <p class="small text-muted mb-0">Entrega de kits alimentarios y apoyo nutricional a poblaciones vulnerables.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-action hover-up">
                            <i class="fas fa-faucet fa-3x mb-3 text-danger"></i>
                            <h5>Agua y Saneamiento</h5>
                            <p class="small text-muted mb-0">Garantizamos el acceso a agua segura y condiciones dignas de higiene.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Principles Section -->
<section id="principios" class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3" style="color: var(--azul-institucional);">Nuestros 7 Principios Fundamentales</h2>
            <p class="lead text-muted max-w-700 mx-auto">La base ética de nuestro movimiento internacional, garantizando la confianza y la efectividad de nuestra labor.</p>
        </div>
        <div class="row g-4 justify-content-center">
            @php
                $principios = [
                    ['icon' => 'fa-hands', 'title' => 'Humanidad', 'color' => 'danger'],
                    ['icon' => 'fa-balance-scale', 'title' => 'Imparcialidad', 'color' => 'danger'],
                    ['icon' => 'fa-user-shield', 'title' => 'Neutralidad', 'color' => 'danger'],
                    ['icon' => 'fa-certificate', 'title' => 'Independencia', 'color' => 'danger'],
                    ['icon' => 'fa-heart', 'title' => 'Voluntariado', 'color' => 'danger'],
                    ['icon' => 'fa-users', 'title' => 'Unidad', 'color' => 'danger'],
                    ['icon' => 'fa-globe', 'title' => 'Universalidad', 'color' => 'danger'],
                ];
            @endphp

            @foreach($principios as $p)
            <div class="col-md-4 col-lg-3">
                <div class="principle-card-premium hover-up">
                    <div class="principle-icon-circle shadow-sm">
                        <i class="fas {{ $p['icon'] }}"></i>
                    </div>
                    <h5 class="fw-bold mb-0">{{ $p['title'] }}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 mb-5">
    <div class="container py-5 text-center">
        <div class="bg-danger text-white rounded-5 p-5 shadow-lg position-relative overflow-hidden">
            <h2 class="display-3 fw-bold mb-4">Sé el Héroe que Alguien Necesita</h2>
            <p class="lead mb-5 px-lg-5">Cada minuto cuenta cuando se trata de salvar vidas. Tu apoyo como voluntario es el motor de nuestra acción humanitaria en el Huila.</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="{{ route('voluntariado') }}" class="btn btn-light btn-lg rounded-pill px-5 py-3 fw-bold text-danger transition-scale">Inscribirme Ahora</a>
                <a href="{{ route('home') }}" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-bold">Volver al Inicio</a>
            </div>
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
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }

    .card-action {
        background: white;
        padding: 40px 30px;
        border-radius: 25px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        height: 100%;
        text-align: center;
        border: 1px solid #f0f0f0;
    }
    .card-action h5 { margin-top: 15px; font-weight: 700; }

    .principle-card-premium {
        background: white;
        padding: 25px;
        border-radius: 20px;
        text-align: center;
        border: 2px solid transparent;
        transition: all 0.3s;
        box-shadow: 0 10px 20px rgba(0,0,0,0.02);
    }
    .principle-card-premium:hover {
        border-color: var(--cruz-roja);
        background: white;
    }

    .principle-icon-circle {
        width: 60px;
        height: 60px;
        background: var(--gris-fondo);
        color: var(--cruz-roja);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin: 0 auto 15px;
        transition: all 0.3s;
    }
    .principle-card-premium:hover .principle-icon-circle {
        background: var(--cruz-roja);
        color: white;
    }

    .transition-scale:hover {
        transform: scale(1.05);
    }

    .max-w-700 { max-width: 700px; }
</style>
@endsection

