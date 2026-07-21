@extends('layouts.app')

@section('title', 'Servicios de Salud - Cruz Roja Huila')

@section('content')

<!-- Hero Section Salud Premium -->
<section class="py-5 text-white position-relative overflow-hidden" style="min-height: 520px; background-image: linear-gradient(rgba(0,45,114,0.8), rgba(0,45,114,0.6)), url('reales/real-20.jpeg'); background-size: cover; background-position: center;">
    <!-- Animación EKG Estilizada -->
    <div class="ekg-container">
        <svg class="ekg-svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="ekg-path" d="M0,50 L200,50 L210,40 L220,60 L230,20 L240,80 L250,40 L260,50 L500,50 L510,40 L520,60 L530,20 L540,80 L550,40 L560,50 L800,50 L810,40 L820,60 L830,20 L840,80 L850,40 L860,50 L1000,50" />
        </svg>
    </div>

    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-8 animate-fade-up">
                <span class="badge bg-danger mb-4 px-4 py-2 rounded-pill shadow-lg" style="letter-spacing: 2px; font-weight: 700;">
                    <i class="fas fa-heartbeat me-2"></i> SALUD Y BIENESTAR
                </span>
                <h1 class="display-3 fw-bold mb-4">Servicios Médicos de Confianza</h1>
                <p class="lead mb-5 fs-4 opacity-90" style="max-width: 800px;">
                    Cuidamos lo que más te importa con tecnología avanzada y la calidez humana que nos caracteriza. Tu salud está en las mejores manos.
                </p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="https://wa.me/573172971272" target="_blank" class="btn btn-danger btn-lg rounded-pill px-5 py-3 shadow-lg fw-bold transition-scale text-decoration-none d-inline-flex align-items-center">
                        Agendar Cita Médica <i class="fab fa-whatsapp ms-2 fs-4"></i>
                    </a>
                    <a href="#servicios" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-bold">Conocer Servicios</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Servicios de Salud -->
<section id="servicios" class="py-5 bg-white shadow-top" style="margin-top: -60px; border-radius: 60px 60px 0 0; position: relative; z-index: 10;">
    <div class="container py-5">
        
        <div class="text-center mb-5 pb-3">
            <h6 class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 3px;">Nuestra Oferta</h6>
            <h2 class="display-5 fw-bold" style="color: var(--azul-institucional);">Especialidades Médicas</h2>
            <div class="mx-auto bg-danger mt-3" style="width: 60px; height: 4px; border-radius: 2px;"></div>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Vacunación -->
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('salud.vacunaciones') }}" class="salud-card-premium hover-up">
                    <div class="salud-card-icon">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h3>Vacunación</h3>
                    <p class="text-muted small">Esquema completo y vacunas especiales con los más altos estándares.</p>
                    <span class="text-danger fw-bold fs-xs text-uppercase">Ver más <i class="fas fa-arrow-right ms-1"></i></span>
                </a>
            </div>

            <!-- Laboratorio Clínico -->
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('salud.laboratorios-clinicos') }}" class="salud-card-premium hover-up">
                    <div class="salud-card-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Laboratorio</h3>
                    <p class="text-muted small">Resultados precisos y rápidos con tecnología de última generación.</p>
                    <span class="text-danger fw-bold fs-xs text-uppercase">Ver más <i class="fas fa-arrow-right ms-1"></i></span>
                </a>
            </div>

            <!-- Electrocardiogramas -->
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('salud.pruebas-especiales') }}" class="salud-card-premium hover-up">
                    <div class="salud-card-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Diagnóstico</h3>
                    <p class="text-muted small">Electrocardiogramas y pruebas especiales para el cuidado de tu corazón.</p>
                    <span class="text-danger fw-bold fs-xs text-uppercase">Ver más <i class="fas fa-arrow-right ms-1"></i></span>
                </a>
            </div>

            <!-- Consulta General -->
            <div class="col-md-6 col-lg-3">
                <a href="https://wa.me/573172971272" target="_blank" class="salud-card-premium hover-up text-decoration-none">
                    <div class="salud-card-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Consultas</h3>
                    <p class="text-muted small">Atención médica general con profesionales comprometidos con tu salud.</p>
                    <span class="text-danger fw-bold fs-xs text-uppercase">Agendar vía WhatsApp <i class="fab fa-whatsapp ms-1"></i></span>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Beneficios Salud -->
<section class="py-5 bg-light position-relative overflow-hidden">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="position-relative">
                    <div class="bg-white p-4 rounded-5 shadow-lg mb-4 hover-up">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-danger-subtle p-3 rounded-circle me-3">
                                <i class="fas fa-clock text-danger fa-lg"></i>
                            </div>
                            <h5 class="fw-bold mb-0">Atención Oportuna</h5>
                        </div>
                        <p class="text-muted mb-0">Minimizamos los tiempos de espera para que recibas tu atención cuando más la necesitas.</p>
                    </div>
                    <div class="bg-white p-4 rounded-5 shadow-lg mb-4 hover-up">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary-subtle p-3 rounded-circle me-3">
                                <i class="fas fa-hand-holding-heart text-primary fa-lg" style="color: var(--azul-institucional) !important;"></i>
                            </div>
                            <h5 class="fw-bold mb-0">Calidez Humana</h5>
                        </div>
                        <p class="text-muted mb-0">No eres un paciente más, eres parte de nuestra comunidad y te tratamos con el respeto que mereces.</p>
                    </div>
                    <div class="bg-white p-4 rounded-5 shadow-lg hover-up">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success-subtle p-3 rounded-circle me-3">
                                <i class="fas fa-shield-virus text-success fa-lg"></i>
                            </div>
                            <h5 class="fw-bold mb-0">Seguridad Biológica</h5>
                        </div>
                        <p class="text-muted mb-0">Rigurosos protocolos de desinfección y seguridad para tu tranquilidad y la de tu familia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2 class="display-5 fw-bold mb-4" style="color: var(--azul-institucional);">Tecnología al Servicio de la Vida</h2>
                <p class="lead text-muted mb-5">Nuestros servicios de salud integran la experiencia de profesionales destacados con equipos biomédicos modernos, garantizando diagnósticos certeros.</p>
                <ul class="list-unstyled mb-5">
                    <li class="mb-3 d-flex align-items-center fw-bold text-dark">
                        <i class="fas fa-check-circle text-danger me-3"></i> Convenios con las principales EPS y empresas.
                    </li>
                    <li class="mb-3 d-flex align-items-center fw-bold text-dark">
                        <i class="fas fa-check-circle text-danger me-3"></i> Resultados de laboratorio disponibles en línea.
                    </li>
                    <li class="mb-3 d-flex align-items-center fw-bold text-dark">
                        <i class="fas fa-check-circle text-danger me-3"></i> Personal altamente capacitado y certificado.
                    </li>
                </ul>
                <a href="{{ route('contacto') }}" class="btn btn-outline-danger btn-lg rounded-pill px-5 fw-bold">Contactar con un Asesor</a>
            </div>
        </div>
    </div>
