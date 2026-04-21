@extends('layouts.app')

@section('title', 'Contacto - Cruz Roja Huila')

@section('content')

<!-- Hero Section -->
<section class="contact-hero" style="background: linear-gradient(135deg, var(--azul-institucional) 0%, #1a2332 100%); padding: 100px 0 60px; color: white;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">Contáctanos</h1>
        <p class="lead opacity-75">Estamos aquí para escucharte y ayudarte en lo que necesites</p>
    </div>
</section>

<div class="container my-5">
    <div class="row g-5">
        <!-- Información de Contacto -->
        <div class="col-lg-4">
            <h3 class="fw-bold mb-4">Información de Contacto</h3>
            <p class="text-muted mb-5">Puedes comunicarte con nosotros a través de cualquiera de nuestros canales oficiales o visitarnos en nuestras instalaciones.</p>

            <div class="contact-info-list">
                <div class="d-flex mb-4">
                    <div class="icon-box bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Dirección</h6>
                        <p class="text-muted mb-0">Calle 26 &, Cra 5a - A, Comuna 2, Neiva, Huila</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="icon-box bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">WhatsApp</h6>
                        <p class="text-muted mb-0">+57 317 297 1272</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="icon-box bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Correo Electrónico</h6>
                        <p class="text-muted mb-0">info@cruzrojahuila.org</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="icon-box bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Horario de Atención</h6>
                        <p class="text-muted mb-0">Lunes a Viernes: 8:00 AM - 12:00 PM / 2:00 PM - 6:00 PM</p>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <h5 class="fw-bold mb-4">Síguenos en redes sociales</h5>
            <div class="d-flex gap-3">
                <a href="#" class="btn btn-outline-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn btn-outline-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn btn-outline-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn btn-outline-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <!-- Formulario de Contacto -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg p-4 p-md-5" style="border-radius: 20px;">
                <h3 class="fw-bold mb-4 text-center">Envíanos un mensaje</h3>

                @if(session('success'))
                    <div class="alert alert-success border-0 shadow-sm rounded-3 mb-4 py-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle me-3 fs-3"></i>
                            <div>{{ session('success') }}</div>
                        </div>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger border-0 shadow-sm rounded-3 mb-4">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contacto.enviar') }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label fw-semibold">Nombre Completo *</label>
                            <input type="text" class="form-control form-control-lg bg-light border-0 px-4" id="nombre" name="nombre" value="{{ old('nombre') }}" required placeholder="Ej: Juan Pérez">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-semibold">Correo Electrónico *</label>
                            <input type="email" class="form-control form-control-lg bg-light border-0 px-4" id="email" name="email" value="{{ old('email') }}" required placeholder="ejemplo@email.com">
                        </div>
                        <div class="col-md-6">
                            <label for="telefono" class="form-label fw-semibold">Teléfono / WhatsApp</label>
                            <input type="text" class="form-control form-control-lg bg-light border-0 px-4" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="Ej: 317 000 0000">
                        </div>
                        <div class="col-md-6">
                            <label for="asunto" class="form-label fw-semibold">Asunto *</label>
                            <input type="text" class="form-control form-control-lg bg-light border-0 px-4" id="asunto" name="asunto" value="{{ old('asunto') }}" required placeholder="¿Sobre qué quieres hablar?">
                        </div>
                        <div class="col-12">
                            <label for="mensaje" class="form-label fw-semibold">Mensaje *</label>
                            <textarea class="form-control bg-light border-0 px-4 py-3" id="mensaje" name="mensaje" rows="6" required placeholder="Escribe tu mensaje detalladamente aquí...">{{ old('mensaje') }}</textarea>
                        </div>
                        <div class="col-12 text-center mt-5">
                            <button type="submit" class="btn btn-danger btn-lg rounded-pill px-5 py-3 fw-bold shadow-lg">
                                Enviar Mensaje <i class="fas fa-paper-plane ms-2"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Mapa -->
<section class="mt-5">
    <div class="container-fluid p-0">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1182.2612716172605!2d-75.28965039343715!3d2.9413340578505517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b745d06d3de19%3A0xedb6f5d6f4c3fd6b!2sCruz%20Roja%20Colombiana%20Seccional%20Huila!5e0!3m2!1ses-419!2sco!4v1713690000000!5m2!1ses-419!2sco" 
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

@endsection

@section('styles')
<style>
    .contact-hero {
        margin-top: -40px;
    }

    .form-control:focus {
        background-color: white !important;
        box-shadow: 0 0 0 0.25rem rgba(237, 28, 36, 0.1);
        border: 1px solid var(--cruz-roja) !important;
    }

    .btn-danger {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .btn-danger:hover {
        background-color: var(--cruz-roja-dark);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(237, 28, 36, 0.3);
    }

    .icon-box {
        transition: transform 0.3s;
    }

    .contact-info-list > div:hover .icon-box {
        transform: scale(1.1);
    }
</style>
@endsection
