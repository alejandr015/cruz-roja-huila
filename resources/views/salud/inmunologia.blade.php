@extends('layouts.app')

@section('title', 'Inmunología - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-servicio" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Inmunología</h1>
        <p class="lead">Estudio del sistema inmunológico y sus respuestas</p>
    </div>
</section>

<!-- Información Principal -->
<section class="py-5">
    <div class="container">
        
        <!-- Descripción -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title-servicio">¿Qué es la Inmunología?</h2>
                <p class="lead text-muted">
                    La inmunología es la rama de la medicina que estudia el sistema inmunológico y sus respuestas. 
                    Nuestro laboratorio realiza pruebas especializadas para diagnosticar enfermedades autoinmunes, 
                    alergias, inmunodeficiencias y evaluar la respuesta inmune del organismo.
                </p>
            </div>
        </div>

        <!-- Áreas de Estudio -->
        <div class="row g-4 mb-5">
            
            <div class="col-md-6 col-lg-3">
                <div class="area-inmuno-card">
                    <div class="area-inmuno-icon" style="background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);">
                        <i class="fas fa-shield-virus"></i>
                    </div>
                    <h4>Anticuerpos</h4>
                    <p>Detección y cuantificación de anticuerpos específicos.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="area-inmuno-card">
                    <div class="area-inmuno-icon" style="background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);">
                        <i class="fas fa-allergies"></i>
                    </div>
                    <h4>Alergias</h4>
                    <p>Identificación de alergenos y sensibilizaciones.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="area-inmuno-card">
                    <div class="area-inmuno-icon" style="background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h4>Autoinmunidad</h4>
                    <p>Diagnóstico de enfermedades autoinmunes.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="area-inmuno-card">
                    <div class="area-inmuno-icon" style="background: linear-gradient(135deg, #C41419 0%, #9a1014 100%);">
                        <i class="fas fa-virus"></i>
                    </div>
                    <h4>Infecciones</h4>
                    <p>Serología para agentes infecciosos.</p>
                </div>
            </div>

        </div>

        <!-- Pruebas Disponibles -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title-servicio text-center mb-4">Pruebas Inmunológicas Disponibles</h2>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pruebas-inmuno-card">
                    <h5><i class="fas fa-bacteria me-2"></i>Serología Infecciosa</h5>
                    <ul>
                        <li>Hepatitis A, B y C</li>
                        <li>VIH (ELISA y Western Blot)</li>
                        <li>VDRL (Sífilis)</li>
                        <li>Toxoplasma (IgG e IgM)</li>
                        <li>Rubéola (IgG e IgM)</li>
                        <li>Citomegalovirus (CMV)</li>
                        <li>Herpes Simple</li>
                        <li>Epstein Barr</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pruebas-inmuno-card">
                    <h5><i class="fas fa-dna me-2"></i>Enfermedades Autoinmunes</h5>
                    <ul>
                        <li>Anticuerpos Antinucleares (ANA)</li>
                        <li>Factor Reumatoideo</li>
                        <li>Anti-DNA</li>
                        <li>Anticuerpos Anti-TPO</li>
                        <li>Anticuerpos Anti-Tiroglobulina</li>
                        <li>Anti-CCP (Artritis)</li>
                        <li>Complemento C3 y C4</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pruebas-inmuno-card">
                    <h5><i class="fas fa-lungs me-2"></i>Pruebas de Alergia</h5>
                    <ul>
                        <li>IgE Total</li>
                        <li>IgE Específica por Alimento</li>
                        <li>Panel de Alergenos Respiratorios</li>
                        <li>Panel de Alergenos Alimentarios</li>
                        <li>Pruebas Cutáneas (Prick Test)</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pruebas-inmuno-card">
                    <h5><i class="fas fa-baby me-2"></i>Perfil TORCH</h5>
                    <ul>
                        <li>Toxoplasma</li>
                        <li>Rubéola</li>
                        <li>Citomegalovirus</li>
                        <li>Herpes Simple</li>
                        <li>Evaluación Prenatal</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pruebas-inmuno-card">
                    <h5><i class="fas fa-syringe me-2"></i>Respuesta Vacunal</h5>
                    <ul>
                        <li>Anticuerpos Anti-Hepatitis B</li>
                        <li>Anticuerpos Anti-Rubéola</li>
                        <li>Anticuerpos Anti-Varicela</li>
                        <li>Títulos de Anticuerpos Post-Vacunación</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pruebas-inmuno-card">
                    <h5><i class="fas fa-vials me-2"></i>Inmunoglobulinas</h5>
                    <ul>
                        <li>IgA, IgG, IgM Totales</li>
                        <li>Subclases de IgG</li>
                        <li>Electroforesis de Proteínas</li>
                        <li>Inmunofijación</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Indicaciones Comunes -->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="indicaciones-box">
                    <h4><i class="fas fa-notes-medical me-2"></i>¿Cuándo Realizar Pruebas Inmunológicas?</h4>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="indicacion-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h6>Infecciones Recurrentes</h6>
                                    <p>Cuando hay infecciones frecuentes o difíciles de tratar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="indicacion-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h6>Síntomas de Alergia</h6>
                                    <p>Estornudos, picazón, urticaria, dificultad respiratoria</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="indicacion-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h6>Dolor Articular</h6>
                                    <p>Dolor, inflamación y rigidez articular persistente</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="indicacion-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h6>Control Prenatal</h6>
                                    <p>Detección de infecciones que afectan al feto</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="indicacion-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h6>Fatiga Crónica</h6>
                                    <p>Cansancio persistente sin causa aparente</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="indicacion-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h6>Evaluación Laboral</h6>
                                    <p>Verificación de estado inmune para ciertos trabajos</p>
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
        background: #2980b9;
    }

    .area-inmuno-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        text-align: center;
        height: 100%;
        transition: all 0.3s;
    }

    .area-inmuno-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(41, 128, 185, 0.2);
    }

    .area-inmuno-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .area-inmuno-icon i {
        font-size: 2.5rem;
        color: white;
    }

    .area-inmuno-card h4 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .area-inmuno-card p {
        color: #666;
        margin: 0;
    }

    .pruebas-inmuno-card {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        height: 100%;
        border-left: 4px solid #2980b9;
    }

    .pruebas-inmuno-card h5 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .pruebas-inmuno-card i {
        color: #2980b9;
    }

    .pruebas-inmuno-card ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .pruebas-inmuno-card ul li {
        padding: 8px 0;
        color: #555;
        border-bottom: 1px solid #f0f0f0;
        font-size: 0.95rem;
    }

    .pruebas-inmuno-card ul li:last-child {
        border-bottom: none;
    }

    .pruebas-inmuno-card ul li::before {
        content: "✓";
        color: #2980b9;
        font-weight: bold;
        margin-right: 10px;
    }

    .indicaciones-box {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        border-top: 5px solid #2980b9;
    }

    .indicaciones-box h4 {
        color: #1a2332;
        font-weight: 700;
        text-align: center;
    }

    .indicaciones-box i.fa-notes-medical {
        color: #2980b9;
    }

    .indicacion-item {
        display: flex;
        gap: 15px;
        align-items: flex-start;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .indicacion-item i {
        font-size: 1.5rem;
        color: #2980b9;
        flex-shrink: 0;
    }

    .indicacion-item h6 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .indicacion-item p {
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

        .indicaciones-box {
            padding: 25px;
        }
    }
</style>
@endsection