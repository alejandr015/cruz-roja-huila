@extends('layouts.app')

@section('title', 'Oferta Educativa - Cruz Roja Huila')

@section('content')

<!-- Hero Section Educativo Premium -->
<section class="py-5 text-white position-relative overflow-hidden" style="min-height: 480px; background-image: linear-gradient(rgba(0,45,114,0.7), rgba(0,45,114,0.7)), url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=1600'); background-size: cover; background-position: center;">
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-8 animate-fade-up">
                <span class="badge bg-danger mb-4 px-4 py-2 rounded-pill shadow-lg" style="letter-spacing: 2px; font-weight: 700; text-transform: uppercase;">
                    <i class="fas fa-graduation-cap me-2"></i> Formación para la Vida
                </span>
                <h1 class="display-3 fw-bold mb-4">Excelencia en Educación Humanitaria</h1>
                <p class="lead mb-5 fs-4 opacity-90" style="max-width: 800px;">
                    Certifícate con los expertos. Programas diseñados bajo estándares internacionales para preparar a los líderes del mañana en salud, rescate y acción social.
                </p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('contacto') }}" class="btn btn-danger btn-lg rounded-pill px-5 py-3 shadow-lg fw-bold transition-scale">Inscribirme Ahora</a>
                    <a href="#programas" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-bold">Ver Catálogo</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Programas Educativos -->
<section id="programas" class="py-5 bg-white shadow-top" style="margin-top: -60px; border-radius: 60px 60px 0 0; position: relative; z-index: 10;">
    <div class="container py-5">
        
        <div class="text-center mb-5 pb-3">
            <h6 class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 3px;">Nuestros Ejes</h6>
            <h2 class="display-5 fw-bold" style="color: var(--azul-institucional);">Programas de Formación</h2>
            <div class="mx-auto bg-danger mt-3" style="width: 60px; height: 4px; border-radius: 2px;"></div>
        </div>

        <div class="row g-4">
            
            <!-- Técnicos Laborales -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('educacion.tecnicos-laborales') }}" class="edu-card-premium hover-up">
                    <div class="edu-card-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Técnicos Laborales</h3>
                    <p class="text-muted">Formación técnico-profesional con un alto componente práctico y certificación reconocida en el sector salud.</p>
                    <div class="edu-card-info">
                        <span class="badge bg-light text-danger rounded-pill px-3 py-2"><i class="fas fa-calendar-alt me-2"></i>Certificación Oficial</span>
                    </div>
                    <div class="edu-card-link">
                        Conocer más <i class="fas fa-chevron-right ms-2 fs-xs"></i>
                    </div>
                </a>
            </div>

            <!-- Diplomados -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('educacion.diplomados') }}" class="edu-card-premium hover-up">
                    <div class="edu-card-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Diplomados</h3>
                    <p class="text-muted">Especializaciones intensivas para profesionales que buscan profundizar en áreas críticas de la atención humana.</p>
                    <div class="edu-card-info">
                        <span class="badge bg-light text-danger rounded-pill px-3 py-2"><i class="fas fa-award me-2"></i>Alta Especialidad</span>
                    </div>
                    <div class="edu-card-link">
                        Conocer más <i class="fas fa-chevron-right ms-2 fs-xs"></i>
                    </div>
                </a>
            </div>

            <!-- Cursos -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('educacion.cursos') }}" class="edu-card-premium hover-up">
                    <div class="edu-card-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Cursos y Talleres</h3>
                    <p class="text-muted">Formación rápida y efectiva en Primeros Auxilios, RCP y respuesta inmediata ante emergencias cotidianas.</p>
                    <div class="edu-card-info">
                        <span class="badge bg-light text-danger rounded-pill px-3 py-2"><i class="fas fa-clock me-2"></i>Duración Flexible</span>
                    </div>
                    <div class="edu-card-link">
                        Conocer más <i class="fas fa-chevron-right ms-2 fs-xs"></i>
                    </div>
                </a>
            </div>

            <!-- Capacitaciones Empresariales -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('educacion.capacitaciones-empresariales') }}" class="edu-card-premium hover-up">
                    <div class="edu-card-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Corporativo / SST</h3>
                    <p class="text-muted">Programas a medida para empresas, enfocados en la seguridad y salud en el trabajo y brigadas de emergencia.</p>
                    <div class="edu-card-info">
                        <span class="badge bg-light text-danger rounded-pill px-3 py-2"><i class="fas fa-users me-2"></i>Enfoque Empresarial</span>
                    </div>
                    <div class="edu-card-link">
                        Conocer más <i class="fas fa-chevron-right ms-2 fs-xs"></i>
                    </div>
                </a>
            </div>

            <!-- Educación Virtual -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('educacion.educacion-virtual') }}" class="edu-card-premium hover-up">
                    <div class="edu-card-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>Formación Virtual</h3>
                    <p class="text-muted">Accede a nuestro campus virtual y aprende a tu propio ritmo con la calidad que nos caracteriza.</p>
                    <div class="edu-card-info">
                        <span class="badge bg-light text-danger rounded-pill px-3 py-2"><i class="fas fa-wifi me-2"></i>100% Online</span>
                    </div>
                    <div class="edu-card-link">
                        Conocer más <i class="fas fa-chevron-right ms-2 fs-xs"></i>
                    </div>
                </a>
            </div>

            <!-- Q10 Portal Link -->
            <div class="col-md-6 col-lg-4">
                <div class="edu-card-premium bg-light border-0">
                    <div class="edu-card-icon bg-secondary">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                    <h3 class="text-secondary">Plataforma Académica</h3>
                    <p class="text-muted">Si ya eres estudiante, accede aquí a tus calificaciones, cronograma y material de apoyo en Q10.</p>
                    <div class="mt-4">
                        <a href="https://academico.cruzrojahuila.org" target="_blank" class="btn btn-secondary rounded-pill w-100 py-2 fw-bold shadow-sm">Ingreso Estudiantes</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Sección Servicio Social Estudiantil (SSE) -->
