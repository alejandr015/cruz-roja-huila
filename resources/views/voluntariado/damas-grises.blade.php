@extends('layouts.app')

@section('title', 'Damas Grises - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<style>
    .damas-header-bg {
        background: linear-gradient(135deg, #7f8c8d 0%, #bdc3c7 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    /* Soft glowing orbs in the background (Aurora / Ambient Light) */
    .damas-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(50px);
        opacity: 0.6;
        animation: floatAurora 20s ease-in-out infinite alternate;
        z-index: 0;
    }

    .aurora-1 {
        width: 40vh; height: 40vh;
        background: #ecf0f1;
        top: -10vh; left: -10vw;
        animation-duration: 25s;
    }
    .aurora-2 {
        width: 50vh; height: 50vh;
        background: #ffffff;
        bottom: -20vh; right: -10vw;
        animation-duration: 30s;
        animation-direction: alternate-reverse;
    }
    .aurora-3 {
        width: 30vh; height: 30vh;
        background: #e0e0e0;
        top: 30%; left: 40%;
        animation-duration: 22s;
    }

    @keyframes floatAurora {
        0% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(60px, 40px) scale(1.1); }
        100% { transform: translate(-40px, -60px) scale(0.9); }
    }

    /* Gentle falling light dust */
    .damas-dust {
        position: absolute;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        animation: fallDust linear infinite;
        z-index: 1;
    }

    @keyframes fallDust {
        0% { transform: translateY(-50px) translateX(0); opacity: 0; }
        20% { opacity: 1; }
        80% { opacity: 1; }
        100% { transform: translateY(400px) translateX(60px); opacity: 0; }
    }

    .dst-1 { left: 15%; width: 3px; height: 3px; animation-duration: 9s; animation-delay: 1s; }
    .dst-2 { left: 35%; width: 4px; height: 4px; animation-duration: 14s; animation-delay: 4s; }
    .dst-3 { left: 55%; width: 2px; height: 2px; animation-duration: 11s; animation-delay: 0s; }
    .dst-4 { left: 75%; width: 5px; height: 5px; animation-duration: 16s; animation-delay: 6s; }
    .dst-5 { left: 85%; width: 3px; height: 3px; animation-duration: 12s; animation-delay: 3s; }
    .dst-6 { left: 25%; width: 2px; height: 2px; animation-duration: 10s; animation-delay: 2s; }
</style>

<section class="page-header-voluntariado damas-header-bg text-center text-white">
    <!-- Aurora & Dust Background -->
    <div class="damas-aurora aurora-1"></div>
    <div class="damas-aurora aurora-2"></div>
    <div class="damas-aurora aurora-3"></div>
    <div class="damas-dust dst-1"></div>
    <div class="damas-dust dst-2"></div>
    <div class="damas-dust dst-3"></div>
    <div class="damas-dust dst-4"></div>
    <div class="damas-dust dst-5"></div>
    <div class="damas-dust dst-6"></div>
    
    <div class="container position-relative z-2 pb-4">
        <span class="badge bg-light text-secondary mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
            <i class="fas fa-heart me-2"></i> Vocación y Ternura
        </span>
        <h1 class="display-4 fw-bold mb-3 text-shadow" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">Damas Grises</h1>
        <p class="lead text-white mx-auto mb-0" style="max-width: 700px; font-weight: 400; font-size: 1.2rem; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
            Mujeres voluntarias al servicio de la comunidad, llevando esperanza, compañía y solidaridad a quienes más lo necesitan.
        </p>
    </div>

    <!-- Forma inferior (wave) -->
    <div class="position-absolute bottom-0 start-0 w-100 overflow-hidden" style="line-height: 0; z-index: 3;">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 40px; transform: translateY(1px);">
            <path d="M1200,80 C900,10 300,10 0,80 L0,120 L1200,120 Z" fill="#ffffff" opacity="0.5"></path>
            <path d="M1200,90 C900,30 300,30 0,90 L0,120 L1200,120 Z" fill="#ffffff" opacity="0.3"></path>
            <path d="M1200,100 C900,50 300,50 0,100 L0,120 L1200,120 Z" fill="#ffffff"></path>
        </svg>
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