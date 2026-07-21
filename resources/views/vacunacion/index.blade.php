@extends('layouts.app')

@section('title', 'Servicios de Vacunación - Cruz Roja Huila')

@section('content')

<!-- Hero Section Vacunación Premium -->
<section class="py-5 text-white position-relative overflow-hidden" style="min-height: 520px; background-image: linear-gradient(rgba(0,45,114,0.65), rgba(0,45,114,0.45)), url('{{ asset('reales/real-16.jpeg') }}'); background-size: cover; background-position: center;">
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-8 animate-fade-up">
                <span class="badge bg-danger mb-4 px-4 py-2 rounded-pill shadow-lg" style="letter-spacing: 2px; font-weight: 700; text-transform: uppercase;">
                    <i class="fas fa-shield-virus me-2"></i> Salud y Prevención
                </span>
                <h1 class="display-3 fw-bold mb-4">Portafolio de Vacunación</h1>
                <p class="lead mb-5 fs-4 opacity-90" style="max-width: 800px;">
                    Protegemos la salud de tu familia con un esquema de inmunización completo, profesional y bajo los más altos estándares de seguridad.
                </p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="#categorias" class="btn btn-danger btn-lg rounded-pill px-5 py-3 shadow-lg fw-bold transition-scale">
                        Ver Categorías
                    </a>
                    <a href="https://wa.me/573172971272" target="_blank" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-bold">
                        Agendar Cita <i class="fab fa-whatsapp ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categorías de Vacunación -->
<section id="categorias" class="py-5 bg-white shadow-top" style="margin-top: -60px; border-radius: 60px 60px 0 0; position: relative; z-index: 10;">
    <div class="container py-5">
        
        <div class="text-center mb-5 pb-3">
            <h6 class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 3px;">Servicios Especializados</h6>
            <h2 class="display-5 fw-bold" style="color: var(--azul-institucional);">Vacunación para Cada Etapa de la Vida</h2>
            <div class="mx-auto bg-danger mt-3" style="width: 60px; height: 4px; border-radius: 2px;"></div>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Gestantes y Niños -->
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('vacunacion.ninos-gestantes') }}" class="vacunacion-premium-card">
                    <div class="vacunacion-icon-wrapper bg-soft-primary">
                        <i class="fas fa-baby"></i>
                    </div>
                    <div class="vacunacion-content">
                        <h4>Gestantes y Niños</h4>
                        <p class="text-muted small">Protección vital desde el inicio de la vida y durante el crecimiento.</p>
                        <span class="view-more">Ver esquema <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>

            <!-- Adolescentes -->
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('vacunacion.adolescentes') }}" class="vacunacion-premium-card">
                    <div class="vacunacion-icon-wrapper bg-soft-success">
                        <i class="fas fa-child"></i>
                    </div>
                    <div class="vacunacion-content">
                        <h4>Adolescentes</h4>
                        <p class="text-muted small">Refuerzos necesarios para una transición saludable a la adultez.</p>
                        <span class="view-more">Ver esquema <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>

            <!-- Adultos -->
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('vacunacion.adultos') }}" class="vacunacion-premium-card">
                    <div class="vacunacion-icon-wrapper bg-soft-warning">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="vacunacion-content">
                        <h4>Adultos</h4>
                        <p class="text-muted small">Esquemas preventivos para mantener una vida activa y protegida.</p>
                        <span class="view-more">Ver esquema <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>

            <!-- Riesgos Laborales -->
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('vacunacion.riesgos') }}" class="vacunacion-premium-card">
                    <div class="vacunacion-icon-wrapper bg-soft-danger">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="vacunacion-content">
                        <h4>Riesgos Laborales</h4>
                        <p class="text-muted small">Cumplimiento de normatividad y salud ocupacional empresarial.</p>
                        <span class="view-more">Ver esquema <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Beneficios y FAQ -->
