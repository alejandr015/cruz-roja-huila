@extends('layouts.app')
@section('title', 'Educación Virtual - Cruz Roja Huila')
@section('content')
<section class="page-header-cursos virtual-header-bg text-center text-white">
    <!-- Digital Grid and Nodes -->
    <div class="digital-grid"></div>
    <div class="digital-node node-1"></div>
    <div class="digital-node node-2"></div>
    <div class="digital-node node-3"></div>
    <div class="digital-node node-4"></div>
    <div class="digital-node node-5"></div>
    <div class="scan-line"></div>

    <div class="container position-relative z-2">
        <span class="badge bg-light text-primary mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
            <i class="fas fa-globe me-2"></i> Campus Virtual
        </span>
        <h1 class="display-4 fw-bold mb-3 text-shadow" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">Educación Virtual</h1>
        <p class="lead text-white-50 mx-auto mb-0" style="max-width: 700px; font-weight: 300; font-size: 1.15rem;">Aprende desde cualquier lugar con nuestros cursos online</p>
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
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title-cursos">Cursos Virtuales Disponibles</h2>
            <p class="lead text-muted">Plataforma de aprendizaje online 24/7</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('pa-virtual')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);">
                        <i class="fas fa-laptop-medical"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Primeros Auxilios Virtual</h3>
                        <p>Curso completo de primeros auxilios con contenido multimedia interactivo.</p>
                        <div class="curso-info">
                            <div class="info-item"><i class="fas fa-clock"></i><span>20 horas</span></div>
                            <div class="info-item"><i class="fas fa-laptop"></i><span>100% Online</span></div>
                            <div class="info-item"><i class="fas fa-certificate"></i><span>Certificado</span></div>
                        </div>
                        <button class="btn-ver-detalle"><i class="fas fa-info-circle me-2"></i>Ver Detalles</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('rcp-virtual')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);">
                        <i class="fas fa-heart-pulse"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>RCP Básico Virtual</h3>
                        <p>Aprende las técnicas de reanimación cardiopulmonar de forma virtual.</p>
                        <div class="curso-info">
                            <div class="info-item"><i class="fas fa-clock"></i><span>10 horas</span></div>
                            <div class="info-item"><i class="fas fa-laptop"></i><span>100% Online</span></div>
                            <div class="info-item"><i class="fas fa-certificate"></i><span>Certificado</span></div>
                        </div>
                        <button class="btn-ver-detalle"><i class="fas fa-info-circle me-2"></i>Ver Detalles</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('dih-virtual')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Derecho Internacional Humanitario</h3>
                        <p>Fundamentos del DIH y principios de la Cruz Roja.</p>
                        <div class="curso-info">
                            <div class="info-item"><i class="fas fa-clock"></i><span>15 horas</span></div>
                            <div class="info-item"><i class="fas fa-laptop"></i><span>100% Online</span></div>
                            <div class="info-item"><i class="fas fa-certificate"></i><span>Certificado</span></div>
                        </div>
                        <button class="btn-ver-detalle"><i class="fas fa-info-circle me-2"></i>Ver Detalles</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('salud-mental')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, #2980b9 0%, #21618c 100%);">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Primeros Auxilios Psicológicos</h3>
                        <p>Apoyo emocional y psicológico en situaciones de crisis.</p>
                        <div class="curso-info">
                            <div class="info-item"><i class="fas fa-clock"></i><span>12 horas</span></div>
                            <div class="info-item"><i class="fas fa-laptop"></i><span>100% Online</span></div>
                            <div class="info-item"><i class="fas fa-certificate"></i><span>Certificado</span></div>
                        </div>
                        <button class="btn-ver-detalle"><i class="fas fa-info-circle me-2"></i>Ver Detalles</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="detalle-curso" class="py-5 bg-light" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-4">
                <div class="curso-imagen-detalle" id="imagen-curso"><i class="fas fa-laptop-medical"></i></div>
            </div>
            <div class="col-lg-7">
                <h2 class="curso-titulo-detalle" id="titulo-curso">Curso Virtual</h2>
                <div class="caracteristicas-curso">
                    <h4 class="mb-3"><i class="fas fa-list-ul me-2"></i>Características del Curso</h4>
                    <div class="caracteristica-item"><span class="caracteristica-label">Duración:</span><span class="caracteristica-value" id="duracion-curso">20 horas</span></div>
                    <div class="caracteristica-item"><span class="caracteristica-label">Modalidad:</span><span class="caracteristica-value" id="modalidad-curso">100% Virtual</span></div>
                    <div class="caracteristica-item"><span class="caracteristica-label">Acceso:</span><span class="caracteristica-value" id="acceso-curso">24/7 Plataforma online</span></div>
                    <div class="caracteristica-item"><span class="caracteristica-label">Metodología:</span><span class="caracteristica-value" id="metodologia-curso">Autodirigido</span></div>
                    <div class="caracteristica-item"><span class="caracteristica-label">Inversión:</span><span class="caracteristica-value" id="inversion-curso">Consultar</span></div>
                </div>
                <div class="acciones-curso mt-4">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <a href="#" class="btn btn-plan-estudios w-100" target="_blank">
                                <i class="fas fa-download me-2"></i>Contenido
                            </a>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-inscribirse-detalle w-100" onclick="abrirModalInscripcion()">
                                <i class="fas fa-user-plus me-2"></i>Inscribirme
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
                <div class="modal fade" id="modalInscripcion" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    <i class="fas fa-user-plus me-2"></i>Inscripción Curso Virtual
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                                @endif

                                @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show">
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

                                <form action="{{ route('virtual.inscribir') }}" method="POST" id="formInscripcionVirtual">
                                    @csrf

                                    <input type="hidden" name="duracion" id="curso-duracion-hidden">
                                    <input type="hidden" name="modalidad" id="curso-modalidad-hidden">

                                    <div class="row g-3">
                                        <!-- Información del Curso -->
                                        <div class="col-12">
                                            <div class="info-curso-form">
                                                <h6 class="mb-3"><i class="fas fa-laptop me-2"></i>Información del Curso</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label fw-bold">Curso:</label>
                                                        <input type="text" name="curso" id="curso-nombre-input" class="form-control-plaintext" readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label fw-bold">Duración:</label>
                                                        <input type="text" id="curso-duracion-input" class="form-control-plaintext" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <!-- Información del Estudiante -->
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
                                            <small class="text-muted">Recibirás el acceso a la plataforma en este correo</small>
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

                                        <div class="col-md-4">
                                            <label class="form-label">Fecha de Nacimiento <span class="text-danger">*</span></label>
                                            <input type="date" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ old('fecha_nacimiento') }}" required>
                                            @error('fecha_nacimiento')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label">Ciudad</label>
                                            <input type="text" name="ciudad" class="form-control" value="{{ old('ciudad', 'Neiva') }}" readonly>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label">País</label>
                                            <input type="text" name="pais" class="form-control" value="{{ old('pais', 'Colombia') }}" readonly>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Nivel de Conocimiento en el Tema <span class="text-danger">*</span></label>
                                            <select name="nivel_conocimiento" class="form-select @error('nivel_conocimiento') is-invalid @enderror" required>
                                                <option value="">Seleccione...</option>
                                                <option value="ninguno" {{ old('nivel_conocimiento') == 'ninguno' ? 'selected' : '' }}>Sin conocimientos previos</option>
                                                <option value="basico" {{ old('nivel_conocimiento') == 'basico' ? 'selected' : '' }}>Básico</option>
                                                <option value="intermedio" {{ old('nivel_conocimiento') == 'intermedio' ? 'selected' : '' }}>Intermedio</option>
                                                <option value="avanzado" {{ old('nivel_conocimiento') == 'avanzado' ? 'selected' : '' }}>Avanzado</option>
                                            </select>
                                            @error('nivel_conocimiento')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" form="formInscripcionVirtual" class="btn btn-primary-custom">
                                    <i class="fas fa-paper-plane me-2"></i>Enviar Inscripción
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contacto-info mt-4">
                    <p class="mb-0"><i class="fas fa-phone-alt me-2"></i>Para inscripciones llamar al: <strong>317 297 1272</strong></p>
                </div>
                <div class="mt-4">
                    <button class="btn btn-outline-secondary" onclick="ocultarDetalleCurso()"><i class="fas fa-arrow-left me-2"></i>Ver Todos los Cursos</button>
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
        position: relative;
    }

    .virtual-header-bg {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    /* Digital Grid */
    .digital-grid {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        background-size: 50px 50px;
        z-index: 0;
    }

    /* Digital Nodes */
    .digital-node {
        position: absolute;
        width: 4px;
        height: 4px;
        background: #3498db;
        border-radius: 50%;
        box-shadow: 0 0 10px #3498db, 0 0 20px #3498db;
        z-index: 1;
        animation: pulseNode 3s infinite ease-in-out;
    }

    @keyframes pulseNode {
        0%, 100% { transform: scale(1); opacity: 0.3; }
        50% { transform: scale(2); opacity: 1; }
    }

    .node-1 { top: 20%; left: 15%; animation-delay: 0s; }
    .node-2 { top: 60%; left: 25%; animation-delay: 1s; }
    .node-3 { top: 40%; left: 50%; animation-delay: 0.5s; }
    .node-4 { top: 75%; left: 80%; animation-delay: 1.5s; }
    .node-5 { top: 30%; left: 70%; animation-delay: 2s; }

    /* Scan Line */
    .scan-line {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(52, 152, 219, 0.3), transparent);
        z-index: 1;
        animation: scanMove 8s infinite linear;
    }

    @keyframes scanMove {
        0% { top: -100px; }
        100% { top: 100%; }
    }

    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .z-2 {
        z-index: 2;
    }

    .section-title-cursos {
        color: #1a2332;
        font-weight: 700;
        font-size: 2.5rem;
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 20px
    }

    .section-title-cursos::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #ED1C24
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
        flex-direction: column
    }

    .curso-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(237, 28, 36, 0.2)
    }

    .curso-imagen {
        padding: 50px 0;
        text-align: center;
        color: white
    }

    .curso-imagen i {
        font-size: 5rem
    }

    .curso-contenido {
        padding: 30px;
        flex-grow: 1;
        display: flex;
        flex-direction: column
    }

    .curso-contenido h3 {
        color: #1a2332;
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 15px
    }

    .curso-contenido p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 20px;
        flex-grow: 1;
        min-height: 80px
    }

    .curso-info {
        display: flex;
        justify-content: space-around;
        padding: 15px 0;
        border-top: 2px solid #f0f0f0;
        border-bottom: 2px solid #f0f0f0;
        margin-bottom: 20px
    }

    .info-item {
        text-align: center
    }

    .info-item i {
        color: #ED1C24;
        font-size: 1.2rem;
        display: block;
        margin-bottom: 8px
    }

    .info-item span {
        font-size: 0.85rem;
        color: #666;
        font-weight: 600
    }

    .btn-ver-detalle {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 10px;
        font-weight: 600;
        width: 100%;
        transition: all 0.3s
    }

    .btn-ver-detalle:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(237, 28, 36, 0.3)
    }

    .curso-imagen-detalle {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        border-radius: 20px;
        padding: 80px 20px;
        text-align: center;
        color: white;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1)
    }

    .curso-imagen-detalle i {
        font-size: 8rem
    }

    .curso-titulo-detalle {
        color: #1a2332;
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 30px
    }

    .caracteristicas-curso {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
        margin-bottom: 20px
    }

    .caracteristicas-curso h4 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 20px
    }

    .caracteristica-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0
    }

    .caracteristica-item:last-child {
        border-bottom: none
    }

    .caracteristica-label {
        font-weight: 600;
        color: #666
    }

    .caracteristica-value {
        font-weight: 700;
        color: #ED1C24;
        text-align: right
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
        transition: all 0.3s
    }

    .btn-plan-estudios:hover {
        background: #2980b9;
        color: white;
        transform: translateY(-2px)
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
        transition: all 0.3s
    }

    .btn-mas-info:hover {
        background: #128C7E;
        color: white;
        transform: translateY(-2px)
    }

    .contacto-info {
        background: #f8f9fa;
        padding: 15px 20px;
        border-radius: 10px;
        border-left: 4px solid #ED1C24
    }

    .contacto-info p {
        color: #666
    }

    .contacto-info strong {
        color: #ED1C24
    }

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

    @media (max-width:768px) {
        .section-title-cursos {
            font-size: 2rem
        }

        .curso-contenido p {
            min-height: auto
        }

        .curso-imagen-detalle {
            padding: 60px 20px;
            margin-bottom: 30px
        }

        .curso-imagen-detalle i {
            font-size: 6rem
        }

        .caracteristica-item {
            flex-direction: column;
            gap: 5px
        }

        .caracteristica-value {
            text-align: left
        }
    }
