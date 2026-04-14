@extends('layouts.app')

@section('title', 'Inicio - Cruz Roja Colombiana Seccional Huila')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="5"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="6"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1: Juntos Salvamos Vidas -->
            <div class="carousel-item active">
                <div class="hero-slide" style="background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);">
                    <div class="container">
                        <div class="row align-items-center" style="min-height: 500px;">
                            <div class="col-lg-6 text-white">
                                <h1 class="display-3 fw-bold mb-4">Juntos Salvamos Vidas</h1>
                                <p class="lead mb-4">Cruz Roja Colombiana Sede Huila trabaja cada día para servir a las comunidades más vulnerables del departamento.</p>
                                <div class="d-flex gap-3">
                                    <a href="{{ route('voluntariado') }}" class="btn btn-light btn-lg">Ser Voluntario</a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <i class="fa-solid fa-users-line" style="font-size: 15rem; opacity: 0.3; color: white;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Construcción de Paz -->
            <div class="carousel-item">
                <div class="hero-slide" style="background: linear-gradient(135deg, #eef1f4ff 0%, #959494ff 100%);">
                    <div class="container">
                        <div class="row align-items-center" style="min-height: 500px;">
                            <div class="col-lg-6 text-white">
                                <h1 class="display-3 fw-bold mb-4">Construcción de Paz</h1>
                                <p class="lead mb-4">Prevención del impacto humanitario del conflicto y la violencia mediante la promoción del DIH y los derechos humanos.</p>
                                <a href="{{ route('prensa') }}" class="btn btn-danger btn-lg">Conocer más</a>
                            </div>
                            <div class="col-lg-6 text-center">
                                <i class="fa-solid fa-dove" style="font-size: 15rem; opacity: 0.3; color: white;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Capacítate con Nosotros -->
            <div class="carousel-item">
                <div class="hero-slide" style="background: linear-gradient(135deg, #d0d8deff 0%, #ed3535ff 100%);">
                    <div class="container">
                        <div class="row align-items-center" style="min-height: 500px;">
                            <div class="col-lg-6 text-white">
                                <h1 class="display-3 fw-bold mb-4">Capacítate con Nosotros</h1>
                                <p class="lead mb-4">Cursos de primeros auxilios, técnicos laborales y más. Aprende a salvar vidas.</p>
                                <a href="{{ route('educacion') }}" class="btn btn-light btn-lg">Ver Cursos</a>
                            </div>
                            <div class="col-lg-6 text-center">
                                <i class="fas fa-graduation-cap" style="font-size: 15rem; opacity: 0.3; color: white;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Educación ⭐ NUEVO -->
            <div class="carousel-item">
                <div class="hero-slide" style="background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);">
                    <div class="container">
                        <div class="row align-items-center" style="min-height: 500px;">
                            <div class="col-lg-6 text-white">
                                <h1 class="display-3 fw-bold mb-4">Educación para la Vida</h1>
                                <p class="lead mb-4">Ofrecemos programas de formación integral en primeros auxilios, técnicos laborales, diplomados y educación virtual. Certifícate con nosotros y marca la diferencia.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="{{ route('educacion') }}" class="btn btn-light btn-lg">
                                        <i class="fas fa-book-open me-2"></i>Ver Programas
                                    </a>
                                    <a href="{{ route('educacion.cursos') }}" class="btn btn-outline-light btn-lg">
                                        <i class="fas fa-certificate me-2"></i>Inscríbete
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <i class="fas fa-chalkboard-teacher" style="font-size: 15rem; opacity: 0.3; color: white;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 5: Vacunación ⭐ NUEVO -->
            <div class="carousel-item">
                <div class="hero-slide" style="background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);">
                    <div class="container">
                        <div class="row align-items-center" style="min-height: 500px;">
                            <div class="col-lg-6 text-white">
                                <h1 class="display-3 fw-bold mb-4">Punto de Vacunación</h1>
                                <p class="lead mb-4">Protege a tu familia con nuestro servicio de vacunación completo. Atención para niños, gestantes, adultos y esquemas de riesgos laborales. ¡Tu salud es nuestra prioridad!</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="{{ route('vacunacion') }}" class="btn btn-light btn-lg">
                                        <i class="fas fa-syringe me-2"></i>Ver Servicios
                                    </a>
                                    <a href="{{ route('vacunacion.ninos-gestantes') }}" class="btn btn-outline-light btn-lg">
                                        <i class="fas fa-baby me-2"></i>Vacunación Infantil
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <i class="fas fa-shield-virus" style="font-size: 15rem; opacity: 0.3; color: white;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 6: Servicios Masivos ⭐ NUEVO -->
            <div class="carousel-item">
                <div class="hero-slide" style="background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);">
                    <div class="container">
                        <div class="row align-items-center" style="min-height: 500px;">
                            <div class="col-lg-6 text-white">
                                <h1 class="display-3 fw-bold mb-4">Servicios Masivos</h1>
                                <p class="lead mb-4">Apoyo en eventos deportivos, culturales y sociales. Ofrecemos atención médica pre-hospitalaria, ambulancias y personal capacitado para garantizar la seguridad de todos los asistentes.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="{{ route('salud') }}" class="btn btn-light btn-lg">
                                        <i class="fas fa-ambulance me-2"></i>Servicios de Salud
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <i class="fas fa-people-group" style="font-size: 15rem; opacity: 0.3; color: white;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 7: Servicio Social ⭐ NUEVO -->
            <div class="carousel-item">
                <div class="hero-slide" style="background: linear-gradient(135deg, #C41419 0%, #8b1014 100%);">
                    <div class="container">
                        <div class="row align-items-center" style="min-height: 500px;">
                            <div class="col-lg-6 text-white">
                                <h1 class="display-3 fw-bold mb-4">Servicio Social</h1>
                                <p class="lead mb-4">Programas de voluntariado, damas grises, juventudes y socorrismo. Únete a nuestra misión humanitaria y contribuye al bienestar de las comunidades más vulnerables del Huila.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="{{ route('voluntariado') }}" class="btn btn-light btn-lg">
                                        <i class="fas fa-hands-helping me-2"></i>Ser Voluntario
                                    </a>
                                    <a href="{{ route('voluntariado.damas-grises') }}" class="btn btn-outline-light btn-lg">
                                        <i class="fas fa-heart me-2"></i>Damas Grises
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <i class="fas fa-hand-holding-heart" style="font-size: 15rem; opacity: 0.3; color: white;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<!-- Servicios -->
<section id="servicios" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Nuestros Servicios</h2>
            <p class="lead text-muted">Trabajamos cada día para servir a la comunidad del Huila</p>
        </div>

        <div class="row g-4">
            <!-- Acción Humanitaria -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-kit-medical"></i>
                    </div>
                    <h5>Acción Humanitaria</h5>
                    <p>Ayudamos a las personas que más lo necesitan en momentos difíciles o desastres, entregando alimentos, salud y refugio.</p>
                    <a href="{{ route('accion-humanitaria') }}" class="btn btn-sm btn-outline-danger">Ver más</a>
                </div>
            </div>

            <!-- Educación -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h5>Educación</h5>
                    <p>Te enseñamos técnicas para salvar vidas, como primeros auxilios, y te formamos con habilidades para que consigas un mejor empleo.</p>
                    <a href="{{ route('educacion') }}" class="btn btn-sm btn-outline-danger">Ver más</a>
                </div>
            </div>

            <!-- Vacunación -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h5>Vacunación</h5>
                    <p>Mantenemos a tu familia protegida contra enfermedades. Aplicamos todas las vacunas necesarias para bebés, niños y adultos.</p>
                    <a href="{{ route('vacunacion') }}" class="btn btn-sm btn-outline-danger">Ver más</a>
                </div>
            </div>

            <!-- Servicios Masivos -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h5>Servicios Masivos</h5>
                    <p>Brindamos seguridad médica en tus eventos. Contamos con ambulancias y personal listo para atender cualquier emergencia al instante.</p>
                    <a href="{{ route('salud') }}" class="btn btn-sm btn-outline-danger">Ver más</a>
                </div>
            </div>

            <!-- Servicio Social -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h5>Servicio Social</h5>
                    <p>¡Únete y ayuda a los demás! Sé parte de nuestro equipo de voluntarios y participa en actividades que mejoran nuestra comunidad.</p>
                    <a href="{{ route('voluntariado') }}" class="btn btn-sm btn-outline-danger">Ver más</a>
                </div>
            </div>

            <!-- Laboratorio Clínico -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h5>Laboratorio Clínico</h5>
                    <p>Conoce tu estado de salud. Realizamos exámenes de sangre y chequeos médicos con tecnología moderna y resultados rápidos.</p>
                    <a href="{{ route('salud.laboratorios-clinicos') }}" class="btn btn-sm btn-outline-danger">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Noticias y Eventos -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Últimas Noticias y Eventos</h2>
            <p class="lead text-muted">Mantente informado sobre nuestras actividades</p>
        </div>

        <div class="row g-4">
            @forelse($noticias as $noticia)
            <div class="col-md-4">
                <div class="news-card">
                    {{-- Imagen por defecto para TODAS las noticias de BD --}}
                    <img src="{{ asset('img/placeholder-noticia.jpg') }}" class="card-img-top" alt="{{ $noticia->titulo }}">
                    <div class="card-body">
                        <span class="badge bg-{{ $noticia->categoria == 'evento' ? 'danger' : ($noticia->categoria == 'campana' ? 'success' : 'info') }} mb-2">
                            {{ ucfirst($noticia->categoria) }}
                        </span>
                        <h5 class="card-title">{{ $noticia->titulo }}</h5>
                        <p class="card-text">{{ Str::limit($noticia->contenido, 100) }}</p>
                        <a href="{{ route('prensa.detalle', $noticia->id) }}" class="btn btn-cruz-roja btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
            @empty
            {{-- Solo entra aquí si NO hay noticias en BD --}}
            <div class="col-md-4">
                <div class="news-card">
                    <img src="{{ asset('img/voluntariado.jpg') }}" class="card-img-top" alt="Voluntariado">
                    <div class="card-body">
                        <span class="badge bg-danger mb-2">Evento</span>
                        <h5 class="card-title">Jornada de Voluntariado</h5>
                        <p class="card-text">Únete a nuestra próxima jornada de voluntariado y ayuda a la comunidad.</p>
                        <a href="{{ route('prensa') }}" class="btn btn-cruz-roja btn-sm">Leer más</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="news-card">
                    <img src="{{ asset('img/primero_auxilios.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Campaña</span>
                        <h5 class="card-title">Capacitación Gratuita en Primeros Auxilios</h5>
                        <p class="card-text">Nueva convocatoria abierta para curso básico de primeros auxilios.</p>
                        <a href="{{ route('prensa') }}" class="btn btn-cruz-roja btn-sm">Leer más</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="news-card">
                    <img src="{{ asset('img/paz.png') }}" class="card-img-top" alt="Paz">
                    <div class="card-body">
                        <span class="badge bg-info mb-2">Noticia</span>
                        <h5 class="card-title">Construcción de Paz</h5>
                        <p class="card-text">Conoce nuestros programas de construcción de paz en el departamento.</p>
                        <a href="{{ route('prensa') }}" class="btn btn-cruz-roja btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('prensa') }}" class="btn btn-outline-danger btn-lg">Ver todas las noticias</a>
        </div>
    </div>
