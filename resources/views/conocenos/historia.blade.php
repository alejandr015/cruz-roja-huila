@extends('layouts.app')

@section('title', 'Nuestra Historia - Cruz Roja Colombiana Seccional Huila')
@section('meta_description', 'Conoce la historia de la Cruz Roja Colombiana Seccional Huila: desde los orígenes del movimiento internacional hasta nuestra consolidación como referente humanitario en el departamento.')

@section('content')

{{-- ============================================================ --}}
{{-- HERO SECTION --}}
{{-- ============================================================ --}}
<section class="hero-historia text-white position-relative overflow-hidden">
    {{-- Decorative blur blobs --}}
    <div class="hero-blob hero-blob--1" aria-hidden="true"></div>
    <div class="hero-blob hero-blob--2" aria-hidden="true"></div>

    <div class="container position-relative z-1 py-5">
        <div class="row align-items-center min-vh-hero">
            <div class="col-lg-7 anime-fade-up">
                {{-- Breadcrumb --}}
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb breadcrumb-hero mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Inicio</a>
                        </li>
                        <li class="breadcrumb-item text-white-50">Conózcanos</li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Nuestra Historia</li>
                    </ol>
                </nav>

                {{-- Label --}}
                <span class="badge-hero mb-3 d-inline-block">
                    <i class="fas fa-landmark me-2"></i>LEGADO INSTITUCIONAL
                </span>

                <h1 class="display-3 fw-black lh-1 mb-4">
                    Nuestra<br>
                    <span class="text-hero-accent">Historia</span>
                </h1>
                <p class="lead opacity-85 fs-5 mb-5 max-w-600">
                    Un legado de humanidad, coraje y servicio desinteresado que comenzó en el siglo XIX y hoy alivia el sufrimiento en los 37 municipios del Huila.
                </p>

                {{-- Quick Stats --}}
                <div class="d-flex gap-4 flex-wrap">
                    <div class="hero-stat">
                        <span class="hero-stat__number">1915</span>
                        <span class="hero-stat__label">Fundación Nacional</span>
                    </div>
                    <div class="hero-stat-divider" aria-hidden="true"></div>
                    <div class="hero-stat">
                        <span class="hero-stat__number">37</span>
                        <span class="hero-stat__label">Municipios cubiertos</span>
                    </div>
                    <div class="hero-stat-divider" aria-hidden="true"></div>
                    <div class="hero-stat">
                        <span class="hero-stat__number">100+</span>
                        <span class="hero-stat__label">Años de presencia</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 d-none d-lg-flex justify-content-center align-items-center">
                <div class="hero-image-card anime-fade-up" style="animation-delay:0.3s">
                    <img src="{{ asset('reales/real-22.jpeg') }}" alt="Cruz Roja Seccional Huila en acción" class="img-fluid rounded-4 shadow-lg" style="object-fit:cover; height:420px; width:100%;">
                    <div class="hero-image-badge">
                        <i class="fas fa-heart text-danger me-2"></i>
                        <span>Más de un siglo de servicio humanitario</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Wave divider --}}
    <div class="hero-wave" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#f8f9fa"/>
        </svg>
    </div>
</section>


