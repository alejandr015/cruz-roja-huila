@extends('layouts.app')

@section('title', 'Dónde Estamos - Cruz Roja Huila')

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
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Dónde Estamos</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold mb-3">Dónde Estamos</h1>
                <p class="lead mb-0 fs-5 opacity-90">Nuestras instalaciones centrales y de atención al público en Neiva. Visítanos o comunícate con nosotros.</p>
            </div>
        </div>
    </div>
</section>

<!-- Location Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Info Column -->
            <div class="col-lg-5">
                <div class="bg-white p-4 p-md-5 rounded-5 shadow-sm h-100">
                    <h3 class="fw-bold mb-4" style="color: var(--azul-institucional);">Nuestra Sede Principal</h3>
                    <p class="text-muted mb-4">La sede de la Cruz Roja Colombiana - Seccional Huila está equipada para coordinar todas las operaciones de emergencia y ofrecer servicios de salud y capacitación educativa.</p>

                    <div class="location-details mt-4">
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
                </div>
            </div>

            <!-- Map Column -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm overflow-hidden rounded-5 h-100" style="min-height: 400px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1182.2612716172605!2d-75.28965039343715!3d2.9413340578505517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b745d06d3de19%3A0xedb6f5d6f4c3fd6b!2sCruz%20Roja%20Colombiana%20Seccional%20Huila!5e0!3m2!1ses-419!2sco!4v1713690000000!5m2!1ses-419!2sco" 
                        width="100%" height="100%" style="border:0; min-height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cobertura Section -->
<section class="py-5 bg-white">
    <div class="container py-4 text-center">
        <h6 class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 2px;">Nuestra Presencia</h6>
        <h2 class="display-6 fw-bold mb-4" style="color: var(--azul-institucional);">Cobertura en el Departamento</h2>
        <p class="lead text-muted max-w-700 mx-auto mb-5">Desde nuestra sede principal coordinamos y extendemos la labor humanitaria a los 37 municipios del departamento del Huila.</p>
        
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="p-4 rounded-4 bg-light border-0">
                    <i class="fas fa-truck-medical fa-2x text-danger mb-3"></i>
                    <h5 class="fw-bold">Respuesta Inmediata</h5>
                    <p class="text-muted small mb-0">Mantenemos equipos de socorro listos para desplazarse a cualquier municipio ante contingencias o desastres naturales.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded-4 bg-light border-0">
                    <i class="fas fa-stethoscope fa-2x text-danger mb-3"></i>
                    <h5 class="fw-bold">Brigadas de Salud</h5>
                    <p class="text-muted small mb-0">Llevamos servicios de vacunación, medicina general y laboratorios clínicos a las zonas más apartadas y vulnerables.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded-4 bg-light border-0">
                    <i class="fas fa-graduation-cap fa-2x text-danger mb-3"></i>
                    <h5 class="fw-bold">Educación Continua</h5>
                    <p class="text-muted small mb-0">Nuestros programas de técnicos laborales, diplomados y cursos están disponibles de forma presencial y virtual para todo el departamento.</p>
                </div>
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

    .icon-box {
        transition: transform 0.3s;
    }
    .location-details > div:hover .icon-box {
        transform: scale(1.1);
    }

    .max-w-700 { max-width: 700px; }
</style>
@endsection
