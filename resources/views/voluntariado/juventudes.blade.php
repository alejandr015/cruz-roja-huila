@extends('layouts.app')

@section('title', 'Juventud Cruz Roja - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-voluntariado" style="background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Servicio social Cruz Roja</h1>
        <p class="lead">Jóvenes comprometidos con la acción humanitaria</p>
    </div>
</section>

<!-- Contenido Principal -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <!-- ¿Qué es? -->
                <div class="info-section mb-5">
                    <h2 class="section-title-juv">¿Qué es la Juventud Cruz Roja?</h2>
                    <p class="lead-text">
                        La Juventud de la Cruz Roja es un programa diseñado para jóvenes entre 14 y 30 años que desean 
                        contribuir al bienestar de su comunidad a través de acciones humanitarias, proyectos sociales 
                        y desarrollo de habilidades para la vida.
                    </p>
                    <p>
                        Es un espacio de formación integral donde los jóvenes desarrollan valores humanitarios, 
                        liderazgo, trabajo en equipo y compromiso social. A través de diversas actividades, los 
                        voluntarios juveniles aprenden a ser agentes de cambio en sus comunidades.
                    </p>
                </div>

                <!-- Ejes de Acción -->
                <div class="info-section mb-5">
                    <h2 class="section-title-juv">Ejes de Acción</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="eje-card">
                                <div class="eje-icon" style="background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);">
                                    <i class="fas fa-dove"></i>
                                </div>
                                <h5>Construcción de Paz</h5>
                                <p>Promover la cultura de paz, prevención de violencia y resolución pacífica de conflictos.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="eje-card">
                                <div class="eje-icon" style="background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h5>Salud y Estilos de Vida</h5>
                                <p>Educación en salud, prevención de enfermedades y promoción de hábitos saludables.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="eje-card">
                                <div class="eje-icon" style="background: linear-gradient(135deg, #27ae60 0%, #229954 100%);">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <h5>Medio Ambiente</h5>
                                <p>Acciones de protección ambiental, educación ecológica y desarrollo sostenible.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="eje-card">
                                <div class="eje-icon" style="background: linear-gradient(135deg, #f39c12 0%, #d68910 100%);">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                                <h5>Inclusión Social</h5>
                                <p>Trabajo con comunidades vulnerables, promoción de derechos y equidad social.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actividades -->
                <div class="info-section mb-5">
                    <h2 class="section-title-juv">Actividades que Realizamos</h2>
                    <div class="actividades-list">
                        <div class="actividad-item">
                            <div class="actividad-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="actividad-content">
                                <h5>Campañas Comunitarias</h5>
                                <p>Jornadas de salud, campañas de donación de sangre, eventos educativos en barrios y colegios.</p>
                            </div>
                        </div>
                        <div class="actividad-item">
                            <div class="actividad-icon">
                                <i class="fas fa-running"></i>
                            </div>
                            <div class="actividad-content">
                                <h5>Recreación y Deporte</h5>
                                <p>Organización de torneos deportivos, campamentos y actividades recreativas con enfoque social.</p>
                            </div>
                        </div>
                        <div class="actividad-item">
                            <div class="actividad-icon">
                                <i class="fas fa-theater-masks"></i>
                            </div>
                            <div class="actividad-content">
                                <h5>Arte y Cultura</h5>
                                <p>Expresión artística, teatro social, murales comunitarios y actividades culturales.</p>
                            </div>
                        </div>
                        <div class="actividad-item">
                            <div class="actividad-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="actividad-content">
                                <h5>Educación y Capacitación</h5>
                                <p>Talleres de liderazgo, primeros auxilios, derechos humanos y habilidades para la vida.</p>
                            </div>
                        </div>
                        <div class="actividad-item">
                            <div class="actividad-icon">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <div class="actividad-content">
                                <h5>Proyectos Ambientales</h5>
                                <p>Jornadas de limpieza, siembra de árboles, campañas de reciclaje y educación ambiental.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Requisitos -->
                <div class="info-section mb-5">
                    <h2 class="section-title-juv">¿Quién puede participar?</h2>
                    <ul class="requisitos-list">
                        <li><i class="fas fa-check-circle"></i> Jóvenes entre 14 y 30 años</li>
                        <li><i class="fas fa-check-circle"></i> Deseo genuino de ayudar a la comunidad</li>
                        <li><i class="fas fa-check-circle"></i> Disponibilidad para actividades semanales o quincenales</li>
                        <li><i class="fas fa-check-circle"></i> Compromiso con los valores humanitarios</li>
                        <li><i class="fas fa-check-circle"></i> Actitud positiva y trabajo en equipo</li>
                        <li><i class="fas fa-check-circle"></i> No se requiere experiencia previa</li>
                    </ul>
                </div>

                <!-- Beneficios -->
                <div class="info-section mb-5">
                    <h2 class="section-title-juv">¿Qué ganarás?</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="beneficio-card">
                                <i class="fas fa-lightbulb"></i>
                                <h5>Desarrollo Personal</h5>
                                <p>Fortalecimiento de habilidades de liderazgo, comunicación y resolución de problemas.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="beneficio-card">
                                <i class="fas fa-user-friends"></i>
                                <h5>Nuevas Amistades</h5>
                                <p>Conocerás jóvenes con tus mismos intereses y valores en todo el departamento.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="beneficio-card">
                                <i class="fas fa-certificate"></i>
                                <h5>Certificaciones</h5>
                                <p>Reconocimiento oficial de tu labor voluntaria y capacitaciones recibidas.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="beneficio-card">
                                <i class="fas fa-globe-americas"></i>
                                <h5>Experiencias Internacionales</h5>
                                <p>Posibilidad de participar en encuentros nacionales e internacionales de juventud.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="beneficio-card">
                                <i class="fas fa-briefcase"></i>
                                <h5>Experiencia Valiosa</h5>
                                <p>Desarrolla tu currículum con experiencia en voluntariado y proyectos sociales.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="beneficio-card">
                                <i class="fas fa-smile"></i>
                                <h5>Satisfacción Personal</h5>
                                <p>La alegría de contribuir al bienestar de tu comunidad y transformar vidas.</p>
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
    .page-header-voluntariado {
        padding: 80px 0;
    }

    .section-title-juv {
        color: #1a2332;
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title-juv::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background: #3498db;
    }

    .lead-text {
        font-size: 1.2rem;
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .info-section p {
        color: #666;
        line-height: 1.8;
        font-size: 1.05rem;
    }

    /* Ejes Cards */
    .eje-card {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        transition: all 0.3s;
        height: 100%;
        text-align: center;
    }

    .eje-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    }

    .eje-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .eje-icon i {
        font-size: 2rem;
        color: white;
    }

    .eje-card h5 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .eje-card p {
        color: #666;
        margin: 0;
        font-size: 0.95rem;
    }

    /* Actividades */
    .actividades-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .actividad-item {
        display: flex;
        gap: 20px;
        padding: 25px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        transition: all 0.3s;
    }

    .actividad-item:hover {
        transform: translateX(10px);
        box-shadow: 0 5px 20px rgba(52, 152, 219, 0.2);
    }

    .actividad-icon {
        flex-shrink: 0;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .actividad-icon i {
        font-size: 1.5rem;
        color: white;
    }

    .actividad-content h5 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .actividad-content p {
        color: #666;
        margin: 0;
        font-size: 0.95rem;
    }

    /* Requisitos */
    .requisitos-list {
        list-style: none;
        padding: 0;
    }

    .requisitos-list li {
        padding: 12px 0;
        font-size: 1.05rem;
        color: #555;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .requisitos-list i {
        color: #3498db;
        font-size: 1.3rem;
    }

    /* Beneficios */
    .beneficio-card {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        transition: all 0.3s;
        height: 100%;
        text-align: center;
    }

    .beneficio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(52, 152, 219, 0.15);
    }

    .beneficio-card i {
        font-size: 3rem;
        color: #3498db;
        margin-bottom: 15px;
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

    @media (max-width: 768px) {
        .page-header-voluntariado {
            padding: 60px 0;
        }

        .actividad-item {
            flex-direction: column;
            text-align: center;
        }
    }
</style>
@endsection