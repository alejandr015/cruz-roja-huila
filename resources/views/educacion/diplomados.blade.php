@extends('layouts.app')

@section('title', 'Diplomados - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-cursos">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Diplomados</h1>
        <p class="lead">Especialización y actualización profesional en áreas de la salud</p>
    </div>
</section>

<!-- Cursos -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title-cursos">Diplomados Disponibles</h2>
            <p class="lead text-muted">Programas de profundización con certificación</p>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Diplomado en Urgencias y Emergencias -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('urgencias')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Urgencias y Emergencias</h3>
                        <p>Manejo integral de situaciones críticas y atención avanzada de pacientes en estado de emergencia.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>120 horas</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>3-4 meses</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Diplomado</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Diplomado en Cuidado Crítico -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('cuidado-critico')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #C41419 0%, #9a1014 100%);">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Cuidado Crítico</h3>
                        <p>Atención especializada de pacientes en unidades de cuidados intensivos y terapia intensiva.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>120 horas</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>3-4 meses</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Diplomado</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Diplomado en Salud Ocupacional -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('salud-ocupacional')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);">
                        <i class="fas fa-briefcase-medical"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Salud Ocupacional</h3>
                        <p>Gestión de sistemas de seguridad y salud en el trabajo, prevención de riesgos laborales.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>120 horas</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>3-4 meses</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Diplomado</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Diplomado en Atención Integral al Adulto Mayor -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('adulto-mayor')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #2980b9 0%, #21618c 100%);">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Adulto Mayor</h3>
                        <p>Cuidado especializado y atención integral de personas de la tercera edad.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>100 horas</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>2-3 meses</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Diplomado</span>
                            </div>
                        </div>

                        <button class="btn-ver-detalle">
                            <i class="fas fa-info-circle me-2"></i>Ver Detalles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Diplomado en Primeros Auxilios Avanzados -->
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('primeros-auxilios')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);">
                        <i class="fas fa-first-aid"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Primeros Auxilios Avanzados</h3>
                        <p>Técnicas avanzadas de atención inicial en emergencias médicas y traumatológicas.</p>

                        <div class="curso-info">
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>80 horas</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>2 meses</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-certificate"></i>
                                <span>Diplomado</span>
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

