@extends('layouts.app')

@section('title', 'Técnicos Laborales - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<style>
    .tecnicos-header-bg {
        background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    /* Knowledge Network Nodes */
    .tec-node {
        position: absolute;
        width: 8px;
        height: 8px;
        background: #ffffff;
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(255,255,255,0.8);
        opacity: 0.4;
        animation: floatNode ease-in-out infinite alternate;
        z-index: 1;
    }

    /* Connecting Lines */
    .tec-line {
        position: absolute;
        background: rgba(255, 255, 255, 0.1);
        transform-origin: left center;
        z-index: 0;
    }

    @keyframes floatNode {
        0% { transform: translate(0, 0); }
        100% { transform: translate(20px, -20px); }
    }

    /* Preset layout for nodes to simulate a constellation */
    .n-1 { top: 20%; left: 15%; animation-duration: 4s; }
    .n-2 { top: 40%; left: 25%; animation-duration: 5s; animation-delay: 1s; }
    .n-3 { top: 15%; left: 40%; animation-duration: 4.5s; animation-delay: 2s; }
    .n-4 { top: 60%; left: 10%; animation-duration: 6s; }
    .n-5 { top: 80%; left: 30%; animation-duration: 5.5s; animation-delay: 1.5s; }
    .n-6 { top: 30%; left: 75%; animation-duration: 4s; animation-delay: 0.5s; }
    .n-7 { top: 50%; left: 85%; animation-duration: 5.2s; animation-delay: 2.5s; }
    .n-8 { top: 75%; left: 70%; animation-duration: 4.8s; animation-delay: 1s; }
    .n-9 { top: 20%; left: 90%; animation-duration: 6s; animation-delay: 2s; }

    /* Preset lines to connect nodes approximately */
    .l-1 { top: 20%; left: 15%; width: 12vw; height: 1px; transform: rotate(25deg); }
    .l-2 { top: 40%; left: 25%; width: 15vw; height: 1px; transform: rotate(-35deg); }
    .l-3 { top: 15%; left: 40%; width: 35vw; height: 1px; transform: rotate(15deg); }
    .l-4 { top: 40%; left: 25%; width: 16vw; height: 1px; transform: rotate(115deg); }
    .l-5 { top: 60%; left: 10%; width: 20vw; height: 1px; transform: rotate(25deg); }
    .l-6 { top: 30%; left: 75%; width: 11vw; height: 1px; transform: rotate(45deg); }
    .l-7 { top: 50%; left: 85%; width: 16vw; height: 1px; transform: rotate(135deg); }
    .l-8 { top: 30%; left: 75%; width: 16vw; height: 1px; transform: rotate(-30deg); }

</style>

<section class="page-header-cursos tecnicos-header-bg text-center text-white">
    <!-- Knowledge Network Animation -->
    <div class="tec-node n-1"></div>
    <div class="tec-node n-2"></div>
    <div class="tec-node n-3"></div>
    <div class="tec-node n-4"></div>
    <div class="tec-node n-5"></div>
    <div class="tec-node n-6"></div>
    <div class="tec-node n-7"></div>
    <div class="tec-node n-8"></div>
    <div class="tec-node n-9"></div>

    <div class="tec-line l-1"></div>
    <div class="tec-line l-2"></div>
    <div class="tec-line l-3"></div>
    <div class="tec-line l-4"></div>
    <div class="tec-line l-5"></div>
    <div class="tec-line l-6"></div>
    <div class="tec-line l-7"></div>
    <div class="tec-line l-8"></div>
    
    <div class="container position-relative z-2 pb-4">
        <span class="badge bg-light text-primary mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
            <i class="fas fa-graduation-cap me-2"></i> Educación Continua
        </span>
        <h1 class="display-4 fw-bold mb-3 text-shadow" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">Técnicos Laborales</h1>
        <p class="lead text-white-50 mx-auto mb-0" style="max-width: 700px; font-weight: 300; font-size: 1.15rem;">
            Formación profesional certificada en áreas de salud, emergencias y desarrollo.
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
            <h2 class="section-title-cursos">Programas Técnicos Disponibles</h2>
            <p class="lead text-muted">Educación técnica de calidad con certificación oficial</p>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Técnico en Atención Prehospitalaria -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('aph')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, rgba(237,28,36,0.75) 0%, rgba(196,20,25,0.75) 100%), url('{{ asset('reales/real-46.jpeg') }}') center/cover;">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Atención Prehospitalaria</h3>
                        <p>Formación integral para brindar atención médica de emergencia en el lugar de los hechos.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>12 meses</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>1 año</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Técnico Laboral</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Técnico en Auxiliar de Enfermería -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('enfermeria')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, rgba(52,152,219,0.75) 0%, rgba(41,128,185,0.75) 100%), url('{{ asset('reales/real-31.jpeg') }}') center/cover;">
                        <i class="fas fa-user-nurse"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Auxiliar de Enfermería</h3>
                        <p>Prepárate para asistir en procedimientos de enfermería y cuidado integral del paciente.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>18 meses</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>1.5 años</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Técnico Laboral</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Técnico en Salud Ocupacional -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('salud-ocupacional')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, rgba(26,35,50,0.75) 0%, rgba(44,62,80,0.75) 100%), url('{{ asset('reales/real-39.jpeg') }}') center/cover;">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Salud Ocupacional</h3>
                        <p>Especialízate en prevención de riesgos laborales y promoción de ambientes saludables.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>12 meses</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>1 año</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Técnico Laboral</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sastre de confección sobre medida -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('sastre')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, rgba(243,156,18,0.75) 0%, rgba(230,126,34,0.75) 100%), url('{{ asset('reales/real-14.jpeg') }}') center/cover;">
                        <i class="fas fa-cut"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Sastre de Confección</h3>
                        <p>Aprende el arte de la sastrería y confección a medida con técnicas profesionales de alta costura.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>12 meses</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>1 año</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Técnico Laboral</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Auxiliar en Farmacia -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('farmacia')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, rgba(26,188,156,0.75) 0%, rgba(22,160,133,0.75) 100%), url('{{ asset('reales/real-30.jpeg') }}') center/cover;">
                        <i class="fas fa-pills"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Auxiliar en Farmacia</h3>
                        <p>Capacítate para la gestión farmacéutica, dispensación de medicamentos y atención al cliente en salud.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>12 meses</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>1 año</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Técnico Laboral</span>
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
                    <i class="fas fa-ambulance"></i>
                </div>
            </div>

            <!-- Características del Curso -->
            <div class="col-lg-7">
                <h2 class="curso-titulo-detalle" id="titulo-curso">Atención Prehospitalaria</h2>

                <div class="caracteristicas-curso">
                    <h4 class="mb-3"><i class="fas fa-list-ul me-2"></i>Características del Programa</h4>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Duración:</span>
                        <span class="caracteristica-value" id="duracion-curso">12 meses</span>
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
                        <span class="caracteristica-value" id="inversion-curso">Consultar</span>
                    </div>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Título Obtenido:</span>
                        <span class="caracteristica-value" id="titulo-curso-obtenido">Técnico Laboral</span>
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

                <!-- Modal Formulario de Inscripción -->
                <div class="modal fade" id="modalInscripcion" tabindex="-1" aria-labelledby="modalInscripcionLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalInscripcionLabel">
                                    <i class="fas fa-user-plus me-2"></i>Inscripción Técnico Laboral
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

                                <form action="{{ route('tecnicos.inscribir') }}" method="POST" id="formInscripcionTecnico">
                                    @csrf

                                    <input type="hidden" name="duracion" id="curso-duracion-hidden">
                                    <input type="hidden" name="inversion" id="curso-inversion-hidden">
                                    <input type="hidden" name="modalidad" id="curso-modalidad-hidden">

                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="info-curso-form">
                                                <h6 class="mb-3"><i class="fas fa-graduation-cap me-2"></i>Información del Programa</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label fw-bold">Programa:</label>
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
                                <button type="submit" form="formInscripcionTecnico" class="btn btn-primary-custom">
                                    <i class="fas fa-paper-plane me-2"></i>Enviar Inscripción
                                </button>
                            </div>
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
                        <i class="fas fa-arrow-left me-2"></i>Ver Todos los Programas
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

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

    .curso-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
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

    .curso-imagen-detalle {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        border-radius: 20px;
        padding: 80px 20px;
        text-align: center;
        color: white;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
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
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
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
    // Datos de los programas técnicos
    const cursosData = {
        'aph': {
            nombre: 'Técnico en Atención Prehospitalaria',
            duracion: '12 meses',
            modalidad: 'Presencial',
            horarios: 'Fines de semana / Entre semana',
            inversion: 'Consultar',
            titulo: 'Técnico Laboral en Atención Prehospitalaria',
            icono: 'fa-ambulance',
            color: 'linear-gradient(135deg, #ED1C24 0%, #C41419 100%)',
            aprenderas: [
                'Manejo inicial de pacientes traumatizados',
                'Soporte vital básico y avanzado',
                'Cinemática del trauma',
                'Farmacología de urgencias',
                'Ética y legislación en emergencias',
                'Prácticas en ambulancias y centros hospitalarios'
            ],
            planEstudios: '/docs/planes-estudio/individual/atencion-prehospitalaria-tecnico.html'
        },
        'enfermeria': {
            nombre: 'Técnico Auxiliar de Enfermería',
            duracion: '18 meses (3 ciclos)',
            modalidad: 'Presencial',
            horarios: 'Lu-Vi 7:00-11:40 am / Viernes 1:00-5:30 pm y Sábado 7:00-4:30 pm',
            inversion: 'Consultar',
            titulo: 'Técnico Laboral Auxiliar de Enfermería',
            icono: 'fa-user-nurse',
            color: 'linear-gradient(135deg, #3498db 0%, #2980b9 100%)',
            aprenderas: [
                'Cuidado Personal del Paciente (bañarse, vestirse, alimentarse)',
                'Medición de Signos Vitales y asistencia en movilidad',
                'Alistar y administrar medicamentos bajo supervisión',
                'Custodiar historias clínicas y reportar condiciones',
                'Asistencia en procedimientos médicos y toma de muestras',
                'Control de infecciones y mantenimiento de higiene y seguridad',
                'Atención integral a la familia y orientación al usuario',
                'Prácticas asistenciales en centros hospitalarios y urgencias'
            ],
            planEstudios: '/docs/planes-estudio/individual/auxiliar-enfermeria.html'
        },
        'salud-ocupacional': {
            nombre: 'Técnico en Seguridad y Salud en el Trabajo',
            duracion: '12 meses',
            modalidad: 'Presencial',
            horarios: 'Fines de semana / Entre semana',
            inversion: 'Consultar',
            titulo: 'Técnico Laboral en Seguridad y Salud en el Trabajo',
            icono: 'fa-hard-hat',
            color: 'linear-gradient(135deg, #1a2332 0%, #2C3E50 100%)',
            aprenderas: [
                'Identificación de peligros y valoración de riesgos',
                'Legislación en Seguridad y Salud en el Trabajo',
                'Prevención y atención de emergencias laborales',
                'Higiene y seguridad industrial',
                'Sistemas de gestión de calidad',
                'Salud pública y medicina preventiva'
            ],
            planEstudios: '#'
        },
        'sastre': {
            nombre: 'Técnico en Sastre de Confección sobre Medida',
            duracion: '12 meses (2 ciclos)',
            modalidad: 'Presencial',
            horarios: 'Sábados 8:00 a 11:40 am / 1:00 a 4:30 pm',
            inversion: 'Consultar',
            titulo: 'Técnico Laboral en Sastre de Confección sobre Medida',
            icono: 'fa-cut',
            color: 'linear-gradient(135deg, #f39c12 0%, #e67e22 100%)',
            aprenderas: [
                'Patronaje y Corte: Creación de moldes precisos',
                'Toma de Medidas: Captura exacta de dimensiones corporales',
                'Ajustes y Modificaciones: Arreglo de ropa para silueta ideal',
                'Desarrollo de modelos en clase',
                'Uso de máquinas industriales y selección de telas'
            ],
            planEstudios: '/docs/planes-estudio/individual/sastre-confeccion.html'
        },
        'farmacia': {
            nombre: 'Técnico Auxiliar en Farmacia',
            duracion: '18 meses (3 ciclos)',
            modalidad: 'Presencial',
            horarios: 'Viernes 1:00 a 5:30 pm y Sábado 7:00 am a 5:00 pm',
            inversion: 'Consultar',
            titulo: 'Técnico Laboral Auxiliar en Servicios Farmacéuticos',
            icono: 'fa-pills',
            color: 'linear-gradient(135deg, #1abc9c 0%, #16a085 100%)',
            aprenderas: [
                'Recepción, almacenamiento y dispensación de medicamentos',
                'Interactuar con clientes internos y externos según políticas',
                'Aplicar técnica aséptica en todos los procedimientos',
                'Mantener actualizado el sistema de información farmacéutico',
                'Alistar y aplicar medicamentos e inmunobiológicos',
                'Vigilar acción farmacéutica y reacciones adversas',
                'Cierre de ventas y términos de negociación comercial',
                'Prácticas en farmacias hospitalarias y privadas'
            ],
            planEstudios: '/docs/planes-estudio/individual/auxiliar-farmacia.html'
        },
        'cuidador-adulto-mayor': {
            nombre: 'Técnico Cuidador de Adulto Mayor',
            duracion: '12 meses (2 ciclos)',
            modalidad: 'Presencial',
            horarios: 'Viernes 1:00 a 5:30 pm y Sábado 7:00 am a 5:00 pm',
            inversion: 'Consultar',
            titulo: 'Técnico Laboral Cuidador Adulto Mayor',
            icono: 'fa-user-friends',
            color: 'linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%)',
            aprenderas: [
                'Apoyo físico, emocional y técnico a personas dependientes',
                'Facilitar actividades cotidianas (aseo, movilidad, alimentación)',
                'Toma y registro de signos vitales (presión, pulso, temperatura)',
                'Procedimientos básicos de apoyo al personal médico',
                'Técnicas de alivio del dolor y bienestar (masajes no quirúrgicos)',
                'Higiene ambiental y mantenimiento del entorno del paciente',
                'Acompañamiento a consultas micas y actividades recreativas'
            ],
            planEstudios: '/docs/planes-estudio/individual/cuidado-adulto-mayor.html'
        },
        'marketing': {
            nombre: 'Técnico Asistente de Marketing y Ventas',
            duracion: '12 meses (2 ciclos)',
            modalidad: 'Presencial',
            horarios: 'Sábado 8:00 a 11:40 am / 1:00 a 4:30 pm',
            inversion: 'Consultar',
            titulo: 'Técnico Laboral Asistente de Marketing y Ventas',
            icono: 'fa-bullhorn',
            color: 'linear-gradient(135deg, #34495e 0%, #2c3e50 100%)',
            aprenderas: [
                'Investigación y análisis de mercados estratégicos',
                'Gestión de comunicación y relaciones comerciales efectivas',
                'Actualización de contenidos digitales (web y redes sociales)',
                'Creación de contenido atractivo y gestión de pauta digital',
                'Optimización de estrategias de marketing digital y SEO',
                'Soporte a la operación comercial y asesoría post-venta',
                'Uso de herramientas de diseño gráfico bísico'
            ],
            planEstudios: '/docs/planes-estudio/individual/asistente-marketing-ventas.html'
        }
    };

    // Variable global para rastrear el programa actual
    let cursoActual = null;

    function mostrarDetalleCurso(cursoId) {
        cursoActual = cursoId;
        const curso = cursosData[cursoId];

        document.getElementById('titulo-curso').textContent = curso.nombre;
        document.getElementById('duracion-curso').textContent = curso.duracion;
        document.getElementById('modalidad-curso').textContent = curso.modalidad;
        document.getElementById('horarios-curso').textContent = curso.horarios;
        document.getElementById('inversion-curso').textContent = curso.inversion;
        document.getElementById('titulo-curso-obtenido').textContent = curso.titulo;

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

        actualizarFormularioModal(curso);

        document.getElementById('detalle-curso').style.display = 'block';
        document.getElementById('detalle-curso').scrollIntoView({
            behavior: 'smooth'
        });
    }

    function ocultarDetalleCurso() {
        document.getElementById('detalle-curso').style.display = 'none';
        cursoActual = null;
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    function abrirModalInscripcion() {
        if (!cursoActual) {
            alert('Por favor, selecciona un programa primero.');
            return;
        }

        const curso = cursosData[cursoActual];
        actualizarFormularioModal(curso);

        var modalInscripcion = new bootstrap.Modal(document.getElementById('modalInscripcion'));
        modalInscripcion.show();
    }

    function actualizarFormularioModal(curso) {
        document.getElementById('curso-nombre-input').value = curso.nombre;
        document.getElementById('curso-duracion-input').value = curso.duracion;
        document.getElementById('curso-inversion-input').value = curso.inversion;
        document.getElementById('curso-modalidad-input').value = curso.modalidad;

        document.getElementById('curso-duracion-hidden').value = curso.duracion;
        document.getElementById('curso-inversion-hidden').value = curso.inversion;
        document.getElementById('curso-modalidad-hidden').value = curso.modalidad;
    }

    // Si hay errores de validación
    @if($errors->any())
    const cursoAnterior = '{{ old("curso") }}';
    if (cursoAnterior) {
        for (const [id, data] of Object.entries(cursosData)) {
            if (data.nombre === cursoAnterior) {
                cursoActual = id;
                mostrarDetalleCurso(id);
                break;
            }
        }
    }

    setTimeout(function() {
        var modalInscripcion = new bootstrap.Modal(document.getElementById('modalInscripcion'));
        modalInscripcion.show();
    }, 500);
    @endif

    // Si hay mensaje de éxito
    @if(session('success'))
        var modalInscripcion = new bootstrap.Modal(document.getElementById('modalInscripcion'));
        modalInscripcion.show();
        setTimeout(function() {
            modalInscripcion.hide();
            setTimeout(function() {
                window.location.href = '{{ route("educacion.tecnicos-laborales") }}';
            }, 500);
        }, 3000);
    @endif
</script>
@endsection