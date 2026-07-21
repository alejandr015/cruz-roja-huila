@extends('layouts.app')

@section('title', 'Voluntariado - Cruz Roja Huila')

@section('content')

<!-- Hero Section Voluntariado Premium -->
<section class="py-5 text-white position-relative overflow-hidden" style="min-height: 520px; background-image: linear-gradient(rgba(0,45,114,0.6), rgba(0,45,114,0.4)), url('{{ asset('reales/real-20.jpeg') }}'); background-size: cover; background-position: center;">
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-8 animate-fade-up">
                <span class="badge bg-danger mb-4 px-4 py-2 rounded-pill shadow-lg" style="letter-spacing: 2px; font-weight: 700; text-transform: uppercase;">
                    <i class="fas fa-heart-circle-check me-2"></i> El Corazón del Movimiento
                </span>
                <h1 class="display-3 fw-bold mb-4">Únete a Nuestra Misión de Vida</h1>
                <p class="lead mb-5 fs-4 opacity-90" style="max-width: 800px;">
                    Ser voluntario de la Cruz Roja es elegir transformar el mundo. Tu tiempo, tus manos y tu corazón son la herramienta más poderosa para aliviar el sufrimiento humano en el Huila.
                </p>
                <div class="d-flex gap-3 flex-wrap">
                    <button class="btn btn-danger btn-lg rounded-pill px-5 py-3 shadow-lg fw-bold transition-scale" data-bs-toggle="modal" data-bs-target="#modalInscripcion">
                        ¡Quiero ser Voluntario!
                    </button>
                    <a href="#modalidades" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-bold">Ver Modalidades</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modalidades de Voluntariado -->
<section id="modalidades" class="py-5 bg-white shadow-top" style="margin-top: -60px; border-radius: 60px 60px 0 0; position: relative; z-index: 10;">
    <div class="container py-5">
        
        <div class="text-center mb-5 pb-3">
            <h6 class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 3px;">Nuestros Grupos</h6>
            <h2 class="display-5 fw-bold" style="color: var(--azul-institucional);">Tres Modalidades, Una Sola Pasión</h2>
            <div class="mx-auto bg-danger mt-3" style="width: 60px; height: 4px; border-radius: 2px;"></div>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Juveniles -->
            <div class="col-md-4">
                <a href="{{ route('voluntariado.juventudes') }}" class="modalidad-premium-card hover-up">
                    <div class="modalidad-image-wrapper">
                        <img src="{{ asset('img/Voluntariado_Juventud.jpg') }}" alt="Juventud Cruz Roja">
                        <div class="modalidad-icon-circle">
                            <i class="fas fa-child-reaching"></i>
                        </div>
                    </div>
                    <div class="modalidad-content-box">
                        <h3>Juventud</h3>
                        <p class="text-muted">Formación en valores y liderazgo para niños y jóvenes de 7 a 24 años. Educamos para la paz y la solidaridad.</p>
                        <span class="text-danger fw-bold text-uppercase fs-xs">Conoce más <i class="fas fa-chevron-right ms-1"></i></span>
                    </div>
                </a>
            </div>

            <!-- Damas Grises -->
            <div class="col-md-4">
                <a href="{{ route('voluntariado.damas-grises') }}" class="modalidad-premium-card hover-up">
                    <div class="modalidad-image-wrapper">
                        <img src="{{ asset('img/damas_grises.jpg') }}" alt="Damas Grises">
                        <div class="modalidad-icon-circle">
                            <i class="fas fa-female"></i>
                        </div>
                    </div>
                    <div class="modalidad-content-box">
                        <h3>Damas Grises</h3>
                        <p class="text-muted">Mujeres voluntarias dedicadas al servicio social, salud y bienestar comunitario. Presencia y apoyo incondicional.</p>
                        <span class="text-danger fw-bold text-uppercase fs-xs">Conoce más <i class="fas fa-chevron-right ms-1"></i></span>
                    </div>
                </a>
            </div>

            <!-- Socorristas -->
            <div class="col-md-4">
                <a href="{{ route('voluntariado.socorristas') }}" class="modalidad-premium-card hover-up">
                    <div class="modalidad-image-wrapper">
                        <img src="{{ asset('img/socorrismo.jpg') }}" alt="Socorristas">
                        <div class="modalidad-icon-circle">
                            <i class="fas fa-life-ring"></i>
                        </div>
                    </div>
                    <div class="modalidad-content-box">
                        <h3>Socorrismo</h3>
                        <p class="text-muted">Operaciones de búsqueda, rescate y primera respuesta ante desastres. Valentía y técnica al servicio del Huila.</p>
                        <span class="text-danger fw-bold text-uppercase fs-xs">Conoce más <i class="fas fa-chevron-right ms-1"></i></span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Requisitos Section -->
