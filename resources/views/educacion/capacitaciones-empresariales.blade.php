@extends('layouts.app')
@section('title', 'Capacitaciones Empresariales - Cruz Roja Huila')
@section('content')
<section class="page-header-cursos empresariales-header-bg text-center text-white">
    <!-- Floating Shapes -->
    <div class="edu-shape sq sh-1"></div>
    <div class="edu-shape ci sh-2"></div>
    <div class="edu-shape sq sh-3" style="width: 40px; height: 40px;"></div>
    <div class="edu-shape ci sh-4" style="width: 50px; height: 50px;"></div>
    <div class="edu-shape sq sh-5"></div>
    <div class="edu-shape ci sh-6" style="width: 100px; height: 100px;"></div>

    <div class="container position-relative z-2">
        <span class="badge bg-light text-danger mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
            <i class="fas fa-building me-2"></i> Soluciones Corporativas
        </span>
        <h1 class="display-4 fw-bold mb-3 text-shadow" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">Capacitaciones Empresariales</h1>
        <p class="lead text-white-50 mx-auto mb-0" style="max-width: 700px; font-weight: 300; font-size: 1.15rem;">Programas de formación a medida para empresas y organizaciones</p>
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
            <h2 class="section-title-cursos">Nuestros Programas Empresariales</h2>
            <p class="lead text-muted">Capacitación in-company personalizada</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('primeros-auxilios')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, rgba(237,28,36,0.75) 0%, rgba(196,20,25,0.75) 100%), url('{{ asset('reales/real-46.jpeg') }}') center/cover;">
                        <i class="fas fa-first-aid"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Primeros Auxilios Empresarial</h3>
                        <p>Capacitación básica y avanzada en primeros auxilios para personal de empresas.</p>
                        <div class="curso-info">
                            <div class="info-item"><i class="fas fa-clock"></i><span>16-40 horas</span></div>
                            <div class="info-item"><i class="fas fa-users"></i><span>Grupos</span></div>
                            <div class="info-item"><i class="fas fa-certificate"></i><span>Certificado</span></div>
                        </div>
                        <button class="btn-ver-detalle"><i class="fas fa-info-circle me-2"></i>Ver Detalles</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('brigadistas')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, rgba(26,35,50,0.75) 0%, rgba(44,62,80,0.75) 100%), url('{{ asset('reales/real-39.jpeg') }}') center/cover;">
                        <i class="fas fa-fire-extinguisher"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Formación de Brigadistas</h3>
                        <p>Entrenamiento completo para brigadas de emergencia empresariales.</p>
                        <div class="curso-info">
                            <div class="info-item"><i class="fas fa-clock"></i><span>40-80 horas</span></div>
                            <div class="info-item"><i class="fas fa-users"></i><span>Grupos</span></div>
                            <div class="info-item"><i class="fas fa-certificate"></i><span>Certificado</span></div>
                        </div>
                        <button class="btn-ver-detalle"><i class="fas fa-info-circle me-2"></i>Ver Detalles</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('rcp')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, rgba(231,76,60,0.75) 0%, rgba(192,57,43,0.75) 100%), url('{{ asset('reales/real-52.jpeg') }}') center/cover;">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>RCP y DEA</h3>
                        <p>Reanimación cardiopulmonar y uso de desfibrilador externo automatizado.</p>
                        <div class="curso-info">
                            <div class="info-item"><i class="fas fa-clock"></i><span>8-16 horas</span></div>
                            <div class="info-item"><i class="fas fa-users"></i><span>Grupos</span></div>
                            <div class="info-item"><i class="fas fa-certificate"></i><span>Certificado</span></div>
                        </div>
                        <button class="btn-ver-detalle"><i class="fas fa-info-circle me-2"></i>Ver Detalles</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('sst')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, rgba(196,20,25,0.75) 0%, rgba(154,16,20,0.75) 100%), url('{{ asset('reales/real-31.jpeg') }}') center/cover;">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Seguridad y Salud en el Trabajo</h3>
                        <p>Programas de SST adaptados a las necesidades de su empresa.</p>
                        <div class="curso-info">
                            <div class="info-item"><i class="fas fa-clock"></i><span>Variable</span></div>
                            <div class="info-item"><i class="fas fa-users"></i><span>Grupos</span></div>
                            <div class="info-item"><i class="fas fa-certificate"></i><span>Certificado</span></div>
                        </div>
                        <button class="btn-ver-detalle"><i class="fas fa-info-circle me-2"></i>Ver Detalles</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="curso-card" onclick="mostrarDetalleCurso('alturas')">
                    <div class="curso-imagen" style="background: linear-gradient(135deg, rgba(52,152,219,0.75) 0%, rgba(41,128,185,0.75) 100%), url('{{ asset('reales/real-13.jpeg') }}') center/cover;">
                        <i class="fas fa-person-falling"></i>
                    </div>
                    <div class="curso-contenido">
                        <h3>Trabajo en Alturas</h3>
                        <p>Capacitación certificada para trabajo seguro en alturas.</p>
                        <div class="curso-info">
                            <div class="info-item"><i class="fas fa-clock"></i><span>8-40 horas</span></div>
                            <div class="info-item"><i class="fas fa-users"></i><span>Grupos</span></div>
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
                <div class="curso-imagen-detalle" id="imagen-curso"><i class="fas fa-first-aid"></i></div>
            </div>
            <div class="col-lg-7">
                <h2 class="curso-titulo-detalle" id="titulo-curso">Capacitación Empresarial</h2>
                <div class="caracteristicas-curso">
                    <h4 class="mb-3"><i class="fas fa-list-ul me-2"></i>Características del Programa</h4>
                    <div class="caracteristica-item"><span class="caracteristica-label">Duración:</span><span class="caracteristica-value" id="duracion-curso">Variable</span></div>
                    <div class="caracteristica-item"><span class="caracteristica-label">Modalidad:</span><span class="caracteristica-value" id="modalidad-curso">In-Company</span></div>
                    <div class="caracteristica-item"><span class="caracteristica-label">Formato:</span><span class="caracteristica-value" id="formato-curso">Presencial</span></div>
                    <div class="caracteristica-item"><span class="caracteristica-label">Participantes:</span><span class="caracteristica-value" id="participantes-curso">Grupos empresariales</span></div>
                    <div class="caracteristica-item"><span class="caracteristica-label">Inversión:</span><span class="caracteristica-value" id="inversion-curso">Cotización personalizada</span></div>
                </div>
                <div class="acciones-curso mt-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <button class="btn btn-solicitar-cotizacion w-100" onclick="abrirModalCotizacion()">
                                <i class="fas fa-file-invoice me-2"></i>Solicitar Cotización
                            </button>
                        </div>
                        <div class="col-md-6">
                            <a href="https://wa.me/573172971272" class="btn btn-mas-info w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i>Contactar por WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Modal Formulario de Cotización -->
                <div class="modal fade" id="modalCotizacion" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    <i class="fas fa-file-invoice me-2"></i>Solicitar Cotización Empresarial
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

                                <form action="{{ route('empresariales.solicitar') }}" method="POST" id="formCotizacion">
                                    @csrf

                                    <input type="hidden" name="duracion" id="curso-duracion-hidden">
                                    <input type="hidden" name="modalidad" id="curso-modalidad-hidden">

                                    <div class="row g-3">
                                        <!-- Información del Programa -->
                                        <div class="col-12">
                                            <div class="info-curso-form">
                                                <h6 class="mb-3"><i class="fas fa-graduation-cap me-2"></i>Capacitación Solicitada</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label fw-bold">Programa:</label>
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

                                        <!-- Información de la Empresa -->
                                        <div class="col-12">
                                            <h6 class="mb-3"><i class="fas fa-building me-2"></i>Información de la Empresa</h6>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Nombre de la Empresa <span class="text-danger">*</span></label>
                                            <input type="text" name="empresa" class="form-control @error('empresa') is-invalid @enderror" value="{{ old('empresa') }}" required>
                                            @error('empresa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">NIT <span class="text-danger">*</span></label>
                                            <input type="text" name="nit" class="form-control @error('nit') is-invalid @enderror" value="{{ old('nit') }}" required>
                                            @error('nit')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Sector / Industria</label>
                                            <input type="text" name="sector" class="form-control" value="{{ old('sector') }}" placeholder="Ej: Construcción, Manufactura, Servicios">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Número de Participantes <span class="text-danger">*</span></label>
                                            <input type="number" name="numero_participantes" class="form-control @error('numero_participantes') is-invalid @enderror" value="{{ old('numero_participantes') }}" min="1" required>
                                            @error('numero_participantes')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <hr>

                                        <!-- Información del Contacto -->
                                        <div class="col-12">
                                            <h6 class="mb-3"><i class="fas fa-user me-2"></i>Información del Contacto</h6>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Nombre Completo <span class="text-danger">*</span></label>
                                            <input type="text" name="nombre_contacto" class="form-control @error('nombre_contacto') is-invalid @enderror" value="{{ old('nombre_contacto') }}" required>
                                            @error('nombre_contacto')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Cargo <span class="text-danger">*</span></label>
                                            <input type="text" name="cargo" class="form-control @error('cargo') is-invalid @enderror" value="{{ old('cargo') }}" required>
                                            @error('cargo')
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
                                            <label class="form-label">Ciudad</label>
                                            <input type="text" name="ciudad" class="form-control" value="{{ old('ciudad', 'Neiva') }}" readonly>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Fecha Preferida</label>
                                            <input type="date" name="fecha_preferida" class="form-control" value="{{ old('fecha_preferida') }}">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" form="formCotizacion" class="btn btn-primary-custom">
                                    <i class="fas fa-paper-plane me-2"></i>Enviar Solicitud
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contacto-info mt-4">
                    <p class="mb-0"><i class="fas fa-phone-alt me-2"></i>Para cotizaciones llamar al: <strong>317 297 1272</strong></p>
                </div>
                <div class="mt-4">
                    <button class="btn btn-outline-secondary" onclick="ocultarDetalleCurso()"><i class="fas fa-arrow-left me-2"></i>Ver Todas las Capacitaciones</button>
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

    .empresariales-header-bg {
        background: linear-gradient(135deg, rgba(18,40,76,0.6) 0%, rgba(44,62,80,0.6) 100%), url('{{ asset('reales/real-3.jpeg') }}') center/cover;
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

    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
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

    .btn-solicitar-cotizacion {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        color: white;
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-solicitar-cotizacion:hover {
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
        'primeros-auxilios': {
            nombre: 'Primeros Auxilios Empresarial',
            duracion: '16-40 horas (según nivel)',
            modalidad: 'In-Company',
            formato: 'Presencial en sus instalaciones',
            participantes: 'Grupos de 10-30 personas',
            inversion: 'Cotización personalizada',
            icono: 'fa-first-aid',
            color: 'linear-gradient(135deg, #ED1C24 0%, #C41419 100%)'
        },
        'brigadistas': {
            nombre: 'Formación de Brigadistas',
            duracion: '40-80 horas',
            modalidad: 'In-Company',
            formato: 'Teórico-práctico',
            participantes: 'Grupos empresariales',
            inversion: 'Cotización personalizada',
            icono: 'fa-fire-extinguisher',
            color: 'linear-gradient(135deg, #1a2332 0%, #2C3E50 100%)'
        },
        'rcp': {
            nombre: 'RCP y Uso de DEA',
            duracion: '8-16 horas',
            modalidad: 'In-Company',
            formato: 'Práctico con simulación',
            participantes: 'Grupos de 10-20 personas',
            inversion: 'Cotización personalizada',
            icono: 'fa-heartbeat',
            color: 'linear-gradient(135deg, #e74c3c 0%, #c0392b 100%)'
        },
        'sst': {
            nombre: 'Seguridad y Salud en el Trabajo',
            duracion: 'Variable según programa',
            modalidad: 'In-Company',
            formato: 'Presencial',
            participantes: 'Personal de la empresa',
            inversion: 'Cotización personalizada',
            icono: 'fa-hard-hat',
            color: 'linear-gradient(135deg, #C41419 0%, #9a1014 100%)'
        },
        'alturas': {
            nombre: 'Trabajo en Alturas',
            duracion: '8-40 horas (según nivel)',
            modalidad: 'In-Company',
            formato: 'Teórico-práctico',
            participantes: 'Grupos empresariales',
            inversion: 'Cotización personalizada',
            icono: 'fa-person-falling',
            color: 'linear-gradient(135deg, #3498db 0%, #2980b9 100%)'
        }
    };

    let cursoActual = null;

    function mostrarDetalleCurso(cursoId) {
        cursoActual = cursoId;
        const curso = cursosData[cursoId];

        document.getElementById('titulo-curso').textContent = curso.nombre;
        document.getElementById('duracion-curso').textContent = curso.duracion;
        document.getElementById('modalidad-curso').textContent = curso.modalidad;
        document.getElementById('formato-curso').textContent = curso.formato;
        document.getElementById('participantes-curso').textContent = curso.participantes;
        document.getElementById('inversion-curso').textContent = curso.inversion;

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

    function abrirModalCotizacion() {
        if (!cursoActual) {
            alert('Por favor, selecciona una capacitación primero.');
            return;
        }

        const curso = cursosData[cursoActual];
        actualizarFormularioModal(curso);

        var modal = new bootstrap.Modal(document.getElementById('modalCotizacion'));
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
        var modal = new bootstrap.Modal(document.getElementById('modalCotizacion'));
        modal.show();
    }, 500);
    @endif

    @if(session('success'))
    var modal = new bootstrap.Modal(document.getElementById('modalCotizacion'));
    modal.show();
    setTimeout(function() {
        modal.hide();
        setTimeout(function() {
            window.location.href = '{{ route("educacion.capacitaciones-empresariales") }}';
        }, 500);
    }, 3000);
    @endif
</script>
@endsection