@extends('layouts.app')

@section('title', 'Vacunación Gestantes y Niños - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<style>
    .ninos-header-bg {
        background: linear-gradient(135deg, #12284C 0%, #1a4a5e 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    /* Soft floating bubbles representing life/cells */
    .vida-bubble {
        position: absolute;
        bottom: -50px;
        background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.05));
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        animation: floatVida linear infinite;
        z-index: 1;
        backdrop-filter: blur(2px);
    }

    @keyframes floatVida {
        0% { transform: translateY(0) translateX(0) scale(1); opacity: 0; }
        20% { opacity: 1; }
        80% { opacity: 1; }
        100% { transform: translateY(-600px) translateX(50px) scale(1.2); opacity: 0; }
    }

    /* Variaciones de burbujas */
    .vb-1 { left: 10%; width: 80px; height: 80px; animation-duration: 15s; animation-delay: 2s; }
    .vb-2 { left: 25%; width: 40px; height: 40px; animation-duration: 12s; animation-delay: 0s; }
    .vb-3 { left: 45%; width: 120px; height: 120px; animation-duration: 20s; animation-delay: 5s; }
    .vb-4 { left: 65%; width: 60px; height: 60px; animation-duration: 14s; animation-delay: 1s; }
    .vb-5 { left: 85%; width: 90px; height: 90px; animation-duration: 18s; animation-delay: 4s; }
    .vb-6 { left: 15%; width: 50px; height: 50px; animation-duration: 11s; animation-delay: 6s; }
    .vb-7 { left: 55%; width: 70px; height: 70px; animation-duration: 16s; animation-delay: 3s; }
    .vb-8 { left: 75%; width: 30px; height: 30px; animation-duration: 10s; animation-delay: 7s; }

    /* Pulso central suave (Latido materno) */
    .latido-bg {
        position: absolute;
        top: 50%; left: 50%;
        transform: translate(-50%, -50%);
        width: 800px; height: 800px;
        background: radial-gradient(circle, rgba(237, 28, 36, 0.08) 0%, transparent 60%);
        animation: latir 3s ease-in-out infinite alternate;
        z-index: 0;
        pointer-events: none;
    }

    @keyframes latir {
        0% { transform: translate(-50%, -50%) scale(0.9); opacity: 0.5; }
        100% { transform: translate(-50%, -50%) scale(1.1); opacity: 1; }
    }
</style>

<section class="page-header-vacuna ninos-header-bg text-center text-white">
    <!-- Latido y Burbujas de Vida -->
    <div class="latido-bg"></div>
    <div class="vida-bubble vb-1"></div>
    <div class="vida-bubble vb-2"></div>
    <div class="vida-bubble vb-3"></div>
    <div class="vida-bubble vb-4"></div>
    <div class="vida-bubble vb-5"></div>
    <div class="vida-bubble vb-6"></div>
    <div class="vida-bubble vb-7"></div>
    <div class="vida-bubble vb-8"></div>
    
    <div class="container position-relative z-2 pb-4">
        <span class="badge bg-light text-primary mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
            <i class="fas fa-baby me-2"></i> Cuidado y Protección
        </span>
        <h1 class="display-5 fw-bold mb-3 text-shadow" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">Vacunación para Gestantes y Niños</h1>
        <p class="lead text-white-50 mx-auto mb-0" style="max-width: 700px; font-weight: 300; font-size: 1.15rem;">
            Protegiendo a los más vulnerables desde el inicio de la vida.
        </p>
    </div>

    <!-- Forma inferior (wave) -->
    <div class="position-absolute bottom-0 start-0 w-100 overflow-hidden" style="line-height: 0; z-index: 3;">
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
            
            <!-- Tarjetas de Vacunas (Izquierda) -->
            <div class="col-lg-4 mb-4">
                <h3 class="mb-4 text-center">Selecciona una Vacuna</h3>
                
                <div class="vacunas-grid">
                    
                    <!-- BCG -->
                    <div class="vacuna-card" data-vacuna="bcg">
                        <div class="vacuna-icon">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <h5>BCG</h5>
                        <p class="small">Tuberculosis</p>
                    </div>

                    <!-- Hepatitis B -->
                    <div class="vacuna-card" data-vacuna="hepatitis-b">
                        <div class="vacuna-icon">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <h5>Hepatitis B</h5>
                        <p class="small">Protección hepática</p>
                    </div>

                    <!-- Pentavalente -->
                    <div class="vacuna-card" data-vacuna="pentavalente">
                        <div class="vacuna-icon">
                            <i class="fas fa-vials"></i>
                        </div>
                        <h5>Pentavalente</h5>
                        <p class="small">5 enfermedades</p>
                    </div>

                    <!-- Polio -->
                    <div class="vacuna-card" data-vacuna="polio">
                        <div class="vacuna-icon">
                            <i class="fas fa-hand-holding-medical"></i>
                        </div>
                        <h5>Polio (IPV)</h5>
                        <p class="small">Poliomielitis</p>
                    </div>

                    <!-- Rotavirus -->
                    <div class="vacuna-card" data-vacuna="rotavirus">
                        <div class="vacuna-icon">
                            <i class="fas fa-virus"></i>
                        </div>
                        <h5>Rotavirus</h5>
                        <p class="small">Diarrea severa</p>
                    </div>

                    <!-- Neumococo -->
                    <div class="vacuna-card" data-vacuna="neumococo">
                        <div class="vacuna-icon">
                            <i class="fas fa-lungs"></i>
                        </div>
                        <h5>Neumococo</h5>
                        <p class="small">Neumonía</p>
                    </div>

                    <!-- Influenza -->
                    <div class="vacuna-card" data-vacuna="influenza">
                        <div class="vacuna-icon">
                            <i class="fas fa-head-side-cough"></i>
                        </div>
                        <h5>Influenza</h5>
                        <p class="small">Gripe estacional</p>
                    </div>

                    <!-- Fiebre Amarilla -->
                    <div class="vacuna-card" data-vacuna="fiebre-amarilla">
                        <div class="vacuna-icon">
                            <i class="fas fa-mosquito"></i>
                        </div>
                        <h5>Fiebre Amarilla</h5>
                        <p class="small">Prevención viral</p>
                    </div>

                    <!-- Triple Viral (SRP) -->
                    <div class="vacuna-card" data-vacuna="triple-viral">
                        <div class="vacuna-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h5>Triple Viral</h5>
                        <p class="small">Sarampión, Rubeola, Paperas</p>
                    </div>

                    <!-- Varicela -->
                    <div class="vacuna-card" data-vacuna="varicela">
                        <div class="vacuna-icon">
                            <i class="fas fa-child"></i>
                        </div>
                        <h5>Varicela</h5>
                        <p class="small">Prevención de varicela</p>
                    </div>

                    <!-- Tdap (Gestantes) -->
                    <div class="vacuna-card" data-vacuna="tdap">
                        <div class="vacuna-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <h5>Tdap</h5>
                        <p class="small">Para gestantes</p>
                    </div>

                </div>
            </div>

            <!-- Información Detallada (Derecha) -->
            <div class="col-lg-8">
                <div class="vacuna-detalle-container">
                    
                    <!-- Mensaje inicial -->
                    <div id="info-inicial" class="text-center py-5">
                        <i class="fas fa-hand-pointer fa-4x text-muted mb-3"></i>
                        <h4 class="text-muted">Selecciona una vacuna para ver información detallada</h4>
                    </div>

                    <!-- BCG -->
                    <div id="info-bcg" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-syringe"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">BCG (Tuberculosis)</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>La vacuna BCG protege contra las formas graves de tuberculosis, especialmente la meningitis tuberculosa en niños.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Única dosis:</strong> Al nacer (primeras 24 horas de vida)</li>
                                        <li><strong>Vía de administración:</strong> Intradérmica en el brazo derecho</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Puede formar cicatriz en el sitio de aplicación</li>
                                        <li>No aplicar en niños con inmunodeficiencia</li>
                                        <li>Evitar contacto con herida hasta que cicatrice</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hepatitis B -->
                    <div id="info-hepatitis-b" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-shield-virus"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Hepatitis B</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra el virus de la Hepatitis B, que puede causar enfermedad hepática crónica y cáncer de hígado.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Primera dosis:</strong> Al nacer (primeras 12 horas)</li>
                                        <li><strong>Segunda dosis:</strong> 2 meses</li>
                                        <li><strong>Tercera dosis:</strong> 6 meses</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Puede causar dolor leve en el sitio de inyección</li>
                                        <li>Fiebre leve ocasional</li>
                                        <li>Informar si hay alergia a levadura</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pentavalente -->
                    <div id="info-pentavalente" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-vials"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Pentavalente</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra 5 enfermedades: Difteria, Tosferina, Tétanos, Hepatitis B y Haemophilus influenzae tipo b (Hib).</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Primera dosis:</strong> 2 meses</li>
                                        <li><strong>Segunda dosis:</strong> 4 meses</li>
                                        <li><strong>Tercera dosis:</strong> 6 meses</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Puede causar fiebre moderada</li>
                                        <li>Dolor e hinchazón en el sitio de inyección</li>
                                        <li>Irritabilidad temporal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Polio -->
                    <div id="info-polio" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-hand-holding-medical"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Polio (IPV)</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Vacuna inactivada contra la poliomielitis, una enfermedad viral que puede causar parálisis.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Primera dosis:</strong> 2 meses</li>
                                        <li><strong>Segunda dosis:</strong> 4 meses</li>
                                        <li><strong>Tercera dosis:</strong> 6 meses</li>
                                        <li><strong>Refuerzo:</strong> 18 meses</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Muy segura, efectos secundarios raros</li>
                                        <li>Posible dolor leve en el sitio de inyección</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rotavirus -->
                    <div id="info-rotavirus" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-virus"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Rotavirus</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra el rotavirus, principal causa de diarrea severa en lactantes y niños pequeños.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Primera dosis:</strong> 2 meses (vía oral)</li>
                                        <li><strong>Segunda dosis:</strong> 4 meses (vía oral)</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>No aplicar si el niño está enfermo</li>
                                        <li>Debe completarse antes de los 8 meses</li>
                                        <li>Puede causar irritabilidad leve</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Neumococo -->
                    <div id="info-neumococo" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-lungs"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Neumococo</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra infecciones por neumococo: neumonía, meningitis y otitis media.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Primera dosis:</strong> 2 meses</li>
                                        <li><strong>Segunda dosis:</strong> 4 meses</li>
                                        <li><strong>Refuerzo:</strong> 12 meses</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Fiebre leve posterior a la aplicación</li>
                                        <li>Enrojecimiento en el sitio de inyección</li>
                                        <li>Somnolencia temporal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Influenza -->
                    <div id="info-influenza" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-head-side-cough"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Influenza</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra la gripe estacional. Especialmente importante para gestantes, niños pequeños y personas con enfermedades crónicas.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Niños 6-35 meses:</strong> 2 dosis con intervalo de 4 semanas (primera vez)</li>
                                        <li><strong>Gestantes:</strong> Dosis única en cualquier trimestre</li>
                                        <li><strong>Anual:</strong> Se debe repetir cada año</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor leve en el sitio de inyección</li>
                                        <li>Fiebre baja ocasional</li>
                                        <li>No aplicar si hay alergia al huevo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fiebre Amarilla -->
                    <div id="info-fiebre-amarilla" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-mosquito"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Fiebre Amarilla</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra la fiebre amarilla, enfermedad viral transmitida por mosquitos. Obligatoria en zonas endémicas como el Huila.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Primera dosis:</strong> 12 meses</li>
                                        <li><strong>Refuerzo:</strong> 5 años</li>
                                        <li><strong>Gestantes:</strong> Solo si el riesgo de exposición es alto</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>No aplicar en menores de 6 meses</li>
                                        <li>Evitar en gestantes salvo alto riesgo</li>
                                        <li>Puede causar fiebre y dolor muscular leve</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Triple Viral -->
                    <div id="info-triple-viral" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Triple Viral (SRP)</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra tres enfermedades virales: Sarampión, Rubéola y Paperas (Parotiditis).</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Primera dosis:</strong> 12 meses</li>
                                        <li><strong>Segunda dosis:</strong> 5 años</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Puede causar fiebre leve 7-12 días después</li>
                                        <li>Erupción cutánea leve ocasional</li>
                                        <li>No aplicar durante el embarazo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Varicela -->
                    <div id="info-varicela" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-child"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Varicela</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra la varicela, enfermedad viral altamente contagiosa que causa erupción y fiebre.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Primera dosis:</strong> 12 meses</li>
                                        <li><strong>Segunda dosis:</strong> 5 años (opcional según PAI)</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Enrojecimiento leve en el sitio de inyección</li>
                                        <li>Fiebre baja ocasional</li>
                                        <li>Evitar en embarazadas e inmunodeprimidos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tdap (Gestantes) -->
                    <div id="info-tdap" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-baby"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Tdap (Gestantes)</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra Tétanos, Difteria y Tosferina (Pertussis acelular). Fundamental para gestantes para proteger al recién nacido.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Gestantes:</strong> Entre semana 26 y 36 de gestación</li>
                                        <li><strong>Importante:</strong> Aplicar en cada embarazo</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor moderado en el sitio de inyección</li>
                                        <li>Cansancio leve temporal</li>
                                        <li>Segura durante el embarazo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Botón volver -->
        <div class="text-center mt-5">
            <a href="{{ route('vacunacion') }}" class="btn btn-outline-danger btn-lg">
                <i class="fas fa-arrow-left me-2"></i>Volver a Vacunaciones
            </a>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    .vacunas-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .vacuna-card {
        background: white;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        cursor: pointer;
        transition: all 0.3s;
        border: 2px solid transparent;
    }

    .vacuna-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(237, 28, 36, 0.2);
        border-color: #ED1C24;
    }

    .vacuna-card.active {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        color: white;
        border-color: #ED1C24;
    }

    .vacuna-card.active .vacuna-icon {
        color: white;
    }

    .vacuna-icon {
        font-size: 2.5rem;
        color: #ED1C24;
        margin-bottom: 10px;
    }

    .vacuna-card h5 {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .vacuna-card p {
        margin: 0;
        opacity: 0.8;
        font-size: 0.85rem;
    }

    /* Información detallada */
    .vacuna-detalle-container {
        background: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        min-height: 600px;
    }

    .vacuna-imagen {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        border-radius: 20px;
        padding: 60px 30px;
        text-align: center;
        margin-bottom: 20px;
    }

    .vacuna-imagen i {
        font-size: 6rem;
        color: white;
    }

    .vacuna-titulo {
        color: #ED1C24;
        font-weight: 700;
        margin-bottom: 30px;
    }

    .info-section {
        margin-bottom: 25px;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 10px;
    }

    .info-section h5 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .info-section i {
        color: #ED1C24;
    }

    .info-section ul {
        margin: 0;
        padding-left: 20px;
    }

    .info-section ul li {
        margin-bottom: 8px;
        line-height: 1.6;
    }

    .vacuna-info {
        animation: fadeIn 0.5s;
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @media (max-width: 768px) {
        .vacunas-grid {
            grid-template-columns: 1fr;
        }

        .vacuna-detalle-container {
            padding: 20px;
        }

        .vacuna-imagen {
            padding: 40px 20px;
        }

        .vacuna-imagen i {
            font-size: 4rem;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.vacuna-card');
        const infoInicial = document.getElementById('info-inicial');
        const infoSections = document.querySelectorAll('.vacuna-info');

        cards.forEach(card => {
            card.addEventListener('click', function() {
                // Remover clase active de todas las cards
                cards.forEach(c => c.classList.remove('active'));
                
                // Agregar clase active a la card seleccionada
                this.classList.add('active');

                // Ocultar mensaje inicial
                infoInicial.style.display = 'none';

                // Ocultar todas las secciones de info
                infoSections.forEach(section => {
                    section.style.display = 'none';
                });

                // Mostrar la información correspondiente
                const vacuna = this.getAttribute('data-vacuna');
                const infoElement = document.getElementById('info-' + vacuna);
                if (infoElement) {
                    infoElement.style.display = 'block';
                    
                    // Scroll suave hacia la información
                    infoElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    });
</script>
@endsection