{{-- ============================================================ --}}
{{-- STATS COUNTER SECTION --}}
{{-- ============================================================ --}}
<section class="py-5 bg-light">
    <div class="container py-3">
        <div class="row g-4 text-center">
            <div class="col-6 col-md-3">
                <div class="stat-card h-100">
                    <div class="stat-card__icon bg-danger-soft mb-3">
                        <i class="fas fa-calendar-alt text-danger fs-3"></i>
                    </div>
                    <div class="stat-card__value counter" data-target="109">0</div>
                    <div class="stat-card__unit">años</div>
                    <div class="stat-card__label">de historia institucional</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card h-100">
                    <div class="stat-card__icon bg-danger-soft mb-3">
                        <i class="fas fa-map-marked-alt text-danger fs-3"></i>
                    </div>
                    <div class="stat-card__value counter" data-target="37">0</div>
                    <div class="stat-card__unit">municipios</div>
                    <div class="stat-card__label">con cobertura en el Huila</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card h-100">
                    <div class="stat-card__icon bg-danger-soft mb-3">
                        <i class="fas fa-hands-holding-heart text-danger fs-3"></i>
                    </div>
                    <div class="stat-card__value counter" data-target="190">0</div>
                    <div class="stat-card__unit">países</div>
                    <div class="stat-card__label">en el movimiento mundial</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card h-100">
                    <div class="stat-card__icon bg-danger-soft mb-3">
                        <i class="fas fa-users text-danger fs-3"></i>
                    </div>
                    <div class="stat-card__value">16M+</div>
                    <div class="stat-card__unit">voluntarios</div>
                    <div class="stat-card__label">en la Federación Internacional</div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- TIMELINE SECTION --}}
{{-- ============================================================ --}}
<section class="py-5 bg-white">
    <div class="container py-4">
        {{-- Section Header --}}
        <div class="text-center mb-5 anime-fade-up">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-history me-2"></i>Línea del Tiempo
            </span>
            <h2 class="display-5 fw-black mb-3" style="color: var(--azul-institucional);">
                Camino de Solidaridad
            </h2>
            <p class="lead text-muted max-w-700 mx-auto">
                Conoce los hitos fundamentales que dieron forma a nuestra institución, desde sus raíces globales hasta la consolidación de la Seccional Huila.
            </p>
        </div>

        <div class="timeline-wrapper position-relative">
            {{-- Vertical central line --}}
            <div class="timeline-track" aria-hidden="true"></div>

            {{-- === MILESTONE 1: Guerra de los Mil Días === --}}
            <div class="tl-item tl-item--left anime-fade-up">
                <div class="tl-dot">
                    <i class="fas fa-ambulance"></i>
                </div>
                <div class="tl-card">
                    <span class="tl-year">~1899</span>
                    <h3 class="tl-title">La Guerra de los Mil Días</h3>
                    <p class="tl-text">En Colombia, la historia de la Cruz Roja se remonta a la Guerra de los Mil Días, cuando un grupo de médicos con improvisadas ambulancias haladas por caballos —con una cruz roja sobre fondo blanco pintada en sus costados— abrazaron la misión de asistir a los cientos de heridos que quedaban en el campo de batalla, sin importar su afiliación política.</p>
                    <div class="tl-tag"><i class="fas fa-heart me-1"></i> Primeros Auxilios en Colombia</div>
                </div>
            </div>

            {{-- === MILESTONE 2: Fundación Cruz Roja Colombiana === --}}
            <div class="tl-item tl-item--right anime-fade-up" style="animation-delay:.15s">
                <div class="tl-dot">
                    <i class="fas fa-plus"></i>
                </div>
                <div class="tl-card">
                    <span class="tl-year">1915</span>
                    <h3 class="tl-title">Fundación Oficial de la Cruz Roja Colombiana</h3>
                    <p class="tl-text">Impulsada por los Doctores <strong>Adriano Perdomo</strong> e <strong>Hipólito Machado</strong>, nació oficialmente el <strong>30 de julio de 1915</strong> en el Teatro Colón de Bogotá, bajo el postulado de que "todos somos seres humanos" y con la convicción de que en nuestra patria también era necesaria una organización dedicada a "prevenir y aliviar los horrores de la guerra".</p>
                    <div class="tl-tag"><i class="fas fa-flag me-1"></i> Cruz Roja Colombiana</div>
                </div>
            </div>

            {{-- === MILESTONE 3: 9 de Abril 1948 === --}}
            <div class="tl-item tl-item--left anime-fade-up" style="animation-delay:.3s">
                <div class="tl-dot">
                    <i class="fas fa-city"></i>
                </div>
                <div class="tl-card">
                    <span class="tl-year">1948</span>
                    <h3 class="tl-title">El 9 de Abril: Un Acto que Marcó la Historia</h3>
                    <p class="tl-text">El <strong>9 de abril de 1948</strong>, tras el asesinato de Jorge Eliécer Gaitán y el caos que se desató en el país, el Dr. <strong>Roberto Liévano Perdomo</strong> dispuso de su voluntad y conocimientos al servicio humanitario: transportó heridos y afectados en una ambulancia improvisada con la cruz roja, junto a su primo <strong>Uldarico Liévano Romero</strong>. Este acto de solidaridad marcaría para siempre su vocación.</p>
                    <div class="tl-tag"><i class="fas fa-hands-helping me-1"></i> Vocación Humanitaria</div>
                </div>
            </div>

            {{-- === MILESTONE 4: Fundación Seccional Huila 1972 === --}}
            <div class="tl-item tl-item--right anime-fade-up" style="animation-delay:.45s">
                <div class="tl-dot tl-dot--featured">
                    <i class="fas fa-map-location-dot"></i>
                </div>
                <div class="tl-card tl-card--featured">
                    <span class="tl-year tl-year--featured">1972</span>
                    <h3 class="tl-title">Nace la Cruz Roja Seccional Huila</h3>
                    <p class="tl-text">Motivado por aquella experiencia del 9 de abril, 24 años después el Dr. <strong>Roberto Liévano Perdomo</strong> fundó el <strong>4 de junio de 1972</strong> el Comité Departamental del Huila de la Cruz Roja Colombiana —hoy Seccional Huila—, que hace parte de la organización humanitaria más grande del mundo: el Movimiento Internacional de la Cruz Roja y la Media Luna Roja, con presencia en 190 países.</p>
                    <div class="tl-tag tl-tag--featured"><i class="fas fa-star me-1"></i> Fundación Seccional Huila</div>
                </div>
            </div>

            {{-- === MILESTONE 5: Expansión y Programas === --}}
            <div class="tl-item tl-item--left anime-fade-up" style="animation-delay:.6s">
                <div class="tl-dot">
                    <i class="fas fa-expand-arrows-alt"></i>
                </div>
                <div class="tl-card">
                    <span class="tl-year">Décadas de Crecimiento</span>
                    <h3 class="tl-title">Consolidación y Expansión Regional</h3>
                    <p class="tl-text">Mediante programas y proyectos realizados en forma particular o mediante alianzas, la Seccional proyectó su labor humanitaria hacia la prevención como alternativa de preparación y respuesta de las comunidades ante distintas contingencias, alcanzando los 37 municipios del departamento del Huila.</p>
                    <div class="tl-tag"><i class="fas fa-map me-1"></i> 37 Municipios Cubiertos</div>
                </div>
            </div>

            {{-- === MILESTONE 6: Hoy === --}}
            <div class="tl-item tl-item--right anime-fade-up" style="animation-delay:.75s">
                <div class="tl-dot tl-dot--present">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <div class="tl-card tl-card--present">
                    <span class="tl-year">Hoy</span>
                    <h3 class="tl-title">Una Institución Viva</h3>
                    <p class="tl-text">La Cruz Roja Colombiana Seccional Huila continúa su misión con programas de salud, gestión del riesgo, construcción de paz, voluntariado juvenil, socorrismo y atención de emergencias. Cada día, centenares de colaboradores y voluntarios llevan humanidad a quienes más lo necesitan en el Huila.</p>
                    <div class="tl-tag tl-tag--present"><i class="fas fa-circle me-1"></i> Presente</div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================ --}}
{{-- GALLERY SECTION --}}
{{-- ============================================================ --}}
<section class="py-5" style="background: #f1f3f6;">
    <div class="container py-3">
        <div class="text-center mb-5">
            <span class="section-eyebrow text-danger fw-bold text-uppercase mb-2 d-block" style="letter-spacing:2px; font-size:.85rem;">
                <i class="fas fa-images me-2"></i>Momentos que Perduran
            </span>
            <h2 class="display-5 fw-black mb-2" style="color: var(--azul-institucional);">Nuestra Historia en Imágenes</h2>
            <p class="text-muted lead">Cada foto es un testimonio de humanidad, sacrificio y esperanza. Haz clic para ampliar.</p>
        </div>

        <div class="gallery-masonry">
            <div class="gallery-item gallery-item--tall" data-src="{{ asset('reales/real-5.jpeg') }}" data-caption="Cruz Roja Seccional Huila en terreno">
                <img src="{{ asset('reales/real-5.jpeg') }}" alt="Cruz Roja Huila en terreno" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-alt"></i></div>
            </div>
            <div class="gallery-item" data-src="{{ asset('reales/real-13.jpeg') }}" data-caption="Voluntarios Cruz Roja Huila">
                <img src="{{ asset('reales/real-13.jpeg') }}" alt="Voluntarios Cruz Roja Huila" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-alt"></i></div>
            </div>
            <div class="gallery-item" data-src="{{ asset('reales/real-19.jpeg') }}" data-caption="Atención humanitaria en el Huila">
                <img src="{{ asset('reales/real-19.jpeg') }}" alt="Atención humanitaria Huila" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-alt"></i></div>
            </div>
            <div class="gallery-item gallery-item--wide" data-src="{{ asset('reales/real-24.jpeg') }}" data-caption="Brigadas de salud Cruz Roja Huila">
                <img src="{{ asset('reales/real-24.jpeg') }}" alt="Brigadas de salud Cruz Roja" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-alt"></i></div>
            </div>
            <div class="gallery-item" data-src="{{ asset('reales/real-41.jpeg') }}" data-caption="Acción humanitaria en el Huila">
                <img src="{{ asset('reales/real-41.jpeg') }}" alt="Acción humanitaria Huila" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-alt"></i></div>
            </div>
            <div class="gallery-item" data-src="{{ asset('reales/real-54.jpeg') }}" data-caption="Comunidades del Huila">
                <img src="{{ asset('reales/real-54.jpeg') }}" alt="Comunidades del Huila" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-alt"></i></div>
            </div>
            <div class="gallery-item" data-src="{{ asset('reales/real-6.jpeg') }}" data-caption="Trabajo humanitario Cruz Roja">
                <img src="{{ asset('reales/real-6.jpeg') }}" alt="Trabajo humanitario Cruz Roja" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-alt"></i></div>
            </div>
            <div class="gallery-item gallery-item--wide" data-src="{{ asset('reales/real-22.jpeg') }}" data-caption="Cruz Roja Seccional Huila">
                <img src="{{ asset('reales/real-22.jpeg') }}" alt="Cruz Roja Seccional Huila" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-alt"></i></div>
            </div>
            <div class="gallery-item gallery-item--tall" data-src="{{ asset('reales/real-39.jpeg') }}" data-caption="Servicio humanitario en el departamento">
                <img src="{{ asset('reales/real-39.jpeg') }}" alt="Servicio humanitario" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-alt"></i></div>
            </div>
            <div class="gallery-item" data-src="{{ asset('reales/real-47.jpeg') }}" data-caption="Voluntarios en acción">
                <img src="{{ asset('reales/real-47.jpeg') }}" alt="Voluntarios en acción" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-alt"></i></div>
            </div>
            <div class="gallery-item" data-src="{{ asset('reales/real-50.jpeg') }}" data-caption="Cruz Roja Huila presente en el territorio">
                <img src="{{ asset('reales/real-50.jpeg') }}" alt="Cruz Roja Huila en el territorio" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-alt"></i></div>
            </div>
            <div class="gallery-item" data-src="{{ asset('reales/real-8.jpeg') }}" data-caption="Trabajo de campo Cruz Roja Huila">
                <img src="{{ asset('reales/real-8.jpeg') }}" alt="Trabajo de campo" loading="lazy">
                <div class="gallery-overlay"><i class="fas fa-expand-alt"></i></div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- LIGHTBOX MODAL --}}
{{-- ============================================================ --}}
<div id="lightbox-modal" class="lightbox-backdrop" role="dialog" aria-modal="true" aria-label="Imagen ampliada">
    <button class="lightbox-close" id="lightbox-close" aria-label="Cerrar">&times;</button>
    <button class="lightbox-nav lightbox-prev" id="lightbox-prev" aria-label="Imagen anterior"><i class="fas fa-chevron-left"></i></button>
    <div class="lightbox-content">
        <img id="lightbox-img" src="" alt="">
        <p id="lightbox-caption" class="lightbox-caption"></p>
    </div>
    <button class="lightbox-nav lightbox-next" id="lightbox-next" aria-label="Imagen siguiente"><i class="fas fa-chevron-right"></i></button>
