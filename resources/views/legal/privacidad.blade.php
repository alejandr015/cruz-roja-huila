@extends('layouts.app')

@section('title', 'Política de Privacidad - Cruz Roja Huila')

@section('content')

<!-- Banner -->
<section class="page-header" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Política de Privacidad</h1>
        <p class="lead">Protección y tratamiento de datos personales</p>
    </div>
</section>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    
                    <!-- Última actualización -->
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Última actualización:</strong> Febrero 2026
                    </div>

                    <!-- Introducción -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">Introducción</h3>
                        <p>Cruz Roja Colombiana Seccional Huila está comprometida con la protección de su privacidad y el cumplimiento de la Ley 1581 de 2012 y el Decreto 1377 de 2013 sobre protección de datos personales en Colombia.</p>
                        
                        <p class="mt-3">Esta Política de Privacidad describe cómo recopilamos, usamos, compartimos y protegemos su información personal cuando utiliza nuestro sitio web y servicios.</p>
                    </section>

                    <!-- 1. Responsable del Tratamiento -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">1. Responsable del Tratamiento de Datos</h3>
                        
                        <div class="card bg-light">
                            <div class="card-body">
                                <p class="mb-2"><strong>Razón Social:</strong> Cruz Roja Colombiana Seccional Huila</p>
                                <p class="mb-2"><strong>Dirección:</strong> Calle 26 &, Cra 5a - A, Comuna 2, Neiva, Huila</p>
                                <p class="mb-2"><strong>Correo Electrónico:</strong> info@cruzrojahuila.org</p>
                                <p class="mb-2"><strong>WhatsApp:</strong> +57 317 297 1272</p>
                                <p class="mb-0"><strong>Sitio Web:</strong> www.cruzrojahuila.org</p>
                            </div>
                        </div>
                    </section>

                    <!-- 2. Información que Recopilamos -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">2. Información que Recopilamos</h3>
                        
                        <h5 class="mt-4 mb-3">2.1 Información que nos Proporciona Directamente:</h5>
                        <ul>
                            <li><strong>Datos de identificación:</strong> Nombre completo, número de identificación, fecha de nacimiento</li>
                            <li><strong>Datos de contacto:</strong> Dirección, teléfono, correo electrónico</li>
                            <li><strong>Datos laborales:</strong> Ocupación, lugar de trabajo (cuando aplique)</li>
                            <li><strong>Datos académicos:</strong> Nivel educativo, certificaciones (para inscripciones)</li>
                            <li><strong>Datos de salud:</strong> Información médica relevante (solo para servicios de salud específicos)</li>
                            <li><strong>Datos financieros:</strong> Información de pago para procesamiento de inscripciones</li>
                        </ul>

                        <h5 class="mt-4 mb-3">2.2 Información Recopilada Automáticamente:</h5>
                        <ul>
                            <li><strong>Datos de navegación:</strong> Dirección IP, tipo de navegador, páginas visitadas</li>
                            <li><strong>Cookies:</strong> Información almacenada por cookies y tecnologías similares</li>
                            <li><strong>Datos de dispositivo:</strong> Tipo de dispositivo, sistema operativo</li>
                            <li><strong>Datos de uso:</strong> Hora y duración de las visitas, interacciones con el sitio</li>
                        </ul>
                    </section>

                    <!-- 3. Finalidad del Tratamiento -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">3. Finalidad del Tratamiento de Datos</h3>
                        
                        <p>Utilizamos su información personal para los siguientes propósitos:</p>

                        <h5 class="mt-4 mb-3">3.1 Prestación de Servicios:</h5>
                        <ul>
                            <li>Procesar inscripciones en cursos, capacitaciones y programas educativos</li>
                            <li>Gestionar el registro y actividades de voluntarios</li>
                            <li>Prestar servicios de salud (vacunación, laboratorio clínico)</li>
                            <li>Responder a consultas y solicitudes de información</li>
                            <li>Programar y coordinar citas médicas o educativas</li>
                        </ul>

                        <h5 class="mt-4 mb-3">3.2 Comunicación:</h5>
                        <ul>
                            <li>Enviar confirmaciones de inscripción y certificados</li>
                            <li>Notificar sobre cambios en horarios o programación</li>
                            <li>Enviar información sobre nuevos cursos y servicios</li>
                            <li>Realizar encuestas de satisfacción</li>
                            <li>Comunicar noticias institucionales y campañas humanitarias</li>
                        </ul>

                        <h5 class="mt-4 mb-3">3.3 Mejora de Servicios:</h5>
                        <ul>
                            <li>Analizar el uso del sitio web para mejorar la experiencia del usuario</li>
                            <li>Desarrollar nuevos programas y servicios</li>
                            <li>Realizar análisis estadísticos y de tendencias</li>
                            <li>Personalizar contenido y recomendaciones</li>
                        </ul>

                        <h5 class="mt-4 mb-3">3.4 Cumplimiento Legal:</h5>
                        <ul>
                            <li>Cumplir con obligaciones legales y regulatorias</li>
                            <li>Responder a requerimientos de autoridades competentes</li>
                            <li>Proteger nuestros derechos legales</li>
                            <li>Prevenir fraude y actividades ilícitas</li>
                        </ul>
                    </section>

                    <!-- 4. Base Legal -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">4. Base Legal del Tratamiento</h3>
                        
                        <p>El tratamiento de sus datos personales se fundamenta en:</p>
                        <ul>
                            <li><strong>Consentimiento:</strong> Su autorización expresa para el tratamiento de datos</li>
                            <li><strong>Ejecución de contrato:</strong> Necesario para cumplir con servicios contratados</li>
                            <li><strong>Obligación legal:</strong> Cumplimiento de normativas de salud y educación</li>
                            <li><strong>Interés legítimo:</strong> Mejora de servicios y comunicaciones institucionales</li>
                        </ul>
                    </section>

                    <!-- 5. Compartir Información -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">5. Compartir Información con Terceros</h3>
                        
                        <p>Cruz Roja Huila puede compartir su información con:</p>

                        <h5 class="mt-4 mb-3">5.1 Cruz Roja Nacional e Internacional:</h5>
                        <p>Con otras seccionales y organismos de la Cruz Roja para coordinación de actividades humanitarias y programas.</p>

                        <h5 class="mt-4 mb-3">5.2 Proveedores de Servicios:</h5>
                        <ul>
                            <li>Plataformas de pago para procesar transacciones</li>
                            <li>Servicios de correo electrónico y mensajería</li>
                            <li>Proveedores de alojamiento web y tecnología</li>
                            <li>Laboratorios y entidades de salud (cuando aplique)</li>
                        </ul>

                        <h5 class="mt-4 mb-3">5.3 Autoridades Competentes:</h5>
                        <p>Cuando sea requerido por ley o para proteger nuestros derechos legales.</p>

                        <div class="alert alert-warning mt-3">
                            <strong>Importante:</strong> Todos los terceros con quienes compartimos información están obligados a proteger sus datos de acuerdo con la ley colombiana.
                        </div>
                    </section>

                    <!-- 6. Seguridad de Datos -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">6. Seguridad de la Información</h3>
                        
                        <p>Implementamos medidas técnicas, administrativas y físicas para proteger su información personal:</p>

                        <h5 class="mt-4 mb-3">Medidas Técnicas:</h5>
                        <ul>
                            <li>Cifrado SSL/TLS para transmisión de datos</li>
                            <li>Firewalls y sistemas de detección de intrusos</li>
                            <li>Copias de seguridad regulares</li>
                            <li>Actualización constante de sistemas de seguridad</li>
                        </ul>

                        <h5 class="mt-4 mb-3">Medidas Administrativas:</h5>
                        <ul>
                            <li>Acceso restringido a datos personales solo a personal autorizado</li>
                            <li>Capacitación en protección de datos al personal</li>
                            <li>Políticas internas de seguridad de información</li>
                            <li>Auditorías periódicas de seguridad</li>
                        </ul>

                        <h5 class="mt-4 mb-3">Medidas Físicas:</h5>
                        <ul>
                            <li>Control de acceso a instalaciones</li>
                            <li>Sistemas de vigilancia y monitoreo</li>
                            <li>Almacenamiento seguro de documentos físicos</li>
                        </ul>
                    </section>

                    <!-- 7. Tiempo de Conservación -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">7. Tiempo de Conservación de Datos</h3>
                        
                        <p>Conservamos su información personal durante el tiempo necesario para:</p>
                        <ul>
                            <li>Cumplir con los fines para los cuales fue recopilada</li>
                            <li>Cumplir con obligaciones legales (registros de salud: 20 años, registros académicos: 10 años)</li>
                            <li>Resolver disputas y hacer cumplir nuestros acuerdos</li>
                            <li>Mantener registros históricos de actividades humanitarias</li>
                        </ul>

                        <p class="mt-3">Una vez transcurrido el plazo de conservación, procedemos a la eliminación segura de los datos.</p>
                    </section>

                    <!-- 8. Sus Derechos -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">8. Sus Derechos como Titular de Datos</h3>
                        
                        <p>De acuerdo con la Ley 1581 de 2012, usted tiene derecho a:</p>

                        <div class="row mt-4">
                            <div class="col-md-6 mb-3">
                                <div class="card h-100 border-danger">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger"><i class="fas fa-eye me-2"></i>Acceso</h5>
                                        <p class="card-text">Conocer qué datos personales tenemos sobre usted</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card h-100 border-danger">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger"><i class="fas fa-edit me-2"></i>Rectificación</h5>
                                        <p class="card-text">Actualizar o corregir datos inexactos o incompletos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card h-100 border-danger">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger"><i class="fas fa-ban me-2"></i>Oposición</h5>
                                        <p class="card-text">Oponerse al tratamiento de ciertos datos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card h-100 border-danger">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger"><i class="fas fa-trash me-2"></i>Supresión</h5>
                                        <p class="card-text">Solicitar la eliminación de sus datos personales</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-info mt-4">
                            <h5 class="alert-heading">¿Cómo ejercer sus derechos?</h5>
                            <p>Para ejercer cualquiera de estos derechos, puede contactarnos a través de:</p>
                            <ul class="mb-0">
                                <li>Correo electrónico: info@cruzrojahuila.org</li>
                                <li>WhatsApp: +57 317 297 1272</li>
                                <li>Presencialmente en nuestras oficinas</li>
                            </ul>
                        </div>
                    </section>

                    <!-- 9. Cookies -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">9. Uso de Cookies</h3>
                        
                        <p>Nuestro sitio web utiliza cookies y tecnologías similares para:</p>
                        <ul>
                            <li>Recordar sus preferencias y configuraciones</li>
                            <li>Mejorar la navegación y funcionalidad del sitio</li>
                            <li>Analizar el uso del sitio y generar estadísticas</li>
                            <li>Personalizar contenido y publicidad</li>
                        </ul>

                        <p class="mt-3">Puede configurar su navegador para rechazar cookies, aunque esto puede afectar la funcionalidad del sitio.</p>
                    </section>

                    <!-- 10. Menores de Edad -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">10. Protección de Menores de Edad</h3>
                        
                        <p>Nuestros servicios no están dirigidos a menores de 18 años sin autorización de sus padres o tutores legales.</p>
                        
                        <p class="mt-3">Para la inscripción de menores en nuestros programas, requerimos la autorización expresa de los padres o representantes legales, quienes son responsables de proporcionar y gestionar la información del menor.</p>
                    </section>

                    <!-- 11. Transferencias Internacionales -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">11. Transferencias Internacionales de Datos</h3>
                        
                        <p>En algunos casos, podemos transferir sus datos personales fuera de Colombia, específicamente a:</p>
                        <ul>
                            <li>Sede internacional de la Cruz Roja en Ginebra, Suiza</li>
                            <li>Otras seccionales de Cruz Roja en el mundo</li>
                            <li>Proveedores de servicios en la nube</li>
                        </ul>

                        <p class="mt-3">Todas las transferencias se realizan con las garantías adecuadas y en cumplimiento de la normativa colombiana.</p>
                    </section>

                    <!-- 12. Cambios a la Política -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">12. Modificaciones a esta Política</h3>
                        
                        <p>Nos reservamos el derecho de actualizar esta Política de Privacidad periódicamente. Cualquier cambio será publicado en esta página con la fecha de "Última actualización" modificada.</p>
                        
                        <p class="mt-3">Le recomendamos revisar esta política regularmente para mantenerse informado sobre cómo protegemos su información.</p>
                    </section>

                    <!-- 13. Contacto -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">13. Contacto y Consultas</h3>
                        
                        <p>Si tiene preguntas sobre esta Política de Privacidad o desea ejercer sus derechos, puede contactarnos:</p>
                        
                        <div class="card bg-light mt-3">
                            <div class="card-body">
                                <p class="mb-2"><strong>Cruz Roja Colombiana Seccional Huila</strong></p>
                                <p class="mb-2"><i class="fas fa-map-marker-alt me-2 text-danger"></i>Calle 26 &, Cra 5a - A, Comuna 2, Neiva, Huila</p>
                                <p class="mb-2"><i class="fas fa-phone me-2 text-danger"></i>WhatsApp: +57 317 297 1272</p>
                                <p class="mb-0"><i class="fas fa-envelope me-2 text-danger"></i>info@cruzrojahuila.org</p>
                            </div>
                        </div>
                    </section>

                    <!-- Consentimiento -->
                    <div class="alert alert-warning mt-5">
                        <h5 class="alert-heading"><i class="fas fa-check-circle me-2"></i>Consentimiento</h5>
                        <p class="mb-0">Al utilizar nuestro sitio web y servicios, usted consiente el tratamiento de sus datos personales de acuerdo con esta Política de Privacidad.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    .page-header {
        margin-top: -40px;
    }

    h3.text-danger {
        font-weight: 700;
        border-bottom: 3px solid #ED1C24;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    h5 {
        font-weight: 600;
        color: #1a2332;
    }

    ul {
        line-height: 1.8;
    }

    .card {
        border-radius: 15px;
    }

    p {
        text-align: justify;
        line-height: 1.8;
    }

    .card.border-danger {
        border-width: 2px;
    }
</style>
@endsection