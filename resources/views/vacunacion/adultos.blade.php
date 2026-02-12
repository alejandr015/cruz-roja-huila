@extends('layouts.app')

@section('title', 'Vacunación Adultos - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-vacuna" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-5 fw-bold">Vacunación para Adultos</h1>
        <p class="lead">Protección continua en todas las etapas de la vida adulta</p>
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

                    <!-- Neumococo -->
                    <div class="vacuna-card" data-vacuna="neumococo">
                        <div class="vacuna-icon">
                            <i class="fas fa-lungs"></i>
                        </div>
                        <h5>Neumococo</h5>
                        <p class="small">Neumonía</p>
                    </div>

                    <!-- Td (Tétanos-Difteria) -->
                    <div class="vacuna-card" data-vacuna="tetanos">
                        <div class="vacuna-icon">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <h5>Td</h5>
                        <p class="small">Tétanos y Difteria</p>
                    </div>

                    <!-- Hepatitis B -->
                    <div class="vacuna-card" data-vacuna="hepatitis-b">
                        <div class="vacuna-icon">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <h5>Hepatitis B</h5>
                        <p class="small">Protección hepática</p>
                    </div>

                    <!-- Fiebre Amarilla -->
                    <div class="vacuna-card" data-vacuna="fiebre-amarilla">
                        <div class="vacuna-icon">
                            <i class="fas fa-mosquito"></i>
                        </div>
                        <h5>Fiebre Amarilla</h5>
                        <p class="small">Para viajeros</p>
                    </div>

                    <!-- Herpes Zóster -->
                    <div class="vacuna-card" data-vacuna="herpes-zoster">
                        <div class="vacuna-icon">
                            <i class="fas fa-virus"></i>
                        </div>
                        <h5>Herpes Zóster</h5>
                        <p class="small">Culebrilla</p>
                    </div>

                    <!-- Hepatitis A -->
                    <div class="vacuna-card" data-vacuna="hepatitis-a">
                        <div class="vacuna-icon">
                            <i class="fas fa-hospital-user"></i>
                        </div>
                        <h5>Hepatitis A</h5>
                        <p class="small">Protección hepática</p>
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
                                    <p>Protege contra las cepas más comunes del virus de la influenza, reduciendo significativamente el riesgo de complicaciones graves.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Frecuencia:</strong> Anual (una vez al año)</li>
                                        <li><strong>Mejor época:</strong> Antes de la temporada de gripe (marzo-abril)</li>
                                        <li><strong>Grupos prioritarios:</strong> Adultos mayores, personal de salud, personas con enfermedades crónicas</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor leve en el sitio de inyección</li>
                                        <li>Posibles síntomas leves similares a la gripe</li>
                                        <li>No aplicar si hay alergia al huevo</li>
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
                                    <p>Previene formas graves de COVID-19, hospitalizaciones y complicaciones. Esencial para mantener la inmunidad contra el coronavirus.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Esquema primario:</strong> 2 dosis (dependiendo del tipo de vacuna)</li>
                                        <li><strong>Refuerzos:</strong> Según recomendaciones sanitarias</li>
                                        <li><strong>Importante:</strong> Mantener esquema actualizado con refuerzos</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor y enrojecimiento en el sitio de aplicación</li>
                                        <li>Posible fiebre leve y cansancio (1-2 días)</li>
                                        <li>Dolor muscular o de cabeza temporal</li>
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
                                    <p>Protege contra la bacteria neumococo que causa neumonía, meningitis y otras infecciones graves. Especialmente importante en adultos mayores.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Mayores de 65 años:</strong> 1-2 dosis según tipo (PCV13, PPSV23)</li>
                                        <li><strong>Adultos con condiciones crónicas:</strong> Según recomendación médica</li>
                                        <li><strong>Refuerzo:</strong> Puede ser necesario después de 5 años</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor o hinchazón en el sitio de inyección</li>
                                        <li>Fiebre leve ocasional</li>
                                        <li>Cansancio temporal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Td (Tétanos-Difteria) -->
                    <div id="info-tetanos" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-shield-virus"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Td (Tétanos y Difteria)</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra el tétanos (infección mortal que afecta el sistema nervioso) y la difteria (infección respiratoria grave).</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Refuerzo:</strong> Cada 10 años durante toda la vida adulta</li>
                                        <li><strong>Heridas sucias:</strong> Refuerzo si han pasado más de 5 años</li>
                                        <li><strong>Importante:</strong> Mantener al día para protección continua</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor moderado en el sitio de inyección</li>
                                        <li>Enrojecimiento e hinchazón local</li>
                                        <li>Ocasionalmente fiebre leve</li>
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
                                    <i class="fas fa-syringe"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Hepatitis B</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra el virus de la Hepatitis B que puede causar enfermedad hepática crónica, cirrosis y cáncer de hígado.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Esquema completo:</strong> 3 dosis (0, 1 y 6 meses)</li>
                                        <li><strong>Grupos de riesgo:</strong> Personal de salud, personas con múltiples parejas</li>
                                        <li><strong>Protección:</strong> Dura toda la vida después del esquema completo</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor leve en el sitio de aplicación</li>
                                        <li>Fiebre baja ocasional</li>
                                        <li>Cansancio temporal</li>
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
                                    <p>Previene la fiebre amarilla, enfermedad viral transmitida por mosquitos. Obligatoria para viajar a ciertas zonas endémicas.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Única dosis:</strong> Protección de por vida</li>
                                        <li><strong>Aplicar:</strong> Al menos 10 días antes de viajar a zona endémica</li>
                                        <li><strong>Certificado:</strong> Válido internacionalmente</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor y enrojecimiento local</li>
                                        <li>Posible fiebre leve (5-7 días después)</li>
                                        <li>No aplicar a mayores de 60 años sin evaluación médica</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Herpes Zóster -->
                    <div id="info-herpes-zoster" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-virus"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Herpes Zóster (Culebrilla)</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Previene el herpes zóster (culebrilla) y el dolor neuropático crónico asociado. Recomendada para adultos mayores de 50 años.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Esquema:</strong> 2 dosis separadas por 2-6 meses</li>
                                        <li><strong>Edad recomendada:</strong> A partir de los 50 años</li>
                                        <li><strong>Efectividad:</strong> Más del 90% en prevención</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor intenso en el sitio de inyección (común)</li>
                                        <li>Fatiga, dolor muscular y dolor de cabeza</li>
                                        <li>Escalofríos y fiebre leve</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hepatitis A -->
                    <div id="info-hepatitis-a" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-hospital-user"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Hepatitis A</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Protege contra el virus de la Hepatitis A, transmitido por agua y alimentos contaminados. Importante para viajeros y personal de salud.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Dosis</h5>
                                    <ul>
                                        <li><strong>Esquema:</strong> 2 dosis separadas por 6-12 meses</li>
                                        <li><strong>Grupos de riesgo:</strong> Viajeros a zonas endémicas, personal de salud</li>
                                        <li><strong>Protección:</strong> Prolongada después del esquema completo</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Precauciones</h5>
                                    <ul>
                                        <li>Dolor leve en el sitio de inyección</li>
                                        <li>Cansancio temporal</li>
                                        <li>Dolor de cabeza ocasional</li>
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