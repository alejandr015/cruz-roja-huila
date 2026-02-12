@extends('layouts.app')

@section('title', 'Oferta Educativa - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-educacion" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Oferta Educativa</h1>
        <p class="lead">Formación de calidad para salvar vidas y servir a la comunidad</p>
    </div>
</section>

<!-- Programas Educativos -->
<section class="py-5">
    <div class="container">
        
        <div class="text-center mb-5">
            <h2 class="section-title-edu">Nuestros Programas</h2>
            <p class="lead text-muted">Elige el programa que mejor se adapte a tus necesidades</p>
        </div>

        <div class="row g-4">
            
            <!-- Técnicos Laborales -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('educacion.tecnicos-laborales') }}" class="programa-card">
                    <div class="programa-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Técnicos Laborales</h3>
                    <p>Programas técnicos certificados en áreas de salud y emergencias. Formación integral para profesionales.</p>
                    <div class="programa-badge">
                        <span><i class="fas fa-clock me-2"></i>6-12 meses</span>
                    </div>
                    <div class="programa-footer">
                        Ver programa <i class="fas fa-arrow-right ms-2"></i>
                    </div>
                </a>
            </div>

            <!-- Diplomados -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('educacion.diplomados') }}" class="programa-card">
                    <div class="programa-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Diplomados</h3>
                    <p>Especializaciones de alto nivel en áreas específicas de atención prehospitalaria y gestión de emergencias.</p>
                    <div class="programa-badge">
                        <span><i class="fas fa-clock me-2"></i>3-6 meses</span>
                    </div>
                    <div class="programa-footer">
                        Ver programa <i class="fas fa-arrow-right ms-2"></i>
                    </div>
                </a>
            </div>

            <!-- Cursos -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('educacion.cursos') }}" class="programa-card">
                    <div class="programa-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Cursos</h3>
                    <p>Cursos cortos en primeros auxilios, RCP, manejo de extintores y más. Ideal para personas y empresas.</p>
                    <div class="programa-badge">
                        <span><i class="fas fa-clock me-2"></i>1-3 días</span>
                    </div>
                    <div class="programa-footer">
                        Ver programa <i class="fas fa-arrow-right ms-2"></i>
                    </div>
                </a>
            </div>

            <!-- Capacitaciones Empresariales -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('educacion.capacitaciones-empresariales') }}" class="programa-card">
                    <div class="programa-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Capacitaciones Empresariales</h3>
                    <p>Programas personalizados para empresas en seguridad y salud en el trabajo, brigadas de emergencia.</p>
                    <div class="programa-badge">
                        <span><i class="fas fa-users me-2"></i>Grupos</span>
                    </div>
                    <div class="programa-footer">
                        Ver programa <i class="fas fa-arrow-right ms-2"></i>
                    </div>
                </a>
            </div>

            <!-- Educación Virtual -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('educacion.educacion-virtual') }}" class="programa-card">
                    <div class="programa-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>Educación Virtual</h3>
                    <p>Cursos y talleres 100% en línea. Aprende desde casa a tu propio ritmo con certificación oficial.</p>
                    <div class="programa-badge">
                        <span><i class="fas fa-wifi me-2"></i>Online</span>
                    </div>
                    <div class="programa-footer">
                        Ver programa <i class="fas fa-arrow-right ms-2"></i>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Por qué estudiar con nosotros -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title-edu mb-5">¿Por qué estudiar con nosotros?</h2>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="beneficio-card">
                    <div class="beneficio-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h5>Certificación Oficial</h5>
                    <p>Certificados avalados por la Cruz Roja Colombiana</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="beneficio-card">
                    <div class="beneficio-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h5>Instructores Expertos</h5>
                    <p>Profesionales con experiencia en campo</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="beneficio-card">
                    <div class="beneficio-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h5>Práctica Real</h5>
                    <p>Entrenamiento con casos y simulaciones reales</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="beneficio-card">
                    <div class="beneficio-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h5>Horarios Flexibles</h5>
                    <p>Opciones presenciales y virtuales</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Llamado a la acción -->
<section class="py-5 cta-section">
    <div class="container text-center text-white">
        <h2 class="mb-4 fw-bold">¿Listo para comenzar tu formación?</h2>
        <p class="lead mb-4">Contáctanos para más información sobre nuestros programas educativos</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ route('contacto') }}" class="btn btn-light btn-lg">
                <i class="fas fa-phone me-2"></i>Contáctanos
            </a>
            <a href="#" class="btn btn-outline-light btn-lg">
                <i class="fas fa-download me-2"></i>Descargar Brochure
            </a>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    .page-header-educacion {
        background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);
        padding: 80px 0;
    }

    .section-title-edu {
        color: #1a2332;
        font-weight: 700;
        font-size: 2.5rem;
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 20px;
    }

    .section-title-edu::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #ED1C24;
    }

    /* Tarjetas de Programas */
    .programa-card {
        display: block;
        background: white;
        border-radius: 20px;
        padding: 35px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        transition: all 0.3s;
        text-decoration: none;
        color: inherit;
        height: 100%;
        border: 2px solid transparent;
        position: relative;
        overflow: hidden;
    }

    .programa-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        transform: scaleX(0);
        transition: transform 0.3s;
    }

    .programa-card:hover::before {
        transform: scaleX(1);
    }

    .programa-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(237, 28, 36, 0.2);
        border-color: #ED1C24;
    }

    .programa-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        transition: all 0.3s;
    }

    .programa-card:hover .programa-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .programa-icon i {
        font-size: 2.5rem;
        color: white;
    }

    .programa-card h3 {
        color: #1a2332;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        text-align: center;
    }

    .programa-card p {
        color: #666;
        text-align: center;
        line-height: 1.6;
        margin-bottom: 20px;
        min-height: 80px;
    }

    .programa-badge {
        text-align: center;
        margin-bottom: 20px;
    }

    .programa-badge span {
        display: inline-block;
        background: #f8f9fa;
        color: #ED1C24;
        padding: 8px 20px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
    }

    .programa-footer {
        text-align: center;
        color: #ED1C24;
        font-weight: 600;
        padding-top: 20px;
        border-top: 2px solid #f0f0f0;
    }

    .programa-card:hover .programa-footer {
        color: #C41419;
    }

    /* Beneficios */
    .beneficio-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        transition: all 0.3s;
        height: 100%;
    }

    .beneficio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    }

    .beneficio-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .beneficio-icon i {
        font-size: 2rem;
        color: white;
    }

    .beneficio-card h5 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .beneficio-card p {
        color: #666;
        margin: 0;
        font-size: 0.95rem;
    }

    /* CTA Section */
    .cta-section {
        background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
    }

    .btn-outline-light {
        border: 2px solid white;
    }

    .btn-outline-light:hover {
        background: white;
        color: #ED1C24;
    }

    @media (max-width: 768px) {
        .section-title-edu {
            font-size: 2rem;
        }

        .programa-card p {
            min-height: auto;
        }

        .page-header-educacion {
            padding: 60px 0;
        }
    }
</style>
@endsection