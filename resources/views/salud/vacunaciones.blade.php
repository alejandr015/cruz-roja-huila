@extends('layouts.app')

@section('title', 'Servicios de Vacunación - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-servicio" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Servicios de Vacunación</h1>
        <p class="lead">Protección inmunológica para todas las edades</p>
    </div>
</section>

<!-- Información Principal -->
<section class="py-5">
    <div class="container">
        
        <!-- Descripción General -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title-servicio">¿Qué ofrecemos?</h2>
                <p class="lead text-muted">
                    Contamos con un servicio integral de vacunación que incluye esquemas completos de inmunización 
                    para todas las edades, desde recién nacidos hasta adultos mayores, con vacunas del Programa Ampliado 
                    de Inmunizaciones (PAI) y vacunas particulares.
                </p>
            </div>
        </div>

        <!-- Grupos de Vacunación -->
        <div class="row g-4 mb-5">
            
            <div class="col-md-6 col-lg-3">
                <div class="grupo-card">
                    <div class="grupo-icon" style="background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);">
                        <i class="fas fa-baby"></i>
                    </div>
                    <h4>Niños y Gestantes</h4>
                    <p>Esquema completo de vacunación infantil y protección durante el embarazo.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="grupo-card">
                    <div class="grupo-icon" style="background: linear-gradient(135deg, #2980b9 0%, #21618c 100%);">
                        <i class="fas fa-child"></i>
                    </div>
                    <h4>Adolescentes</h4>
                    <p>Refuerzos y vacunas específicas para la etapa adolescente.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="grupo-card">
                    <div class="grupo-icon" style="background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);">
                        <i class="fas fa-user"></i>
                    </div>
                    <h4>Adultos</h4>
                    <p>Vacunación anual y refuerzos necesarios en la vida adulta.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="grupo-card">
                    <div class="grupo-icon" style="background: linear-gradient(135deg, #C41419 0%, #9a1014 100%);">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h4>Riesgos Laborales</h4>
                    <p>Vacunación ocupacional para personal expuesto a riesgos biológicos.</p>
                </div>
            </div>

        </div>

        <!-- Vacunas Disponibles -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title-servicio text-center mb-4">Vacunas Disponibles</h2>
            </div>

            <div class="col-lg-6">
                <div class="vacunas-lista-card">
                    <h5><i class="fas fa-check-circle me-2"></i>Programa Ampliado de Inmunizaciones (PAI)</h5>
                    <ul>
                        <li>BCG (Tuberculosis)</li>
                        <li>Hepatitis B</li>
                        <li>Rotavirus</li>
                        <li>Neumococo</li>
                        <li>Influenza</li>
                        <li>Varicela</li>
                        <li>VPH (Virus del Papiloma Humano)</li>
                        <li>Tdap (Tétanos, Difteria, Tosferina)</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="vacunas-lista-card">
                    <h5><i class="fas fa-check-circle me-2"></i>Vacunas Particulares</h5>
                    <ul>
                        <li>Hepatitis A</li>
                        <li>Rabia (Pre y Post-exposición)</li>
                        <li>Herpes Zóster (Culebrilla)</li>
                        <li>Varicela (dosis adicionales)</li>
                        <li>Vacunas para viajeros</li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Recomendaciones -->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="recomendaciones-box">
                    <h4><i class="fas fa-info-circle me-2"></i>Recomendaciones Importantes</h4>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul>
                                <li>Traer carnet de vacunación (si tiene)</li>
                                <li>Informar sobre alergias conocidas</li>
                                <li>Ayuno NO es necesario para vacunas</li>
                                <li>Usar ropa cómoda y de fácil acceso</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Permanecer 15 min después de vacunarse</li>
                                <li>Hidratarse bien antes y después</li>
                                <li>Evitar ejercicio intenso por 24 horas</li>
                                <li>Reportar cualquier reacción adversa</li>
                            </ul>
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
    .page-header-servicio {
        padding: 80px 0;
    }

    .section-title-servicio {
        color: #1a2332;
        font-weight: 700;
        font-size: 2.5rem;
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 30px;
    }

    .section-title-servicio::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #ED1C24;
    }

    .grupo-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        text-align: center;
        height: 100%;
        transition: all 0.3s;
    }

    .grupo-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(237, 28, 36, 0.2);
    }

    .grupo-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .grupo-icon i {
        font-size: 2.5rem;
        color: white;
    }

    .grupo-card h4 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .grupo-card p {
        color: #666;
        margin: 0;
        line-height: 1.6;
    }

    .vacunas-lista-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        height: 100%;
    }

    .vacunas-lista-card h5 {
        color: #ED1C24;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .vacunas-lista-card i {
        color: #ED1C24;
    }

    .vacunas-lista-card ul {
        list-style: none;
        padding: 0;
    }

    .vacunas-lista-card ul li {
        padding: 8px 0;
        border-bottom: 1px solid #f0f0f0;
        color: #555;
    }

    .vacunas-lista-card ul li:last-child {
        border-bottom: none;
    }

    .vacunas-lista-card ul li::before {
        content: "✓";
        color: #ED1C24;
        font-weight: bold;
        margin-right: 10px;
    }

    .servicio-especial-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        text-align: center;
        transition: all 0.3s;
        height: 100%;
    }

    .servicio-especial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .servicio-especial-card i {
        font-size: 3rem;
        color: #ED1C24;
        margin-bottom: 20px;
    }

    .servicio-especial-card h5 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .servicio-especial-card p {
        color: #666;
        margin: 0;
    }

    .recomendaciones-box {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 40px;
        border-radius: 15px;
        border-left: 5px solid #ED1C24;
    }

    .recomendaciones-box h4 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .recomendaciones-box i {
        color: #ED1C24;
    }

    .recomendaciones-box ul {
        margin: 0;
    }

    .recomendaciones-box ul li {
        padding: 8px 0;
        color: #555;
    }

    @media (max-width: 768px) {
        .section-title-servicio {
            font-size: 2rem;
        }

        .page-header-servicio {
            padding: 60px 0;
        }

        .recomendaciones-box {
            padding: 25px;
        }
    }
</style>
@endsection