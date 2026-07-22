@extends('layouts.app')

@section('title', 'Cómo ser Voluntario - Cruz Roja Huila')
@section('meta_description', 'Requisitos, edades y proceso para ser voluntario de la Cruz Roja Colombiana Seccional Huila: Infantiles, Prejuveniles, Juveniles, Damas Grises y Socorristas.')

@section('content')

<!-- Banner Header -->
<section class="page-header-csv position-relative">
    <div class="container position-relative z-1 text-center text-white pb-4">
        <span class="badge bg-light text-danger mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
            <i class="fas fa-hand-holding-heart me-2"></i> Únete a Nosotros
        </span>
        <h1 class="display-4 fw-bold mb-3 text-shadow" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Cómo ser Voluntario</h1>
        <p class="lead text-white mx-auto mb-0" style="max-width: 700px; font-weight: 400; font-size: 1.15rem; text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">
            Conoce los requisitos y el camino para unirte a la red humanitaria más grande del mundo, desde el Huila.
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

<!-- Contenido Principal -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <!-- Requisitos -->
                <div class="info-section mb-5">
                    <h2 class="section-title-vol">Requisitos de Ingreso</h2>
                    <p class="lead-text">
                        Inscribirse como voluntario es un acto totalmente libre. Estos son los requisitos que debes cumplir para hacer parte de nuestra institución:
                    </p>
                    <ul class="requisitos-list">
                        <li><i class="fas fa-check-circle"></i> Inscribirse voluntariamente y cumplir la edad mínima según el grupo al que aspiras.</li>
                        <li><i class="fas fa-check-circle"></i> Haber aprobado el grado escolar correspondiente a tu grupo.</li>
                        <li><i class="fas fa-check-circle"></i> Contar con autorización de padres o acudientes si eres menor de edad.</li>
                        <li><i class="fas fa-check-circle"></i> Aprobar la evaluación médica de ingreso.</li>
                        <li><i class="fas fa-check-circle"></i> Aceptar los estatutos institucionales.</li>
                        <li><i class="fas fa-check-circle"></i> Aprobar el curso de formación básica.</li>
                        <li><i class="fas fa-check-circle"></i> Firmar el compromiso voluntario.</li>
                        <li><i class="fas fa-check-circle"></i> No pertenecer a otro organismo de socorro, entidad voluntaria u organización cuyas acciones sean incompatibles con las nuestras.</li>
                    </ul>
                </div>

                <!-- Edad y Escolaridad -->
                <div class="info-section mb-5">
                    <h2 class="section-title-vol">Edad y Escolaridad por Grupo</h2>
                    <div class="table-responsive">
                        <table class="table csv-table align-middle">
                            <thead>
                                <tr>
                                    <th>Grupo</th>
                                    <th>Edad mínima</th>
                                    <th>Escolaridad requerida</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Infantiles</td>
                                    <td>7 años</td>
                                    <td>2° de educación primaria</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Prejuveniles</td>
                                    <td>10 años</td>
                                    <td>4° de educación primaria</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Juveniles</td>
                                    <td>13 años</td>
                                    <td>7° de educación secundaria</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Damas Grises y Socorristas</td>
                                    <td>18 años</td>
                                    <td>9° de educación secundaria</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Lo que esperamos -->
                <div class="info-section mb-5">
                    <h2 class="section-title-vol">Lo que Esperamos de Ti</h2>
                    <p class="lead-text">
                        Como voluntario, esperamos que actúes de acuerdo con los Principios Fundamentales del Movimiento y contribuyas de manera significativa y positiva al mejoramiento de la calidad de vida de nuestras comunidades.
                    </p>
                    <div class="principios-chips">
                        @foreach(['Humanidad','Imparcialidad','Neutralidad','Independencia','Carácter Voluntario','Unidad','Universalidad'] as $principio)
                        <span class="principio-chip">{{ $principio }}</span>
                        @endforeach
                    </div>
                </div>

                <!-- CTA Contacto -->
                <div class="csv-cta rounded-5 p-5 text-center text-white">
                    <h3 class="fw-bold mb-2">¿Listo para dar el primer paso?</h3>
                    <p class="opacity-85 mb-4">Escríbenos y un coordinador de voluntariado te contactará con los siguientes pasos.</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap mb-3">
                        <a href="https://wa.me/57 313 393 7225" target="_blank" rel="noopener" class="csv-btn-primary">
                            <i class="fab fa-whatsapp me-2"></i>3133937225
                        </a>
                        <a href="mailto:voluntariadohuila@cruzrojacolombiana.org" class="csv-btn-outline">
                            <i class="fas fa-envelope me-2"></i>voluntariadohuila@cruzrojacolombiana.org
                        </a>
                    </div>
                    <a href="{{ route('voluntariado') }}#modalidades" class="text-white text-decoration-underline small opacity-75">Ver modalidades de voluntariado</a>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    .page-header-csv {
        background: linear-gradient(135deg, rgba(0, 45, 114, 0.75) 0%, rgba(17, 26, 36, 0.85) 100%), url('{{ asset('reales/real-35.jpeg') }}') center/cover;
        padding: 100px 0 70px;
    }

    .section-title-vol {
        color: #1a2332;
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title-vol::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background: #ED1C24;
    }

    .lead-text {
        font-size: 1.15rem;
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    /* Requisitos */
    .requisitos-list {
        list-style: none;
        padding: 0;
    }
    .requisitos-list li {
        padding: 12px 0;
        font-size: 1.02rem;
        color: #555;
        display: flex;
        align-items: flex-start;
        gap: 15px;
        border-bottom: 1px solid #f0f0f0;
    }
    .requisitos-list li:last-child { border-bottom: none; }
    .requisitos-list i {
        color: #ED1C24;
        font-size: 1.2rem;
        margin-top: 3px;
        flex-shrink: 0;
    }

    /* Tabla */
    .csv-table thead th {
        background: var(--azul-institucional);
        color: #fff;
        font-weight: 700;
        border: none;
        padding: 14px 18px;
    }
    .csv-table thead th:first-child { border-radius: 12px 0 0 12px; }
    .csv-table thead th:last-child { border-radius: 0 12px 12px 0; }
    .csv-table tbody td {
        padding: 14px 18px;
        color: #555;
    }
    .csv-table tbody tr {
        background: #fff;
        box-shadow: 0 3px 15px rgba(0,0,0,0.05);
    }
    .csv-table tbody tr td:first-child { border-radius: 12px 0 0 12px; }
    .csv-table tbody tr td:last-child { border-radius: 0 12px 12px 0; }

    /* Principios chips */
    .principios-chips {
        display: flex;
        flex-wrap: wrap;
        gap: .6rem;
    }
    .principio-chip {
        background: rgba(237, 28, 36, .08);
        color: #ED1C24;
        border: 1px solid rgba(237, 28, 36, .2);
        padding: .5rem 1.1rem;
        border-radius: 50px;
        font-weight: 600;
        font-size: .88rem;
    }

    /* CTA */
    .csv-cta {
        background-image: linear-gradient(135deg, var(--azul-institucional) 0%, #1a2332 100%);
    }
    .csv-btn-primary {
        display: inline-flex;
        align-items: center;
        background: #25d366;
        color: #fff;
        font-weight: 700;
        padding: .8rem 1.8rem;
        border-radius: 50px;
        text-decoration: none;
        transition: transform .25s ease;
    }
    .csv-btn-primary:hover { transform: scale(1.05); color: #fff; }
    .csv-btn-outline {
        display: inline-flex;
        align-items: center;
        background: transparent;
        color: #fff;
        font-weight: 700;
        padding: .8rem 1.8rem;
        border-radius: 50px;
        border: 1px solid rgba(255,255,255,.5);
        text-decoration: none;
        transition: all .25s ease;
    }
    .csv-btn-outline:hover { background: rgba(255,255,255,.15); color: #fff; }

    @media (max-width: 768px) {
        .page-header-csv { padding: 80px 0 50px; }
    }
</style>
@endsection
