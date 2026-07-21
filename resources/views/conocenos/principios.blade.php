@extends('layouts.app')

@section('title', 'Principios Fundamentales - Cruz Roja Huila')

@section('content')
<!-- Hero Section Premium -->
<section class="py-5 text-white position-relative overflow-hidden hero-principles">
    <div class="container py-5 position-relative z-2">
        <div class="row align-items-center">
            <div class="col-lg-8 anime-fade-up">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white opacity-75 text-decoration-none">Inicio</a></li>
                        <li class="breadcrumb-item text-white opacity-75">Conózcanos</li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Principios Fundamentales</li>
                    </ol>
                </nav>
                <span class="badge bg-danger px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold letter-spacing-1">Identidad Institucional</span>
                <h1 class="display-3 fw-bold mb-3">Principios Fundamentales</h1>
                <p class="lead mb-0 fs-4 opacity-90">Nuestra brújula ética: los siete pilares inviolables que definen nuestra identidad y rigen cada acción humanitaria en el Huila.</p>
            </div>
        </div>
    </div>
    <div class="hero-pattern"></div>
</section>

<!-- Origin & Quote Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h6 class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 2px;">El Origen de Nuestra Doctrina</h6>
                <h2 class="display-5 fw-bold mb-4" style="color: var(--azul-institucional); line-height: 1.2;">Una Base Ética Consolidada en el Huila</h2>
                <p class="text-muted fs-5 mb-4">
                    Los Principios Fundamentales son el cimiento sobre el cual se ha construido la Cruz Roja Seccional Huila. Representan el compromiso inquebrantable de aliviar el sufrimiento en las comunidades del departamento, actuando siempre con neutralidad, imparcialidad e independencia en cada rincón de nuestra región.
                </p>
                <p class="text-muted">
                    Nuestros voluntarios y colaboradores aplican diariamente estos valores en cada brigada de salud, jornada de vacunación y respuesta a emergencias. Son más que normas institucionales; son la promesa de ayuda sincera, transparente y desinteresada para todo el pueblo huilense.
                </p>
            </div>
            <div class="col-lg-5">
                <div class="quote-card-premium p-5 rounded-5 shadow-lg position-relative overflow-hidden">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p class="fs-4 italic text-dark fw-semibold mb-4 text-quote position-relative z-2">
                        &ldquo;Llevamos alivio y esperanza a cada rincón del Huila, guiados por los Principios Fundamentales en cada misión de socorro y bienestar.&rdquo;
                    </p>
                    <div class="d-flex align-items-center position-relative z-2">
                        <div class="bg-danger rounded-circle me-3" style="width: 4px; height: 40px;"></div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Compromiso Humanitario</h6>
                            <small class="text-muted">Cruz Roja Seccional Huila</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Principles Interactive Grid -->