</style>
@endsection

@section('scripts')
<script>
const cursosData = {
    'pa-virtual': {
        nombre: 'Primeros Auxilios Virtual',
        duracion: '20 horas',
        modalidad: '100% Virtual',
        acceso: '24/7 Plataforma online',
        metodologia: 'Autodirigido con evaluaciones',
        inversion: 'Consultar',
        icono: 'fa-laptop-medical',
        color: 'linear-gradient(135deg, #ED1C24 0%, #C41419 100%)'
    },
    'rcp-virtual': {
        nombre: 'RCP Básico Virtual',
        duracion: '10 horas',
        modalidad: '100% Virtual',
        acceso: '24/7 Plataforma online',
        metodologia: 'Videos interactivos',
        inversion: 'Consultar',
        icono: 'fa-heart-pulse',
        color: 'linear-gradient(135deg, #e74c3c 0%, #c0392b 100%)'
    },
    'dih-virtual': {
        nombre: 'Derecho Internacional Humanitario',
        duracion: '15 horas',
        modalidad: '100% Virtual',
        acceso: '24/7 Plataforma online',
        metodologia: 'Módulos interactivos',
        inversion: 'Consultar',
        icono: 'fa-book-open',
        color: 'linear-gradient(135deg, #3498db 0%, #2980b9 100%)'
    },
    'salud-mental': {
        nombre: 'Primeros Auxilios Psicológicos',
        duracion: '12 horas',
        modalidad: '100% Virtual',
        acceso: '24/7 Plataforma online',
        metodologia: 'Casos prácticos virtuales',
        inversion: 'Consultar',
        icono: 'fa-brain',
        color: 'linear-gradient(135deg, #2980b9 0%, #21618c 100%)'
    }
};

