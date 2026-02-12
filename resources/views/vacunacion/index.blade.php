@extends('layouts.app')

@section('title', 'Portafolio de Vacunación - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-vacunacion" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-5 fw-bold">Portafolio de Vacunación</h1>
        <p class="lead">Protegiendo la salud de nuestra comunidad</p>
    </div>
</section>

<!-- Tres Modalidades de Vacunación -->
<section class="modalidades-section py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            
            <!-- Gestantes y Niños -->
            <div class="col-md-4">
                <a href="{{ route('vacunacion.ninos-gestantes') }}" class="modalidad-card">
                    <div class="modalidad-imagen">
                        <div class="modalidad-icono">
                            <i class="fas fa-baby"></i>
                        </div>
                    </div>
                    <div class="modalidad-titulo">
                        <h3>Gestantes y Niños</h3>
                    </div>
                </a>
            </div>

            <!-- Adolescentes -->
            <div class="col-md-4">
                <a href="{{ route('vacunacion.adolescentes') }}" class="modalidad-card">
                    <div class="modalidad-imagen">
                        <div class="modalidad-icono">
                            <i class="fas fa-child"></i>
                        </div>
                    </div>
                    <div class="modalidad-titulo">
                        <h3>Adolescentes</h3>
                    </div>
                </a>
            </div>

            <!-- Adultos -->
            <div class="col-md-4">
                <a href="{{ route('vacunacion.adultos') }}" class="modalidad-card">
                    <div class="modalidad-imagen">
                        <div class="modalidad-icono">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="modalidad-titulo">
                        <h3>Adultos</h3>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Preguntas Frecuentes -->
<section class="preguntas-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center preguntas-title mb-5">Preguntas Frecuentes</h2>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="accordionPreguntas">
                    
                    <!-- Pregunta 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-question-circle me-3"></i>
                                ¿Para qué sirven las vacunas?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionPreguntas">
                            <div class="accordion-body">
                                <p>Las vacunas son una de las herramientas más importantes en la medicina preventiva. Sirven para:</p>
                                <ul>
                                    <li><strong>Proteger contra enfermedades graves:</strong> Las vacunas entrenan al sistema inmunológico para reconocer y combatir virus y bacterias específicos antes de que causen enfermedades.</li>
                                    <li><strong>Prevenir complicaciones:</strong> Ayudan a evitar enfermedades que pueden causar complicaciones graves, discapacidad permanente o incluso la muerte.</li>
                                    <li><strong>Protección comunitaria:</strong> Cuando una gran parte de la población está vacunada, se crea inmunidad de grupo que protege también a quienes no pueden vacunarse.</li>
                                    <li><strong>Erradicar enfermedades:</strong> Gracias a las vacunas se han erradicado enfermedades como la viruela y se han reducido drásticamente otras como la poliomielitis.</li>
                                </ul>
                                <p class="mb-0">En Cruz Roja Huila, ofrecemos un portafolio completo de vacunación para todas las edades, garantizando la protección de nuestra comunidad.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-question-circle me-3"></i>
                                ¿Qué vacunas ofrece la Cruz Roja Huila?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionPreguntas">
                            <div class="accordion-body">
                                <p>En Cruz Roja Huila ofrecemos un portafolio completo de vacunación que incluye:</p>
                                <ul>
                                    <li>Vacunas del esquema regular del PAI (Programa Ampliado de Inmunizaciones)</li>
                                    <li>Vacunas para gestantes (Tdap, Influenza)</li>
                                    <li>Vacunas para niños (BCG, Pentavalente, Triple viral, entre otras)</li>
                                    <li>Vacunas para adolescentes (VPH, refuerzos)</li>
                                    <li>Vacunas para adultos (Influenza, Neumococo, refuerzos)</li>
                                    <li>Vacunas de riesgos laborales</li>
                                    <li>Vacunas para viajeros</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fas fa-question-circle me-3"></i>
                                ¿Necesito agendar cita para vacunarme?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPreguntas">
                            <div class="accordion-body">
                                <p>Sí, es recomendable agendar una cita previa para garantizar la disponibilidad de la vacuna que necesitas y evitar tiempos de espera.</p>
                                <p>Puedes agendar tu cita a través de:</p>
                                <ul>
                                    <li><strong>Teléfono:</strong> +57 317 297 1272</li>
                                    <li><strong>WhatsApp:</strong> +57 317 297 1272</li>
                                    <li><strong>Correo:</strong> info@cruzrojahuila.org</li>
                                    <li><strong>Presencial:</strong> En nuestra sede en Neiva</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fas fa-question-circle me-3"></i>
                                ¿Qué documentos debo llevar para vacunarme?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionPreguntas">
                            <div class="accordion-body">
                                <p>Para recibir la vacunación, debes llevar los siguientes documentos:</p>
                                <ul>
                                    <li>Documento de identidad original (cédula, tarjeta de identidad o registro civil)</li>
                                    <li>Carné de vacunación (si lo tienes)</li>
                                    <li>Carné de afiliación a EPS o régimen de salud</li>
                                    <li>Orden médica (si es requerida para la vacuna específica)</li>
                                </ul>
                                <p class="mb-0"><strong>Nota:</strong> Para menores de edad, debe asistir acompañado de un adulto responsable.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="fas fa-question-circle me-3"></i>
                                ¿Las vacunas tienen efectos secundarios?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionPreguntas">
                            <div class="accordion-body">
                                <p>Las vacunas son seguras y los efectos secundarios suelen ser leves y temporales. Los más comunes incluyen:</p>
                                <ul>
                                    <li>Dolor, enrojecimiento o hinchazón en el sitio de la inyección</li>
                                    <li>Fiebre leve</li>
                                    <li>Cansancio o malestar general</li>
                                    <li>Dolor de cabeza</li>
                                </ul>
                                <p>Estos síntomas generalmente desaparecen en 1-2 días. Las reacciones graves son extremadamente raras.</p>
                                <p class="mb-0"><strong>Importante:</strong> Si experimentas síntomas graves o inusuales, comunícate inmediatamente con nuestro personal médico o acude al servicio de urgencias.</p>
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
    .page-header-vacunacion {
        background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);
        padding: 60px 0;
    }

    .page-header-vacunacion h1 {
        color: white;
        font-size: 2rem;
        font-weight: 700;
    }

    .page-header-vacunacion p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.1rem;
    }

    /* Modalidades Cards */
    .modalidad-card {
        display: block;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
        text-decoration: none;
        height: 280px;
    }

    .modalidad-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(237, 28, 36, 0.2);
    }

    .modalidad-imagen {
        height: 200px;
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .modalidad-icono {
        font-size: 5rem;
        color: white;
        opacity: 0.9;
    }

    .modalidad-titulo {
        padding: 20px;
        text-align: center;
        background: white;
    }

    .modalidad-titulo h3 {
        margin: 0;
        color: #1a2332;
        font-size: 1.5rem;
        font-weight: 700;
    }

    /* Preguntas Frecuentes */
    .preguntas-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1a2332;
        position: relative;
        padding-bottom: 15px;
    }

    .preguntas-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #ED1C24;
    }

    .accordion-item {
        border: none;
        margin-bottom: 15px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .accordion-button {
        background: white;
        color: #1a2332;
        font-weight: 600;
        font-size: 1.1rem;
        padding: 20px 25px;
        border: none;
        box-shadow: none;
    }

    .accordion-button:not(.collapsed) {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        color: white;
    }

    .accordion-button:focus {
        box-shadow: none;
        border: none;
    }

    .accordion-button::after {
        filter: brightness(0);
    }

    .accordion-button:not(.collapsed)::after {
        filter: brightness(0) invert(1);
    }

    .accordion-button i {
        color: #ED1C24;
    }

    .accordion-button:not(.collapsed) i {
        color: white;
    }

    .accordion-body {
        padding: 25px;
        background: white;
        color: #333;
        line-height: 1.8;
    }

    .accordion-body ul {
        padding-left: 20px;
    }

    .accordion-body ul li {
        margin-bottom: 10px;
    }

    .accordion-body strong {
        color: #ED1C24;
    }

    /* Botón */
    .btn-vacunacion {
        background: #ED1C24;
        color: white;
        border: none;
        padding: 12px 35px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s;
        text-decoration: none;
    }

    .btn-vacunacion:hover {
        background: #C41419;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(237, 28, 36, 0.3);
    }

    @media (max-width: 768px) {
        .page-header-vacunacion h1 {
            font-size: 1.5rem;
        }

        .modalidad-card {
            height: 250px;
        }

        .modalidad-imagen {
            height: 170px;
        }

        .modalidad-icono {
            font-size: 4rem;
        }

        .accordion-button {
            font-size: 1rem;
            padding: 15px 20px;
        }
    }
</style>
@endsection