<section id="servicio-social" class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2">
                <div class="sse-image-container position-relative">
                    <div class="sse-badge animate-bounce">
                        <i class="fas fa-heart text-danger"></i>
                        <span>SSE 2026</span>
                    </div>
                    <!-- Usamos un div con estilo premium en lugar de imagen faltante -->
                    <div class="sse-visual-box rounded-5 shadow-2xl overflow-hidden" style="height: 500px; background: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800') center/cover;">
                        <div class="sse-overlay d-flex align-items-end p-5">
                            <div class="text-white">
                                <h4 class="fw-bold mb-2">Impacto Real</h4>
                                <p class="small mb-0 opacity-75">Más que cumplir horas, es transformar vidas mientras aprendes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="pe-lg-5">
                    <h6 class="text-danger fw-bold text-uppercase mb-3" style="letter-spacing: 3px;">Requisito de Grado (Ley 115)</h6>
                    <h2 class="display-5 fw-bold mb-4" style="color: var(--azul-institucional);">Servicio Social Estudiantil</h2>
                    <p class="lead text-muted mb-5">
                        ¿Eres estudiante de 9°, 10° u 11°? En la Cruz Roja Huila te ofrecemos la oportunidad de cumplir tus horas de servicio social con propósito, formándote como un ciudadano ejemplar y líder comunitario.
                    </p>
                    
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="sse-icon-mini bg-danger-subtle text-danger">
                                    <i class="fas fa-first-aid"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Primeros Auxilios</h6>
                                    <p class="small text-muted mb-0">Atención básica de emergencias.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="sse-icon-mini bg-primary-subtle text-primary">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Gestión del Riesgo</h6>
                                    <p class="small text-muted mb-0">Prevención y seguridad escolar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="sse-icon-mini bg-success-subtle text-success">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Acción Social</h6>
                                    <p class="small text-muted mb-0">Proyectos con la comunidad.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="sse-icon-mini bg-warning-subtle text-warning" style="color: #856404 !important;">
                                    <i class="fas fa-dove"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Liderazgo y Paz</h6>
                                    <p class="small text-muted mb-0">Resolución de conflictos.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-4 shadow-sm border-start border-danger border-4 mb-5">
                        <h6 class="fw-bold mb-2">Requisitos Generales:</h6>
                        <ul class="list-unstyled small text-muted mb-0 d-flex flex-wrap gap-3">
                            <li><i class="fas fa-check text-success me-1"></i> Grados 9°, 10° u 11°</li>
                            <li><i class="fas fa-check text-success me-1"></i> EPS o Sisbén Vigente</li>
                            <li><i class="fas fa-check text-success me-1"></i> Autorización de Padres</li>
                        </ul>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="https://wa.me/573172971272?text=Hola,%20me%20gustaría%20solicitar%20información%20sobre%20el%20Servicio%20Social%20Estudiantil" target="_blank" class="btn btn-danger btn-lg rounded-pill px-5 py-3 fw-bold shadow-lg d-inline-flex align-items-center">
                            Consultar Convocatorias <i class="fab fa-whatsapp ms-2 fs-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Beneficios -->