<section class="py-5 bg-light overflow-hidden">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4" style="color: var(--azul-institucional);">Preguntas Frecuentes</h2>
                <p class="lead text-muted mb-5">Resolvemos tus dudas sobre el proceso de inmunización para que vengas con total tranquilidad.</p>
                
                <div class="accordion accordion-flush custom-accordion" id="accordionVacunacion">
                    <div class="accordion-item mb-3 rounded-4 shadow-sm border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                ¿Para qué sirven las vacunas?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionVacunacion">
                            <div class="accordion-body text-muted">
                                Las vacunas entrenan al sistema inmunológico para combatir virus y bacterias específicos antes de que causen enfermedades graves, protegiendo tanto al individuo como a la comunidad.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 rounded-4 shadow-sm border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                ¿Necesito agendar cita previa?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionVacunacion">
                            <div class="accordion-body text-muted">
                                Sí, es lo más recomendable para garantizar la disponibilidad del biológico y agilizar tu atención. Puedes hacerlo vía WhatsApp o telefónica.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 rounded-4 shadow-sm border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                ¿Qué debo llevar el día de mi cita?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionVacunacion">
                            <div class="accordion-body text-muted">
                                Debes portar tu documento de identidad, carné de vacunación prepio (si lo tienes) y el carné de tu EPS o servicio de salud.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="p-4 p-md-5 bg-white shadow-lg rounded-5 border-start border-danger border-5">
                    <h3 class="fw-bold mb-4" style="color: var(--azul-institucional);">Importancia del Carné</h3>
                    <p class="text-muted">El carné de vacunación es un documento personal e intransferible que registra todas las inmunizaciones recibidas. Es fundamental para:</p>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-danger me-3 fs-5"></i>
                            <span>Seguimiento riguroso del esquema de salud.</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-danger me-3 fs-5"></i>
                            <span>Trámites escolares y de ingreso laboral.</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-danger me-3 fs-5"></i>
                            <span>Requisito indispensable para viajes internacionales.</span>
                        </li>
                    </ul>
                    <div class="mt-5 text-center">
                        <img src="{{ asset('reales/real-31.jpeg') }}" class="img-fluid rounded-4 shadow" alt="Médico revisando carné">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    .animate-fade-up { animation: fadeUp 1s ease-out forwards; }
    @keyframes fadeUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }

    .shadow-top { box-shadow: 0 -15px 40px rgba(0,0,0,0.05); }

    .vacunacion-premium-card {
        display: block;
        background: white;
        padding: 40px 30px;
        border-radius: 35px;
        text-align: center;
        text-decoration: none;
        color: inherit;
        height: 100%;
        border: 1px solid #f8f9fa;
        box-shadow: 0 10px 30px rgba(0,0,0,0.02);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        position: relative;
        overflow: hidden;
    }

    .vacunacion-premium-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 60px rgba(0,0,0,0.08);
        border-color: var(--cruz-roja);
    }

    .vacunacion-icon-wrapper {
        width: 100px;
        height: 100px;
        margin: 0 auto 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 30px;
        font-size: 2.5rem;
        transition: all 0.4s ease;
    }

    .vacunacion-premium-card:hover .vacunacion-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .bg-soft-primary { background: #e7f1ff; color: #0d6efd; }
    .bg-soft-success { background: #e6f7ef; color: #198754; }
    .bg-soft-warning { background: #fff9e6; color: #ffc107; }
    .bg-soft-danger { background: #feebeb; color: #dc3545; }

    .vacunacion-content h4 {
        font-weight: 800;
        color: var(--azul-institucional);
        margin-bottom: 15px;
    }

    .vacunacion-content p {
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .view-more {
        display: inline-block;
        font-weight: 700;
        color: var(--cruz-roja);
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 1px;
    }

    /* Accordion Style */
    .custom-accordion .accordion-button {
        padding: 20px 25px;
        background: white;
        border: none;
        box-shadow: none !important;
    }
    
    .custom-accordion .accordion-button:not(.collapsed) {
        color: var(--cruz-roja);
        background: #fffcfc;
    }

    .custom-accordion .accordion-button::after {
        background-size: 1rem;
    }

    .transition-scale:hover { transform: scale(1.05); }
</style>
@endsection