<!-- Detalle del Curso -->
<section id="detalle-curso" class="py-5 bg-light" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-4">
                <div class="curso-imagen-detalle" id="imagen-curso">
                    <i class="fas fa-hospital"></i>
                </div>
            </div>

            <div class="col-lg-7">
                <h2 class="curso-titulo-detalle" id="titulo-curso">Diplomado</h2>

                <div class="caracteristicas-curso">
                    <h4 class="mb-3"><i class="fas fa-list-ul me-2"></i>Características del Programa</h4>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Duración:</span>
                        <span class="caracteristica-value" id="duracion-curso">120 horas</span>
                    </div>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Tiempo Estimado:</span>
                        <span class="caracteristica-value" id="tiempo-curso">3-4 meses</span>
                    </div>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Modalidad:</span>
                        <span class="caracteristica-value" id="modalidad-curso">Presencial / Virtual</span>
                    </div>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Horarios:</span>
                        <span class="caracteristica-value" id="horarios-curso">Fines de semana</span>
                    </div>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Inversión:</span>
                        <span class="caracteristica-value" id="inversion-curso">Consultar</span>
                    </div>

                    <div class="caracteristica-item">
                        <span class="caracteristica-label">Certificación:</span>
                        <span class="caracteristica-value" id="certificacion-curso">Diplomado</span>
                    </div>
                </div>

                <div class="acciones-curso mt-4">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <a href="#" class="btn btn-plan-estudios w-100" target="_blank">
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
                                    <i class="fas fa-user-plus me-2"></i>Inscripción Diplomado
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

                                <form action="{{ route('diplomados.inscribir') }}" method="POST" id="formInscripcionDiplomado">
                                    @csrf

                                    <input type="hidden" name="duracion" id="curso-duracion-hidden">
                                    <input type="hidden" name="inversion" id="curso-inversion-hidden">
                                    <input type="hidden" name="modalidad" id="curso-modalidad-hidden">

                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="info-curso-form">
                                                <h6 class="mb-3"><i class="fas fa-graduation-cap me-2"></i>Información del Diplomado</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label fw-bold">Diplomado:</label>
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
                                <button type="submit" form="formInscripcionDiplomado" class="btn btn-primary-custom">
                                    <i class="fas fa-paper-plane me-2"></i>Enviar Inscripción
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contacto-info mt-4">
                    <p class="mb-0">
                        <i class="fas fa-phone-alt me-2"></i>
                        Para más información llamar al: <strong>317 297 1272</strong>
                    </p>
                </div>

                <div class="mt-4">
                    <button class="btn btn-outline-secondary" onclick="ocultarDetalleCurso()">
                        <i class="fas fa-arrow-left me-2"></i>Ver Todos los Diplomados
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
    const cursosData = {
        'urgencias': {
            nombre: 'Diplomado en Urgencias y Emergencias',
            duracion: '120 horas',
            tiempo: '3-4 meses',
            modalidad: 'Presencial / Virtual',
            horarios: 'Fines de semana',
            inversion: 'Consultar',
            certificacion: 'Diplomado Certificado',
            icono: 'fa-hospital',
            color: 'linear-gradient(135deg, #e74c3c 0%, #c0392b 100%)'
        },
        'cuidado-critico': {
            nombre: 'Diplomado en Cuidado Crítico',
            duracion: '120 horas',
            tiempo: '3-4 meses',
            modalidad: 'Presencial / Virtual',
            horarios: 'Fines de semana',
            inversion: 'Consultar',
            certificacion: 'Diplomado Certificado',
            icono: 'fa-heartbeat',
            color: 'linear-gradient(135deg, #C41419 0%, #9a1014 100%)'
        },
        'salud-ocupacional': {
            nombre: 'Diplomado en Salud Ocupacional',
            duracion: '120 horas',
            tiempo: '3-4 meses',
            modalidad: 'Presencial / Virtual',
            horarios: 'Fines de semana',
            inversion: 'Consultar',
            certificacion: 'Diplomado Certificado',
            icono: 'fa-briefcase-medical',
            color: 'linear-gradient(135deg, #1a2332 0%, #2C3E50 100%)'
        },
        'adulto-mayor': {
            nombre: 'Diplomado en Atención Integral al Adulto Mayor',
            duracion: '100 horas',
            tiempo: '2-3 meses',
            modalidad: 'Presencial / Virtual',
            horarios: 'Fines de semana',
            inversion: 'Consultar',
            certificacion: 'Diplomado Certificado',
            icono: 'fa-user-md',
            color: 'linear-gradient(135deg, #2980b9 0%, #21618c 100%)'
        },
        'primeros-auxilios': {
            nombre: 'Diplomado en Primeros Auxilios Avanzados',
            duracion: '80 horas',
            tiempo: '2 meses',
            modalidad: 'Presencial / Virtual',
            horarios: 'Fines de semana',
            inversion: 'Consultar',
            certificacion: 'Diplomado Certificado',
            icono: 'fa-first-aid',
            color: 'linear-gradient(135deg, #ED1C24 0%, #C41419 100%)'
        }
    };

    let cursoActual = null;

    function mostrarDetalleCurso(cursoId) {
        cursoActual = cursoId;
        const curso = cursosData[cursoId];

        document.getElementById('titulo-curso').textContent = curso.nombre;
        document.getElementById('duracion-curso').textContent = curso.duracion;
        document.getElementById('tiempo-curso').textContent = curso.tiempo;
        document.getElementById('modalidad-curso').textContent = curso.modalidad;
        document.getElementById('horarios-curso').textContent = curso.horarios;
        document.getElementById('inversion-curso').textContent = curso.inversion;
        document.getElementById('certificacion-curso').textContent = curso.certificacion;

        const imagenCurso = document.getElementById('imagen-curso');
        imagenCurso.innerHTML = `<i class="fas ${curso.icono}"></i>`;
        imagenCurso.style.background = curso.color;

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
            alert('Por favor, selecciona un diplomado primero.');
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

    @if(session('success'))
    var modalInscripcion = new bootstrap.Modal(document.getElementById('modalInscripcion'));
    modalInscripcion.show();
    setTimeout(function() {
        modalInscripcion.hide();
        setTimeout(function() {
            window.location.href = '{{ route("educacion.diplomados") }}';
        }, 500);
    }, 3000);
    @endif
</script>
@endsection