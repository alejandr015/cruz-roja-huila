@extends('layouts.app')

@section('title', 'Exámenes de Rutina - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-salud routine-header-sync position-relative">
    <!-- Diagnostic Scan Effects -->
    <div class="scan-container">
        <div class="scan-line"></div>
        <div class="data-node dn-1"></div>
        <div class="data-node dn-2"></div>
        <div class="data-node dn-3"></div>
        <div class="data-node dn-4"></div>
    </div>
    
    <!-- Floating Health Icons -->
    <div class="health-icon hi-1">+</div>
    <div class="health-icon hi-2">+</div>
    <div class="health-icon hi-3">+</div>
    
    <div class="container position-relative z-1 text-center text-white pb-4">
        <span class="badge bg-danger mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
            <i class="fas fa-search-plus me-2"></i> Diagnóstico Preventivo
        </span>
        <h1 class="display-4 fw-bold mb-3 text-shadow">Exámenes de Rutina</h1>
        <p class="lead text-white-50 mx-auto mb-0" style="max-width: 700px; font-weight: 300; font-size: 1.15rem;">
            Análisis precisos para un control integral de tu salud.
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
    .page-header-salud {
        background: linear-gradient(135deg, #12284C 0%, #1a365d 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    /* Diagnostic Scan Animation */
    .scan-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }

    .scan-line {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(to right, transparent, #ED1C24, transparent);
        box-shadow: 0 0 15px #ED1C24, 0 0 30px rgba(237, 28, 36, 0.5);
        animation: scanVertical 6s ease-in-out infinite;
        opacity: 0.6;
    }

    @keyframes scanVertical {
        0%, 100% { top: 10%; opacity: 0; }
        50% { top: 90%; opacity: 0.8; }
    }

    /* Data Nodes (Representing exams) */
    .data-node {
        position: absolute;
        width: 6px;
        height: 6px;
        background: white;
        border-radius: 50%;
        opacity: 0;
        box-shadow: 0 0 10px white;
        animation: pulseNode 3s infinite;
    }

    .dn-1 { top: 25%; left: 20%; animation-delay: 0s; }
    .dn-2 { top: 45%; right: 15%; animation-delay: 1s; }
    .dn-3 { top: 75%; left: 10%; animation-delay: 2s; }
    .dn-4 { top: 35%; right: 30%; animation-delay: 1.5s; }

    @keyframes pulseNode {
        0%, 100% { opacity: 0; transform: scale(1); }
        50% { opacity: 0.3; transform: scale(1.5); }
    }

    /* Floating Icons (Sync with Index) */
    .health-icon {
        position: absolute;
        color: rgba(255, 255, 255, 0.04);
        font-size: 2rem;
        font-weight: bold;
        animation: floatPlus linear infinite;
        z-index: 0;
    }
    
    .hi-1 { left: 15%; top: 20%; animation-duration: 15s; }
    .hi-2 { left: 50%; bottom: -50px; animation-duration: 20s; font-size: 1.5rem; animation-delay: 2s; }
    .hi-3 { left: 85%; top: 30%; animation-duration: 18s; font-size: 2.5rem; animation-delay: 4s;}
    
    @keyframes floatPlus {
        0% { transform: translateY(0) rotate(0deg); opacity: 0.6; }
        100% { transform: translateY(-500px) rotate(180deg); opacity: 0; }
    }

    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
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