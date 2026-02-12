@extends('layouts.app')

@section('title', 'Vacunación Riesgos Laborales - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-vacuna" style="background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%); padding: 60px 0;">
    <div class="container text-center text-white">
        <h1 class="display-5 fw-bold">Vacunación de Riesgos Laborales</h1>
        <p class="lead">Protección ocupacional para trabajadores expuestos</p>
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
                    
                    <!-- Hepatitis B -->
                    <div class="vacuna-card" data-vacuna="hepatitis-b">
                        <div class="vacuna-icon">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <h5>Hepatitis B</h5>
                        <p class="small">Personal de salud</p>
                    </div>

                    <!-- Tétanos -->
                    <div class="vacuna-card" data-vacuna="tetanos">
                        <div class="vacuna-icon">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <h5>Tétanos (Td/Tdap)</h5>
                        <p class="small">Trabajadores de campo</p>
                    </div>

                    <!-- Rabia -->
                    <div class="vacuna-card" data-vacuna="rabia">
                        <div class="vacuna-icon">
                            <i class="fas fa-dog"></i>
                        </div>
                        <h5>Rabia</h5>
                        <p class="small">Veterinarios, zootecnistas</p>
                    </div>

                    <!-- Influenza -->
                    <div class="vacuna-card" data-vacuna="influenza">
                        <div class="vacuna-icon">
                            <i class="fas fa-head-side-cough"></i>
                        </div>
                        <h5>Influenza</h5>
                        <p class="small">Personal de salud</p>
                    </div>

                    <!-- Hepatitis A -->
                    <div class="vacuna-card" data-vacuna="hepatitis-a">
                        <div class="vacuna-icon">
                            <i class="fas fa-hospital-user"></i>
                        </div>
                        <h5>Hepatitis A</h5>
                        <p class="small">Manipuladores alimentos</p>
                    </div>

                    <!-- Fiebre Amarilla -->
                    <div class="vacuna-card" data-vacuna="fiebre-amarilla">
                        <div class="vacuna-icon">
                            <i class="fas fa-mosquito"></i>
                        </div>
                        <h5>Fiebre Amarilla</h5>
                        <p class="small">Trabajo en zonas endémicas</p>
                    </div>

                    <!-- Varicela -->
                    <div class="vacuna-card" data-vacuna="varicela">
                        <div class="vacuna-icon">
                            <i class="fas fa-user-nurse"></i>
                        </div>
                        <h5>Varicela</h5>
                        <p class="small">Personal sanitario</p>
                    </div>

                    <!-- Triple Viral -->
                    <div class="vacuna-card" data-vacuna="triple-viral">
                        <div class="vacuna-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h5>Triple Viral</h5>
                        <p class="small">Personal educación/salud</p>
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
                                    <p>Esencial para personal de salud y trabajadores expuestos a sangre y fluidos corporales. Previene infección hepática crónica y cáncer de hígado.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-briefcase me-2"></i>Ocupaciones de Riesgo</h5>
                                    <ul>
                                        <li>Personal médico y de enfermería</li>
                                        <li>Odontólogos y auxiliares</li>
                                        <li>Personal de laboratorio clínico</li>
                                        <li>Paramédicos y socorristas</li>
                                        <li>Personal de limpieza hospitalaria</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Esquema</h5>
                                    <ul>
                                        <li><strong>3 dosis:</strong> 0, 1 y 6 meses</li>
                                        <li><strong>Verificación:</strong> Prueba serológica post-vacunación</li>
                                        <li><strong>Refuerzos:</strong> Generalmente no necesarios</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tétanos -->
                    <div id="info-tetanos" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-syringe"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Tétanos (Td/Tdap)</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Crítica para trabajadores expuestos a heridas, cortes y contacto con tierra o metales oxidados. El tétanos es una infección mortal del sistema nervioso.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-briefcase me-2"></i>Ocupaciones de Riesgo</h5>
                                    <ul>
                                        <li>Trabajadores de construcción</li>
                                        <li>Agricultores y jardineros</li>
                                        <li>Personal de reciclaje</li>
                                        <li>Mecánicos y soldadores</li>
                                        <li>Personal de mantenimiento</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Esquema</h5>
                                    <ul>
                                        <li><strong>Refuerzo:</strong> Cada 10 años</li>
                                        <li><strong>Heridas contaminadas:</strong> Refuerzo si > 5 años</li>
                                        <li><strong>Importante:</strong> Mantener esquema al día</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rabia -->
                    <div id="info-rabia" class="vacuna-info" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vacuna-imagen">
                                    <i class="fas fa-dog"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Rabia</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Vacunación pre-exposición para trabajadores con alto riesgo de contacto con animales potencialmente rabiosos. La rabia es 100% mortal sin tratamiento.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-briefcase me-2"></i>Ocupaciones de Riesgo</h5>
                                    <ul>
                                        <li>Médicos veterinarios</li>
                                        <li>Zootecnistas</li>
                                        <li>Personal de control animal</li>
                                        <li>Biólogos de vida silvestre</li>
                                        <li>Personal de laboratorio (virus rabia)</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Esquema</h5>
                                    <ul>
                                        <li><strong>Pre-exposición:</strong> 3 dosis (días 0, 7 y 21-28)</li>
                                        <li><strong>Refuerzos:</strong> Cada 2-3 años según riesgo</li>
                                        <li><strong>Post-exposición:</strong> Protocolo adicional si hay mordedura</li>
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
                                    <p>Obligatoria para personal de salud. Protege al trabajador y evita transmisión a pacientes vulnerables.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-briefcase me-2"></i>Ocupaciones de Riesgo</h5>
                                    <ul>
                                        <li>Todo el personal de salud</li>
                                        <li>Cuidadores de adultos mayores</li>
                                        <li>Personal de guarderías</li>
                                        <li>Trabajadores de asilos</li>
                                        <li>Personal de transporte de pacientes</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Esquema</h5>
                                    <ul>
                                        <li><strong>Frecuencia:</strong> Anual (cada año)</li>
                                        <li><strong>Época:</strong> Antes de temporada de gripe</li>
                                        <li><strong>Obligatoria:</strong> En muchas instituciones de salud</li>
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
                                    <p>Recomendada para trabajadores en contacto con alimentos, aguas residuales o poblaciones con alta prevalencia.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-briefcase me-2"></i>Ocupaciones de Riesgo</h5>
                                    <ul>
                                        <li>Manipuladores de alimentos</li>
                                        <li>Personal de cocinas institucionales</li>
                                        <li>Trabajadores de plantas de tratamiento</li>
                                        <li>Personal de guardería infantil</li>
                                        <li>Personal de laboratorio clínico</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Esquema</h5>
                                    <ul>
                                        <li><strong>2 dosis:</strong> Separadas por 6-12 meses</li>
                                        <li><strong>Protección:</strong> Prolongada tras esquema completo</li>
                                        <li><strong>Combinada:</strong> Disponible con Hepatitis B</li>
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
                                    <p>Obligatoria para trabajadores en zonas endémicas de fiebre amarilla. Previene enfermedad viral grave transmitida por mosquitos.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-briefcase me-2"></i>Ocupaciones de Riesgo</h5>
                                    <ul>
                                        <li>Personal de salud en zonas endémicas</li>
                                        <li>Trabajadores forestales</li>
                                        <li>Personal de proyectos en selva</li>
                                        <li>Biólogos y ecólogos de campo</li>
                                        <li>Personal militar en zonas de riesgo</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Esquema</h5>
                                    <ul>
                                        <li><strong>Única dosis:</strong> Protección de por vida</li>
                                        <li><strong>Aplicar:</strong> 10 días antes de exposición</li>
                                        <li><strong>Certificado:</strong> Internacionalmente válido</li>
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
                                    <i class="fas fa-user-nurse"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="vacuna-titulo">Varicela</h2>
                                
                                <div class="info-section">
                                    <h5><i class="fas fa-info-circle me-2"></i>Información</h5>
                                    <p>Recomendada para personal de salud y educación sin historia de varicela o vacunación. La enfermedad es más grave en adultos.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-briefcase me-2"></i>Ocupaciones de Riesgo</h5>
                                    <ul>
                                        <li>Personal de salud (especialmente pediatría)</li>
                                        <li>Maestros y educadores</li>
                                        <li>Personal de guarderías</li>
                                        <li>Cuidadores de niños</li>
                                        <li>Personal de instituciones infantiles</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Esquema</h5>
                                    <ul>
                                        <li><strong>2 dosis:</strong> Separadas por 4-8 semanas</li>
                                        <li><strong>Verificar:</strong> Historia de enfermedad o vacunación</li>
                                        <li><strong>Prueba serológica:</strong> Disponible para confirmar inmunidad</li>
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
                                    <p>Protege contra sarampión, rubéola y paperas. Esencial para personal de salud y educación sin evidencia de inmunidad.</p>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-briefcase me-2"></i>Ocupaciones de Riesgo</h5>
                                    <ul>
                                        <li>Personal de salud en general</li>
                                        <li>Maestros y profesores</li>
                                        <li>Personal de universidades</li>
                                        <li>Trabajadores de guarderías</li>
                                        <li>Personal de instituciones educativas</li>
                                    </ul>
                                </div>

                                <div class="info-section">
                                    <h5><i class="fas fa-calendar-check me-2"></i>Esquema</h5>
                                    <ul>
                                        <li><strong>2 dosis:</strong> Si no tiene evidencia de inmunidad</li>
                                        <li><strong>Verificar:</strong> Carnet de vacunación infantil</li>
                                        <li><strong>Serología:</strong> Disponible para confirmar inmunidad</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Información Adicional -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="alert alert-info">
                    <h5><i class="fas fa-info-circle me-2"></i>Importante para Empresas</h5>
                    <p class="mb-0">Las empresas deben identificar los riesgos biológicos de sus trabajadores y garantizar el esquema de vacunación apropiado según la normatividad de salud ocupacional. Ofrecemos servicios de vacunación empresarial con asesoría personalizada.</p>
                </div>
            </div>
        </div>

        <!-- Botón volver -->
        <div class="text-center mt-4">
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