</section>

<!-- Noticias desde Google News API -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Noticias en Medios de Comunicación</h2>
            <p class="lead text-muted">Últimos reportajes en periódicos y noticias sobre nuestra seccional y actividades</p>
        </div>
        <div class="row g-4">
            @if(isset($rssNoticias) && count($rssNoticias) > 0)
                @foreach($rssNoticias as $news)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 news-card shadow-sm border-0" style="transition: transform 0.3s; border-radius: 12px; overflow: hidden;">
                        <div class="card-body d-flex flex-column p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-danger" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                                    <i class="far fa-newspaper me-1"></i> {{ $news['fuente'] }}
                                </span>
                            </div>
                            <h5 class="card-title fw-bold mb-3" style="line-height: 1.4; color: #333;">{{ $news['titulo'] }}</h5>
                            
                            <p class="card-text text-muted mb-4 mt-auto" style="font-size: 0.9rem;">
                                <i class="far fa-calendar-alt me-2 text-danger"></i> Fecha: {{ $news['fecha'] }}
                            </p>
                            
                            <a href="{{ $news['enlace'] }}" target="_blank" class="btn btn-outline-danger w-100 mt-auto" style="border-radius: 8px;">
                                Leer artículo completo <i class="fas fa-external-link-alt ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-12 text-center text-muted my-4 py-5 bg-white rounded-3 shadow-sm">
                    <i class="fas fa-rss fa-3x mb-3 text-secondary" style="opacity: 0.5;"></i>
                    <p class="fs-5">No hay noticias en medios disponibles en este momento.</p>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- Llamado a la Acción -->
<section class="py-5" style="background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%); color: white;">
    <div class="container text-center">
        <h2 class="mb-4 fw-bold">¿Quieres Ser Parte del Cambio?</h2>
        <p class="lead mb-4">Únete a nuestro equipo de voluntarios y marca la diferencia en tu comunidad</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ route('voluntariado') }}" class="btn btn-light btn-lg">
                <i class="fas fa-user-plus me-2"></i> Inscribirme Como Voluntario
            </a>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    .service-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
        height: 100%;
        padding: 30px;
        text-align: center;
        background: white;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(237, 28, 36, 0.2);
    }

    .service-icon {
        width: 80px;
        height: 80px;
        background: #ED1C24;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin: 0 auto 20px;
    }

    .news-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
        height: 100%;
    }

    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .news-card img {
        height: 200px;
        object-fit: cover;
    }

    .section-title {
        color: #ED1C24;
        font-weight: 700;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #ED1C24;
    }

    .btn-cruz-roja {
        background: #ED1C24;
        color: white;
        border: none;
        transition: all 0.3s;
    }

    .btn-cruz-roja:hover {
        background: #C41419;
        color: white;
        transform: translateY(-2px);
    }
</style>
@endsection