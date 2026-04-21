@extends('layouts.app')

@section('title', 'Habeas Data - Cruz Roja Huila')

@section('content')

<!-- Banner Habeas Data Premium -->
<section class="legal-hero" style="background: linear-gradient(135deg, var(--azul-institucional) 0%, #0a0f18 100%); padding: 120px 0 80px; color: white; border-radius: 0 0 50px 50px;">
    <div class="container text-center">
        <div class="animate-fade-up">
            <span class="badge bg-danger mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.8rem; letter-spacing: 2px;">PROTECCIÓN LEGAL</span>
            <h1 class="display-4 fw-bold">Habeas <span class="text-danger">Data</span></h1>
            <p class="lead opacity-75 mx-auto" style="max-width: 700px;">Política de tratamiento y protección de datos personales de la Cruz Roja Colombiana Seccional Huila.</p>
        </div>
    </div>
</section>

<div class="container my-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            
            <div class="card border-0 shadow-lg legal-document" style="border-radius: 25px; margin-top: -40px; overflow: hidden;">
                <div class="card-header bg-white p-4 border-light d-flex justify-content-between align-items-center">
                    <span class="text-muted"><i class="fas fa-balance-scale me-2 text-danger"></i> Marco Normativo</span>
                    <span class="badge bg-light text-dark border"><i class="far fa-calendar-alt me-2"></i>Actualizado: Abr 2026</span>
                </div>
                <div class="card-body p-4 p-md-5">
                    
                    <div class="alert alert-danger rounded-4 border-0 p-4 mb-5 shadow-sm d-flex align-items-center">
                        <i class="fas fa-lock fs-3 me-3"></i>
                        <div>
                            <strong>Cumplimiento de Ley:</strong> Esta política se rige bajo la Ley 1581 de 2012 y el Decreto 1377 de 2013 del Estado Colombiano.
                        </div>
                    </div>

                    <!-- Contenido -->
                    <article class="legal-content">
                        <section id="derecho" class="mb-5">
                            <h3 class="fw-bold mb-4">1. El Derecho de Habeas Data</h3>
                            <p>El Habeas Data es el derecho constitucional que tienen todas las personas a conocer, actualizar y rectificar las informaciones que se hayan recogido sobre ellas en bancos de datos, y los demás derechos, libertades y garantías constitucionales a que se refiere el <strong>Artículo 15 de la Constitución Política</strong>.</p>
                        </section>

                        <section id="principios" class="mb-5">
                            <h3 class="fw-bold mb-4">2. Principios del Tratamiento</h3>
                            <div class="row g-4 mt-2">
                                <div class="col-md-4">
                                    <div class="card border-0 bg-light p-3 rounded-4 h-100 text-center shadow-sm">
                                        <i class="fas fa-legal fs-3 text-danger mb-2"></i>
                                        <h6 class="fw-bold mb-0">Legalidad</h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-0 bg-light p-3 rounded-4 h-100 text-center shadow-sm">
                                        <i class="fas fa-bullseye fs-3 text-danger mb-2"></i>
                                        <h6 class="fw-bold mb-0">Finalidad</h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-0 bg-light p-3 rounded-4 h-100 text-center shadow-sm">
                                        <i class="fas fa-unlock-alt fs-3 text-danger mb-2"></i>
                                        <h6 class="fw-bold mb-0">Transparencia</h6>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="canales" class="mb-5">
                            <h3 class="fw-bold mb-4">3. Canales de Reclamación</h3>
                            <p>Usted puede ejercer sus derechos enviando una comunicación escrita con el asunto "Habeas Data" a:</p>
                            <div class="list-group list-group-flush border rounded-4 overflow-hidden mt-3 shadow-sm">
                                <div class="list-group-item p-3 d-flex align-items-center">
                                    <i class="fas fa-envelope-open-text text-danger me-4 fs-4"></i>
                                    <div>
                                        <strong>Correo Electrónico Oficial</strong><br>
                                        <span class="text-muted">info@cruzrojahuila.org</span>
                                    </div>
                                </div>
                                <div class="list-group-item p-3 d-flex align-items-center">
                                    <i class="fas fa-map-marked-alt text-danger me-4 fs-4"></i>
                                    <div>
                                        <strong>Oficina Correspondencia</strong><br>
                                        <span class="text-muted">Calle 26 &, Cra 5a - A, Neiva</span>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <hr class="my-5 opacity-25">

                        <div class="bg-light p-4 rounded-4 border-2 border-dashed text-center">
                            <h5 class="fw-bold text-danger mb-3">¿Necesita asistencia inmediata?</h5>
                            <p class="small mb-4 text-muted">Contamos con un equipo especializado en protección de datos para resolver sus dudas.</p>
                            <a href="{{ route('contacto') }}" class="btn btn-danger rounded-pill px-5 fw-bold">Escríbanos Aquí</a>
                        </div>

                    </article>

                </div>
                <div class="card-footer bg-light p-4 text-center">
                    <p class="mb-0 text-muted small">© 2026 Cruz Roja Colombiana Seccional Huila - Política de Tratamiento de Información.</p>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    .legal-hero {
        margin-top: -40px;
    }

    .legal-content p {
        line-height: 1.8;
        color: #444;
        text-align: justify;
    }

    .legal-content h3 {
        color: var(--azul-institucional);
        position: relative;
        display: inline-block;
    }

    .legal-content h3::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 40px;
        height: 3px;
        background: var(--cruz-roja);
    }
</style>
@endsection