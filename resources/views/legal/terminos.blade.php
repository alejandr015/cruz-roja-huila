@extends('layouts.app')

@section('title', 'Términos y Condiciones - Cruz Roja Huila')

@section('content')

<!-- Banner Documental Premium -->
<section class="legal-hero" style="background: linear-gradient(135deg, var(--azul-institucional) 0%, #0a0f18 100%); padding: 120px 0 80px; color: white; border-radius: 0 0 50px 50px;">
    <div class="container text-center">
        <div class="animate-fade-up">
            <span class="badge bg-danger mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.8rem; letter-spacing: 2px;">DOCUMENTACIÓN LEGAL</span>
            <h1 class="display-4 fw-bold">Términos y <span class="text-danger">Condiciones</span></h1>
            <p class="lead opacity-75 mx-auto" style="max-width: 700px;">Marco normativo y condiciones de uso del portal web oficial de la Cruz Roja Colombiana Seccional Huila.</p>
        </div>
    </div>
</section>

<div class="container my-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            
            <div class="card border-0 shadow-lg legal-document" style="border-radius: 25px; margin-top: -40px; overflow: hidden;">
                <div class="card-header bg-white p-4 border-light d-flex justify-content-between align-items-center">
                    <span class="text-muted"><i class="fas fa-file-alt me-2 text-danger"></i> Versión 2.0</span>
                    <span class="badge bg-light text-dark border"><i class="far fa-calendar-alt me-2"></i>Actualizado: Abr 2026</span>
                </div>
                <div class="card-body p-4 p-md-5">
                    
                    <div class="toc-box bg-light rounded-4 p-4 mb-5 border-start border-danger border-4">
                        <h5 class="fw-bold mb-3"><i class="fas fa-list-ul me-2"></i> Tabla de Contenido</h5>
                        <div class="row row-cols-1 row-cols-md-2 g-2">
                            <a href="#introduccion" class="text-decoration-none text-dark small hover-red">1. Introducción</a>
                            <a href="#aceptacion" class="text-decoration-none text-dark small hover-red">2. Aceptación de los Términos</a>
                            <a href="#uso-web" class="text-decoration-none text-dark small hover-red">3. Uso del portal web</a>
                            <a href="#propiedad" class="text-decoration-none text-dark small hover-red">4. Propiedad Intelectual</a>
                            <a href="#datos" class="text-decoration-none text-dark small hover-red">5. Privacidad y Datos</a>
                            <a href="#contacto" class="text-decoration-none text-dark small hover-red">6. Soporte y Contacto</a>
                        </div>
                    </div>

                    <!-- Contenido -->
                    <article class="legal-content">
                        <section id="introduccion" class="mb-5">
                            <h3 class="fw-bold mb-4">1. Introducción</h3>
                            <p>Bienvenido al sitio web oficial de la <strong>Cruz Roja Colombiana Seccional Huila</strong>. Este portal está diseñado para proporcionar información institucional, servicios de salud, oferta educativa y canales de acción humanitaria. Al hacer uso de este sitio, usted garantiza que cuenta con la capacidad legal necesaria para aceptar estos términos.</p>
                        </section>

                        <section id="aceptacion" class="mb-5">
                            <h3 class="fw-bold mb-4">2. Aceptación de los Términos</h3>
                            <p>El acceso y navegación por este sitio web le atribuye la condición de usuario e implica la aceptación plena y sin reservas de todas y cada una de las disposiciones incluidas en este Aviso Legal, las cuales pueden sufrir modificaciones. La Cruz Roja Huila se reserva el derecho de actualizar, modificar o eliminar la información contenida en su página web sin previo aviso.</p>
                        </section>

                        <section id="uso-web" class="mb-5">
                            <h3 class="fw-bold mb-4">3. Uso del Portal Web</h3>
                            <p>El usuario se compromete a usar el portal web de forma lícita y adecuada. Queda expresamente prohibido:</p>
                            <div class="row g-4 mt-2">
                                <div class="col-md-6">
                                    <div class="p-3 rounded-4 bg-light h-100 border">
                                        <h6 class="fw-bold text-danger"><i class="fas fa-ban me-2"></i> Usos Prohibidos</h6>
                                        <ul class="small mb-0 mt-2">
                                            <li>Alterar el funcionamiento técnico del portal.</li>
                                            <li>Interferir en el acceso de otros usuarios.</li>
                                            <li>Uso fraudulento de formularios de inscripción.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded-4 bg-light h-100 border">
                                        <h6 class="fw-bold text-success"><i class="fas fa-check-circle me-2"></i> Usos Permitidos</h6>
                                        <ul class="small mb-0 mt-2">
                                            <li>Inscripción en programas educativos.</li>
                                            <li>Consulta de servicios institucionales.</li>
                                            <li>Registro como voluntario.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="propiedad" class="mb-5">
                            <h3 class="fw-bold mb-4">4. Propiedad Intelectual</h3>
                            <p>Todos los nombres comerciales, logotipos, emblemas de la Cruz Roja y demás signos distintivos de cualquier clase que aparecen en el portal son propiedad de la Institución o de terceros, sin que pueda entenderse que el uso o acceso al portal web atribuya al usuario derecho alguno sobre ellos.</p>
                            <blockquote class="bg-danger-subtle p-4 rounded-4 border-start border-danger border-4 mt-4">
                                <p class="mb-0 italic small text-dark"><strong>Nota:</strong> El emblema de la Cruz Roja es un símbolo protegido internacionalmente por los Convenios de Ginebra. Su uso indebido está sancionado por la ley colombiana.</p>
                            </blockquote>
                        </section>

                        <hr class="my-5 opacity-25">

                        <div class="alert alert-warning rounded-4 border-0 p-4 shadow-sm">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-shield-alt fs-2 me-4 text-warning"></i>
                                <div>
                                    <h5 class="fw-bold mb-1">Protección Total</h5>
                                    <p class="mb-0 small text-dark opacity-75">Nuestras políticas de privacidad se alinean con la Ley 1581 de 2012 para garantizar la seguridad de su información.</p>
                                </div>
                            </div>
                        </div>

                    </article>

                </div>
                <div class="card-footer bg-light p-4 text-center">
                    <p class="mb-0 text-muted small">© 2026 Cruz Roja Colombiana Seccional Huila - Todos los derechos reservados.</p>
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

    .legal-document {
        transition: transform 0.3s;
    }

    .legal-content p {
        line-height: 1.8;
        color: #444;
        text-align: justify;
    }

    .hover-red:hover {
        color: var(--cruz-roja) !important;
        padding-left: 5px;
        transition: all 0.2s;
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

    @media (max-width: 768px) {
        .legal-hero {
            padding: 80px 0 60px;
        }
    }
</style>
@endsection