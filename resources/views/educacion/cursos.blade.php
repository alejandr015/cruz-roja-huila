@extends('layouts.app')

@section('title', 'Cursos - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<style>
    .cursos-header-bg {
        background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    /* Floating Knowledge Blocks Animation */
    .edu-shape {
        position: absolute;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        z-index: 0;
        animation: floatShape 20s linear infinite;
    }

    /* Square */
    .edu-shape.sq {
        width: 60px;
        height: 60px;
        border-radius: 8px;
    }

    /* Circle */
    .edu-shape.ci {
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }

    @keyframes floatShape {
        0% { transform: translateY(120px) rotate(0deg); opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { transform: translateY(-300px) rotate(360deg); opacity: 0; }
    }

    .sh-1 { left: 10%; animation-duration: 25s; animation-delay: 0s; }
    .sh-2 { left: 30%; animation-duration: 20s; animation-delay: 5s; }
    .sh-3 { left: 50%; animation-duration: 28s; animation-delay: 2s; }
    .sh-4 { left: 70%; animation-duration: 22s; animation-delay: 8s; }
    .sh-5 { left: 85%; animation-duration: 26s; animation-delay: 4s; }
    .sh-6 { left: 20%; animation-duration: 24s; animation-delay: 10s; }
</style>

<section class="page-header-cursos cursos-header-bg text-center text-white">
    <!-- Floating Shapes -->
    <div class="edu-shape sq sh-1"></div>
    <div class="edu-shape ci sh-2"></div>
    <div class="edu-shape sq sh-3" style="width: 40px; height: 40px;"></div>
    <div class="edu-shape ci sh-4" style="width: 50px; height: 50px;"></div>
    <div class="edu-shape sq sh-5"></div>
    <div class="edu-shape ci sh-6" style="width: 100px; height: 100px;"></div>
    
    <div class="container position-relative z-2 pb-4">
        <span class="badge bg-light text-primary mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
            <i class="fas fa-book-open me-2"></i> Formación Práctica
        </span>
        <h1 class="display-4 fw-bold mb-3 text-shadow" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">Cursos Disponibles</h1>
        <p class="lead text-white-50 mx-auto mb-0" style="max-width: 700px; font-weight: 300; font-size: 1.15rem;">
            Formación práctica y certificada en áreas de alta demanda.
        </p>
    </div>

    <!-- Forma inferior (wave) -->
    <div class="position-absolute bottom-0 start-0 w-100 overflow-hidden" style="line-height: 0; z-index: 3;">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 40px; transform: translateY(1px);">
            <path d="M1200,80 C900,10 300,10 0,80 L0,120 L1200,120 Z" fill="#ffffff" opacity="0.5"></path>
            <path d="M1200,90 C900,30 300,30 0,90 L0,120 L1200,120 Z" fill="#ffffff" opacity="0.3"></path>
            <path d="M1200,100 C900,50 300,50 0,100 L0,120 L1200,120 Z" fill="#ffffff"></path>
        </svg>
    </div>
</section>

<!-- Cursos -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title-cursos">Nuestros Cursos</h2>
            <p class="lead text-muted">Elige el curso que mejor se adapte a tus necesidades y objetivos</p>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Primeros Auxilios -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('primeros-auxilios')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);">
                        <i class="fas fa-first-aid"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Primeros Auxilios</h3>
                        <p>Aprende a actuar en situaciones de emergencia y salva vidas. Técnicas de RCP, manejo de hemorragias, fracturas y más.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>16 horas</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>2 días</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Certificado</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Inyectología -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('inyectologia')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Inyectología</h3>
                        <p>Domina las técnicas de aplicación de inyecciones de forma segura y profesional. Vías de administración y bioseguridad.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>20 horas</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>3 días</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Certificado</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Belleza Integral -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('belleza')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #e91e63 0%, #c2185b 100%);">
                        <i class="fas fa-spa"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Belleza Integral</h3>
                        <p>Curso integral de belleza: maquillaje, cuidado de la piel, estética facial y corporal. Inicia tu carrera en el mundo de la belleza.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>40 horas</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>2 semanas</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Certificado</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Barbería -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('barberia')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #2c3e50 0%, #000000 100%);">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Barbería</h3>
                        <p>Técnicas modernas de corte masculino, diseño de barba y cuidado capilar para el hombre actual.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>24 horas</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>4 días</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Certificado</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Asistente de Marketing y Ventas -->
            <div class="col-md-6 col-lg-4">
                <div class="col-md-6 col-lg-12"> <!-- Wrapper para mantener proporciones si es necesario -->
                <div class="curso-card" onclick="mostrarDetalleCurso('marketing')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #f1c40f 0%, #f39c12 100%);">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Marketing y Ventas</h3>
                        <p>Habilidades comerciales estratégicas para potenciar ventas y gestionar relaciones con clientes.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>30 horas</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>1 semana</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Certificado</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
                </div>
            </div>

            <!-- Masajes Estéticos y Técnicos de SPA -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('masajes')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #1abc9c 0%, #16a085 100%);">
                        <i class="fas fa-spa"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Masajes y SPA</h3>
                        <p>Aprende técnicas profesionales de masajes relajantes, estéticos y protocolos terapéuticos de SPA.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>32 horas</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>5 días</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Certificado</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Detalle del Curso (Oculto inicialmente) -->
<section id="detalle-curso" class="py-5 bg-light" style="display: none;">
    <div class="container">
        <div class="row">

            <!-- Imagen del Curso -->
            <div class="col-lg-5 mb-4">
                <div class="curso-imagen-detalle" id="imagen-curso">
                    <i class="fas fa-first-aid"></i>
                </div>
            </div>

            <!-- Características del Curso -->
            <div class="col-lg-7">
                <h2 class="curso-titulo-detalle" id="titulo-curso">Belleza Integral</h2>

                <div class="caracteristicas-curso">
                    <h4 class="mb-3"><i class="fas fa-list-ul me-2"></i>Características del Curso</h4>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Duración:</span>
                        <span class="caracteristica-value" id="duracion-curso">16 horas</span>
                    </div>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Modalidad:</span>
                        <span class="caracteristica-value" id="modalidad-curso">Presencial</span>
                    </div>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Horarios:</span>
                        <span class="caracteristica-value" id="horarios-curso">Fines de semana / Entre semana</span>
                    </div>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Inversión:</span>
                        <span class="caracteristica-value" id="inversion-curso">$150.000 COP</span>
                    </div>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Título Obtenido:</span>
                        <span class="caracteristica-value" id="titulo-curso-obtenido">Certificado</span>
                    </div>
                </div>

                <!-- Sección Qué Aprenderás -->
                <div id="seccion-que-aprenderas" style="display: none;">
                    <div class="caracteristicas-curso mt-4">
                        <h4 class="mb-3"><i class="fas fa-graduation-cap me-2"></i>¿Qué aprenderás?</h4>
                        <ul id="lista-que-aprenderas" class="list-unstyled">
                            <!-- Se poblará dinámicamente -->
                        </ul>
                    </div>
                </div>

                <!-- Botones de Acción -->
                <div class="acciones-curso mt-4">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <a href="#" id="btn-plan-estudios" class="btn btn-plan-estudios w-100" target="_blank">
                                <i class="fas fa-download me-2"></i>Plan de Estudios
                            </a>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-inscribirse-detalle w-100" onclick="abrirModalInscripcion()">
                                <i class="fas fa-user-plus me-2"></i>Inscribirse
                            </button>
                        </div>
                        <div class="col-md-4">
                            <a href="https://wa.me/573172971272" class="btn btn-mas-info w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i>Más Información
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contacto -->
                <div class="contacto-info mt-4">
                    <p class="mb-0">
                        <i class="fas fa-phone-alt me-2"></i>
                        Para más información llamar al: <strong>317 297 1272</strong>
                    </p>
                </div>

                <!-- Botón Volver -->
                <div class="mt-4">
                    <button class="btn btn-outline-secondary" onclick="ocultarDetalleCurso()">
                        <i class="fas fa-arrow-left me-2"></i>Ver Todos los Cursos
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Modal Formulario de Inscripción -->
<div class="modal fade" id="modalInscripcion" tabindex="-1" aria-labelledby="modalInscripcionLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInscripcionLabel">
                    <i class="fas fa-user-plus me-2"></i>Inscripción al Curso
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    <strong>Por favor corrige los siguientes errores:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                <form action="{{ route('educacion.inscripcion') }}" method="POST" id="formInscripcionCurso">
                    @csrf

                    <!-- Campos ocultos con información del curso -->
                    <input type="hidden" name="duracion" id="curso-duracion-hidden">
                    <input type="hidden" name="inversion" id="curso-inversion-hidden">
                    <input type="hidden" name="modalidad" id="curso-modalidad-hidden">

                    <div class="row g-3">

                        <!-- Información del Curso (No editable) -->
                        <div class="col-12">
                            <div class="info-curso-form">
                                <h6 class="mb-3"><i class="fas fa-book me-2"></i>Información del Curso</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Curso:</label>
                                        <input type="text" name="curso" id="curso-nombre-input" class="form-control-plaintext" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Duración:</label>
                                        <input type="text" id="curso-duracion-input" class="form-control-plaintext" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Inversión:</label>
                                        <input type="text" id="curso-inversion-input" class="form-control-plaintext" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Modalidad:</label>
                                        <input type="text" id="curso-modalidad-input" class="form-control-plaintext" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <!-- Información del Estudiante (Editable) -->
                        <div class="col-12">
                            <h6 class="mb-3"><i class="fas fa-user me-2"></i>Información del Estudiante</h6>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Nombre Completo <span class="text-danger">*</span></label>
                            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" required>
                            @error('nombre')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Documento de Identidad <span class="text-danger">*</span></label>
                            <input type="text" name="documento" class="form-control @error('documento') is-invalid @enderror" value="{{ old('documento') }}" required>
                            @error('documento')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Correo Electrónico <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Teléfono / WhatsApp <span class="text-danger">*</span></label>
                            <input type="tel" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono') }}" required>
                            @error('telefono')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Fecha de Nacimiento <span class="text-danger">*</span></label>
                            <input type="date" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ old('fecha_nacimiento') }}" required>
                            @error('fecha_nacimiento')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Ciudad</label>
                            <input type="text" name="ciudad" class="form-control" value="{{ old('ciudad', 'Neiva') }}" readonly>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Horario de Preferencia <span class="text-danger">*</span></label>
                            <select name="horario" class="form-select @error('horario') is-invalid @enderror" required>
                                <option value="">Seleccione...</option>
                                <option value="fin-de-semana" {{ old('horario') == 'fin-de-semana' ? 'selected' : '' }}>Fin de semana</option>
                                <option value="entre-semana" {{ old('horario') == 'entre-semana' ? 'selected' : '' }}>Entre semana</option>
                                <option value="sabados" {{ old('horario') == 'sabados' ? 'selected' : '' }}>Solo sábados</option>
                                <option value="domingos" {{ old('horario') == 'domingos' ? 'selected' : '' }}>Solo domingos</option>
                            </select>
                            @error('horario')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="formInscripcionCurso" class="btn btn-primary-custom">
                    <i class="fas fa-paper-plane me-2"></i>Enviar Inscripción
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    .page-header-cursos {
        background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);
        padding: 80px 0;
    }

    .section-title-cursos {
        color: #1a2332;
        font-weight: 700;
        font-size: 2.5rem;
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 20px;
    }

    .section-title-cursos::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #ED1C24;
    }

    /* Tarjetas de Cursos */
    .curso-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        transition: all 0.3s;
        cursor: pointer;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .curso-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(237, 28, 36, 0.2);
    }

    .curso-imagen {
        padding: 50px 0;
        text-align: center;
        color: white;
    }

    .curso-imagen i {
        font-size: 5rem;
    }

    .curso-contenido {
        padding: 30px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .curso-contenido h3 {
        color: #1a2332;
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .curso-contenido p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 20px;
        flex-grow: 1;
        min-height: 80px;
    }

    .curso-info {
        display: flex;
        justify-content: space-around;
        padding: 15px 0;
        border-top: 2px solid #f0f0f0;
        border-bottom: 2px solid #f0f0f0;
        margin-bottom: 20px;
    }

    .info-item {
        text-align: center;
    }

    .info-item i {
        color: #ED1C24;
        font-size: 1.2rem;
        display: block;
        margin-bottom: 8px;
    }

    .info-item span {
        font-size: 0.85rem;
        color: #666;
        font-weight: 600;
    }

    .btn-ver-detalle {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 10px;
        font-weight: 600;
        width: 100%;
        transition: all 0.3s;
    }

    .btn-ver-detalle:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(237, 28, 36, 0.3);
    }

    /* Detalle del Curso */
    .curso-imagen-detalle {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        border-radius: 20px;
        padding: 80px 20px;
        text-align: center;
        color: white;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .curso-imagen-detalle i {
        font-size: 8rem;
    }

    .curso-titulo-detalle {
        color: #1a2332;
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 30px;
    }

    .caracteristicas-curso {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        margin-bottom: 20px;
    }

    .caracteristicas-curso h4 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .caracteristica-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .caracteristica-item:last-child {
        border-bottom: none;
    }

    .caracteristica-label {
        font-weight: 600;
        color: #666;
    }

    .caracteristica-value {
        font-weight: 700;
        color: #ED1C24;
        text-align: right;
    }

    .btn-plan-estudios {
        background: #3498db;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        text-align: center;
        transition: all 0.3s;
    }

    .btn-plan-estudios:hover {
        background: #2980b9;
        color: white;
        transform: translateY(-2px);
    }

    .btn-inscribirse-detalle {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        color: white;
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-inscribirse-detalle:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(237, 28, 36, 0.3);
    }

    .btn-mas-info {
        background: #25D366;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        text-align: center;
        transition: all 0.3s;
    }

    .btn-mas-info:hover {
        background: #128C7E;
        color: white;
        transform: translateY(-2px);
    }

    .contacto-info {
        background: #f8f9fa;
        padding: 15px 20px;
        border-radius: 10px;
        border-left: 4px solid #ED1C24;
    }

    .contacto-info p {
        color: #666;
    }

    .contacto-info strong {
        color: #ED1C24;
    }

    /* Modal */
    .modal-header {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        color: white;
        border-radius: 0;
    }

    .modal-title {
        font-weight: 700;
        font-size: 1.3rem;
    }

    .info-curso-form {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        border-left: 4px solid #ED1C24;
    }

    .form-control-plaintext {
        border: none;
        padding-left: 0;
        color: #666;
        font-weight: 600;
    }

    .btn-primary-custom {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        border: none;
        padding: 10px 25px;
        border-radius: 10px;
        font-weight: 600;
        color: white;
    }

    .btn-primary-custom:hover {
        background: linear-gradient(135deg, #C41419 0%, #ED1C24 100%);
    }

    @media (max-width: 768px) {
        .section-title-cursos {
            font-size: 2rem;
        }

        .curso-contenido p {
            min-height: auto;
        }

        .curso-imagen-detalle {
            padding: 60px 20px;
            margin-bottom: 30px;
        }

        .curso-imagen-detalle i {
            font-size: 6rem;
        }

        .caracteristica-item {
            flex-direction: column;
            gap: 5px;
        }

        .caracteristica-value {
            text-align: left;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    // Datos de los cursos
    const cursosData = {
        'primeros-auxilios': {
            nombre: 'Primeros Auxilios Básico',
            duracion: '20 horas',
            modalidad: 'Presencial',
            horarios: 'Sábados 8:00 am - 4:00 pm',
            inversion: '$150.000 COP',
            titulo: 'Certificado de Asistencia y Aprobación',
            icono: 'fa-first-aid',
            color: 'linear-gradient(135deg, #ED1C24 0%, #C41419 100%)',
            aprenderas: [
                'Evaluación de la escena y bioseguridad',
                'Valoración primaria y secundaria del paciente',
                'Maniobras de RCP básica y uso de DEA',
                'Manejo de obstrucción de vía aérea (Maniobra de Heimlich)',
                'Control de hemorragias y manejo de heridas',
                'Inmovilización de fracturas y traslados'
            ],
            planEstudios: '#'
        },
        'inyectologia': {
            nombre: 'Inyectología y Venopunción',
            duracion: '16 horas',
            modalidad: 'Presencial',
            horarios: 'Sábados y Domingos',
            inversion: '$120.000 COP',
            titulo: 'Certificado de Asistencia y Aprobación',
            icono: 'fa-syringe',
            color: 'linear-gradient(135deg, #2ecc71 0%, #27ae60 100%)',
            aprenderas: [
                'Técnicas de asepsia y antisepsia',
                'Vías de administración (Intramuscular, Intradérmica, Subcutánea)',
                'Técnica de venopunción y canalización',
                'Farmacovigilancia y 10 correctos',
                'Manejo de residuos hospitalarios',
                'Atención en caso de reacciones adversas'
            ],
            planEstudios: '#'
        },
        'soporte-vital': {
            nombre: 'Soporte Vital Básico y Avanzado',
            duracion: '40 horas',
            modalidad: 'Presencial',
            horarios: 'Fines de semana',
            inversion: 'Consultar',
            titulo: 'Certificado de Entrenamiento BLS-ACLS',
            icono: 'fa-heartbeat',
            color: 'linear-gradient(135deg, #3498db 0%, #2980b9 100%)',
            aprenderas: [
                'Dinámica de equipo de reanimación de alto rendimiento',
                'Algoritmos de soporte vital cardiovascular avanzado',
                'Manejo avanzado de la vía aérea',
                'Farmacología en situaciones de paro cardíaco',
                'Cuidados post-paro cardíaco',
                'Identificación y manejo de arritmias letales'
            ],
            planEstudios: '#'
        },
        'belleza': {
            nombre: 'Belleza Integral',
            duracion: 'TRES CICLOS ACADÉMICOS (Año y medio)',
            modalidad: 'Presencial',
            horarios: 'Lu-Vi 8:00-11:40 am / Viernes 1:00-5:30 pm y Sáb 8:00-4:30 pm',
            inversion: 'Consultar',
            titulo: 'Certificado en Belleza Integral Profesional',
            icono: 'fa-spa',
            color: 'linear-gradient(135deg, #e91e63 0%, #c2185b 100%)',
            aprenderas: [
                'Manicure y pedicure (gel, acrílico, efectos decorativos)',
                'Maquillaje profesional (tendencias, artístico, diseño de cejas)',
                'Corte de cabello para damas y caballeros',
                'Colorimetría avanzada (balayage, rayitos, iluminaciones)',
                'Peinados versátiles y ondulación permanente (keratina)',
                'Diagnósticos y tratamientos capilares',
                'Protocolos de bioseguridad y atención al cliente'
            ],
            planEstudios: '/docs/planes-estudio/individual/belleza-integral.html'
        },
        'barberia': {
            nombre: 'Curso Intensivo de Barbería',
            duracion: '9 clases',
            modalidad: 'Presencial',
            horarios: 'Dos días a la semana 2:00 – 5:30 pm',
            inversion: 'Consultar',
            titulo: 'Certificado en Barbería',
            icono: 'fa-user-tie',
            color: 'linear-gradient(135deg, #2c3e50 0%, #000000 100%)',
            aprenderas: [
                'Manejo de máquina, tijera sobre peine y navaja',
                'Cortes clásicos, desvanecidos (fades) y modernos',
                'Diseño, contorno y afeitado de barba y bigote',
                'Técnicas de coloración capilar masculina',
                'Tratamientos capilares y diagnósticos',
                'Normativa legal de bioseguridad en barberías'
            ],
            planEstudios: '/docs/planes-estudio/individual/barberia.html'
        },
        'marketing': {
            nombre: 'Curso de Asistente de Marketing y Ventas',
            duracion: '30 horas',
            modalidad: 'Presencial',
            horarios: 'Fines de semana',
            inversion: 'Consultar',
            titulo: 'Certificado de Asistente en Marketing Digital',
            icono: 'fa-bullhorn',
            color: 'linear-gradient(135deg, #f1c40f 0%, #f39c12 100%)',
            aprenderas: [
                'Investigación de mercados y comportamiento del consumidor',
                'Gestión de sitios web y redes sociales empresariales',
                'Creación de contenido digital y piezas gráficas',
                'Estrategias de posicionamiento SEO y SEM',
                'Gestión de relaciones comerciales y CRM',
                'Resolución de problemas post-venta y soporte comercial'
            ],
            planEstudios: '/docs/planes-estudio/individual/asistente-marketing-ventas.html'
        },
        'masajes': {
            nombre: 'Masajes Estéticos y Técnicos de SPA',
            duracion: '12 clases',
            modalidad: 'Presencial',
            horarios: 'Dos días a la semana 2:00 – 5:30 pm',
            inversion: 'Consultar',
            titulo: 'Certificado en Técnicas de Masaje y SPA',
            icono: 'fa-spa',
            color: 'linear-gradient(135deg, #1abc9c 0%, #16a085 100%)',
            aprenderas: [
                'Masajes reductores y levantamiento de glúteos',
                'Drenaje linfático y manejo de celulitis',
                'Técnicas de SPA: Baño de novia y chocoterapia',
                'Reflexología podal y terapias de spa de pies',
                'Depilación con cera profesional',
                'Relajación profunda y liberación de puntos gatillo'
            ],
            planEstudios: '/docs/planes-estudio/individual/masajes-esteticos-spa.html'
        }
    };

    // Variable global para rastrear el curso actual
    let cursoActual = null;

    function mostrarDetalleCurso(cursoId) {
        const curso = cursosData[cursoId];
        cursoActual = cursoId; // Guardar el curso actual

        // Actualizar información del curso
        document.getElementById('titulo-curso').textContent = curso.nombre;
        document.getElementById('duracion-curso').textContent = curso.duracion;
        document.getElementById('modalidad-curso').textContent = curso.modalidad;
        document.getElementById('horarios-curso').textContent = curso.horarios;
        document.getElementById('inversion-curso').textContent = curso.inversion;
        document.getElementById('titulo-curso-obtenido').textContent = curso.titulo;

        // Actualizar imagen
        const imagenCurso = document.getElementById('imagen-curso');
        imagenCurso.innerHTML = `<i class="fas ${curso.icono}"></i>`;
        imagenCurso.style.background = curso.color;

        // Poblar "Qué aprenderás"
        const seccionAprenderas = document.getElementById('seccion-que-aprenderas');
        const listaAprenderas = document.getElementById('lista-que-aprenderas');
        
        if (curso.aprenderas && curso.aprenderas.length > 0) {
            listaAprenderas.innerHTML = curso.aprenderas.map(item => `
                <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>${item}
                </li>
            `).join('');
            seccionAprenderas.style.display = 'block';
        } else {
            seccionAprenderas.style.display = 'none';
        }

        // Actualizar enlace del plan de estudios
        const btnPlan = document.getElementById('btn-plan-estudios');
        if (curso.planEstudios && curso.planEstudios !== '#') {
            // Asegurar que la URL sea absoluta
            const fullUrl = curso.planEstudios.startsWith('http') ? 
                            curso.planEstudios : 
                            window.location.origin + (curso.planEstudios.startsWith('/') ? '' : '/') + curso.planEstudios;
            
            btnPlan.href = fullUrl;
            btnPlan.style.display = 'inline-block';
            
            // Forzar apertura en nueva ventana si el clic estándar falla
            btnPlan.onclick = function(e) {
                window.open(this.href, '_blank');
                return false;
            };
        } else {
            btnPlan.style.display = 'none';
        }

        // Actualizar formulario del modal
        actualizarFormularioModal(curso);

        // Mostrar detalle y scroll
        document.getElementById('detalle-curso').style.display = 'block';
        document.getElementById('detalle-curso').scrollIntoView({
            behavior: 'smooth'
        });
    }

    function abrirModalInscripcion() {
        // Verificar si hay un curso seleccionado
        if (!cursoActual) {
            alert('Por favor, selecciona un curso primero.');
            return;
        }

        // Actualizar el formulario con los datos del curso actual
        const curso = cursosData[cursoActual];
        actualizarFormularioModal(curso);

        // Abrir el modal
        var modalInscripcion = new bootstrap.Modal(document.getElementById('modalInscripcion'));
        modalInscripcion.show();
    }

    function actualizarFormularioModal(curso) {
        // Actualizar campos visibles (readonly)
        document.getElementById('curso-nombre-input').value = curso.nombre;
        document.getElementById('curso-duracion-input').value = curso.duracion;
        document.getElementById('curso-inversion-input').value = curso.inversion;
        document.getElementById('curso-modalidad-input').value = curso.modalidad;

        // *** CRÍTICO: Actualizar campos OCULTOS que se envían al servidor ***
        document.getElementById('curso-duracion-hidden').value = curso.duracion;
        document.getElementById('curso-inversion-hidden').value = curso.inversion;
        document.getElementById('curso-modalidad-hidden').value = curso.modalidad;
    }

    function ocultarDetalleCurso() {
        document.getElementById('detalle-curso').style.display = 'none';
        cursoActual = null; // Reset curso actual
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Si hay errores de validación, mostrar el detalle del curso y abrir el modal
    @if($errors->any())
        // Intentar recuperar el curso desde old() data
        const cursoAnterior = '{{ old("curso") }}';
        if (cursoAnterior) {
            // Buscar el cursoId correspondiente
            for (const [id, data] of Object.entries(cursosData)) {
                if (data.nombre === cursoAnterior) {
                    cursoActual = id;
                    mostrarDetalleCurso(id);
                    break;
                }
            }
        }
        
        // Abrir el modal automáticamente
        setTimeout(function() {
            var modalInscripcion = new bootstrap.Modal(document.getElementById('modalInscripcion'));
            modalInscripcion.show();
        }, 500);
    @endif

    // Si hay mensaje de éxito, mostrar modal y cerrar después de 3 segundos
    @if(session('success'))
        var modalInscripcion = new bootstrap.Modal(document.getElementById('modalInscripcion'));
        modalInscripcion.show();
        setTimeout(function() {
            modalInscripcion.hide();
            // Redirigir a la página de cursos después de cerrar
            setTimeout(function() {
                window.location.href = '{{ route("educacion.cursos") }}';
            }, 500);
        }, 3000);
    @endif
</script>
@endsection