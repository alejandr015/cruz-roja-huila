@extends('layouts.app')

@section('title', 'Política de Privacidad - Cruz Roja Huila')

@section('content')

<!-- Banner Privacidad Premium -->
<section class="legal-hero" style="background: linear-gradient(135deg, var(--azul-institucional) 0%, #0a0f18 100%); padding: 120px 0 80px; color: white; border-radius: 0 0 50px 50px;">
    <div class="container text-center">
        <div class="animate-fade-up">
            <span class="badge bg-danger mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.8rem; letter-spacing: 2px;">SEGURIDAD DE INFORMACIÓN</span>
            <h1 class="display-4 fw-bold">Política de <span class="text-danger">Privacidad</span></h1>
            <p class="lead opacity-75 mx-auto" style="max-width: 700px;">Garantizamos la transparencia y seguridad en el tratamiento de sus datos personales conforme a la ley colombiana.</p>
        </div>
    </div>
</section>

<div class="container my-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            
            <div class="card border-0 shadow-lg legal-document" style="border-radius: 25px; margin-top: -40px; overflow: hidden;">
                <div class="card-header bg-white p-4 border-light d-flex justify-content-between align-items-center">
                    <span class="text-muted"><i class="fas fa-user-shield me-2 text-danger"></i> Privacidad de Datos</span>
                    <span class="badge bg-light text-dark border"><i class="far fa-calendar-alt me-2"></i>Actualizado: Abr 2026</span>
                </div>
                <div class="card-body p-4 p-md-5">
                    
                    <div class="alert alert-info rounded-4 border-0 p-4 mb-5 shadow-sm d-flex align-items-center">
                        <i class="fas fa-info-circle fs-3 me-3 text-info"></i>
                        <div>
                            <strong>Compromiso Institucional:</strong> Su privacidad es una prioridad. Tratamos sus datos con los más altos estándares de seguridad y ética institucional.
                        </div>
                    </div>

                    <!-- Contenido -->
                    <article class="legal-content">
                        <section id="responsable" class="mb-5">
                            <h3 class="fw-bold mb-4">1. Responsable del Tratamiento</h3>
                            <div class="p-4 rounded-4 bg-light shadow-sm border mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-building text-danger me-2"></i> <strong>Entidad:</strong> Cruz Roja Colombiana Seccional Huila</li>
                                    <li class="mb-2"><i class="fas fa-map-marker-alt text-danger me-2"></i> <strong>Sede:</strong> Calle 26 &, Cra 5a - A, Neiva</li>
                                    <li class="mb-2"><i class="fas fa-envelope text-danger me-2"></i> <strong>Email:</strong> info@cruzrojahuila.org</li>
                                    <li><i class="fab fa-whatsapp text-danger me-2"></i> <strong>WhatsApp:</strong> +57 317 297 1272</li>
                                </ul>
                            </div>
                        </section>

                        <section id="recoleccion" class="mb-5">
                            <h3 class="fw-bold mb-4">2. Información que Recopilamos</h3>
                            <p>Recopilamos información necesaria para la prestación de nuestros servicios humanitarios, de salud y educativos:</p>
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 bg-light p-3 rounded-4 shadow-sm">
                                        <h6 class="fw-bold"><i class="fas fa-user-edit text-danger me-2"></i> Datos Directos</h6>
                                        <p class="small text-muted mb-0">Nombres, identificación, contacto y datos académicos para inscripciones.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 bg-light p-3 rounded-4 shadow-sm">
                                        <h6 class="fw-bold"><i class="fas fa-laptop text-danger me-2"></i> Datos Digitales</h6>
                                        <p class="small text-muted mb-0">Cookies, dirección IP y patrones de navegación para mejorar su experiencia.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="finalidad" class="mb-5">
                            <h3 class="fw-bold mb-4">3. Finalidad del Tratamiento</h3>
                            <p>Sus datos son utilizados exclusivamente para:</p>
                            <ul class="list-group list-group-flush rounded-4 overflow-hidden border shadow-sm">
                                <li class="list-group-item p-3"><i class="fas fa-check text-success me-3"></i>Gestión de cursos y capacitaciones.</li>
                                <li class="list-group-item p-3"><i class="fas fa-check text-success me-3"></i>Registro y coordinación de voluntarios.</li>
                                <li class="list-group-item p-3"><i class="fas fa-check text-success me-3"></i>Prestación de servicios de salud.</li>
                                <li class="list-group-item p-3"><i class="fas fa-check text-success me-3"></i>Comunicaciones de impacto humanitario.</li>
                            </ul>
                        </section>

                        <section id="derechos" class="mb-5">
                            <h3 class="fw-bold mb-4">4. Sus Derechos</h3>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3 text-center">
                                    <div class="p-3 bg-white border rounded-4 shadow-sm h-100">
                                        <i class="fas fa-eye fs-2 text-danger mb-3"></i>
                                        <h6 class="fw-bold mb-0">Conocer</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 text-center">
                                    <div class="p-3 bg-white border rounded-4 shadow-sm h-100">
                                        <i class="fas fa-sync fs-2 text-danger mb-3"></i>
                                        <h6 class="fw-bold mb-0">Actualizar</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 text-center">
                                    <div class="p-3 bg-white border rounded-4 shadow-sm h-100">
                                        <i class="fas fa-eraser fs-2 text-danger mb-3"></i>
                                        <h6 class="fw-bold mb-0">Suprimir</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 text-center">
                                    <div class="p-3 bg-white border rounded-4 shadow-sm h-100">
                                        <i class="fas fa-shield-alt fs-2 text-danger mb-3"></i>
                                        <h6 class="fw-bold mb-0">Sertificar</h6>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <hr class="my-5 opacity-25">

                        <div class="text-center">
                            <p class="text-muted small">Para ejercer sus derechos, escríbanos a:</p>
                            <a href="mailto:info@cruzrojahuila.org" class="btn btn-outline-danger rounded-pill px-4 fw-bold">info@cruzrojahuila.org</a>
                        </div>

                    </article>

                </div>
                <div class="card-footer bg-light p-4 text-center">
                    <p class="mb-0 text-muted small">Esta política cumple con la Ley 1581 de 2012 de Protección de Datos Personales.</p>
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