@extends('layouts.app')

@section('title', 'Términos y Condiciones - Cruz Roja Huila')

@section('content')

<!-- Banner -->
<section class="page-header" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Términos y Condiciones</h1>
        <p class="lead">Condiciones de uso del sitio web de Cruz Roja Colombiana Seccional Huila</p>
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
                        <p>Bienvenido al sitio web de la Cruz Roja Colombiana Seccional Huila. Al acceder y utilizar este sitio web, usted acepta cumplir y estar sujeto a los siguientes términos y condiciones de uso. Si no está de acuerdo con alguno de estos términos, por favor no utilice nuestro sitio.</p>
                    </section>

                    <!-- 1. Aceptación de los Términos -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">1. Aceptación de los Términos</h3>
                        <p>Al acceder y utilizar este sitio web, usted acepta estar sujeto a estos términos y condiciones de uso, todas las leyes y regulaciones aplicables, y acepta que es responsable del cumplimiento de todas las leyes locales aplicables.</p>
                        <p>Si no está de acuerdo con alguno de estos términos, tiene prohibido usar o acceder a este sitio.</p>
                    </section>

                    <!-- 2. Uso del Sitio -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">2. Uso del Sitio Web</h3>
                        <p>Este sitio web es operado por la Cruz Roja Colombiana Seccional Huila. El contenido de este sitio es solo para su información general y uso. Está sujeto a cambios sin previo aviso.</p>
                        
                        <h5 class="mt-4 mb-3">Usos Permitidos:</h5>
                        <ul>
                            <li>Consultar información sobre nuestros programas y servicios</li>
                            <li>Inscribirse en cursos y capacitaciones</li>
                            <li>Registrarse como voluntario</li>
                            <li>Solicitar información sobre nuestros servicios de salud</li>
                            <li>Contactarnos a través de los formularios disponibles</li>
                        </ul>

                        <h5 class="mt-4 mb-3">Usos Prohibidos:</h5>
                        <ul>
                            <li>Utilizar el sitio para cualquier propósito ilegal</li>
                            <li>Intentar obtener acceso no autorizado a cualquier parte del sitio</li>
                            <li>Interferir o interrumpir el funcionamiento del sitio</li>
                            <li>Transmitir virus, malware o código malicioso</li>
                            <li>Recolectar información de otros usuarios sin su consentimiento</li>
                        </ul>
                    </section>

                    <!-- 3. Propiedad Intelectual -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">3. Propiedad Intelectual</h3>
                        <p>Este sitio web y todo su contenido, características y funcionalidad (incluyendo pero no limitado a toda la información, software, texto, pantallas, imágenes, video, audio, el diseño, selección y organización del mismo) son propiedad de Cruz Roja Colombiana Seccional Huila, sus licenciantes u otros proveedores de dicho material y están protegidos por leyes de derechos de autor, marcas registradas y otras leyes de propiedad intelectual.</p>
                        
                        <p class="mt-3">El logo de la Cruz Roja y otros símbolos distintivos están protegidos internacionalmente y su uso está regulado por las Convenciones de Ginebra.</p>
                    </section>

                    <!-- 4. Registro y Cuenta de Usuario -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">4. Registro y Cuenta de Usuario</h3>
                        <p>Para acceder a ciertas funciones del sitio, como inscripción en cursos o registro como voluntario, puede ser necesario crear una cuenta.</p>
                        
                        <h5 class="mt-4 mb-3">Responsabilidades del Usuario:</h5>
                        <ul>
                            <li>Proporcionar información verdadera, precisa y completa</li>
                            <li>Mantener actualizada su información de cuenta</li>
                            <li>Mantener la confidencialidad de su contraseña</li>
                            <li>Notificar inmediatamente cualquier uso no autorizado de su cuenta</li>
                            <li>Ser responsable de todas las actividades que ocurran bajo su cuenta</li>
                        </ul>
                    </section>

                    <!-- 5. Inscripciones y Pagos -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">5. Inscripciones y Pagos</h3>
                        <p>Al inscribirse en nuestros cursos, capacitaciones o programas:</p>
                        <ul>
                            <li>Acepta proporcionar información de pago válida y actual</li>
                            <li>Autoriza a Cruz Roja Huila a cobrar los montos correspondientes</li>
                            <li>Comprende que los pagos están sujetos a nuestras políticas de reembolso</li>
                            <li>Acepta que los precios pueden cambiar sin previo aviso</li>
                        </ul>

                        <h5 class="mt-4 mb-3">Política de Cancelación:</h5>
                        <p>Las cancelaciones deben realizarse con al menos 48 horas de anticipación para ser elegibles para reembolso. Para más información, contacte nuestro departamento de educación.</p>
                    </section>

                    <!-- 6. Privacidad y Protección de Datos -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">6. Privacidad y Protección de Datos</h3>
                        <p>Su privacidad es importante para nosotros. El uso de su información personal se rige por nuestra <a href="{{ route('privacidad') }}" class="text-danger">Política de Privacidad</a> y nuestra política de <a href="{{ route('habeas-data') }}" class="text-danger">Habeas Data</a>.</p>
                        
                        <p class="mt-3">Al utilizar este sitio, usted consiente la recopilación y uso de su información de acuerdo con estas políticas.</p>
                    </section>

                    <!-- 7. Enlaces a Terceros -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">7. Enlaces a Sitios de Terceros</h3>
                        <p>Este sitio puede contener enlaces a sitios web de terceros. Cruz Roja Colombiana Seccional Huila no tiene control sobre, y no asume responsabilidad por, el contenido, políticas de privacidad o prácticas de cualquier sitio web de terceros.</p>
                        
                        <p class="mt-3">Usted reconoce y acepta que Cruz Roja Huila no será responsable, directa o indirectamente, por cualquier daño o pérdida causada o presuntamente causada por o en conexión con el uso de cualquier contenido, bienes o servicios disponibles en o a través de cualquier sitio web de terceros.</p>
                    </section>

                    <!-- 8. Limitación de Responsabilidad -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">8. Limitación de Responsabilidad</h3>
                        <p>En ningún caso Cruz Roja Colombiana Seccional Huila o sus proveedores serán responsables de:</p>
                        <ul>
                            <li>Daños indirectos, incidentales, especiales o consecuentes</li>
                            <li>Pérdida de beneficios, ingresos o datos</li>
                            <li>Interrupción del negocio</li>
                            <li>Daños que surjan del uso o la imposibilidad de usar el sitio</li>
                        </ul>

                        <p class="mt-3"><strong>Nota importante:</strong> Esta limitación no aplica en casos de negligencia grave o conducta dolosa.</p>
                    </section>

                    <!-- 9. Indemnización -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">9. Indemnización</h3>
                        <p>Usted acepta defender, indemnizar y mantener indemne a Cruz Roja Colombiana Seccional Huila, sus afiliados, licenciantes y proveedores de servicios, y sus respectivos oficiales, directores, empleados, contratistas, agentes, licenciantes, proveedores, sucesores y cesionarios de y contra cualquier reclamo, responsabilidad, daños, sentencias, premios, pérdidas, costos, gastos o honorarios (incluyendo honorarios razonables de abogados) que surjan de o se relacionen con su violación de estos Términos y Condiciones o su uso del sitio web.</p>
                    </section>

                    <!-- 10. Modificaciones -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">10. Modificaciones de los Términos</h3>
                        <p>Cruz Roja Colombiana Seccional Huila se reserva el derecho de revisar y modificar estos términos y condiciones en cualquier momento. Las modificaciones entrarán en vigor inmediatamente después de su publicación en el sitio web.</p>
                        
                        <p class="mt-3">Es su responsabilidad revisar periódicamente estos términos. Su uso continuado del sitio después de la publicación de cualquier modificación constituye su aceptación de dichas modificaciones.</p>
                    </section>

                    <!-- 11. Ley Aplicable -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">11. Ley Aplicable y Jurisdicción</h3>
                        <p>Estos términos y condiciones se regirán e interpretarán de acuerdo con las leyes de la República de Colombia, sin dar efecto a ningún principio de conflictos de leyes.</p>
                        
                        <p class="mt-3">Cualquier disputa relacionada con estos términos estará sujeta a la jurisdicción exclusiva de los tribunales competentes de Neiva, Huila, Colombia.</p>
                    </section>

                    <!-- 12. Contacto -->
                    <section class="mb-5">
                        <h3 class="text-danger mb-3">12. Contacto</h3>
                        <p>Si tiene alguna pregunta sobre estos Términos y Condiciones, puede contactarnos:</p>
                        
                        <div class="card bg-light mt-3">
                            <div class="card-body">
                                <p class="mb-2"><strong>Cruz Roja Colombiana Seccional Huila</strong></p>
                                <p class="mb-2"><i class="fas fa-map-marker-alt me-2 text-danger"></i>Calle 26 &, Cra 5a - A, Comuna 2, Neiva, Huila</p>
                                <p class="mb-2"><i class="fas fa-phone me-2 text-danger"></i>WhatsApp: +57 317 297 1272</p>
                                <p class="mb-2"><i class="fas fa-envelope me-2 text-danger"></i>info@cruzrojahuila.org</p>
                            </div>
                        </div>
                    </section>

                    <!-- Aceptación -->
                    <div class="alert alert-warning mt-5">
                        <h5 class="alert-heading"><i class="fas fa-exclamation-triangle me-2"></i>Aceptación de los Términos</h5>
                        <p class="mb-0">Al utilizar este sitio web, usted reconoce que ha leído, entendido y acepta estar sujeto a estos Términos y Condiciones.</p>
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
</style>
@endsection