@extends('layouts.app')

@section('title', 'Socorristas - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-voluntariado" style="background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Socorristas</h1>
        <p class="lead">Grupo de respuesta inmediata ante emergencias</p>
    </div>
</section>

<!-- Contenido Principal -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <!-- ¿Qué es? -->
                <div class="info-section mb-5">
                    <h2 class="section-title-vol">¿Qué son los Socorristas?</h2>
                    <p class="lead-text">
                        Los Socorristas de la Cruz Roja son voluntarios altamente capacitados en atención prehospitalaria 
                        y respuesta a emergencias. Son el primer frente de acción ante desastres, accidentes y situaciones 
                        que requieren asistencia médica inmediata.
                    </p>
                    <p>
                        Actúan como primeros respondientes en eventos masivos, desastres naturales, accidentes de tránsito 
                        y cualquier situación donde se requiera atención médica básica y avanzada. Su labor salva vidas y 
                        proporciona estabilización a pacientes antes de ser trasladados a centros médicos.
                    </p>
                </div>

                <!-- Funciones -->
                <div class="info-section mb-5">
                    <h2 class="section-title-vol">Funciones Principales</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="funcion-card">
                                <div class="funcion-icon">
                                    <i class="fas fa-ambulance"></i>
                                </div>
                                <h5>Atención Prehospitalaria</h5>
                                <p>Brindar primeros auxilios y atención médica básica en el lugar de la emergencia.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="funcion-card">
                                <div class="funcion-icon">
                                    <i class="fas fa-house-damage"></i>
                                </div>
                                <h5>Respuesta a Desastres</h5>
                                <p>Participar en operaciones de búsqueda, rescate y atención durante desastres naturales.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="funcion-card">
                                <div class="funcion-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <h5>Cobertura de Eventos</h5>
                                <p>Prestar servicios de atención médica en eventos deportivos, culturales y masivos.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="funcion-card">
                                <div class="funcion-icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <h5>Capacitación Comunitaria</h5>
                                <p>Enseñar primeros auxilios y prevención de riesgos a la comunidad.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Requisitos -->
                <div class="info-section mb-5">
                    <h2 class="section-title-vol">Requisitos para ser Socorrista</h2>
                    <ul class="requisitos-list">
                        <li><i class="fas fa-check-circle"></i> Tener entre 18 y 45 años</li>
                        <li><i class="fas fa-check-circle"></i> Disponibilidad de tiempo para capacitaciones y servicios</li>
                        <li><i class="fas fa-check-circle"></i> Buena condición física y mental</li>
                        <li><i class="fas fa-check-circle"></i> Compromiso humanitario y vocación de servicio</li>
                        <li><i class="fas fa-check-circle"></i> Completar el curso de inducción y formación básica</li>
                    </ul>
                </div>

                <!-- Formación -->
                <div class="info-section mb-5">
                    <h2 class="section-title-vol">Formación y Capacitación</h2>
                    <div class="formacion-timeline">
                        <div class="timeline-item">
                            <div class="timeline-badge">1</div>
                            <div class="timeline-content">
                                <h5>Curso de Inducción</h5>
                                <p>Introducción a la Cruz Roja, Derecho Internacional Humanitario y principios fundamentales.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-badge">2</div>
                            <div class="timeline-content">
                                <h5>Primeros Auxilios Avanzados</h5>
                                <p>RCP, manejo de trauma, inmovilizaciones, control de hemorragias y shock.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-badge">3</div>
                            <div class="timeline-content">
                                <h5>Atención Prehospitalaria</h5>
                                <p>Evaluación de pacientes, triaje, manejo de emergencias médicas y trauma.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-badge">4</div>
                            <div class="timeline-content">
                                <h5>Capacitaciones Continuas</h5>
                                <p>Actualizaciones, simulacros, entrenamiento en nuevas técnicas y protocolos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Beneficios -->
                <div class="info-section mb-5">
                    <h2 class="section-title-vol">Beneficios de ser Socorrista</h2>
                    <div class="beneficios-grid">
                        <div class="beneficio-item">
                            <i class="fas fa-certificate text-danger"></i>
                            <span>Certificación oficial como Socorrista de Cruz Roja</span>
                        </div>
                        <div class="beneficio-item">
                            <i class="fas fa-graduation-cap text-danger"></i>
                            <span>Capacitación gratuita en primeros auxilios y emergencias</span>
                        </div>
                        <div class="beneficio-item">
                            <i class="fas fa-hands-helping text-danger"></i>
                            <span>Experiencia práctica en situaciones reales</span>
                        </div>
                        <div class="beneficio-item">
                            <i class="fas fa-users text-danger"></i>
                            <span>Ser parte de una red internacional de voluntarios</span>
                        </div>
                        <div class="beneficio-item">
                            <i class="fas fa-heart text-danger"></i>
                            <span>Satisfacción de salvar vidas y ayudar a la comunidad</span>
                        </div>
                        <div class="beneficio-item">
                            <i class="fas fa-id-card text-danger"></i>
                            <span>Carnet de identificación como voluntario activo</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    .page-header-voluntariado {
        padding: 80px 0;
    }

    .section-title-vol {
        color: #1a2332;
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title-vol::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background: #ED1C24;
    }

    .lead-text {
        font-size: 1.2rem;
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .info-section p {
        color: #666;
        line-height: 1.8;
        font-size: 1.05rem;
    }

    /* Funciones Cards */
    .funcion-card {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        transition: all 0.3s;
        height: 100%;
        border-left: 4px solid #ED1C24;
    }

    .funcion-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(237, 28, 36, 0.15);
    }

    .funcion-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
    }

    .funcion-icon i {
        font-size: 1.8rem;
        color: white;
    }

    .funcion-card h5 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .funcion-card p {
        color: #666;
        margin: 0;
        font-size: 0.95rem;
    }

    /* Requisitos */
    .requisitos-list {
        list-style: none;
        padding: 0;
    }

    .requisitos-list li {
        padding: 12px 0;
        font-size: 1.05rem;
        color: #555;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .requisitos-list i {
        color: #ED1C24;
        font-size: 1.3rem;
    }

    /* Timeline */
    .formacion-timeline {
        position: relative;
        padding-left: 50px;
    }

    .formacion-timeline::before {
        content: '';
        position: absolute;
        left: 20px;
        top: 0;
        bottom: 0;
        width: 3px;
        background: #ED1C24;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 30px;
    }

    .timeline-badge {
        position: absolute;
        left: -40px;
        width: 40px;
        height: 40px;
        background: #ED1C24;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 1.2rem;
        z-index: 1;
    }

    .timeline-content {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
    }

    .timeline-content h5 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .timeline-content p {
        margin: 0;
        color: #666;
    }

    /* Beneficios */
    .beneficios-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .beneficio-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 10px;
        transition: all 0.3s;
    }

    .beneficio-item:hover {
        background: white;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
    }

    .beneficio-item i {
        font-size: 1.8rem;
    }

    .beneficio-item span {
        color: #555;
        font-size: 1rem;
    }

    @media (max-width: 768px) {
        .page-header-voluntariado {
            padding: 60px 0;
        }

        .formacion-timeline {
            padding-left: 30px;
        }

        .timeline-badge {
            left: -30px;
            width: 35px;
            height: 35px;
            font-size: 1rem;
        }

        .beneficios-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection