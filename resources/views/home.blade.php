@extends('layouts.app')

@section('title', 'Inicio - Cruz Roja Colombiana Seccional Huila')

@section('content')

<!-- Hero Section Premium -->
<section class="hero-section position-relative overflow-hidden">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1: Acción Humanitaria -->
            <div class="carousel-item active">
                <div class="hero-slide-premium" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('img/hero-accion.png') }}');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-8 text-white anime-fade-up">
                                <span class="badge bg-danger mb-3 px-3 py-2 text-uppercase fw-bold" style="letter-spacing: 2px;">Acción Humanitaria</span>
                                <h1 class="display-2 fw-bold mb-4">Protegiendo la Vida en el Huila</h1>
                                <p class="lead mb-5 fs-4">Brindamos asistencia humanitaria imparcial e independiente a las comunidades más vulnerables de nuestro departamento.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="{{ route('voluntariado') }}" class="btn btn-danger btn-lg px-5 py-3 rounded-pill fw-bold">Unirme como Voluntario</a>
                                    <a href="{{ route('accion-humanitaria') }}" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-bold">Nuestra Misión</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Educación -->
            <div class="carousel-item">
                <div class="hero-slide-premium" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('img/hero-educacion.png') }}');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-8 text-white anime-fade-up">
                                <span class="badge bg-primary mb-3 px-3 py-2 text-uppercase fw-bold" style="letter-spacing: 2px;">Educación Integral</span>
                                <h1 class="display-2 fw-bold mb-4">Formación que Salva Vidas</h1>
                                <p class="lead mb-5 fs-4">Capacítate con los mejores en Primeros Auxilios, Técnicos Laborales y Programas Especializados con certificación institucional.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="{{ route('educacion') }}" class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-bold">Ver Oferta Académica</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Salud -->
            <div class="carousel-item">
                <div class="hero-slide-premium" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('img/hero-salud.png') }}');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-8 text-white anime-fade-up">
                                <span class="badge bg-success mb-3 px-3 py-2 text-uppercase fw-bold" style="letter-spacing: 2px;">Salud y Bienestar</span>
                                <h1 class="display-2 fw-bold mb-4">Salud con Sentido Humano</h1>
                                <p class="lead mb-5 fs-4">Servicios integrales de vacunación, laboratorio clínico y atención médica con la calidez y excelencia de la Cruz Roja.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="{{ route('salud') }}" class="btn btn-danger btn-lg px-5 py-3 rounded-pill fw-bold">Nuestros Servicios</a>
                                    <a href="{{ route('vacunacion') }}" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-bold">Punto de Vacunación</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon p-4" style="background-color: rgba(0,0,0,0.3); border-radius: 50%;"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon p-4" style="background-color: rgba(0,0,0,0.3); border-radius: 50%;"></span>
        </button>
    </div>
</section>

<!-- Sección de Servicios Rediseñada -->
<section id="servicios" class="py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mb-5 max-width-700 mx-auto">
            <h6 class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 2px;">Nuestras Líneas de Acción</h6>
            <h2 class="display-5 fw-bold mb-3">Servicios al Servicio de la Vida</h2>
            <p class="lead text-muted">A través de nuestras diversas áreas, trabajamos incansablemente por el bienestar físico, mental y social de todos los huilenses.</p>
        </div>

        <div class="row g-4 mt-2">
            <!-- Acción Humanitaria -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card-premium">
                    <div class="card-icon-box">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h4>Acción Humanitaria</h4>
                    <p>Gestión del riesgo, respuesta a desastres y apoyo a comunidades vulnerables en situaciones críticas.</p>
                    <a href="{{ route('accion-humanitaria') }}" class="btn-read-more">Explorar Servicio <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Educación -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card-premium">
                    <div class="card-icon-box educacion">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h4>Educación</h4>
                    <p>Formación técnica y cursos certificados en primeros auxilios, bioseguridad y gestión del riesgo.</p>
                    <a href="{{ route('educacion') }}" class="btn-read-more">Ver Programas <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Salud -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card-premium">
                    <div class="card-icon-box salud">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                    <h4>Salud Integral</h4>
                    <p>Atención médica, vacunación completa para todas las edades y laboratorio clínico especializado.</p>
                    <a href="{{ route('salud') }}" class="btn-read-more">Consultar Salud <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Voluntariado -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card-premium">
                    <div class="card-icon-box voluntariado">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Voluntariado</h4>
                    <p>Sé el cambio que quieres ver. Únete a Juventud, Socorrismo o Damas Grises y ayuda a transformar vidas.</p>
                    <a href="{{ route('voluntariado') }}" class="btn-read-more">Ser Voluntario <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Laboratorio -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card-premium">
                    <div class="card-icon-box laboratorio">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h4>Laboratorio Clínico</h4>
                    <p>Exámenes de rutina y pruebas especiales con tecnología de punta y resultados confiables.</p>
                    <a href="{{ route('salud.laboratorios-clinicos') }}" class="btn-read-more">Ver Exámenes <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Vacunación -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card-premium">
                    <div class="card-icon-box vacunacion">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h4>Punto de Vacunación</h4>
                    <p>Esquema completo nacional y vacunas especiales. Protegemos a tu familia en todas sus etapas.</p>
                    <a href="{{ route('vacunacion') }}" class="btn-read-more">Esquemas <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Misión y Visión inspirada en Nacional -->
<section class="py-5 bg-light position-relative overflow-hidden">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="{{ asset('img/hero-accion.png') }}" class="img-fluid rounded-4 shadow-lg" alt="Misión Cruz Roja">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2 class="display-6 fw-bold mb-4">Nuestra Misión en el Huila</h2>
                <p class="fs-5 mb-4 text-muted">Contribuir a mejorar la calidad de vida de las personas, familias y comunidades vulnerables del territorio huilense, mediante la prevención y el alivio del sufrimiento humano en todas las circunstancias.</p>
                
                <div class="row g-4 mt-2">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="bg-danger text-white rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <h6 class="mb-0 fw-bold">Imparcialidad</h6>
                        </div>
                        <p class="text-muted small">Ayudamos sin distinción de nacionalidad, raza, religión o clase social.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="bg-danger text-white rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <h6 class="mb-0 fw-bold">Independencia</h6>
                        </div>
                        <p class="text-muted small">El Movimiento conserva una autonomía que le permite actuar siempre.</p>
                    </div>
                </div>
                
                <a href="{{ route('home') }}" class="btn btn-outline-danger btn-lg mt-4 px-4">Conoce más sobre nosotros</a>
            </div>
        </div>
    </div>
</section>

<!-- Últimas Noticias -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-end mb-5">
            <div>
                <h6 class="text-danger fw-bold text-uppercase mb-2">Sala de Prensa</h6>
                <h2 class="display-6 fw-bold mb-0">Actualidad Humanitaria</h2>
            </div>
            <a href="{{ route('prensa') }}" class="btn btn-link text-danger fw-bold text-decoration-none">Ver todas <i class="fas fa-chevron-right ms-1"></i></a>
        </div>

        <div class="row g-4">
            @forelse($noticias as $noticia)
            <div class="col-md-4">
                <div class="news-card-premium">
                    <div class="news-img-box">
                        <img src="{{ asset('img/placeholder-noticia.jpg') }}" alt="{{ $noticia->titulo }}">
                        <span class="news-badge">{{ ucfirst($noticia->categoria) }}</span>
                    </div>
                    <div class="news-content">
                        <p class="text-muted small mb-2"><i class="far fa-calendar-alt me-2"></i> {{ $noticia->created_at->format('d M, Y') }}</p>
                        <h5 class="fw-bold mb-3">{{ $noticia->titulo }}</h5>
                        <p class="text-muted small">{{ Str::limit($noticia->contenido, 90) }}</p>
                        <a href="{{ route('prensa.detalle', $noticia->id) }}" class="fw-bold text-danger text-decoration-none small">Leer más <i class="fas fa-long-arrow-alt-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted">
                <p>No hay noticias recientes para mostrar.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Banner de Voluntariado -->
<section class="py-5">
    <div class="container">
        <div class="bg-danger rounded-4 p-5 text-white position-relative overflow-hidden">
            <div class="row align-items-center position-relative" style="z-index: 2;">
                <div class="col-lg-8">
                    <h2 class="display-6 fw-bold mb-3">¿Eres de los que actúan o de los que observan?</h2>
                    <p class="lead mb-0">Tú puedes ser el cambio. Únete a los miles de voluntarios de la Cruz Roja en el Huila y marca la diferencia en tu comunidad.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route('voluntariado') }}" class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-bold text-danger">Quiero ser Voluntario</a>
                </div>
            </div>
            <!-- Elemento decorativo circular -->
            <div class="position-absolute" style="width: 300px; height: 300px; background: rgba(255,255,255,0.1); border-radius: 50%; top:-100px; right: -100px;"></div>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    /* Hero Slides Premium */
    .hero-slide-premium {
        height: 85vh;
        min-height: 600px;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .anime-fade-up {
        animation: fadeUp 1s ease-out forwards;
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Service Cards Premium */
    .service-card-premium {
        background: white;
        padding: 40px 30px;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.04);
        height: 100%;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid #f0f0f0;
        text-align: left;
    }

    .service-card-premium:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 60px rgba(237, 28, 36, 0.1);
        border-color: rgba(237, 28, 36, 0.2);
    }

    .card-icon-box {
        width: 70px;
        height: 70px;
        background: rgba(237, 28, 36, 0.1);
        color: #ED1C24;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin-bottom: 25px;
        transition: all 0.3s;
    }

    .service-card-premium:hover .card-icon-box {
        background: #ED1C24;
        color: white;
    }

    .card-icon-box.educacion { background: rgba(0, 45, 114, 0.1); color: #002D72; }
    .service-card-premium:hover .card-icon-box.educacion { background: #002D72; }

    .card-icon-box.salud { background: rgba(40, 167, 69, 0.1); color: #28a745; }
    .service-card-premium:hover .card-icon-box.salud { background: #28a745; }

    .service-card-premium h4 {
        margin-bottom: 15px;
        font-size: 1.25rem;
    }

    .service-card-premium p {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .btn-read-more {
        color: #ED1C24;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s;
    }

    .btn-read-more:hover {
        gap: 15px;
        color: #C41419;
    }

    /* News Cards Premium */
    .news-card-premium {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0,0,0,0.05);
        height: 100%;
        transition: all 0.3s;
    }

    .news-card-premium:hover {
        transform: scale(1.02);
    }

    .news-img-box {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .news-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .news-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background: var(--azul-institucional);
        color: white;
        padding: 5px 15px;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
    }

    .news-content {
        padding: 30px;
    }

    .max-width-700 { max-width: 700px; }
</style>
@endsection