<section class="py-5 bg-light overflow-hidden position-relative">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <h2 class="display-5 fw-bold mb-4" style="color: var(--azul-institucional);">¿Por qué elegirnos?</h2>
                <p class="lead text-muted mb-5">Más de un siglo salvando vidas nos respalda. Nuestros programas no solo te dan un certificado, te dan las herramientas para actuar en momentos críticos.</p>
                
                <div class="d-flex align-items-center mb-4">
                    <div class="me-4 text-danger"><i class="fas fa-check-circle fa-2x"></i></div>
                    <h5 class="fw-bold mb-0">Instructores con experiencia real en campo y desastres.</h5>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="me-4 text-danger"><i class="fas fa-check-circle fa-2x"></i></div>
                    <h5 class="fw-bold mb-0">Infraestructura técnica de última generación para prácticas.</h5>
                </div>
                <div class="d-flex align-items-center">
                    <div class="me-4 text-danger"><i class="fas fa-check-circle fa-2x"></i></div>
                    <h5 class="fw-bold mb-0">Certificación nacional válida en todo el territorio.</h5>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row g-4 text-center">
                    <div class="col-6">
                        <div class="bg-white p-5 rounded-4 shadow-sm hover-up border-bottom border-danger border-4">
                            <h2 class="fw-bold text-danger mb-1">98%</h2>
                            <p class="text-muted mb-0 small fw-bold uppercase">Satisfacción</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-white p-5 rounded-4 shadow-sm hover-up border-bottom border-primary border-4" style="border-color: var(--azul-institucional) !important;">
                            <h2 class="fw-bold mb-1" style="color: var(--azul-institucional);">15+</h2>
                            <p class="text-muted mb-0 small fw-bold uppercase">Programas</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-white p-5 rounded-4 shadow-sm hover-up border-bottom border-primary border-4" style="border-color: var(--azul-institucional) !important;">
                            <h2 class="fw-bold mb-1" style="color: var(--azul-institucional);">2k+</h2>
                            <p class="text-muted mb-0 small fw-bold uppercase">Graduados Anual</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-white p-5 rounded-4 shadow-sm hover-up border-bottom border-danger border-4">
                            <h2 class="fw-bold text-danger mb-1">100%</h2>
                            <p class="text-muted mb-0 small fw-bold uppercase">Vocación</p>
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
    .animate-fade-up { animation: fadeUp 1s ease-out forwards; }
    @keyframes fadeUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }

    .shadow-top { box-shadow: 0 -15px 40px rgba(0,0,0,0.05); }

    .edu-card-premium {
        display: block;
        background: white;
        border-radius: 30px;
        padding: 45px 35px;
        height: 100%;
        text-decoration: none;
        color: inherit;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: 1px solid #f0f0f0;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        position: relative;
    }

    .edu-card-premium:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.08);
        border-color: var(--cruz-roja);
    }

    .edu-card-icon {
        width: 70px;
        height: 70px;
        background: var(--cruz-roja);
        color: white;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin-bottom: 25px;
        transition: all 0.3s;
    }

    .edu-card-premium:hover .edu-card-icon {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 10px 20px rgba(237, 28, 36, 0.3);
    }

    .edu-card-premium h3 {
        font-weight: 800;
        font-size: 1.4rem;
        margin-bottom: 15px;
        color: var(--azul-institucional);
    }

    .edu-card-premium p {
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .edu-card-link {
        color: var(--cruz-roja);
        font-weight: 700;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        display: flex;
        align-items: center;
    }

    .hover-up { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .hover-up:hover { transform: translateY(-8px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
    .transition-scale:hover { transform: scale(1.05); }

    .bg-secondary { background-color: #6c757d !important; }
    .text-secondary { color: #6c757d !important; }
    .btn-secondary { background-color: #ececec; border: none; color: #666; }
    .btn-secondary:hover { background-color: #ddd; color: #333; }

    /* SSE Specific Styles */
    .sse-image-container {
        z-index: 1;
    }
    .sse-badge {
        position: absolute;
        top: -20px;
        right: 40px;
        background: white;
        padding: 15px 25px;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        gap: 10px;
        z-index: 10;
        font-weight: 800;
        color: var(--azul-institucional);
    }
    .sse-visual-box {
        position: relative;
        transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .sse-visual-box:hover {
        transform: scale(1.02);
    }
    .sse-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(transparent 50%, rgba(0,0,0,0.8));
    }
    .sse-icon-mini {
        width: 45px;
        height: 45px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        flex-shrink: 0;
    }
    .animate-bounce {
        animation: bounce 3s infinite;
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

</style>
@endsection