</div>


{{-- ============================================================ --}}
{{-- LEGACY QUOTE SECTION --}}
{{-- ============================================================ --}}
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="legacy-quote-card">
            <div class="legacy-quote-card__accent" aria-hidden="true"></div>
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="section-eyebrow text-danger fw-bold text-uppercase mb-3 d-block" style="letter-spacing:2px; font-size:.85rem;">
                        <i class="fas fa-quote-left me-2"></i>Nuestro Compromiso
                    </span>
                    <h2 class="display-5 fw-black mb-4" style="color: var(--azul-institucional);">
                        Un Legado que Nos Obliga
                    </h2>
                    <p class="fs-5 text-muted mb-4">
                        La historia de la Cruz Roja en el Huila no es solo un recuento de fechas: es el testimonio vivo de personas que eligieron poner la humanidad por encima de todo. Ese mismo espíritu nos guía hoy.
                    </p>
                    <p class="text-muted">
                        Cada emergencia atendida, cada vida salvada, cada familia asistida es un capítulo más de esta historia que escribimos entre todos: voluntarios, donantes y comunidades del departamento.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="{{ asset('reales/real-8.jpeg') }}" alt="Trabajo humanitario Cruz Roja Huila" class="img-fluid rounded-4 shadow-lg w-100" style="object-fit:cover; height:380px;">
                        <div class="img-badge-overlay">
                            <i class="fas fa-heart-pulse text-danger me-2 fs-5"></i>
                            <span class="fw-semibold">"La humanidad es nuestra primera ley"</span>
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
    /* ─── FONT WEIGHTS ─── */
    .fw-black { font-weight: 900 !important; }
    .max-w-600 { max-width: 600px; }
    .max-w-700 { max-width: 700px; }
    .opacity-85 { opacity: .85; }

    /* ─── HERO ─── */
    .hero-historia {
        background-image:
            linear-gradient(135deg, rgba(0, 45, 114, 0.88) 0%, rgba(10, 20, 40, 0.92) 100%),
            url('{{ asset('reales/real-16.jpeg') }}');
        background-size: cover;
        background-position: center top;
        padding: 100px 0 120px;
        overflow: hidden;
    }
    .min-vh-hero { min-height: 420px; }

    .hero-blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: .25;
        pointer-events: none;
    }
    .hero-blob--1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, #e8002d 0%, transparent 70%);
        top: -150px; right: -100px;
    }
    .hero-blob--2 {
        width: 350px; height: 350px;
        background: radial-gradient(circle, #002d72 0%, transparent 70%);
        bottom: -80px; left: -60px;
    }

    .breadcrumb-hero { background: transparent; padding: 0; }
    .breadcrumb-hero .breadcrumb-item + .breadcrumb-item::before { color: rgba(255,255,255,.4); }

    .badge-hero {
        background: rgba(232, 0, 45, 0.9);
        color: #fff;
        font-size: .75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        padding: .45rem 1rem;
        border-radius: 50px;
        text-transform: uppercase;
        backdrop-filter: blur(4px);
    }

    .text-hero-accent { color: #ff5a6e; }

    .hero-stat { text-align: left; }
    .hero-stat__number {
        display: block;
        font-size: 2rem;
        font-weight: 900;
        color: #fff;
        line-height: 1;
    }
    .hero-stat__label {
        display: block;
        font-size: .8rem;
        color: rgba(255,255,255,.65);
        margin-top: .2rem;
        font-weight: 500;
    }
    .hero-stat-divider {
        width: 1px;
        background: rgba(255,255,255,.2);
        align-self: stretch;
    }

    .hero-image-card { position: relative; }
    .hero-image-badge {
        position: absolute;
        bottom: -18px;
        left: 20px;
        right: 20px;
        background: #fff;
        border-radius: 12px;
        padding: .75rem 1rem;
        font-size: .82rem;
        font-weight: 600;
        color: #333;
        box-shadow: 0 8px 30px rgba(0,0,0,.15);
        display: flex;
        align-items: center;
    }

    .hero-wave {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        line-height: 0;
    }
    .hero-wave svg { display: block; width: 100%; height: 60px; }

    /* ─── ANIMATION ─── */
    .anime-fade-up { animation: fadeUp .9s ease-out forwards; }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(40px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* ─── STATS CARDS ─── */
    .stat-card {
        background: #fff;
        border-radius: 20px;
        padding: 2rem 1.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,.06);
        transition: transform .3s ease, box-shadow .3s ease;
    }
    .stat-card:hover { transform: translateY(-6px); box-shadow: 0 12px 35px rgba(0,0,0,.1); }
    .stat-card__icon {
        width: 60px; height: 60px;
        border-radius: 16px;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto;
    }
    .bg-danger-soft { background: rgba(220, 53, 69, .1); }
    .stat-card__value {
        font-size: 2.5rem;
        font-weight: 900;
        color: var(--azul-institucional);
        line-height: 1.1;
        margin-bottom: .1rem;
    }
    .stat-card__unit {
        font-size: .85rem;
        font-weight: 700;
        color: #dc3545;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: .3rem;
    }
    .stat-card__label { font-size: .82rem; color: #777; }

    /* ─── TIMELINE ─── */
    .timeline-wrapper {
        max-width: 960px;
        margin: 0 auto;
    }
    .timeline-track {
        position: absolute;
        left: 50%;
        top: 0; bottom: 0;
        width: 3px;
        background: linear-gradient(to bottom, #dc3545 0%, rgba(220,53,69,.1) 100%);
        transform: translateX(-50%);
        z-index: 0;
    }

    .tl-item {
        display: flex;
        align-items: flex-start;
        gap: 2rem;
        margin-bottom: 3.5rem;
        position: relative;
        z-index: 1;
    }
    .tl-item--left  { flex-direction: row; }
    .tl-item--right { flex-direction: row-reverse; }

    .tl-dot {
        flex-shrink: 0;
        width: 52px; height: 52px;
        background: #dc3545;
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        color: #fff;
        font-size: 1.1rem;
        box-shadow: 0 4px 18px rgba(220,53,69,.4);
        position: relative;
        z-index: 2;
        margin-top: .5rem;
        transition: transform .3s;
    }
    .tl-item:hover .tl-dot { transform: scale(1.15); }
    .tl-dot--present {
        background: var(--azul-institucional);
        box-shadow: 0 4px 18px rgba(0,45,114,.4);
    }

    .tl-card {
        background: #fff;
        border-radius: 18px;
        padding: 1.6rem 1.8rem;
        box-shadow: 0 4px 24px rgba(0,0,0,.07);
        flex: 1;
        transition: transform .3s ease, box-shadow .3s ease;
        border-left: 4px solid transparent;
    }
    .tl-item--right .tl-card { border-left: none; border-right: 4px solid transparent; }
    .tl-card:hover { transform: translateY(-5px); box-shadow: 0 12px 36px rgba(0,0,0,.12); border-left-color: #dc3545; }
    .tl-item--right .tl-card:hover { border-left-color: transparent; border-right-color: #dc3545; }

    .tl-card--featured {
        border-left-color: #dc3545 !important;
        background: linear-gradient(135deg, #fff 0%, #fff5f6 100%);
    }
    .tl-item--left .tl-card--present { border-left-color: var(--azul-institucional) !important; }

    .tl-year {
        display: inline-block;
        font-size: 2rem;
        font-weight: 900;
        color: #dc3545;
        line-height: 1;
        margin-bottom: .5rem;
    }
    .tl-year--featured { color: #dc3545; }

    .tl-title {
        font-size: 1.15rem;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: .6rem;
    }
    .tl-text { color: #555; font-size: .92rem; line-height: 1.7; margin-bottom: .8rem; }

    .tl-tag {
        display: inline-flex;
        align-items: center;
        font-size: .75rem;
        font-weight: 700;
        background: rgba(220,53,69,.1);
        color: #dc3545;
        padding: .3rem .8rem;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: .5px;
    }
    .tl-tag--featured { background: rgba(220,53,69,.15); }
    .tl-tag--present  { background: rgba(0,45,114,.1); color: var(--azul-institucional); }

    /* Responsive timeline */
    @media (max-width: 767.98px) {
        .timeline-track { left: 26px; }
        .tl-item, .tl-item--right { flex-direction: row; }
        .tl-dot { width: 40px; height: 40px; font-size: .9rem; margin-top: .3rem; }
        .tl-card { padding: 1.2rem 1.2rem; }
        .tl-year { font-size: 1.4rem; }
    }

    /* ─── GALLERY MASONRY ─── */
    .gallery-masonry {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-auto-rows: 220px;
        gap: 12px;
    }
    .gallery-item {
        border-radius: 16px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
    }
    .gallery-item img {
        width: 100%; height: 100%;
        object-fit: cover;
        transition: transform .5s ease;
    }
    .gallery-item:hover img { transform: scale(1.08); }
    .gallery-item--tall  { grid-row: span 2; }
    .gallery-item--wide  { grid-column: span 2; }

    .gallery-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0,45,114,.45);
        display: flex; align-items: center; justify-content: center;
        color: #fff;
        font-size: 1.5rem;
        opacity: 0;
        transition: opacity .3s ease;
    }
    .gallery-item:hover .gallery-overlay { opacity: 1; }

    @media (max-width: 767.98px) {
        .gallery-masonry {
            grid-template-columns: repeat(2, 1fr);
            grid-auto-rows: 160px;
        }
        .gallery-item--tall  { grid-row: span 1; }
        .gallery-item--wide  { grid-column: span 2; }
    }
    @media (max-width: 479px) {
        .gallery-masonry { grid-template-columns: 1fr; }
        .gallery-item--wide { grid-column: span 1; }
    }

    /* ─── LEGACY QUOTE ─── */
    .legacy-quote-card {
        position: relative;
        background: #fff;
        border-radius: 24px;
        padding: 4rem;
        box-shadow: 0 8px 40px rgba(0,0,0,.07);
        overflow: hidden;
    }
    .legacy-quote-card__accent {
        position: absolute;
        top: 0; left: 0;
        width: 6px; height: 100%;
        background: linear-gradient(to bottom, #dc3545, var(--azul-institucional));
        border-radius: 24px 0 0 24px;
    }
    .img-badge-overlay {
        position: absolute;
        bottom: -16px; left: 20px; right: 20px;
        background: #fff;
        border-radius: 12px;
        padding: .75rem 1rem;
        font-size: .82rem;
        color: #333;
        box-shadow: 0 8px 24px rgba(0,0,0,.12);
        display: flex; align-items: center;
    }
    @media (max-width: 991.98px) {
        .legacy-quote-card { padding: 2rem; }
    }

    /* ─── CTA ─── */
    .cta-historia {
        background: linear-gradient(135deg, #dc3545 0%, #9b0020 100%);
    }
    .cta-card {
        max-width: 760px;
    }
    .cta-icon {
        width: 80px; height: 80px;
        background: rgba(255,255,255,.15);
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        font-size: 2rem;
        color: #fff;
        margin: 0 auto;
        backdrop-filter: blur(4px);
    }
    .cta-btn-primary:hover { transform: scale(1.04); }

    /* ─── TIMELINE FEATURED DOT ─── */
    .tl-dot--featured {
        background: linear-gradient(135deg, #dc3545 0%, #9b0020 100%);
        box-shadow: 0 4px 18px rgba(220,53,69,.5), 0 0 0 6px rgba(220,53,69,.15);
    }

    /* ─── LIGHTBOX ─── */
    .lightbox-backdrop {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,.93);
        z-index: 9999;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        gap: 1rem;
        padding: 1rem;
        animation: lbFadeIn .25s ease;
    }
    .lightbox-backdrop.active { display: flex; }
    @keyframes lbFadeIn { from { opacity:0 } to { opacity:1 } }

    .lightbox-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        max-width: 90vw;
        max-height: 90vh;
    }
    #lightbox-img {
        max-width: 100%;
        max-height: 80vh;
        border-radius: 12px;
        box-shadow: 0 20px 80px rgba(0,0,0,.6);
        object-fit: contain;
        animation: lbZoomIn .3s cubic-bezier(.175,.885,.32,1.275);
    }
    @keyframes lbZoomIn { from { transform: scale(.85); opacity:0 } to { transform: scale(1); opacity:1 } }

    .lightbox-caption {
        color: rgba(255,255,255,.75);
        font-size: .9rem;
        margin-top: .75rem;
        text-align: center;
        font-style: italic;
    }
    .lightbox-close {
        position: fixed;
        top: 1.5rem; right: 1.5rem;
        background: rgba(255,255,255,.15);
        border: none;
        color: #fff;
        font-size: 2rem;
        width: 50px; height: 50px;
        border-radius: 50%;
        cursor: pointer;
        display: flex; align-items: center; justify-content: center;
        line-height: 1;
        transition: background .2s;
        z-index: 10001;
    }
    .lightbox-close:hover { background: rgba(220,53,69,.8); }

    .lightbox-nav {
        background: rgba(255,255,255,.1);
        border: 1px solid rgba(255,255,255,.2);
        color: #fff;
        font-size: 1.2rem;
        width: 50px; height: 50px;
        border-radius: 50%;
        cursor: pointer;
        display: flex; align-items: center; justify-content: center;
        transition: background .2s, transform .2s;
        flex-shrink: 0;
        z-index: 10001;
    }
    .lightbox-nav:hover {
        background: rgba(220,53,69,.7);
        transform: scale(1.1);
    }
    @media (max-width: 575.98px) {
        .lightbox-prev { position: fixed; left: .5rem; bottom: 50%; }
        .lightbox-next { position: fixed; right: .5rem; bottom: 50%; }
        .lightbox-close { top: .75rem; right: .75rem; font-size: 1.5rem; width: 40px; height: 40px; }
    }
</style>
@endsection

@section('scripts')
<script>
    // Counter animation
    document.addEventListener('DOMContentLoaded', function () {
        const counters = document.querySelectorAll('.counter[data-target]');
        const speed    = 30;

        const animateCounter = (el) => {
            const target  = +el.getAttribute('data-target');
            const current = +el.innerText;
            const inc     = Math.ceil(target / speed);
            if (current < target) {
                el.innerText = Math.min(current + inc, target);
                setTimeout(() => animateCounter(el), 40);
            } else {
                el.innerText = target;
            }
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(c => observer.observe(c));
    });

    // ─── LIGHTBOX ───
    const galleryItems  = Array.from(document.querySelectorAll('.gallery-item[data-src]'));
    const modal         = document.getElementById('lightbox-modal');
    const modalImg      = document.getElementById('lightbox-img');
    const modalCaption  = document.getElementById('lightbox-caption');
    const closeBtn      = document.getElementById('lightbox-close');
    const prevBtn       = document.getElementById('lightbox-prev');
    const nextBtn       = document.getElementById('lightbox-next');
    let currentIndex    = 0;

    function openLightbox(index) {
        currentIndex = index;
        const item = galleryItems[index];
        modalImg.src    = item.dataset.src;
        modalImg.alt    = item.querySelector('img').alt;
        modalCaption.textContent = item.dataset.caption || '';
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        modal.classList.remove('active');
        modalImg.src = '';
        document.body.style.overflow = '';
    }

    function showPrev() {
        currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
        openLightbox(currentIndex);
    }
    function showNext() {
        currentIndex = (currentIndex + 1) % galleryItems.length;
        openLightbox(currentIndex);
    }

    galleryItems.forEach((item, i) => {
        item.style.cursor = 'pointer';
        item.addEventListener('click', () => openLightbox(i));
    });

    closeBtn.addEventListener('click', closeLightbox);
    prevBtn.addEventListener('click', (e) => { e.stopPropagation(); showPrev(); });
    nextBtn.addEventListener('click', (e) => { e.stopPropagation(); showNext(); });

    // Click on backdrop (outside image) to close
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeLightbox();
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!modal.classList.contains('active')) return;
        if (e.key === 'Escape')      closeLightbox();
        if (e.key === 'ArrowLeft')   showPrev();
        if (e.key === 'ArrowRight')  showNext();
    });
</script>
@endsection
