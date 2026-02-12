@extends('layouts.app')

@section('title', 'Damas Grises - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-voluntariado" style="background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Damas Grises</h1>
        <p class="lead">Mujeres voluntarias al servicio de la comunidad</p>
    </div>
</section>

<!-- Contenido Principal -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <!-- ¿Qué es? -->
                <div class="info-section mb-5">
                    <h2 class="section-title-damas">¿Quiénes son las Damas Grises?</h2>
                    <p class="lead-text">
                        Las Damas Grises son un grupo de mujeres voluntarias de la Cruz Roja comprometidas con el 
                        servicio social y humanitario. Su nombre proviene del uniforme gris que tradicionalmente 
                        han utilizado, simbolizando la neutralidad y el compromiso con la ayuda humanitaria.
                    </p>
                    <p>
                        Este programa está diseñado para mujeres adultas que desean dedicar su tiempo y talentos 
                        al servicio de personas en situación de vulnerabilidad, hospitales, asilos, comunidades 
                        necesitadas y diversas causas sociales.
                    </p>
                </div>

                <!-- Historia -->
                <div class="info-section mb-5">
                    <div class="historia-box">
                        <h3><i class="fas fa-book-open me-2"></i>Nuestra Historia</h3>
                        <p>
                            El movimiento de Damas Grises nació en 1918 durante la Primera Guerra Mundial, cuando 
                            mujeres voluntarias comenzaron a apoyar en hospitales militares. En Colombia, esta tradición 
                            continúa con mujeres que dedican su tiempo a mejorar la calidad de vida de quienes más lo necesitan.
                        </p>
                        <p class="mb-0">
                            En el Huila, las Damas Grises han sido pilares fundamentales en la atención de comunidades 
                            vulnerables, apoyo a hospitales y desarrollo de programas sociales que impactan positivamente 
                            a miles de familias.
                        </p>
                    </div>
                </div>

                <!-- Áreas de Trabajo -->
                <div class="info-section mb-5">
                    <h2 class="section-title-damas">Áreas de Trabajo</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="area-card">
                                <div class="area-icon">
                                    <i class="fas fa-hospital"></i>
                                </div>
                                <h5>Apoyo Hospitalario</h5>
                                <p>Acompañamiento a pacientes, apoyo emocional y asistencia en hospitales y centros de salud.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="area-card">
                                <div class="area-icon">
                                    <i class="fas fa-home-heart"></i>
                                </div>
                                <h5>Visitas Domiciliarias</h5>
                                <p>Atención a adultos mayores, personas con discapacidad y familias en situación vulnerable.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="area-card">
                                <div class="area-icon">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                                <h5>Programas Sociales</h5>
                                <p>Organización de actividades recreativas, culturales y educativas para la comunidad.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="area-card">
                                <div class="area-icon">
                                    <i class="fas fa-hand-holding-heart"></i>
                                </div>
                                <h5>Apoyo Emocional</h5>
                                <p>Escucha activa, compañía y apoyo psicosocial a personas en momentos difíciles.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="area-card">
                                <div class="area-icon">
                                    <i class="fas fa-gift"></i>
                                </div>
                                <h5>Campañas de Recaudación</h5>
                                <p>Organización de eventos benéficos y campañas para apoyar proyectos sociales.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="area-card">
                                <div class="area-icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <h5>Educación Comunitaria</h5>
                                <p>Talleres de salud, prevención y promoción de estilos de vida saludables.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actividades -->
                <div class="info-section mb-5">
                    <h2 class="section-title-damas">Actividades que Realizamos</h2>
                    <div class="actividades-grid">
                        <div class="actividad-box">
                            <i class="fas fa-birthday-cake"></i>
                            <h5>Celebraciones Especiales</h5>
                            <p>Organización de cumpleaños y fechas especiales para adultos mayores en asilos.</p>
                        </div>
                        <div class="actividad-box">
                            <i class="fas fa-tshirt"></i>
                            <h5>Donación de Ropa y Alimentos</h5>
                            <p>Recolección y distribución de ropa, alimentos y artículos de primera necesidad.</p>
                        </div>
                        <div class="actividad-box">
                            <i class="fas fa-music"></i>
                            <h5>Actividades Recreativas</h5>
                            <p>Música, manualidades, lectura y juegos para entretener y alegrar a los pacientes.</p>
                        </div>
                        <div class="actividad-box">
                            <i class="fas fa-clinic-medical"></i>
                            <h5>Jornadas de Salud</h5>
                            <p>Apoyo logístico en brigadas médicas, toma de signos vitales y orientación.</p>
                        </div>
                        <div class="actividad-box">
                            <i class="fas fa-comments"></i>
                            <h5>Grupos de Apoyo</h5>
                            <p>Facilitación de grupos para personas con enfermedades crónicas o cuidadores.</p>
                        </div>
                        <div class="actividad-box">
                            <i class="fas fa-heart"></i>
                            <h5>Acompañamiento Espiritual</h5>
                            <p>Apoyo emocional y espiritual respetando las creencias de cada persona.</p>
                        </div>
                    </div>
                </div>

                <!-- Requisitos -->
                <div class="info-section mb-5">
                    <h2 class="section-title-damas">Requisitos para ser Dama Gris</h2>
                    <ul class="requisitos-list">
                        <li><i class="fas fa-check-circle"></i> Ser mujer mayor de 18 años</li>
                        <li><i class="fas fa-check-circle"></i> Tener vocación de servicio y sensibilidad social</li>
                        <li><i class="fas fa-check-circle"></i> Disponibilidad de tiempo para actividades voluntarias</li>
                        <li><i class="fas fa-check-circle"></i> Compromiso y responsabilidad con las actividades asignadas</li>
                        <li><i class="fas fa-check-circle"></i> Empatía y capacidad para trabajar con personas vulnerables</li>
                        <li><i class="fas fa-check-circle"></i> Completar el proceso de inducción y formación</li>
                        <li><i class="fas fa-check-circle"></i> Adherirse a los principios y valores de la Cruz Roja</li>
                    </ul>
                </div>

                <!-- Beneficios -->
                <div class="info-section mb-5">
                    <h2 class="section-title-damas">Beneficios de ser Dama Gris</h2>
                    <div class="beneficios-container">
                        <div class="beneficio-item-damas">
                            <i class="fas fa-heart text-secondary"></i>
                            <div>
                                <h6>Realización Personal</h6>
                                <p>Satisfacción de contribuir al bienestar de personas necesitadas.</p>
                            </div>
                        </div>
                        <div class="beneficio-item-damas">
                            <i class="fas fa-users text-secondary"></i>
                            <div>
                                <h6>Comunidad de Apoyo</h6>
                                <p>Formar parte de un grupo de mujeres con valores compartidos.</p>
                            </div>
                        </div>
                        <div class="beneficio-item-damas">
                            <i class="fas fa-brain text-secondary"></i>
                            <div>
                                <h6>Desarrollo de Habilidades</h6>
                                <p>Capacitación en primeros auxilios, apoyo psicosocial y más.</p>
                            </div>
                        </div>
                        <div class="beneficio-item-damas">
                            <i class="fas fa-award text-secondary"></i>
                            <div>
                                <h6>Reconocimiento Social</h6>
                                <p>Certificados y reconocimiento por tu labor voluntaria.</p>
                            </div>
                        </div>
                        <div class="beneficio-item-damas">
                            <i class="fas fa-smile text-secondary"></i>
                            <div>
                                <h6>Bienestar Emocional</h6>
                                <p>El voluntariado mejora la salud mental y emocional.</p>
                            </div>
                        </div>
                        <div class="beneficio-item-damas">
                            <i class="fas fa-hand-holding-heart text-secondary"></i>
                            <div>
                                <h6>Impacto Social</h6>
                                <p>Marca una diferencia real en la vida de las personas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonios -->
                <div class="info-section mb-5">
                    <h2 class="section-title-damas">Testimonios</h2>
                    <div class="testimonios-container">
                        <div class="testimonio-card">
                            <p class="testimonio-text">
                                "Ser Dama Gris me ha dado un propósito. Ver la sonrisa de los abuelitos cuando 
                                los visitamos no tiene precio. Es la mejor decisión que he tomado."
                            </p>
                            <p class="testimonio-autor">- María Elena, Dama Gris desde 2018</p>
                        </div>
                        <div class="testimonio-card">
                            <p class="testimonio-text">
                                "El voluntariado me ha enseñado a valorar lo que tengo y a ser más humana. 
                                Las Damas Grises somos una familia que trabaja por los demás."
                            </p>
                            <p class="testimonio-autor">- Carmen Rosa, Dama Gris desde 2020</p>
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

    .section-title-damas {
        color: #1a2332;
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title-damas::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background: #7f8c8d;
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

    /* Historia Box */
    .historia-box {
        background: linear-gradient(135deg, #ecf0f1 0%, #d5dbdb 100%);
        padding: 35px;
        border-radius: 15px;
        border-left: 5px solid #7f8c8d;
    }

    .historia-box h3 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .historia-box p {
        margin-bottom: 15px;
    }

    /* Áreas Cards */
    .area-card {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        transition: all 0.3s;
        height: 100%;
        text-align: center;
    }

    .area-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(127, 140, 141, 0.15);
    }

    .area-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .area-icon i {
        font-size: 2rem;
        color: white;
    }

    .area-card h5 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .area-card p {
        color: #666;
        margin: 0;
        font-size: 0.95rem;
    }

    /* Actividades Grid */
    .actividades-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .actividad-box {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        text-align: center;
        transition: all 0.3s;
    }

    .actividad-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    }

    .actividad-box i {
        font-size: 2.5rem;
        color: #7f8c8d;
        margin-bottom: 15px;
    }

    .actividad-box h5 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 10px;
        font-size: 1.1rem;
    }

    .actividad-box p {
        color: #666;
        margin: 0;
        font-size: 0.9rem;
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
        color: #7f8c8d;
        font-size: 1.3rem;
    }

    /* Beneficios */
    .beneficios-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .beneficio-item-damas {
        display: flex;
        gap: 20px;
        padding: 25px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        align-items: flex-start;
    }

    .beneficio-item-damas i {
        font-size: 2.5rem;
        flex-shrink: 0;
    }

    .beneficio-item-damas h6 {
        color: #1a2332;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .beneficio-item-damas p {
        color: #666;
        margin: 0;
        font-size: 0.95rem;
    }

    /* Testimonios */
    .testimonios-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }

    .testimonio-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        border-left: 5px solid #7f8c8d;
    }

    .testimonio-text {
        font-style: italic;
        color: #555;
        line-height: 1.8;
        margin-bottom: 15px;
    }

    .testimonio-autor {
        color: #7f8c8d;
        font-weight: 700;
        margin: 0;
    }

    @media (max-width: 768px) {
        .page-header-voluntariado {
            padding: 60px 0;
        }

        .actividades-grid {
            grid-template-columns: 1fr;
        }

        .beneficios-container {
            grid-template-columns: 1fr;
        }

        .testimonios-container {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection