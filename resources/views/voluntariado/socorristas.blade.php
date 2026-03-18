@extends('layouts.app')

@section('title', 'Socorristas - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<style>
    .page-header-socorristas {
        background: linear-gradient(135deg, #a71115 0%, #5a0000 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    .sparks-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        pointer-events: none;
    }

    .spark {
        position: absolute;
        bottom: -20px;
        border-radius: 5px;
        opacity: 0;
    }

    @keyframes flySparks1 { 0% { opacity:1; transform:translateY(0) translateX(0) scale(1);} 100% { opacity:0; transform:translateY(-500px) translateX(50px) scale(0.2);} }
    @keyframes flySparks2 { 0% { opacity:1; transform:translateY(0) translateX(0) scale(1);} 100% { opacity:0; transform:translateY(-600px) translateX(-40px) scale(0.3);} }
    @keyframes flySparks3 { 0% { opacity:1; transform:translateY(0) translateX(0) scale(1.5);} 100% { opacity:0; transform:translateY(-400px) translateX(80px) scale(0.1);} }

    .sp-1 { left: 10%; width: 4px; height: 12px; animation: flySparks1 3s infinite 0.5s; background: #fff5cc; box-shadow: 0 0 10px #ffcc00;}
    .sp-2 { left: 25%; width: 3px; height: 10px; animation: flySparks2 4s infinite 1.2s; background: #ffcc00; box-shadow: 0 0 10px #ffaa00;}
    .sp-3 { left: 40%; width: 5px; height: 15px; animation: flySparks3 2.5s infinite 0s; background: #ffaa00; box-shadow: 0 0 15px #ff4400;}
    .sp-4 { left: 60%; width: 3px; height: 12px; animation: flySparks1 3.5s infinite 2s; background: #ffee88; box-shadow: 0 0 10px #ffcc00;}
    .sp-5 { left: 75%; width: 4px; height: 14px; animation: flySparks2 4.2s infinite 0.8s; background: #ff9900; box-shadow: 0 0 12px #ff3300;}
    .sp-6 { left: 90%; width: 2px; height: 8px; animation: flySparks3 3.8s infinite 1.5s; background: #ffeeaa; box-shadow: 0 0 8px #ffaa00;}
    .sp-7 { left: 15%; width: 5px; height: 16px; animation: flySparks1 2.8s infinite 2.5s; background: #ffbb00; box-shadow: 0 0 15px #ff5500;}
    .sp-8 { left: 50%; width: 3px; height: 10px; animation: flySparks2 4.5s infinite 0.3s; background: #ffdd44; box-shadow: 0 0 10px #ff8800;}
    .sp-9 { left: 80%; width: 4px; height: 14px; animation: flySparks3 3.2s infinite 1.8s; background: #ffaa00; box-shadow: 0 0 12px #ff4400;}
    .sp-10 { left: 35%; width: 3px; height: 12px; animation: flySparks1 4s infinite 0.9s; background: #ffcc22; box-shadow: 0 0 10px #ff9900;}
</style>

<section class="page-header-socorristas position-relative">
    <div class="sparks-container">
        <div class="spark sp-1"></div><div class="spark sp-2"></div><div class="spark sp-3"></div>
        <div class="spark sp-4"></div><div class="spark sp-5"></div><div class="spark sp-6"></div>
        <div class="spark sp-7"></div><div class="spark sp-8"></div><div class="spark sp-9"></div>
        <div class="spark sp-10"></div>
    </div>
    
    <div class="container position-relative z-1 text-center text-white pb-4">
        <span class="badge bg-light text-danger mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
            <i class="fas fa-ambulance me-2"></i> Acción y Rescate
        </span>
        <h1 class="display-4 fw-bold mb-3 text-shadow" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Socorristas</h1>
        <p class="lead text-white-50 mx-auto mb-0" style="max-width: 700px; font-weight: 300; font-size: 1.15rem;">
            Grupo de respuesta inmediata ante emergencias. Siempre alerta, siempre dispuestos a salvar vidas.
        </p>
    </div>
    
    <!-- Forma inferior (wave) -->
    <div class="position-absolute bottom-0 start-0 w-100 overflow-hidden" style="line-height: 0; z-index: 2;">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 40px; transform: translateY(1px);">
            <path d="M1200,80 C900,10 300,10 0,80 L0,120 L1200,120 Z" fill="#ffffff" opacity="0.5"></path>
            <path d="M1200,90 C900,30 300,30 0,90 L0,120 L1200,120 Z" fill="#ffffff" opacity="0.3"></path>
            <path d="M1200,100 C900,50 300,50 0,100 L0,120 L1200,120 Z" fill="#ffffff"></path>
        </svg>
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