let cursoActual = null;

function mostrarDetalleCurso(cursoId) {
    cursoActual = cursoId;
    const curso = cursosData[cursoId];
    
    document.getElementById('titulo-curso').textContent = curso.nombre;
    document.getElementById('duracion-curso').textContent = curso.duracion;
    document.getElementById('modalidad-curso').textContent = curso.modalidad;
    document.getElementById('acceso-curso').textContent = curso.acceso;
    document.getElementById('metodologia-curso').textContent = curso.metodologia;
    document.getElementById('inversion-curso').textContent = curso.inversion;
    
    const imagenCurso = document.getElementById('imagen-curso');
    imagenCurso.innerHTML = `<i class="fas ${curso.icono}"></i>`;
    imagenCurso.style.background = curso.color;
    
    actualizarFormularioModal(curso);
    
    document.getElementById('detalle-curso').style.display = 'block';
    document.getElementById('detalle-curso').scrollIntoView({behavior: 'smooth'});
}

function ocultarDetalleCurso() {
    document.getElementById('detalle-curso').style.display = 'none';
    cursoActual = null;
    window.scrollTo({top: 0, behavior: 'smooth'});
}

function abrirModalInscripcion() {
    if (!cursoActual) {
        alert('Por favor, selecciona un curso primero.');
        return;
    }
    
    const curso = cursosData[cursoActual];
    actualizarFormularioModal(curso);
    
    var modal = new bootstrap.Modal(document.getElementById('modalInscripcion'));
    modal.show();
}

function actualizarFormularioModal(curso) {
    document.getElementById('curso-nombre-input').value = curso.nombre;
    document.getElementById('curso-duracion-input').value = curso.duracion;
    document.getElementById('curso-duracion-hidden').value = curso.duracion;
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
        var modal = new bootstrap.Modal(document.getElementById('modalInscripcion'));
        modal.show();
    }, 500);
@endif

@if(session('success'))
    var modal = new bootstrap.Modal(document.getElementById('modalInscripcion'));
    modal.show();
    setTimeout(function() {
        modal.hide();
        setTimeout(function() {
            window.location.href = '{{ route("educacion.educacion-virtual") }}';
        }, 500);
    }, 3000);
@endif
</script>
@endsection