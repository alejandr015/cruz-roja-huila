@extends('layouts.app')

@section('title', 'Laboratorio Clínico - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-salud lab-header-sync position-relative">
    <!-- Floating Health Elements -->
    <div class="health-icon hi-1">+</div>
    <div class="health-icon hi-2">+</div>
    <div class="health-icon hi-3">+</div>
    
    <!-- Molecular Animations -->
    <div class="molecule m-1"></div>
    <div class="molecule m-2"></div>
    <div class="molecule m-3"></div>
    
    <div class="container position-relative z-1 text-center text-white pb-4">
        <span class="badge bg-danger mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
            <i class="fas fa-microscope me-2"></i> Tecnología y Precisión
        </span>
        <h1 class="display-4 fw-bold mb-3 text-shadow">Laboratorio Clínico</h1>
        <p class="lead text-white-50 mx-auto mb-0" style="max-width: 700px; font-weight: 300; font-size: 1.15rem;">
            Diagnóstico preciso con tecnología de punta y resultados confiables.
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
                <h2 class="section-title-servicio">Nuestro Laboratorio</h2>
                <p class="lead text-muted">
                    Contamos con un laboratorio clínico equipado con tecnología de última generación que garantiza 
                    resultados confiables y precisos. Nuestro personal altamente capacitado asegura la calidad en 
                    cada proceso, desde la toma de muestra hasta la entrega de resultados.
                </p>
            </div>
        </div>

        <!-- Áreas de Servicio -->
        <div class="row g-4 mb-5">
            
            <div class="col-md-6 col-lg-3">
                <div class="area-card">
                    <div class="area-icon" style="background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);">
                        <i class="fas fa-vial"></i>
                    </div>
                    <h4>Hematología</h4>
                    <p>Análisis completos de sangre y sus componentes.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="area-card">
                    <div class="area-icon" style="background: linear-gradient(135deg, #2980b9 0%, #21618c 100%);">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h4>Química Clínica</h4>
                    <p>Pruebas bioquímicas y metabólicas especializadas.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="area-card">
                    <div class="area-icon" style="background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);">
                        <i class="fas fa-bacteria"></i>
                    </div>
                    <h4>Microbiología</h4>
                    <p>Cultivos e identificación de microorganismos.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="area-card">
                    <div class="area-icon" style="background: linear-gradient(135deg, #C41419 0%, #9a1014 100%);">
                        <i class="fas fa-dna"></i>
                    </div>
                    <h4>Inmunología</h4>
                    <p>Pruebas de anticuerpos y marcadores inmunológicos.</p>
                </div>
            </div>

        </div>

        <!-- Exámenes Principales -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title-servicio text-center mb-4">Exámenes que Realizamos</h2>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="examenes-categoria-card">
                    <h5><i class="fas fa-heartbeat me-2"></i>Perfil Cardiovascular</h5>
                    <ul>
                        <li>Colesterol Total</li>
                        <li>Triglicéridos</li>
                        <li>Colesterol HDL y LDL</li>
                        <li>Perfil Lipídico Completo</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="examenes-categoria-card">
                    <h5><i class="fas fa-syringe me-2"></i>Perfil Diabético</h5>
                    <ul>
                        <li>Glicemia en Ayunas</li>
                        <li>Glicemia Post Prandial</li>
                        <li>Hemoglobina Glicosilada</li>
                        <li>Curva de Tolerancia a la Glucosa</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="examenes-categoria-card">
                    <h5><i class="fas fa-kidneys me-2"></i>Función Renal</h5>
                    <ul>
                        <li>Creatinina</li>
                        <li>BUN (Nitrógeno Ureico)</li>
                        <li>Ácido Úrico</li>
                        <li>Parcial de Orina</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="examenes-categoria-card">
                    <h5><i class="fas fa-liver me-2"></i>Función Hepática</h5>
                    <ul>
                        <li>Transaminasas (TGO, TGP)</li>
                        <li>Bilirrubinas</li>
                        <li>Fosfatasa Alcalina</li>
                        <li>Proteínas Totales</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="examenes-categoria-card">
                    <h5><i class="fas fa-shield-virus me-2"></i>Perfil Infeccioso</h5>
                    <ul>
                        <li>Hepatitis B y C</li>
                        <li>VIH</li>
                        <li>VDRL (Sífilis)</li>
                        <li>Toxoplasma</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="examenes-categoria-card">
                    <h5><i class="fas fa-lungs me-2"></i>Otros Exámenes</h5>
                    <ul>
                        <li>Cuadro Hemático Completo</li>
                        <li>Coprológico</li>
                        <li>Grupos Sanguíneos</li>
                        <li>Tiempos de Coagulación</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Características del Servicio -->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="caracteristicas-servicio">
                    <h4 class="text-center mb-4"><i class="fas fa-star me-2"></i>¿Por Qué Elegirnos?</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caracteristica-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h6>Resultados Rápidos</h6>
                                    <p>Entrega de resultados en tiempo oportuno</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="caracteristica-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h6>Tecnología Avanzada</h6>
                                    <p>Equipos de última generación</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="caracteristica-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h6>Personal Calificado</h6>
                                    <p>Bacteriólogos y técnicos certificados</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="caracteristica-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h6>Control de Calidad</h6>
                                    <p>Procesos certificados y controlados</p>
                                </div>
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

    /* Floating Icons (Sync with Index) */
    .health-icon {
        position: absolute;
        color: rgba(255, 255, 255, 0.04);
        font-size: 2rem;
        font-weight: bold;
        animation: floatPlus linear infinite;
        z-index: 0;
    }
    
    .hi-1 { left: 10%; bottom: -50px; animation-duration: 15s; }
    .hi-2 { left: 40%; bottom: -50px; animation-duration: 20s; font-size: 1.5rem; animation-delay: 2s; }
    .hi-3 { left: 80%; bottom: -50px; animation-duration: 18s; font-size: 2.5rem; animation-delay: 4s;}
    
    @keyframes floatPlus {
        0% { transform: translateY(0) rotate(0deg); opacity: 0.6; }
        100% { transform: translateY(-500px) rotate(180deg); opacity: 0; }
    }

    /* Molecular Animations */
    .molecule {
        position: absolute;
        width: 100px;
        height: 100px;
        z-index: 0;
        opacity: 0.05;
        animation: floatMolecule 20s infinite linear;
    }

    .molecule::before, .molecule::after {
        content: '';
        position: absolute;
        background: white;
        border-radius: 50%;
    }

    /* Representative molecule shape with circles and lines */
    .m-1 { top: 10%; right: 10%; }
    .m-1::before { width: 10px; height: 10px; top: 0; left: 0; }
    .m-1::after { width: 15px; height: 15px; bottom: 0; right: 0; box-shadow: -40px -40px 0 white, -20px -20px 0 rgba(255,255,255,0.5); }

    .m-2 { bottom: 30%; left: 15%; animation-delay: -5s; transform: rotate(45deg); }
    .m-2::before { width: 12px; height: 12px; top: 20px; left: 0; }
    .m-2::after { width: 18px; height: 18px; bottom: 20px; right: 30px; box-shadow: 30px 0 0 white; }

    .m-3 { top: 40%; left: 5%; animation-delay: -10s; }
    .m-3::before { width: 8px; height: 8px; top: 0; right: 0; }
    .m-3::after { width: 12px; height: 12px; bottom: 10px; left: 20px; box-shadow: 20px 20px 0 white; }

    @keyframes floatMolecule {
        0% { transform: translate(0, 0) rotate(0deg); }
        33% { transform: translate(30px, -20px) rotate(120deg); }
        66% { transform: translate(-20px, 40px) rotate(240deg); }
        100% { transform: translate(0, 0) rotate(360deg); }
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
        background: #3498db;
    }

    .area-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        text-align: center;
        height: 100%;
        transition: all 0.3s;
    }

    .area-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(52, 152, 219, 0.2);
    }

    .area-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .area-icon i {
        font-size: 2.5rem;
        color: white;
    }

    .area-card h4 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .area-card p {
        color: #666;
        margin: 0;
    }

    .examenes-categoria-card {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        height: 100%;
        border-top: 4px solid #3498db;
    }

    .examenes-categoria-card h5 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .examenes-categoria-card i {
        color: #3498db;
    }

    .examenes-categoria-card ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .examenes-categoria-card ul li {
        padding: 8px 0;
        color: #555;
        border-bottom: 1px solid #f0f0f0;
    }

    .examenes-categoria-card ul li:last-child {
        border-bottom: none;
    }

    .examenes-categoria-card ul li::before {
        content: "•";
        color: #3498db;
        font-weight: bold;
        margin-right: 10px;
    }

    .caracteristicas-servicio {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .caracteristicas-servicio h4 {
        color: #1a2332;
        font-weight: 700;
    }

    .caracteristica-item {
        display: flex;
        gap: 20px;
        align-items: flex-start;
        padding: 20px;
        margin-bottom: 15px;
        background: #f8f9fa;
        border-radius: 10px;
    }

    .caracteristica-item i {
        font-size: 2rem;
        color: #3498db;
        flex-shrink: 0;
    }

    .caracteristica-item h6 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .caracteristica-item p {
        color: #666;
        margin: 0;
        font-size: 0.9rem;
    }

    @media (max-width: 768px) {
        .section-title-servicio {
            font-size: 2rem;
        }

        .page-header-servicio {
            padding: 60px 0;
        }

        .caracteristicas-servicio {
            padding: 25px;
        }
    }
</style>
@endsection