<section class="py-5 bg-light overflow-hidden">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <h2 class="display-5 fw-bold mb-4" style="color: var(--azul-institucional);">¿Qué necesitas para unirte?</h2>
                <p class="lead text-muted mb-5">Nuestra institución se rige por principios de disciplina y entrega. Si tienes vocación de servicio, ya tienes lo más importante.</p>
                
                <div class="d-flex align-items-start mb-4">
                    <div class="bg-danger text-white p-3 rounded-circle me-4 shadow-sm">
                        <i class="fas fa-check"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Voluntad de Servicio</h5>
                        <p class="text-muted mb-0">Disposición para dedicar tiempo de manera desinteresada.</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-start mb-4">
                    <div class="bg-danger text-white p-3 rounded-circle me-4 shadow-sm">
                        <i class="fas fa-check"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Formación Continua</h5>
                        <p class="text-muted mb-0">Estar dispuesto a capacitarse en los cursos básicos institucionales.</p>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <div class="bg-danger text-white p-3 rounded-circle me-4 shadow-sm">
                        <i class="fas fa-check"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Principios Éticos</h5>
                        <p class="text-muted mb-0">Respeto total a los 7 Principios Fundamentales del Movimiento.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="bg-white p-5 rounded-5 shadow-lg border-start border-danger border-5">
                    <div class="row g-4 text-center">
                        <div class="col-6 col-md-4">
                            <div class="p-3 border rounded-4">
                                <h2 class="text-danger fw-bold mb-1">7+</h2>
                                <p class="small text-muted mb-0 fw-bold uppercase">Años Infantiles</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="p-3 border rounded-4">
                                <h2 class="text-danger fw-bold mb-1">13+</h2>
                                <p class="small text-muted mb-0 fw-bold uppercase">Años Juveniles</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="p-3 border rounded-4 bg-light">
                                <h2 class="text-danger fw-bold mb-1">18+</h2>
                                <p class="small text-muted mb-0 fw-bold uppercase">Años Adultos</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 p-4 rounded-4 bg-danger-subtle text-danger-emphasis small border border-danger border-opacity-10">
                        <i class="fas fa-info-circle me-2"></i> <strong>Nota Importante:</strong> No debe pertenecer a otros organismos de socorro ni a fuerzas armadas, y no debe desempeñar cargos de política activa.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5 pt-4">
            <button class="btn btn-danger btn-xl rounded-pill px-5 py-3 fw-bold shadow-lg transition-scale" data-bs-toggle="modal" data-bs-target="#modalInscripcion">
                Iniciar mi Proceso de Inscripción
            </button>
        </div>
    </div>
</section>

<!-- Modal Inscripción Modernizado -->
<div class="modal fade" id="modalInscripcion" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-5 shadow-2xl">
            <div class="modal-header bg-dark text-white border-0 py-4 px-5" style="background: linear-gradient(135deg, #C41419 0%, #ED1C24 100%) !important;">
                <div>
                    <h4 class="modal-title fw-bold mb-1"><i class="fas fa-clipboard-user me-2"></i>Inscripción Voluntariado</h4>
                    <p class="text-white-50 small mb-0">Únete a la red humanitaria más grande del mundo.</p>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <form action="{{ route('voluntariado.inscribirse') }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <select name="modalidad" class="form-select rounded-4 border-light bg-light" id="floatModalidad" required>
                                    <option value="" selected disabled>Selecciona tu modalidad</option>
                                    <option value="juveniles">Juventud (7 - 24 años)</option>
                                    <option value="damas-grises">Damas Grises</option>
                                    <option value="socorristas">Socorrismo</option>
                                </select>
                                <label for="floatModalidad">Grupo de Interés</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="nombre" class="form-control rounded-4 border-light bg-light" id="floatNombre" placeholder="Nombre" required>
                                <label for="floatNombre">Nombres</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="apellido" class="form-control rounded-4 border-light bg-light" id="floatApellido" placeholder="Apellido" required>
                                <label for="floatApellido">Apellidos</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control rounded-4 border-light bg-light" id="floatEmail" placeholder="Email" required>
                                <label for="floatEmail">Correo Electrónico</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="tel" name="telefono" class="form-control rounded-4 border-light bg-light" id="floatTel" placeholder="Teléfono" required>
                                <label for="floatTel">Celular / WhatsApp</label>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-danger btn-lg rounded-pill px-5 py-3 fw-bold shadow-lg w-100 mb-3">
                                Enviar Solicitud de Información
                            </button>
                            <p class="text-muted small mb-0">Al enviar este formulario, un coordinador regional te contactará para explicarte los siguientes pasos y fechas de capacitación.</p>
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
    .animate-fade-up { animation: fadeUp 1s ease-out forwards; }
    @keyframes fadeUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }

    .shadow-top { box-shadow: 0 -15px 40px rgba(0,0,0,0.05); }
    .shadow-2xl { box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); }

    .modalidad-premium-card {
        display: block;
        background: white;
        border-radius: 35px;
        overflow: hidden;
        text-decoration: none;
        color: inherit;
        height: 100%;
        border: 1px solid #f0f0f0;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .modalidad-premium-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 60px rgba(0,0,0,0.1);
        border-color: var(--cruz-roja);
    }

    .modalidad-image-wrapper {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .modalidad-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 1s ease;
    }

    .modalidad-premium-card:hover .modalidad-image-wrapper img {
        transform: scale(1.1);
    }

    .modalidad-icon-circle {
        position: absolute;
        bottom: -25px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: var(--cruz-roja);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        box-shadow: 0 8px 20px rgba(237, 28, 36, 0.3);
        border: 4px solid white;
        z-index: 2;
    }

    .modalidad-content-box {
        padding: 40px 30px 30px;
    }

    .modalidad-content-box h3 {
        font-weight: 800;
        color: var(--azul-institucional);
        margin-bottom: 12px;
    }

    .modalidad-content-box p {
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .hover-up { transition: all 0.3s ease; }
    .hover-up:hover { transform: translateY(-8px); }
    .transition-scale:hover { transform: scale(1.05); }

    .btn-xl { padding: 18px 45px; font-size: 1.1rem; }

    .bg-danger-subtle { background-color: rgba(237, 28, 36, 0.08) !important; }
    .text-danger-emphasis { color: #842029 !important; }
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
