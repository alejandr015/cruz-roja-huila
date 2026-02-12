@extends('layouts.app')

@section('title', 'Servicios de Salud - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-salud" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Servicios De Salud</h1>
        <p class="lead">Atención médica de calidad y servicios especializados para tu bienestar</p>
    </div>
</section>

<!-- Servicios -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title-salud">Nuestros Servicios</h2>
            <p class="lead text-muted">Servicios médicos profesionales y especializados</p>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Vacunación -->
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('salud.vacunaciones') }}" class="servicio-salud-card">
                    <div class="servicio-salud-imagen">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <div class="servicio-salud-contenido">
                        <h3>Vacunación</h3>
                    </div>
                </a>
            </div>

            <!-- Laboratorio Clínico -->
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('salud.laboratorios-clinicos') }}" class="servicio-salud-card">
                    <div class="servicio-salud-imagen">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="servicio-salud-contenido">
                        <h3>Laboratorio Clínico</h3>
                    </div>
                </a>
            </div>

            <!-- Citas Médicas -->
            <div class="col-md-6 col-lg-3">
                <a href="#agendarCita" class="servicio-salud-card" data-bs-toggle="modal" data-bs-target="#modalAgendarCita">
                    <div class="servicio-salud-imagen">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="servicio-salud-contenido">
                        <h3>citas medicas</h3>
                    </div>
                </a>
            </div>

            <!-- Electrocardiogramas -->
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('salud.pruebas-especiales') }}" class="servicio-salud-card">
                    <div class="servicio-salud-imagen">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="servicio-salud-contenido">
                        <h3>Electrocardiogramas</h3>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Modal Agendar Cita -->
<div class="modal fade" id="modalAgendarCita" tabindex="-1" aria-labelledby="modalAgendarCitaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgendarCitaLabel">
                    <i class="fas fa-calendar-check me-2"></i>Agendar Cita Médica
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

                <form action="{{ route('salud.agendar-cita') }}" method="POST" id="formAgendarCita">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombre Completo <span class="text-danger">*</span></label>
                            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" required>
                            @error('nombre')
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
                            <label class="form-label">Servicio <span class="text-danger">*</span></label>
                            <select name="servicio" class="form-select @error('servicio') is-invalid @enderror" required>
                                <option value="">Seleccione un servicio...</option>
                                <option value="vacunacion" {{ old('servicio') == 'vacunacion' ? 'selected' : '' }}>Vacunación</option>
                                <option value="laboratorio" {{ old('servicio') == 'laboratorio' ? 'selected' : '' }}>Laboratorio Clínico</option>
                                <option value="electrocardiograma" {{ old('servicio') == 'electrocardiograma' ? 'selected' : '' }}>Electrocardiograma</option>
                                <option value="examenes-rutina" {{ old('servicio') == 'examenes-rutina' ? 'selected' : '' }}>Exámenes de Rutina</option>
                                <option value="inmunologia" {{ old('servicio') == 'inmunologia' ? 'selected' : '' }}>Inmunología</option>
                                <option value="otro" {{ old('servicio') == 'otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                            @error('servicio')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Fecha Preferida <span class="text-danger">*</span></label>
                            <input type="date" name="fecha_preferida" class="form-control @error('fecha_preferida') is-invalid @enderror" value="{{ old('fecha_preferida') }}" min="{{ date('Y-m-d') }}" required>
                            @error('fecha_preferida')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Hora Preferida</label>
                            <select name="hora_preferida" class="form-select">
                                <option value="">Seleccione...</option>
                                <option value="manana" {{ old('hora_preferida') == 'manana' ? 'selected' : '' }}>Mañana (7:00 AM - 12:00 PM)</option>
                                <option value="tarde" {{ old('hora_preferida') == 'tarde' ? 'selected' : '' }}>Tarde (2:00 PM - 5:00 PM)</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Motivo de la Consulta (Opcional)</label>
                            <textarea name="motivo" class="form-control" rows="3" placeholder="Describe brevemente el motivo de tu consulta...">{{ old('motivo') }}</textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="formAgendarCita" class="btn btn-primary-salud">
                    <i class="fas fa-calendar-plus me-2"></i>Agendar Cita
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    :root {
        --salud-primary: #1a2332;
        --salud-secondary: #2C3E50;
        --cruz-roja: #ED1C24;
    }

    .page-header-salud {
        background: linear-gradient(135deg, var(--salud-primary) 0%, var(--salud-secondary) 100%);
        padding: 80px 0;
    }

    .section-title-salud {
        color: var(--salud-primary);
        font-weight: 700;
        font-size: 2.5rem;
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 20px;
    }

    .section-title-salud::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--cruz-roja);
    }

    /* Tarjetas de Servicios - Diseño según la imagen */
    .servicio-salud-card {
        display: block;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        text-decoration: none;
        height: 100%;
        min-height: 280px;
        border: 2px solid #f0f0f0;
    }

    .servicio-salud-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(26, 35, 50, 0.2);
        border-color: var(--salud-primary);
    }

    .servicio-salud-imagen {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 60px 20px;
        text-align: center;
        transition: all 0.3s;
    }

    .servicio-salud-card:hover .servicio-salud-imagen {
        background: linear-gradient(135deg, var(--salud-primary) 0%, var(--salud-secondary) 100%);
    }

    .servicio-salud-imagen i {
        font-size: 4rem;
        color: var(--salud-primary);
        transition: all 0.3s;
    }

    .servicio-salud-card:hover .servicio-salud-imagen i {
        color: white;
        transform: scale(1.1);
    }

    .servicio-salud-contenido {
        padding: 30px 20px;
        text-align: center;
        background: white;
    }

    .servicio-salud-contenido h3 {
        color: var(--salud-primary);
        font-size: 1.4rem;
        font-weight: 700;
        margin: 0;
        transition: all 0.3s;
    }

    .servicio-salud-card:hover .servicio-salud-contenido h3 {
        color: var(--cruz-roja);
    }

    /* Modal */
    .modal-header {
        background: linear-gradient(135deg, var(--salud-primary) 0%, var(--salud-secondary) 100%);
        color: white;
    }

    .modal-title {
        font-weight: 700;
        font-size: 1.3rem;
    }

    .btn-primary-salud {
        background: linear-gradient(135deg, var(--cruz-roja) 0%, #C41419 100%);
        border: none;
        padding: 10px 25px;
        border-radius: 10px;
        font-weight: 600;
        color: white;
    }

    .btn-primary-salud:hover {
        background: linear-gradient(135deg, #C41419 0%, var(--cruz-roja) 100%);
    }

    @media (max-width: 768px) {
        .section-title-salud {
            font-size: 2rem;
        }

        .servicio-salud-card {
            min-height: 240px;
        }

        .servicio-salud-imagen {
            padding: 40px 20px;
        }

        .servicio-salud-imagen i {
            font-size: 3rem;
        }

        .servicio-salud-contenido {
            padding: 20px 15px;
        }

        .servicio-salud-contenido h3 {
            font-size: 1.2rem;
        }

        .page-header-salud {
            padding: 60px 0;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    // Si hay errores, abrir el modal automáticamente
    @if($errors->any())
        var modalAgendarCita = new bootstrap.Modal(document.getElementById('modalAgendarCita'));
        modalAgendarCita.show();
    @endif

    // Si hay mensaje de éxito, mostrar modal y cerrar después de 3 segundos
    @if(session('success'))
        var modalAgendarCita = new bootstrap.Modal(document.getElementById('modalAgendarCita'));
        modalAgendarCita.show();
        setTimeout(function() {
            modalAgendarCita.hide();
        }, 3000);
    @endif
</script>
@endsection