@extends('layouts.app')

@section('title', 'Pruebas Especiales - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-servicio" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Pruebas Especiales</h1>
        <p class="lead">Diagnóstico avanzado y especializado</p>
    </div>
</section>

<!-- Información Principal -->
<section class="py-5">
    <div class="container">
        
        <!-- Descripción -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title-servicio">Diagnóstico Especializado</h2>
                <p class="lead text-muted">
                    Ofrecemos pruebas especializadas que requieren equipamiento avanzado y personal altamente capacitado. 
                    Estas pruebas permiten diagnósticos precisos de condiciones específicas y seguimiento de tratamientos complejos.
                </p>
            </div>
        </div>

        <!-- Categorías de Pruebas -->
        <div class="row g-4 mb-5">
            
            <div class="col-md-6 col-lg-4">
                <div class="categoria-especial-card">
                    <div class="categoria-icon" style="background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h4>Electrocardiograma</h4>
                    <p>Registro de la actividad eléctrica del corazón para detectar arritmias, infartos y otras patologías cardíacas.</p>
                    <ul>
                        <li>EKG en Reposo</li>
                        <li>EKG de Esfuerzo</li>
                        <li>Holter 24 horas</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="categoria-especial-card">
                    <div class="categoria-icon" style="background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);">
                        <i class="fas fa-lungs"></i>
                    </div>
                    <h4>Espirometría</h4>
                    <p>Medición de la función pulmonar para diagnosticar asma, EPOC y otras enfermedades respiratorias.</p>
                    <ul>
                        <li>Espirometría Simple</li>
                        <li>Espirometría con Broncodilatador</li>
                        <li>Curva Flujo-Volumen</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="categoria-especial-card">
                    <div class="categoria-icon" style="background: linear-gradient(135deg, #2980b9 0%, #21618c 100%);">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h4>Optometría</h4>
                    <p>Evaluación completa de la salud visual y diagnóstico de problemas refractivos.</p>
                    <ul>
                        <li>Agudeza Visual</li>
                        <li>Refracción</li>
                        <li>Fondo de Ojo</li>
                        <li>Presión Intraocular</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="categoria-especial-card">
                    <div class="categoria-icon" style="background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);">
                        <i class="fas fa-deaf"></i>
                    </div>
                    <h4>Audiometría</h4>
                    <p>Evaluación de la capacidad auditiva y detección de pérdida auditiva.</p>
                    <ul>
                        <li>Audiometría Tonal</li>
                        <li>Audiometría Verbal</li>
                        <li>Impedanciometría</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="categoria-especial-card">
                    <div class="categoria-icon" style="background: linear-gradient(135deg, #C41419 0%, #9a1014 100%);">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h4>Citologías</h4>
                    <p>Estudio de células para detección temprana de cáncer y otras alteraciones.</p>
                    <ul>
                        <li>Citología Cervicouterina</li>
                        <li>Citología de Fluidos</li>
                        <li>Papanicolaou</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="categoria-especial-card">
                    <div class="categoria-icon" style="background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);">
                        <i class="fas fa-vials"></i>
                    </div>
                    <h4>Marcadores Tumorales</h4>
                    <p>Detección de sustancias que indican presencia de cáncer.</p>
                    <ul>
                        <li>PSA (Próstata)</li>
                        <li>CA 125 (Ovario)</li>
                        <li>CA 19-9 (Páncreas)</li>
                        <li>CEA (Colon)</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Otras Pruebas -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title-servicio text-center mb-4">Otras Pruebas Especializadas</h2>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="prueba-item">
                    <i class="fas fa-flask"></i>
                    <h6>Pruebas de Coagulación</h6>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="prueba-item">
                    <i class="fas fa-dna"></i>
                    <h6>Pruebas Genéticas</h6>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="prueba-item">
                    <i class="fas fa-baby"></i>
                    <h6>Perfil Prenatal</h6>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="prueba-item">
                    <i class="fas fa-allergies"></i>
                    <h6>Pruebas de Alergia</h6>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="prueba-item">
                    <i class="fas fa-pills"></i>
                    <h6>Monitoreo de Fármacos</h6>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="prueba-item">
                    <i class="fas fa-bone"></i>
                    <h6>Marcadores Óseos</h6>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="prueba-item">
                    <i class="fas fa-vial-circle-check"></i>
                    <h6>Perfil Hormonal</h6>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="prueba-item">
                    <i class="fas fa-virus"></i>
                    <h6>Cultivos Especiales</h6>
                </div>
            </div>

        </div>

        <!-- Información Importante -->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="info-importante-box">
                    <h4><i class="fas fa-exclamation-circle me-2"></i>Información Importante</h4>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="info-item-box">
                                <h6><i class="fas fa-calendar-check me-2"></i>Agenda tu Cita</h6>
                                <p>Algunas pruebas especiales requieren cita previa. Llámanos para programar tu examen.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item-box">
                                <h6><i class="fas fa-file-prescription me-2"></i>Orden Médica</h6>
                                <p>Varias pruebas especializadas requieren orden médica. Consulta con tu médico tratante.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item-box">
                                <h6><i class="fas fa-clock me-2"></i>Preparación Especial</h6>
                                <p>Algunos exámenes requieren ayuno o preparaciones específicas. Te informaremos al agendar.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item-box">
                                <h6><i class="fas fa-hourglass-half me-2"></i>Tiempo de Resultados</h6>
                                <p>Los resultados de pruebas especiales pueden tardar entre 3-7 días según complejidad.</p>
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
        background: #C41419;
    }

    .categoria-especial-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        height: 100%;
        transition: all 0.3s;
    }

    .categoria-especial-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(196, 20, 25, 0.2);
    }

    .categoria-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .categoria-icon i {
        font-size: 2.5rem;
        color: white;
    }

    .categoria-especial-card h4 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 15px;
        text-align: center;
    }

    .categoria-especial-card p {
        color: #666;
        text-align: center;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .categoria-especial-card ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .categoria-especial-card ul li {
        padding: 8px 0;
        color: #555;
        border-bottom: 1px solid #f0f0f0;
        font-size: 0.95rem;
    }

    .categoria-especial-card ul li:last-child {
        border-bottom: none;
    }

    .categoria-especial-card ul li::before {
        content: "•";
        color: #C41419;
        font-weight: bold;
        margin-right: 10px;
    }

    .prueba-item {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        text-align: center;
        transition: all 0.3s;
        height: 100%;
    }

    .prueba-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .prueba-item i {
        font-size: 2.5rem;
        color: #C41419;
        margin-bottom: 15px;
    }

    .prueba-item h6 {
        color: #1a2332;
        font-weight: 700;
        margin: 0;
    }

    .info-importante-box {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        border-top: 5px solid #C41419;
    }

    .info-importante-box h4 {
        color: #1a2332;
        font-weight: 700;
        text-align: center;
    }

    .info-importante-box i {
        color: #C41419;
    }

    .info-item-box {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 15px;
        height: 100%;
    }

    .info-item-box h6 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .info-item-box p {
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

        .info-importante-box {
            padding: 25px;
        }
    }
</style>
@endsection