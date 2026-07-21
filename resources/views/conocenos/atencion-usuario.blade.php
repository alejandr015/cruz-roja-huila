@extends('layouts.app')

@section('title', 'Atención al Usuario - Cruz Roja Huila')

@section('content')
<!-- Hero Section -->
<section class="py-5 text-white position-relative overflow-hidden" style="min-height: 350px; background: linear-gradient(135deg, var(--azul-institucional) 0%, #1a2332 100%);">
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-8 anime-fade-up">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white opacity-75 text-decoration-none">Inicio</a></li>
                        <li class="breadcrumb-item text-white opacity-75">Conózcanos</li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Atención al Usuario</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold mb-3">Atención al Usuario</h1>
                <p class="lead mb-0 fs-5 opacity-90">Canales oficiales para la radicación de Peticiones, Quejas, Reclamos, Sugerencias y Felicitaciones (PQRSF).</p>
            </div>
        </div>
    </div>
</section>

<!-- Content and PQRS Form -->
<div class="container my-5 py-4">
    <div class="row g-5">
        <!-- Info Column -->
        <div class="col-lg-4">
            <h3 class="fw-bold mb-4" style="color: var(--azul-institucional);">Canales de Atención</h3>
            <p class="text-muted mb-4">Tu opinión es fundamental para nosotros. Si tienes alguna inquietud, reclamo, felicitación o sugerencia, ponemos a tu disposición nuestros canales oficiales.</p>

            <div class="pqrs-info-list mb-5">
                <div class="d-flex mb-4">
                    <div class="icon-box bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1 text-dark">Tiempo de Respuesta</h6>
                        <p class="text-muted mb-0">De acuerdo con la legislación colombiana, daremos respuesta a tu solicitud en un término máximo de 15 días hábiles.</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="icon-box bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1 text-dark">Línea Telefónica</h6>
                        <p class="text-muted mb-0">+57 317 297 1272</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="icon-box bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1 text-dark">Correo Institucional</h6>
                        <p class="text-muted mb-0">info@cruzrojahuila.org</p>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <h5 class="fw-bold mb-3 text-dark">¿Qué es cada solicitud?</h5>
            <ul class="list-unstyled text-muted small lh-lg">
                <li class="mb-2"><strong>Petición:</strong> Solicitud de información o consulta general de servicios.</li>
                <li class="mb-2"><strong>Queja:</strong> Inconformidad con la conducta o atención de algún miembro de nuestro equipo.</li>
                <li class="mb-2"><strong>Reclamo:</strong> Exigencia por la prestación deficiente o el incumplimiento de algún servicio brindado.</li>
                <li class="mb-2"><strong>Sugerencia:</strong> Propuesta o recomendación para el mejoramiento de nuestros procesos.</li>
                <li><strong>Felicitación:</strong> Expresión de satisfacción y reconocimiento a nuestra labor humanitaria.</li>
            </ul>
        </div>

        <!-- Form Column -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm p-4 p-md-5 bg-white rounded-5">
                <h3 class="fw-bold mb-4 text-center" style="color: var(--azul-institucional);">Formulario de PQRSF</h3>
                <p class="text-center text-muted mb-5">Diligencia este formulario para radicar de forma oficial tu requerimiento.</p>

                @if(session('success'))
                    <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4 py-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle me-3 fs-3"></i>
                            <div>{{ session('success') }}</div>
                        </div>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger border-0 shadow-sm rounded-4 mb-4">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contacto.enviar') }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label fw-semibold">Nombre Completo *</label>
                            <input type="text" class="form-control form-control-lg bg-light border-0 px-4" id="nombre" name="nombre" value="{{ old('nombre') }}" required placeholder="Ej: Juan Pérez">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-semibold">Correo Electrónico *</label>
                            <input type="email" class="form-control form-control-lg bg-light border-0 px-4" id="email" name="email" value="{{ old('email') }}" required placeholder="ejemplo@email.com">
                        </div>
                        <div class="col-md-6">
                            <label for="telefono" class="form-label fw-semibold">Teléfono / Celular</label>
                            <input type="text" class="form-control form-control-lg bg-light border-0 px-4" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="Ej: 317 000 0000">
                        </div>
                        <div class="col-md-6">
                            <label for="asunto" class="form-label fw-semibold">Tipo de Solicitud *</label>
                            <select class="form-select form-select-lg bg-light border-0 px-4 text-muted" id="asunto" name="asunto" required>
                                <option value="" disabled selected>Selecciona una opción</option>
                                <option value="Petición" {{ old('asunto') == 'Petición' ? 'selected' : '' }}>Petición (Consulta o Información)</option>
                                <option value="Queja" {{ old('asunto') == 'Queja' ? 'selected' : '' }}>Queja (Inconformidad con atención)</option>
                                <option value="Reclamo" {{ old('asunto') == 'Reclamo' ? 'selected' : '' }}>Reclamo (Problema de servicio)</option>
                                <option value="Sugerencia" {{ old('asunto') == 'Sugerencia' ? 'selected' : '' }}>Sugerencia (Recomendación)</option>
                                <option value="Felicitación" {{ old('asunto') == 'Felicitación' ? 'selected' : '' }}>Felicitación (Reconocimiento)</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="mensaje" class="form-label fw-semibold">Detalle de la Solicitud *</label>
                            <textarea class="form-control bg-light border-0 px-4 py-3" id="mensaje" name="mensaje" rows="6" required placeholder="Describe detalladamente los hechos, fechas y la información correspondiente a tu solicitud...">{{ old('mensaje') }}</textarea>
                        </div>
                        <div class="col-12 text-center mt-5">
                            <button type="submit" class="btn btn-danger btn-lg rounded-pill px-5 py-3 fw-bold shadow-lg">
                                Radicar Solicitud <i class="fas fa-paper-plane ms-2"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .anime-fade-up {
        animation: fadeUp 1s ease-out forwards;
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .form-control:focus, .form-select:focus {
        background-color: white !important;
        box-shadow: 0 0 0 0.25rem rgba(237, 28, 36, 0.1);
        border: 1px solid var(--cruz-roja) !important;
    }

    .btn-danger {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .btn-danger:hover {
        background-color: var(--cruz-roja-dark);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(237, 28, 36, 0.3);
    }

    .icon-box {
        transition: transform 0.3s;
    }
    .pqrs-info-list > div:hover .icon-box {
        transform: scale(1.1);
    }
</style>
@endsection
