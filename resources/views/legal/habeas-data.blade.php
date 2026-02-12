@extends('layouts.app')

@section('title', 'Habeas Data - Cruz Roja Huila')

@section('content')

<!-- Banner -->
<section class="page-header" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Habeas Data</h1>
        <p class="lead">Política de Tratamiento y Protección de Datos Personales</p>
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
                        <h3 class="text-danger mb-3">Política de Tratamiento de Datos Personales</h3>
                        <p>De conformidad con lo establecido en la Ley Estatutaria 1581 de 2012, el Decreto Reglamentario 1377 de 2013 y demás normas concordantes, Cruz Roja Colombiana Seccional Huila ha establecido la presente Política de Tratamiento de Datos Personales con el propósito de garantizar el derecho constitucional de Habeas Data a todas las personas naturales que sean titulares de datos personales que reposen en nuestras bases de datos.</p>
                    </section>

                    <!-- 1. Marco Legal -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">1. Marco Legal</h3>
                        
                        <p>Esta política se fundamenta en:</p>
                        <ul>
                            <li><strong>Constitución Política de Colombia:</strong> Artículo 15 - Derecho a la intimidad y al habeas data</li>
                            <li><strong>Ley 1581 de 2012:</strong> Protección de datos personales</li>
                            <li><strong>Decreto 1377 de 2013:</strong> Reglamentación parcial de la Ley 1581 de 2012</li>
                            <li><strong>Decreto 1074 de 2015:</strong> Decreto Único Reglamentario del Sector Comercio, Industria y Turismo</li>
                            <li><strong>Sentencias de la Corte Constitucional:</strong> C-748/11, T-414/92, SU-082/95</li>
                        </ul>
                    </section>

                    <!-- 2. Definiciones -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">2. Definiciones Importantes</h3>
                        
                        <div class="accordion" id="accordionDefiniciones">
                            <!-- Titular -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                        <strong>Titular</strong>
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionDefiniciones">
                                    <div class="accordion-body">
                                        Persona natural cuyos datos personales son objeto de tratamiento.
                                    </div>
                                </div>
                            </div>

                            <!-- Dato Personal -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                        <strong>Dato Personal</strong>
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionDefiniciones">
                                    <div class="accordion-body">
                                        Cualquier información vinculada o que pueda asociarse a una o varias personas naturales determinadas o determinables.
                                    </div>
                                </div>
                            </div>

                            <!-- Dato Sensible -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                        <strong>Dato Sensible</strong>
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionDefiniciones">
                                    <div class="accordion-body">
                                        Datos que afectan la intimidad del titular o cuyo uso indebido puede generar discriminación: datos de salud, orientación sexual, origen racial o étnico, opinión política, convicciones religiosas o filosóficas, pertenencia a sindicatos, información genética o biométrica.
                                    </div>
                                </div>
                            </div>

                            <!-- Tratamiento -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                                        <strong>Tratamiento</strong>
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionDefiniciones">
                                    <div class="accordion-body">
                                        Cualquier operación sobre datos personales: recolección, almacenamiento, uso, circulación, supresión, actualización, rectificación.
                                    </div>
                                </div>
                            </div>

                            <!-- Autorización -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                                        <strong>Autorización</strong>
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionDefiniciones">
                                    <div class="accordion-body">
                                        Consentimiento previo, expreso e informado del titular para llevar a cabo el tratamiento de sus datos personales.
                                    </div>
                                </div>
                            </div>

                            <!-- Base de Datos -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                                        <strong>Base de Datos</strong>
                                    </button>
                                </h2>
                                <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionDefiniciones">
                                    <div class="accordion-body">
                                        Conjunto organizado de datos personales que sea objeto de tratamiento.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- 3. Responsable del Tratamiento -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">3. Identificación del Responsable</h3>
                        
                        <div class="card bg-light">
                            <div class="card-body">
                                <p class="mb-2"><strong>Razón Social:</strong> Cruz Roja Colombiana Seccional Huila</p>
                                <p class="mb-2"><strong>NIT:</strong> [Número de identificación tributaria]</p>
                                <p class="mb-2"><strong>Dirección:</strong> Calle 26 &, Cra 5a - A, Comuna 2, Neiva, Huila</p>
                                <p class="mb-2"><strong>Teléfono:</strong> +57 317 297 1272</p>
                                <p class="mb-2"><strong>Correo Electrónico:</strong> info@cruzrojahuila.org</p>
                                <p class="mb-0"><strong>Sitio Web:</strong> www.cruzrojahuila.org</p>
                            </div>
                        </div>
                    </section>

                    <!-- 4. Finalidades del Tratamiento -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">4. Finalidades del Tratamiento de Datos</h3>
                        
                        <p>Cruz Roja Colombiana Seccional Huila tratará los datos personales para las siguientes finalidades:</p>

                        <h5 class="mt-4 mb-3">4.1 Finalidades Principales:</h5>
                        <ul>
                            <li>Gestionar la inscripción y participación en programas educativos, cursos, capacitaciones y certificaciones</li>
                            <li>Administrar el registro de voluntarios y gestionar sus actividades</li>
                            <li>Prestar servicios de salud: vacunación, laboratorio clínico, exámenes médicos</li>
                            <li>Procesar solicitudes de información y atención al usuario</li>
                            <li>Emitir certificados, diplomas y constancias de participación</li>
                            <li>Gestionar pagos y facturación de servicios</li>
                        </ul>

                        <h5 class="mt-4 mb-3">4.2 Finalidades Secundarias:</h5>
                        <ul>
                            <li>Enviar información sobre programas, servicios, eventos y actividades institucionales</li>
                            <li>Realizar encuestas de satisfacción y estudios de mejora continua</li>
                            <li>Generar estadísticas institucionales y reportes de gestión</li>
                            <li>Mantener comunicación sobre campañas humanitarias y de prevención</li>
                            <li>Cumplir con obligaciones legales y regulatorias en materia de salud y educación</li>
                        </ul>

                        <h5 class="mt-4 mb-3">4.3 Finalidades Específicas para Datos Sensibles:</h5>
                        <ul>
                            <li>Gestionar historias clínicas y registros médicos (datos de salud)</li>
                            <li>Coordinar atención médica de emergencia</li>
                            <li>Realizar seguimiento epidemiológico cuando sea requerido por autoridades sanitarias</li>
                            <li>Implementar medidas de bioseguridad y protección sanitaria</li>
                        </ul>

                        <div class="alert alert-warning mt-4">
                            <strong>Importante:</strong> El tratamiento de datos sensibles se realizará únicamente con su autorización expresa y específica, salvo en casos de urgencia médica o cuando la ley lo autorice.
                        </div>
                    </section>

                    <!-- 5. Derechos de los Titulares -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">5. Derechos de los Titulares de Datos</h3>
                        
                        <p>Como titular de datos personales, usted tiene los siguientes derechos:</p>

                        <div class="row mt-4">
                            <div class="col-md-6 mb-3">
                                <div class="card h-100 border-danger">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger"><i class="fas fa-user-check me-2"></i>Conocer</h5>
                                        <p class="card-text">Conocer, actualizar y rectificar sus datos personales frente a Cruz Roja Huila.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card h-100 border-danger">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger"><i class="fas fa-shield-alt me-2"></i>Solicitar Prueba</h5>
                                        <p class="card-text">Solicitar prueba de la autorización otorgada a Cruz Roja Huila.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card h-100 border-danger">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger"><i class="fas fa-info-circle me-2"></i>Ser Informado</h5>
                                        <p class="card-text">Ser informado sobre el uso que se le ha dado a sus datos personales.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card h-100 border-danger">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger"><i class="fas fa-file-alt me-2"></i>Presentar Quejas</h5>
                                        <p class="card-text">Presentar quejas ante la Superintendencia de Industria y Comercio.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card h-100 border-danger">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger"><i class="fas fa-ban me-2"></i>Revocar Autorización</h5>
                                        <p class="card-text">Revocar la autorización y/o solicitar la supresión del dato cuando no exista obligación legal o contractual.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card h-100 border-danger">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger"><i class="fas fa-lock me-2"></i>Acceso Gratuito</h5>
                                        <p class="card-text">Acceder en forma gratuita a sus datos personales que hayan sido objeto de tratamiento.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- 6. Procedimiento para Ejercer Derechos -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">6. ¿Cómo Ejercer sus Derechos?</h3>
                        
                        <h5 class="mt-4 mb-3">Paso 1: Presentar Solicitud</h5>
                        <p>Puede presentar su solicitud a través de cualquiera de los siguientes canales:</p>
                        <ul>
                            <li><strong>Correo electrónico:</strong> info@cruzrojahuila.org</li>
                            <li><strong>WhatsApp:</strong> +57 317 297 1272</li>
                            <li><strong>Presencial:</strong> Calle 26 &, Cra 5a - A, Comuna 2, Neiva, Huila</li>
                            <li><strong>Correo certificado:</strong> A la dirección mencionada anteriormente</li>
                        </ul>

                        <h5 class="mt-4 mb-3">Paso 2: Requisitos de la Solicitud</h5>
                        <p>Su solicitud debe contener como mínimo:</p>
                        <ul>
                            <li>Nombre completo del titular</li>
                            <li>Número de identificación o documento que permita identificarlo</li>
                            <li>Descripción clara y precisa de los datos respecto de los cuales ejerce alguno de sus derechos</li>
                            <li>Dirección física o electrónica para recibir respuesta</li>
                            <li>Documentos que soporten la solicitud</li>
                        </ul>

                        <h5 class="mt-4 mb-3">Paso 3: Tiempos de Respuesta</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-danger">
                                    <tr>
                                        <th>Tipo de Solicitud</th>
                                        <th>Tiempo de Respuesta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Consultas</td>
                                        <td>10 días hábiles</td>
                                    </tr>
                                    <tr>
                                        <td>Reclamos</td>
                                        <td>15 días hábiles</td>
                                    </tr>
                                    <tr>
                                        <td>Actualización, rectificación o supresión</td>
                                        <td>15 días hábiles desde la recepción de la solicitud</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="alert alert-info mt-3">
                            <strong>Nota:</strong> Cuando no fuera posible atender la consulta o reclamo dentro de dichos términos, se informará al interesado los motivos de la demora y la fecha en que se atenderá su solicitud, la cual en ningún caso podrá superar los 8 días hábiles siguientes al vencimiento del primer término.
                        </div>
                    </section>

                    <!-- 7. Deberes de Cruz Roja -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">7. Deberes de Cruz Roja Huila</h3>
                        
                        <p>Como responsable del tratamiento de datos personales, nos comprometemos a:</p>
                        <ul>
                            <li>Garantizar al titular, en todo tiempo, el pleno y efectivo ejercicio del derecho de habeas data</li>
                            <li>Solicitar y conservar copia de la autorización otorgada por el titular</li>
                            <li>Informar debidamente al titular sobre la finalidad de la recolección y los derechos que le asisten</li>
                            <li>Conservar la información bajo condiciones de seguridad que eviten su adulteración, pérdida, consulta, uso o acceso no autorizado</li>
                            <li>Actualizar la información cuando sea necesario</li>
                            <li>Rectificar los datos cuando sean inexactos o erróneos</li>
                            <li>Tramitar las consultas y reclamos formulados por los titulares en los términos señalados por la ley</li>
                            <li>Registrar en la base de datos la leyenda "reclamo en trámite" cuando corresponda</li>
                            <li>Insertar en la base de datos la leyenda "información en discusión judicial" cuando se presente un proceso judicial</li>
                            <li>Abstenerse de circular información que esté siendo controvertida por el titular</li>
                            <li>Permitir el acceso a la información únicamente a las personas autorizadas por el titular o por la ley</li>
                            <li>Usar únicamente datos cuyo tratamiento esté previamente autorizado</li>
                        </ul>
                    </section>

                    <!-- 8. Medidas de Seguridad -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">8. Medidas de Seguridad</h3>
                        
                        <p>Cruz Roja Huila implementa medidas técnicas, humanas y administrativas para garantizar la seguridad de los datos personales:</p>

                        <h5 class="mt-4 mb-3">Medidas Técnicas:</h5>
                        <ul>
                            <li>Cifrado de datos sensibles</li>
                            <li>Firewalls y sistemas de detección de intrusos</li>
                            <li>Copias de seguridad periódicas</li>
                            <li>Control de acceso con autenticación de usuarios</li>
                            <li>Registro de acceso a bases de datos (logs)</li>
                        </ul>

                        <h5 class="mt-4 mb-3">Medidas Administrativas:</h5>
                        <ul>
                            <li>Políticas internas de seguridad de la información</li>
                            <li>Capacitación periódica al personal en protección de datos</li>
                            <li>Acuerdos de confidencialidad con empleados y contratistas</li>
                            <li>Procedimientos de respuesta ante incidentes de seguridad</li>
                        </ul>

                        <h5 class="mt-4 mb-3">Medidas Físicas:</h5>
                        <ul>
                            <li>Control de acceso a instalaciones donde se almacenan datos</li>
                            <li>Custodia segura de documentos físicos</li>
                            <li>Destrucción segura de documentos que contienen datos personales</li>
                        </ul>
                    </section>

                    <!-- 9. Tratamiento de Datos de Menores -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">9. Tratamiento de Datos de Menores de Edad</h3>
                        
                        <p>El tratamiento de datos personales de niños, niñas y adolescentes está sujeto a condiciones especiales:</p>
                        <ul>
                            <li>Se requiere autorización expresa de los padres o representantes legales</li>
                            <li>El tratamiento debe respetar el interés superior del menor</li>
                            <li>Se garantiza el respeto de sus derechos fundamentales</li>
                            <li>Solo se recopila información estrictamente necesaria</li>
                            <li>Se implementan medidas especiales de seguridad</li>
                        </ul>

                        <div class="alert alert-warning mt-3">
                            <strong>Importante:</strong> Para inscripción de menores en programas educativos o de voluntariado, es obligatorio el consentimiento del representante legal.
                        </div>
                    </section>

                    <!-- 10. Área Responsable -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">10. Área Responsable de Protección de Datos</h3>
                        
                        <p>Cruz Roja Colombiana Seccional Huila ha designado un área responsable para la atención de consultas, peticiones y reclamos relacionados con el tratamiento de datos personales.</p>
                        
                        <div class="card bg-light mt-3">
                            <div class="card-body">
                                <p class="mb-2"><strong>Área:</strong> Dirección Administrativa</p>
                                <p class="mb-2"><strong>Correo electrónico:</strong> info@cruzrojahuila.org</p>
                                <p class="mb-2"><strong>Teléfono:</strong> +57 317 297 1272</p>
                                <p class="mb-0"><strong>Horario de atención:</strong> Lunes a Viernes, 8:00 AM - 5:00 PM</p>
                            </div>
                        </div>
                    </section>

                    <!-- 11. Vigencia -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">11. Vigencia y Modificaciones</h3>
                        
                        <p>Esta Política de Tratamiento de Datos Personales rige desde su publicación y permanecerá vigente hasta que sea modificada por Cruz Roja Colombiana Seccional Huila.</p>
                        
                        <p class="mt-3">Cualquier cambio sustancial será informado a través de nuestro sitio web y otros medios de comunicación apropiados.</p>
                    </section>

                    <!-- Fecha de Vigencia -->
                    <div class="alert alert-success mt-5">
                        <h5 class="alert-heading"><i class="fas fa-calendar-check me-2"></i>Fecha de Vigencia</h5>
                        <p class="mb-0">Esta política rige desde el 1 de febrero de 2026 y ha sido debidamente aprobada por la Dirección de Cruz Roja Colombiana Seccional Huila.</p>
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

    .accordion-button:not(.collapsed) {
        background-color: #fff5f5;
        color: #ED1C24;
    }

    .table-danger {
        background-color: #ED1C24;
        color: white;
    }
</style>
@endsection