@extends('layouts.app')

@section('title', 'Voluntariados - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-voluntariado" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-5 fw-bold">Conoce Nuestras Tres Modalidades De Voluntariados</h1>
    </div>
</section>

<!-- Tres Modalidades -->
<section class="modalidades-section py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <!-- Juveniles -->
            <div class="col-md-4">
                <a href="{{ route('voluntariado.juventudes') }}" class="modalidad-card">
                    <div class="modalidad-imagen">
                        <img src="{{ asset('img/Voluntariado_Juventud.jpg') }}" alt="Cruz Roja Juventud">
                    </div>
                    <div class="modalidad-titulo">
                        <h3>Juveniles</h3>
                    </div>
                </a>
            </div>

            <!-- Damas Grises -->
            <div class="col-md-4">
                <a href="{{ route('voluntariado.damas-grises') }}" class="modalidad-card">
                    <div class="modalidad-imagen">
                        <img src="{{ asset('img/damas_grises.jpg') }}" alt="Damas Grises Cruz Roja">
                    </div>
                    <div class="modalidad-titulo">
                        <h3>Damas Grises</h3>
                    </div>
                </a>
            </div>

            <!-- Socorristas -->
            <div class="col-md-4">
                <a href="{{ route('voluntariado.socorristas') }}" class="modalidad-card">
                    <div class="modalidad-imagen">
                        <img src="{{ asset('img/socorrismo.jpg') }}" alt="Socorristas Cruz Roja">
                    </div>
                    <div class="modalidad-titulo">
                        <h3>Socorristas</h3>
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
       TARJETAS DE MODALIDADES - ARREGLADAS
       ================================================ */
    .modalidad-card {
        display: block;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
        text-decoration: none;
        height: 100%;
        /* Flexbox para alinear contenido */
        display: flex;
        flex-direction: column;
    }

    .modalidad-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(237, 28, 36, 0.2);
    }

    /* Contenedor de imagen ARREGLADO */
    .modalidad-imagen {
        height: 250px;
        background: #f8f9fa;
        overflow: hidden;
        /* Flexbox para centrar imagen */
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    /* Imagen ARREGLADA */
    .modalidad-imagen img {
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
        /* Mantiene proporción sin cortar */
        transition: transform 0.3s ease;
    }

    .modalidad-card:hover .modalidad-imagen img {
        transform: scale(1.05);
    }

    /* Título */
    .modalidad-titulo {
        padding: 20px;
        text-align: center;
        background: white;
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modalidad-titulo h3 {
        margin: 0;
        color: #1a2332;
        font-size: 1.5rem;
        font-weight: 700;
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

        .modalidad-imagen {
            height: 200px;
            padding: 15px;
        }

        .modalidad-titulo h3 {
            font-size: 1.25rem;
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