<section class="py-5 bg-light position-relative">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h6 class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 2px;">Nuestros 7 Pilares</h6>
            <h2 class="display-5 fw-bold mb-3" style="color: var(--azul-institucional);">Los Principios en Detalle</h2>
            <p class="lead text-muted max-w-700 mx-auto">Conoce de forma clara y directa los siete principios que rigen cada una de nuestras actividades cotidianas.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @php
                $principios = [
                    [
                        'icon' => 'fa-hand-holding-heart',
                        'title' => 'Humanidad',
                        'desc' => 'Buscamos prevenir y aliviar el sufrimiento en todas las circunstancias, protegiendo la vida, la salud y garantizando el respeto a la dignidad humana en el Huila.'
                    ],
                    [
                        'icon' => 'fa-scale-balanced',
                        'title' => 'Imparcialidad',
                        'desc' => 'Brindamos ayuda a toda la comunidad huilense en proporción directa a sus necesidades y sin ninguna discriminación social, política, de raza o credo.'
                    ],
                    [
                        'icon' => 'fa-shield-halved',
                        'title' => 'Neutralidad',
                        'desc' => 'Nos abstenemos de tomar parte en controversias políticas, ideológicas o religiosas para conservar la confianza de todas las poblaciones del departamento.'
                    ],
                    [
                        'icon' => 'fa-feather-pointed',
                        'title' => 'Independencia',
                        'desc' => 'Mantenemos autonomía operativa frente a cualquier entidad o gobierno, asegurando actuar siempre bajo el marco netamente humanitario de la institución.'
                    ],
                    [
                        'icon' => 'fa-heart',
                        'title' => 'Voluntariado',
                        'desc' => 'Nuestra labor es prestada de carácter voluntario y desinteresado por cientos de huilenses comprometidos con el servicio a la comunidad.'
                    ],
                    [
                        'icon' => 'fa-users',
                        'title' => 'Unidad',
                        'desc' => 'En el territorio nacional existe una sola institución de la Cruz Roja, de puertas abiertas a todos y con cobertura activa en todo el Huila.'
                    ],
                    [
                        'icon' => 'fa-earth-americas',
                        'title' => 'Universalidad',
                        'desc' => 'Formamos parte de un movimiento mundial donde compartimos los mismos deberes y derechos para prestar asistencia humanitaria global y local.'
                    ]
                ];
            @endphp

            @foreach($principios as $index => $p)
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="principle-enhanced-card hover-up w-100 p-4 bg-white rounded-5 shadow-sm border-0 position-relative overflow-hidden mb-4 d-flex flex-column justify-content-between" style="min-height: 250px;">
                    <div>
                        <div class="card-number-bg">{{ sprintf('%02d', $index + 1) }}</div>
                        <div class="principle-icon-circle bg-danger text-white rounded-circle mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 65px; height: 65px;">
                            <i class="fas {{ $p['icon'] }} fa-xl"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark">{{ $p['title'] }}</h4>
                        <p class="text-muted mb-0 small lh-relaxed">{{ $p['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why principles matter in Huila -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="{{ asset('reales/real-20.jpeg') }}" alt="Acción Humanitaria en Huila" class="img-fluid rounded-5 shadow-lg">
            </div>
            <div class="col-lg-6">
                <h6 class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 2px;">El Impacto en el Territorio</h6>
                <h2 class="display-6 fw-bold mb-4" style="color: var(--azul-institucional);">¿Por qué son indispensables para el Huila?</h2>
                <p class="text-muted mb-4">
                    La aplicación estricta de estos principios es lo que nos permite salvar vidas en contextos complejos. En regiones rurales o zonas afectadas por fenómenos climatológicos y de conflicto en el departamento, la bandera de la Cruz Roja es un símbolo respetado gracias a nuestra conducta intachable.
                </p>
                <div class="accordion accordion-flush" id="accordionHuila">
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed fw-bold text-dark px-0 py-3 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">
                                <i class="fas fa-hand-holding-hand text-danger me-3"></i> Acceso Humanitario Seguro
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionHuila">
                            <div class="accordion-body px-0 text-muted small">
                                La Neutralidad y la Imparcialidad garantizan a todos los actores en el territorio que nuestra única misión es el auxilio desinteresado. Esto nos permite cruzar barreras geográficas y sociales para atender emergencias.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed fw-bold text-dark px-0 py-3 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo">
                                <i class="fas fa-heart-circle-check text-danger me-3"></i> Confianza Comunitaria Absoluta
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionHuila">
                            <div class="accordion-body px-0 text-muted small">
                                Al actuar siempre bajo el principio de Independencia, la comunidad huilense sabe que no representamos intereses políticos ni particulares, lo cual genera un vínculo de respeto y transparencia recíproco.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed fw-bold text-dark px-0 py-3 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree">
                                <i class="fas fa-users-viewfinder text-danger me-3"></i> Eficacia en Situaciones de Desastre
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionHuila">
                            <div class="accordion-body px-0 text-muted small">
                                Gracias a los principios de Unidad y Voluntariado, logramos movilizar de manera organizada y eficiente recursos humanos y técnicos especializados a lo largo de todo el departamento del Huila.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

@section('styles')
<style>
    .hero-principles {
        background-image: linear-gradient(135deg, rgba(0, 45, 114, 0.85) 0%, rgba(17, 26, 36, 0.9) 100%), url('{{ asset('reales/real-15.jpeg') }}');
        background-size: cover;
        background-position: center;
        padding: 100px 0 80px !important;
    }

    .hero-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.05;
        background-image: radial-gradient(white 1px, transparent 0);
        background-size: 24px 24px;
        z-index: 1;
    }

    .anime-fade-up {
        animation: fadeUp 1s ease-out forwards;
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .hover-up {
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .hover-up:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-premium) !important;
    }

    /* Enhanced Card */
    .principle-enhanced-card {
        border-top: 5px solid var(--cruz-roja) !important;
        transition: all 0.3s ease;
    }
    
    .principle-enhanced-card:hover {
        border-top-color: var(--azul-institucional) !important;
    }

    .card-number-bg {
        position: absolute;
        top: 15px;
        right: 25px;
        font-size: 5.5rem;
        font-weight: 800;
        color: rgba(0, 45, 114, 0.03);
        line-height: 1;
        user-select: none;
        transition: color 0.3s;
    }
    
    .principle-enhanced-card:hover .card-number-bg {
        color: rgba(237, 28, 36, 0.05);
    }

    /* Quote Card */
    .quote-card-premium {
        background: #F4F7F9;
        border-left: 5px solid var(--cruz-roja);
    }
    
    .quote-icon {
        position: absolute;
        top: 20px;
        right: 25px;
        font-size: 5rem;
        color: var(--cruz-roja);
        opacity: 0.05;
        z-index: 1;
        pointer-events: none;
    }

    .max-w-700 { max-width: 700px; }
    .max-w-900 { max-width: 900px; }

    .transition-scale:hover {
        transform: scale(1.05);
    }

    /* Accordion Custom Style */
    .accordion-button::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ED1C24'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }
    
    .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23002D72'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }

    .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0,0,0,0.1);
    }
</style>
@endsection
