@extends('layouts.app')

@section('title', 'Exámenes de Rutina - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-servicio" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Exámenes de Rutina</h1>
        <p class="lead">Chequeos preventivos para cuidar tu salud</p>
    </div>
</section>

<!-- Información Principal -->
<section class="py-5">
    <div class="container">
        
        <!-- Descripción -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title-servicio">¿Qué son los Exámenes de Rutina?</h2>
                <p class="lead text-muted">
                    Los exámenes de rutina son pruebas médicas periódicas que permiten detectar tempranamente 
                    enfermedades o alteraciones en tu organismo, incluso antes de presentar síntomas. Son fundamentales 
                    para mantener un estilo de vida saludable y prevenir complicaciones futuras.
                </p>
            </div>
        </div>

        <!-- Paquetes de Exámenes -->
        <div class="row g-4 mb-5">
            
            <div class="col-md-6">
                <div class="paquete-card">
                    <div class="paquete-header" style="background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);">
                        <i class="fas fa-clipboard-check"></i>
                        <h4>Chequeo Básico</h4>
                    </div>
                    <div class="paquete-body">
                        <p class="paquete-descripcion">Exámenes esenciales para evaluación general de salud</p>
                        <ul class="paquete-lista">
                            <li>Cuadro Hemático Completo</li>
                            <li>Glicemia en Ayunas</li>
                            <li>Creatinina</li>
                            <li>Parcial de Orina</li>
                            <li>Colesterol Total</li>
                            <li>Triglicéridos</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="paquete-card">
                    <div class="paquete-header" style="background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);">
                        <i class="fas fa-heartbeat"></i>
                        <h4>Chequeo Cardiovascular</h4>
                    </div>
                    <div class="paquete-body">
                        <p class="paquete-descripcion">Evaluación completa del sistema cardiovascular</p>
                        <ul class="paquete-lista">
                            <li>Perfil Lipídico Completo</li>
                            <li>Colesterol HDL y LDL</li>
                            <li>Triglicéridos</li>
                            <li>Glucosa</li>
                            <li>Electrocardiograma</li>
                            <li>Presión Arterial</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="paquete-card">
                    <div class="paquete-header" style="background: linear-gradient(135deg, #2980b9 0%, #21618c 100%);">
                        <i class="fas fa-user-md"></i>
                        <h4>Chequeo Ejecutivo</h4>
                    </div>
                    <div class="paquete-body">
                        <p class="paquete-descripcion">Evaluación integral para profesionales activos</p>
                        <ul class="paquete-lista">
                            <li>Cuadro Hemático Completo</li>
                            <li>Perfil Lipídico</li>
                            <li>Glicemia y Hemoglobina Glicosilada</li>
                            <li>Función Hepática (TGO, TGP)</li>
                            <li>Función Renal (Creatinina, BUN)</li>
                            <li>Ácido Úrico</li>
                            <li>Parcial de Orina</li>
                            <li>TSH (Función Tiroidea)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="paquete-card">
                    <div class="paquete-header" style="background: linear-gradient(135deg, #C41419 0%, #9a1014 100%);">
                        <i class="fas fa-user-friends"></i>
                        <h4>Chequeo Adulto Mayor</h4>
                    </div>
                    <div class="paquete-body">
                        <p class="paquete-descripcion">Exámenes específicos para mayores de 60 años</p>
                        <ul class="paquete-lista">
                            <li>Cuadro Hemático Completo</li>
                            <li>Perfil Lipídico</li>
                            <li>Glicemia</li>
                            <li>Función Renal y Hepática</li>
                            <li>Vitamina B12 y D</li>
                            <li>TSH</li>
                            <li>PSA (Hombres)</li>
                            <li>Densitometría Ósea</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <!-- Exámenes Individuales Comunes -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title-servicio text-center mb-4">Exámenes Individuales Más Solicitados</h2>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <div class="examen-individual-card">
                    <i class="fas fa-droplet"></i>
                    <h6>Cuadro Hemático</h6>
                    <p>Evaluación completa de células sanguíneas</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <div class="examen-individual-card">
                    <i class="fas fa-candy-cane"></i>
                    <h6>Glicemia</h6>
                    <p>Medición de niveles de azúcar en sangre</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <div class="examen-individual-card">
                    <i class="fas fa-vial"></i>
                    <h6>Perfil Lipídico</h6>
                    <p>Colesterol y triglicéridos</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <div class="examen-individual-card">
                    <i class="fas fa-kidneys"></i>
                    <h6>Creatinina</h6>
                    <p>Evaluación de función renal</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <div class="examen-individual-card">
                    <i class="fas fa-flask"></i>
                    <h6>Parcial de Orina</h6>
                    <p>Análisis físico, químico y microscópico</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <div class="examen-individual-card">
                    <i class="fas fa-thyroid"></i>
                    <h6>TSH</h6>
                    <p>Función tiroidea</p>
                </div>
            </div>

        </div>

        <!-- Recomendaciones -->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="recomendaciones-rutina">
                    <h4><i class="fas fa-calendar-alt me-2"></i>¿Con Qué Frecuencia Realizar Exámenes?</h4>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="frecuencia-item">
                                <h6>Adultos Jóvenes (20-40 años)</h6>
                                <p>Chequeo anual o cada 2 años si no hay factores de riesgo</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="frecuencia-item">
                                <h6>Adultos (40-60 años)</h6>
                                <p>Chequeo anual obligatorio, especialmente cardiovascular</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="frecuencia-item">
                                <h6>Adultos Mayores (+60 años)</h6>
                                <p>Chequeo semestral o según indicación médica</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="frecuencia-item">
                                <h6>Personas con Enfermedades Crónicas</h6>
                                <p>Seguimiento cada 3-6 meses según patología</p>
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
        background: #1a2332;
    }

    .paquete-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        transition: all 0.3s;
        height: 100%;
    }

    .paquete-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    }

    .paquete-header {
        padding: 30px;
        text-align: center;
        color: white;
    }

    .paquete-header i {
        font-size: 3rem;
        margin-bottom: 15px;
    }

    .paquete-header h4 {
        margin: 0;
        font-weight: 700;
    }

    .paquete-body {
        padding: 30px;
    }

    .paquete-descripcion {
        color: #666;
        font-style: italic;
        margin-bottom: 20px;
        text-align: center;
    }

    .paquete-lista {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .paquete-lista li {
        padding: 10px 0;
        color: #555;
        border-bottom: 1px solid #f0f0f0;
    }

    .paquete-lista li:last-child {
        border-bottom: none;
    }

    .paquete-lista li::before {
        content: "✓";
        color: #ED1C24;
        font-weight: bold;
        margin-right: 10px;
    }

    .examen-individual-card {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        text-align: center;
        transition: all 0.3s;
        height: 100%;
    }

    .examen-individual-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .examen-individual-card i {
        font-size: 2.5rem;
        color: #1a2332;
        margin-bottom: 15px;
    }

    .examen-individual-card h6 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .examen-individual-card p {
        color: #666;
        margin: 0;
        font-size: 0.9rem;
    }

    .recomendaciones-rutina {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        border-top: 5px solid #1a2332;
    }

    .recomendaciones-rutina h4 {
        color: #1a2332;
        font-weight: 700;
        text-align: center;
    }

    .frecuencia-item {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .frecuencia-item h6 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .frecuencia-item p {
        color: #666;
        margin: 0;
        font-size: 0.95rem;
    }

    @media (max-width: 768px) {
        .section-title-servicio {
            font-size: 2rem;
        }

        .page-header-servicio {
            padding: 60px 0;
        }

        .recomendaciones-rutina {
            padding: 25px;
        }
    }
</style>
@endsection