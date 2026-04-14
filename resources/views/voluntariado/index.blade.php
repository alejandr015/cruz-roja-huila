@extends('layouts.app')

@section('title', 'Voluntariados - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<style>
    .animated-bg {
        background: linear-gradient(-45deg, #0b1a30, #17325c, #1f2e4a, #12284C);
        background-size: 400% 400%;
        animation: gradientBG 15s ease infinite;
    }
    @keyframes gradientBG {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    .particles-container {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        overflow: hidden;
        z-index: 0;
        pointer-events: none;
    }
    .particle {
        position: absolute;
        bottom: -150px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 50%;
        animation: floatUp linear infinite;
    }
    .particle::after {
        content: '';
        position: absolute;
        top: 50%; left: 50%;
        transform: translate(-50%, -50%);
        width: 60%; height: 60%;
        background: radial-gradient(circle, rgba(237, 28, 36, 0.25) 0%, transparent 70%);
        border-radius: 50%;
    }
    .particle:nth-child(1) { left: 10%; width: 80px; height: 80px; animation-duration: 25s; animation-delay: 0s; }
    .particle:nth-child(2) { left: 20%; width: 20px; height: 20px; animation-duration: 12s; animation-delay: 2s; }
    .particle:nth-child(3) { left: 30%; width: 50px; height: 50px; animation-duration: 18s; animation-delay: 4s; }
    .particle:nth-child(4) { left: 40%; width: 60px; height: 60px; animation-duration: 22s; animation-delay: 0s; }
    .particle:nth-child(5) { left: 50%; width: 15px; height: 15px; animation-duration: 10s; animation-delay: 5s; }
    .particle:nth-child(6) { left: 60%; width: 110px; height: 110px; animation-duration: 28s; animation-delay: 1s; }
    .particle:nth-child(7) { left: 70%; width: 30px; height: 30px; animation-duration: 14s; animation-delay: 3s; }
    .particle:nth-child(8) { left: 80%; width: 85px; height: 85px; animation-duration: 26s; animation-delay: 6s; }
    .particle:nth-child(9) { left: 90%; width: 25px; height: 25px; animation-duration: 11s; animation-delay: 2s; }
    .particle:nth-child(10) { left: 95%; width: 40px; height: 40px; animation-duration: 15s; animation-delay: 4s; }

    @keyframes floatUp {
        0% { transform: translateY(0) rotate(0deg); opacity: 1; }
        100% { transform: translateY(-800px) rotate(360deg); opacity: 0; }
    }
</style>
<section class="page-header-voluntariado position-relative animated-bg" style="padding: 100px 0; overflow: hidden;">
    <!-- Partículas animadas de fondo -->
    <div class="particles-container">
        <div class="particle"></div><div class="particle"></div><div class="particle"></div><div class="particle"></div><div class="particle"></div>
        <div class="particle"></div><div class="particle"></div><div class="particle"></div><div class="particle"></div><div class="particle"></div>
    </div>
    
    <div class="container position-relative z-1 text-center text-white">
        <span class="badge bg-danger mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
            <i class="fas fa-hands-helping me-2"></i> Forma Parte del Equipo
        </span>
        <h1 class="display-4 fw-bold mb-3 text-shadow" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Conoce Nuestras Tres Modalidades De Voluntariados</h1>
        <p class="lead text-white-50 mx-auto mb-0" style="max-width: 700px; font-weight: 300; font-size: 1.15rem;">
            Descubre las diferentes formas en las que puedes involucrarte y hacer la diferencia. Tu tiempo y habilidades pueden cambiar vidas.
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

<!-- Tres Modalidades -->
<section class="modalidades-section py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <!-- Juveniles -->
            <div class="col-md-4">
                <a href="{{ route('voluntariado.juventudes') }}" class="modalidad-card has-bg" style="background-image: url('https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop');">
                    <div class="card-overlay"></div>
                    <div class="card-content">
                        <div class="modalidad-icon-badge">
                            <i class="fas fa-users-line"></i>
                        </div>
                        <h3>Juveniles</h3>
                        <p>Formamos líderes del mañana a través de la educación y el servicio humanitario desde temprana edad.</p>
                        <span class="btn-explore-light">Descubrir más <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>

            <!-- Damas Grises -->
            <div class="col-md-4">
                <a href="{{ route('voluntariado.damas-grises') }}" class="modalidad-card has-bg" style="background-image: url('https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?q=80&w=2070&auto=format&fit=crop');">
                    <div class="card-overlay"></div>
                    <div class="card-content">
                        <div class="modalidad-icon-badge">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h3>Damas Grises</h3>
                        <p>Mujeres voluntarias dedicadas al servicio social, salud y bienestar de las comunidades vulnerables.</p>
                        <span class="btn-explore-light">Descubrir más <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>

            <!-- Socorristas -->
            <div class="col-md-4">
                <a href="{{ route('voluntariado.socorristas') }}" class="modalidad-card has-bg" style="background-image: url('https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?q=80&w=2070&auto=format&fit=crop');">
                    <div class="card-overlay"></div>
                    <div class="card-content">
                        <div class="modalidad-icon-badge">
                            <i class="fas fa-first-aid"></i>
                        </div>
                        <h3>Socorristas</h3>
                        <p>Personal altamente capacitado en primera respuesta, rescates y atención de desastres.</p>
                        <span class="btn-explore-light">Descubrir más <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Requisitos Para Ser Voluntario -->
<section class="requisitos-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center requisitos-title mb-5">Requisitos Para Ser Voluntario</h2>

        <div class="requisitos-container">
            <div class="requisitos-content">
                <div class="row g-4">
                    <!-- Requisitos Básicos -->
                    <div class="col-lg-4">
                        <div class="requisito-card text-center">
                            <div class="requisito-icon mx-auto">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h4>Requisitos Básicos</h4>
                            <ul class="requisitos-lista-simple">
                                <li>Inscripción voluntaria</li>
                                <li>Aprobar curso de formación</li>
                                <li>Compromiso con Cruz Roja</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Edad Mínima -->
                    <div class="col-lg-4">
                        <div class="requisito-card text-center">
                            <div class="requisito-icon mx-auto">
                                <i class="fas fa-user-clock"></i>
                            </div>
                            <h4>Edad Mínima</h4>
                            <ul class="requisitos-lista-simple">
                                <li><strong>Infantiles:</strong> 7 años</li>
                                <li><strong>Juveniles:</strong> 13 años</li>
                                <li><strong>Adultos:</strong> 18 años</li>
                            </ul>
                            <p class="text-muted small mt-3 mb-0">
                                *Menores requieren autorización de padres
                            </p>
                        </div>
                    </div>

                    <!-- Importante -->
                    <div class="col-lg-4">
                        <div class="requisito-card text-center">
                            <div class="requisito-icon mx-auto bg-warning">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <h4>Importante</h4>
                            <ul class="requisitos-lista-simple">
                                <li>No pertenecer a otra entidad de socorro</li>
                                <li>No tener cargos políticos activos</li>
                                <li>No ser miembro de fuerzas armadas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botones de Acción -->
        <div class="text-center mt-5">
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="#" class="btn btn-documento" target="_blank">
                    Ver Documento
                </a>
                <button type="button" class="btn btn-inscribirse" data-bs-toggle="modal" data-bs-target="#modalInscripcion">
                    ¡Inscribirme!
                </button>
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
                    <i class="fas fa-user-plus me-2"></i>Formulario de Inscripción
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

                <form action="{{ route('voluntariado.inscribirse') }}" method="POST" id="formInscripcion">
                    @csrf

                    <div class="row g-3">
                        <!-- Modalidad de Voluntariado -->
                        <div class="col-12">
                            <label class="form-label">Modalidad de Voluntariado <span class="text-danger">*</span></label>
                            <select name="modalidad" class="form-select @error('modalidad') is-invalid @enderror" required>
                                <option value="">Seleccione una modalidad...</option>
                                <option value="juveniles" {{ old('modalidad') == 'juveniles' ? 'selected' : '' }}>Juveniles</option>
                                <option value="damas-grises" {{ old('modalidad') == 'damas-grises' ? 'selected' : '' }}>Damas Grises</option>
                                <option value="socorristas" {{ old('modalidad') == 'socorristas' ? 'selected' : '' }}>Socorristas</option>
                            </select>
                            @error('modalidad')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Nombre <span class="text-danger">*</span></label>
                            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" required>
                            @error('nombre')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Apellido <span class="text-danger">*</span></label>
                            <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{ old('apellido') }}" required>
                            @error('apellido')
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
                            <label class="form-label">Teléfono <span class="text-danger">*</span></label>
                            <input type="tel" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono') }}" required>
                            @error('telefono')
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
                            <label class="form-label">Fecha de Nacimiento <span class="text-danger">*</span></label>
                            <input type="date" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ old('fecha_nacimiento') }}" required>
                            @error('fecha_nacimiento')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label">Dirección <span class="text-danger">*</span></label>
                            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion') }}" required>
                            @error('direccion')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label">Ciudad</label>
                            <input type="text" name="ciudad" class="form-control" value="{{ old('ciudad', 'Neiva') }}">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="formInscripcion" class="btn btn-inscribirse">
                    <i class="fas fa-paper-plane me-2"></i>Enviar Inscripción
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    .page-header-voluntariado {
        background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);
        padding: 60px 0;
    }

    .page-header-voluntariado h1 {
        color: white;
        font-size: 2rem;
        font-weight: 700;
    }

    /* ================================================
       TARJETAS DE MODALIDADES - REDISEÑO CON FOTO
       ================================================ */
    .modalidad-card.has-bg {
        position: relative;
        background-size: cover;
        background-position: center;
        border: none;
        padding: 0;
        min-height: 400px;
        color: white !important;
    }

    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(26, 35, 50, 0.4) 0%, rgba(20, 20, 20, 0.9) 100%);
        z-index: 1;
        transition: all 0.4s ease;
    }

    .modalidad-card.has-bg:hover .card-overlay {
        background: linear-gradient(to bottom, rgba(237, 28, 36, 0.6) 0%, rgba(139, 16, 20, 0.95) 100%);
    }

    .card-content {
        position: relative;
        z-index: 2;
        padding: 40px 30px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
        text-align: center;
    }

    .modalidad-icon-badge {
        width: 70px;
        height: 70px;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .modalidad-card:hover .modalidad-icon-badge {
        background: white;
        color: #ED1C24;
        transform: translateY(-5px);
    }

    .card-content h3 {
        color: white;
        font-size: 1.8rem;
        font-weight: 800;
        margin-bottom: 10px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .card-content p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.95rem;
        line-height: 1.5;
        margin-bottom: 20px;
        max-width: 280px;
    }

    .btn-explore-light {
        color: white;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 1px;
        padding: 10px 20px;
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        transition: all 0.3s ease;
    }

    .modalidad-card:hover .btn-explore-light {
        background: white;
        color: #ED1C24;
        border-color: white;
    }

    /* Requisitos Section */
    .requisitos-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1a2332;
    }

    .requisitos-container {
        background: white;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
    }

    .requisitos-content {
        max-width: 900px;
        margin: 0 auto;
    }

    .requisitos-lista {
        list-style: none;
        padding: 0;
        color: #333;
        line-height: 1.8;
    }

    .requisitos-lista>li {
        margin-bottom: 15px;
        position: relative;
        padding-left: 25px;
    }

    .requisitos-lista>li::before {
        content: "•";
        color: #ED1C24;
        font-weight: bold;
        position: absolute;
        left: 0;
        font-size: 1.5rem;
        line-height: 1.4;
    }

    .requisitos-lista ul {
        list-style: none;
        padding-left: 20px;
        margin-top: 10px;
    }

    .requisitos-lista ul li {
        margin-bottom: 8px;
        position: relative;
        padding-left: 20px;
    }

    .requisitos-lista ul li::before {
        content: "◦";
        color: #ED1C24;
        position: absolute;
        left: 0;
        font-size: 1.2rem;
    }

    /* Botones */
    .btn-documento {
        background: white;
        color: #1a2332;
        border: 2px solid #1a2332;
        padding: 12px 35px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s;
        text-decoration: none;
    }

    .btn-documento:hover {
        background: #1a2332;
        color: white;
    }

    .btn-inscribirse {
        background: #ED1C24;
        color: white;
        border: none;
        padding: 12px 35px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s;
        text-decoration: none;
    }

    .btn-inscribirse:hover {
        background: #C41419;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(237, 28, 36, 0.3);
    }

    /* Formulario */
    .form-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
    }

    .form-card h2 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 30px;
    }

    .form-label {
        color: #1a2332;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .form-control {
        border-radius: 10px;
        border: 2px solid #e0e0e0;
        padding: 12px;
        transition: all 0.3s;
    }

    .form-control:focus {
        border-color: #ED1C24;
        box-shadow: 0 0 0 0.2rem rgba(237, 28, 36, 0.1);
    }

    /* Modal Styles */
    .modal-content {
        border-radius: 20px;
        border: none;
    }

    .modal-header {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        color: white;
        border-radius: 20px 20px 0 0;
        padding: 20px 30px;
    }

    .modal-title {
        font-weight: 700;
        font-size: 1.5rem;
    }

    .modal-body {
        padding: 30px;
    }

    .modal-footer {
        border-top: 1px solid #e0e0e0;
        padding: 20px 30px;
    }

    .btn-secondary {
        background: #6c757d;
        border: none;
        padding: 10px 25px;
        border-radius: 10px;
        font-weight: 600;
    }

    .btn-secondary:hover {
        background: #5a6268;
    }

    /* ================================================
       RESPONSIVE
       ================================================ */
    @media (max-width: 768px) {
        .page-header-voluntariado h1 {
            font-size: 1.5rem;
        }

        .requisitos-container {
            padding: 25px;
        }

        .modalidad-icon-container {
            width: 80px;
            height: 80px;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .modalidad-info h3 {
            font-size: 1.3rem;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    // Si hay errores de validación, abrir el modal automáticamente
    @if($errors->any())
    var modalInscripcion = new bootstrap.Modal(document.getElementById('modalInscripcion'));
    modalInscripcion.show();
    @endif

    // Si hay mensaje de éxito, mostrar modal con mensaje y cerrar después de 3 segundos
    @if(session('success'))
    var modalInscripcion = new bootstrap.Modal(document.getElementById('modalInscripcion'));
    modalInscripcion.show();
    setTimeout(function() {
        modalInscripcion.hide();
    }, 3000);
    @endif
</script>
@endsection