</section>

<!-- Modal Agendar Cita Modernizado -->
<div class="modal fade" id="modalAgendarCita" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-5 shadow-2xl">
            <div class="modal-header bg-dark text-white border-0 py-4 px-5" style="background: linear-gradient(135deg, var(--azul-institucional) 0%, #1A2332 100%) !important;">
                <div>
                    <h4 class="modal-title fw-bold mb-1"><i class="fas fa-calendar-medical me-2"></i>Agendar Cita</h4>
                    <p class="text-white-50 small mb-0">Completa tus datos para coordinar tu atención médica.</p>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <form action="{{ route('salud.agendar-cita') }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="nombre" class="form-control rounded-4 border-light bg-light" id="floatNombre" placeholder="Nombre Completo" required>
                                <label for="floatNombre">Nombre Completo</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control rounded-4 border-light bg-light" id="floatEmail" placeholder="Correo Electrónico" required>
                                <label for="floatEmail">Correo Electrónico</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="tel" name="telefono" class="form-control rounded-4 border-light bg-light" id="floatTel" placeholder="Teléfono" required>
                                <label for="floatTel">Teléfono / WhatsApp</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <select name="servicio" class="form-select rounded-4 border-light bg-light" id="floatServicio" required>
                                    <option value="" selected disabled>Selecciona un servicio</option>
                                    <option value="vacunacion">Vacunación</option>
                                    <option value="laboratorio">Laboratorio Clínico</option>
                                    <option value="electrocardiograma">Electrocardiograma</option>
                                    <option value="examenes-rutina">Exámenes de Rutina</option>
                                </select>
                                <label for="floatServicio">Servicio de Interés</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="date" name="fecha_preferida" class="form-control rounded-4 border-light bg-light" id="floatFecha" min="{{ date('Y-m-d') }}" required>
                                <label for="floatFecha">Fecha Tentativa</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <select name="hora_preferida" class="form-select rounded-4 border-light bg-light" id="floatHora">
                                    <option value="manana">Mañana (7:00 AM - 12:00 PM)</option>
                                    <option value="tarde">Tarde (2:00 PM - 5:00 PM)</option>
                                </select>
                                <label for="floatHora">Jornada Preferida</label>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-danger btn-lg rounded-pill px-5 py-3 fw-bold shadow-lg w-100 mb-3">
                                Confirmar Solicitud de Cita
                            </button>
                            <p class="text-muted small mb-0">Un asesor te contactará en breve para confirmar la disponibilidad exacta.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    .animate-fade-up { animation: fadeUp 1s ease-out forwards; }
    @keyframes fadeUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }

    /* EKG Animation Animation */
    .ekg-container {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 150px;
        z-index: 0;
        opacity: 0.2;
    }
    .ekg-svg { width: 200%; height: 100%; animation: slideEKG 10s linear infinite; }
    .ekg-path {
        fill: none;
        stroke: #fff;
        stroke-width: 2;
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: dashEKG 4s linear infinite;
    }
    @keyframes slideEKG { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    @keyframes dashEKG { to { stroke-dashoffset: 0; } }

    .salud-card-premium {
        background: white;
        padding: 40px 30px;
        border-radius: 30px;
        text-align: center;
        text-decoration: none;
        color: inherit;
        display: block;
        height: 100%;
        border: 1px solid #f0f0f0;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        transition: all 0.4s;
    }
    .salud-card-premium:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.08);
        border-color: var(--cruz-roja);
    }
    .salud-card-icon {
        width: 65px;
        height: 65px;
        background: var(--gris-fondo);
        color: var(--cruz-roja);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin: 0 auto 25px;
        transition: all 0.3s;
    }
    .salud-card-premium:hover .salud-card-icon {
        background: var(--cruz-roja);
        color: white;
        transform: scale(1.1) rotate(10deg);
    }
    .salud-card-premium h3 { font-weight: 800; font-size: 1.3rem; margin-bottom: 12px; color: var(--azul-institucional); }
    
    .cursor-pointer { cursor: pointer; }
    .shadow-top { box-shadow: 0 -15px 40px rgba(0,0,0,0.05); }
    .shadow-2xl { box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); }

    .hover-up { transition: all 0.3s ease; }
    .hover-up:hover { transform: translateY(-8px); }
    .transition-scale:hover { transform: scale(1.05); }

    .form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown) {
        border-color: var(--cruz-roja) !important;
        box-shadow: none !important;
    }
</style>
@endsection
