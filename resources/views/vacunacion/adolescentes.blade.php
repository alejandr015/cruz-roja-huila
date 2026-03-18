@extends('layouts.app')

@section('title', 'Vacunación Adolescentes - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<style>
    .adolescentes-header-bg {
        background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    /* Abstract energetic particles (Sparks) */
    .ado-spark {
        position: absolute;
        background: #ffffff;
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(255,255,255,0.5);
        animation: flySpark linear infinite;
        z-index: 1;
        opacity: 0;
    }

    /* Dynamic glowing speed lines */
    .ado-line {
        position: absolute;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        animation: shootLine linear infinite;
        z-index: 0;
    }

    @keyframes shootLine {
        0% { transform: translateX(-100vw) rotate(-15deg); opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { transform: translateX(120vw) rotate(-15deg); opacity: 0; }
    }

    @keyframes flySpark {
        0% { transform: translate(-50px, 0) scale(0); opacity: 0; }
        50% { opacity: 0.8; transform: translate(50vw, -100px) scale(1); }
        100% { transform: translate(110vw, -200px) scale(0); opacity: 0; }
    }

    /* Lines */
    .ln-1 { top: 20%; width: 200px; animation-duration: 5s; animation-delay: 0s; }
    .ln-2 { top: 50%; width: 350px; animation-duration: 7s; animation-delay: 2s; }
    .ln-3 { top: 70%; width: 150px; animation-duration: 4s; animation-delay: 1s; }
    .ln-4 { top: 30%; width: 400px; animation-duration: 8s; animation-delay: 4s; }

    /* Sparks */
    .sp-1 { top: 80%; width: 6px; height: 6px; animation-duration: 8s; animation-delay: 1s; }
    .sp-2 { top: 40%; width: 4px; height: 4px; animation-duration: 6s; animation-delay: 3s; background: rgba(255,255,255,0.7); }
    .sp-3 { top: 60%; width: 7px; height: 7px; animation-duration: 10s; animation-delay: 0s; }
    .sp-4 { top: 20%; width: 3px; height: 3px; animation-duration: 7s; animation-delay: 5s; background: rgba(255,255,255,0.9); }
    .sp-5 { top: 90%; width: 5px; height: 5px; animation-duration: 9s; animation-delay: 2s; }
</style>

<section class="page-header-vacuna adolescentes-header-bg text-center text-white">
    <!-- Dynamic Growth Animation -->
    <div class="ado-line ln-1"></div>
    <div class="ado-line ln-2"></div>
    <div class="ado-line ln-3"></div>
    <div class="ado-line ln-4"></div>
    
    <div class="ado-spark sp-1"></div>
    <div class="ado-spark sp-2"></div>
    <div class="ado-spark sp-3"></div>
    <div class="ado-spark sp-4"></div>
    <div class="ado-spark sp-5"></div>
    
    <div class="container position-relative z-2 pb-4">
        <span class="badge bg-light text-primary mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
            <i class="fas fa-bolt me-2"></i> Desarrollo y Vitalidad
        </span>
        <h1 class="display-5 fw-bold mb-3 text-shadow" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">Vacunación para Adolescentes</h1>
        <p class="lead text-white-50 mx-auto mb-0" style="max-width: 700px; font-weight: 300; font-size: 1.15rem;">
            Protección esencial en la etapa de mayor crecimiento y cambio (10-19 años).
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
                    
                    <!-- VPH -->
                    <div class="vacuna-card" data-vacuna="vph">
                        <div class="vacuna-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>VPH</h5>
                        <p class="small">Virus Papiloma Humano</p>
                    </div>

                    <!-- Td/Tdap -->
                    <div class="vacuna-card" data-vacuna="tdap">
                        <div class="vacuna-icon">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <h5>Tdap</h5>
                        <p class="small">Tétanos, Difteria, Tosferina</p>
                    </div>

                    <!-- Meningococo -->
                    <div class="vacuna-card" data-vacuna="meningococo">
                        <div class="vacuna-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h5>Meningococo</h5>
                        <p class="small">Meningitis</p>
                    </div>

                    <!-- Hepatitis B -->
                    <div class="vacuna-card" data-vacuna="hepatitis-b">
                        <div class="vacuna-icon">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <h5>Hepatitis B</h5>
                        <p class="small">Protección hepática</p>
                    </div>

                    <!-- Triple Viral -->
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
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h5>Varicela</h5>
                        <p class="small">Prevención de varicela</p>
                    </div>

                    <!-- Influenza -->
                    <div class="vacuna-card" data-vacuna="influenza">
                        <div class="vacuna-icon">
                            <i class="fas fa-head-side-cough"></i>
                        </div>
                        <h5>Influenza</h5>
                        <p class="small">Gripe estacional</p>
                    </div>

                    <!-- COVID-19 -->
                    <div class="vacuna-card" data-vacuna="covid19">
                        <div class="vacuna-icon">
                            <i class="fas fa-virus-slash"></i>
                        </div>
                        <h5>COVID-19</h5>
                        <p class="small">Coronavirus</p>
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

                    <!-- VPH -->
                    <div id="info-vph" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">VPH (Virus del Papiloma Humano)</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Previene infecciones por VPH que pueden causar cáncer de cuello uterino, verrugas genitales y otros tipos de cáncer. Es una de las vacunas más importantes para adolescentes.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>9-14 años:</strong> 2 dosis (0 y 6 meses)</li>
                                        <li><strong>15 años o más:</strong> 3 dosis (0, 2 y 6 meses)</li>
                                        <li><strong>Edad ideal:</strong> Entre 11-12 años antes del inicio de la vida sexual</li>
                                        <li><strong>Importante:</strong> Para niños y niñas</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor en el sitio de inyección (común)</li>
                                        <li>Posible dolor de cabeza leve</li>
                                        <li>Mareo ocasional después de la aplicación</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tdap -->
                    <div id="info-tdap" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-syringe"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Tdap (Tétanos, Difteria, Tosferina)</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Refuerzo que protege contra tétanos, difteria y tosferina (pertussis). La tosferina es especialmente peligrosa y contagiosa en adolescentes.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Edad recomendada:</strong> 11-12 años (una dosis de refuerzo)</li>
                                        <li><strong>Si no recibió en adolescencia:</strong> Aplicar lo antes posible</li>
                                        <li><strong>Refuerzos posteriores:</strong> Cada 10 años (Td o Tdap)</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor moderado en el brazo</li>
                                        <li>Enrojecimiento e hinchazón local</li>
                                        <li>Fiebre leve ocasional</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Meningococo -->
                    <div id="info-meningococo" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-brain"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Meningococo (Meningitis)</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra la bacteria meningococo que causa meningitis (inflamación de las membranas del cerebro) y septicemia. Particularmente importante en adolescentes que viven en residencias estudiantiles.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Primera dosis:</strong> 11-12 años</li>
                                        <li><strong>Refuerzo:</strong> 16 años</li>
                                        <li><strong>Tipos:</strong> MenACWY (más común), MenB (situaciones especiales)</li>
                                        <li><strong>Grupos de riesgo:</strong> Estudiantes universitarios, militares</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor y enrojecimiento en el sitio de inyección</li>
                                        <li>Fatiga y dolor de cabeza</li>
                                        <li>Fiebre leve temporal</li>
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
                                    <p>Si no completó el esquema en la infancia, es importante completarlo en la adolescencia. Protege contra enfermedad hepática crónica y cáncer de hígado.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Si no vacunado:</strong> 3 dosis (0, 1 y 6 meses)</li>
                                        <li><strong>Verificar:</strong> Revisar carnet de vacunación</li>
                                        <li><strong>Protección:</strong> Dura toda la vida</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor leve en el sitio de inyección</li>
                                        <li>Fiebre baja ocasional</li>
                                        <li>Cansancio temporal</li>
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
                                    <p>Protege contra sarampión, rubéola y paperas. Si no recibió 2 dosis en la infancia, debe completar el esquema en la adolescencia.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Esquema completo:</strong> 2 dosis</li>
                                        <li><strong>Si falta una dosis:</strong> Aplicar la que falta</li>
                                        <li><strong>Importante:</strong> Verificar carnet de vacunación</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Fiebre leve 7-12 días después</li>
                                        <li>Erupción cutánea leve ocasional</li>
                                        <li>Dolor articular temporal (adolescentes)</li>
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
                                    <i class="fas fa-user-md"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Varicela</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Si nunca tuvo varicela ni fue vacunado, es importante recibir la vacuna en la adolescencia, ya que la enfermedad es más grave en adolescentes y adultos.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Si nunca vacunado:</strong> 2 dosis separadas por 4-8 semanas</li>
                                        <li><strong>Si tuvo varicela:</strong> No necesita vacuna (inmunidad natural)</li>
                                        <li><strong>Verificar:</strong> Historial de enfermedad o vacunación</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor y enrojecimiento local</li>
                                        <li>Fiebre leve ocasional</li>
                                        <li>Erupción leve tipo varicela (rara)</li>
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
                                <h2 class="vacuna-titulo">Influenza (Gripe)</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Vacuna anual recomendada para todos los adolescentes. Previene la gripe estacional y sus complicaciones.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Frecuencia:</strong> Anual (una vez al año)</li>
                                        <li><strong>Mejor época:</strong> Antes de la temporada de gripe (marzo-abril)</li>
                                        <li><strong>Importante:</strong> Especialmente si estudia en internados</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor leve en el sitio de inyección</li>
                                        <li>Posibles síntomas leves similares a gripe</li>
                                        <li>Dolor muscular temporal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COVID-19 -->
                    <div id="info-covid19" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-virus-slash"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">COVID-19</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Previene formas graves de COVID-19. Todos los adolescentes deben estar vacunados según el esquema vigente.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Esquema primario:</strong> 2 dosis (según tipo de vacuna)</li>
                                        <li><strong>Refuerzos:</strong> Según recomendaciones sanitarias actuales</li>
                                        <li><strong>Importante:</strong> Mantener esquema actualizado</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor en el sitio de aplicación</li>
                                        <li>Cansancio y dolor de cabeza (1-2 días)</li>
                                        <li>Fiebre leve ocasional</li>
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
                cards.forEach(c => c.classList.remove('active'));
                this.classList.add('active');
                infoInicial.style.display = 'none';
                infoSections.forEach(section => {
                    section.style.display = 'none';
                });
                const vacuna = this.getAttribute('data-vacuna');
                const infoElement = document.getElementById('info-' + vacuna);
                if (infoElement) {
                    infoElement.style.display = 'block';
                    infoElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    });
</script>
@endsection