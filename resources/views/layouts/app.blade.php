<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Cruz Roja - Seccional Huila')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/cruz-roja-logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/cruz-roja-logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/cruz-roja-logo.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --cruz-roja: #ED1C24;
            --cruz-roja-dark: #C41419;
            --azul-institucional: #002D72; /* Azul profundo nacional */
            --gris-fondo: #F4F7F9;
            --gris-oscuro: #1A2332;
            --texto-principal: #333333;
            --shadow-premium: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--texto-principal);
            background-color: white;
            padding-top: 165px;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6, .navbar-brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        /* Header superior */
        .top-header {
            background: white;
            height: 110px;
            border-bottom: 2px solid var(--gris-fondo);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1031;
            transition: all 0.3s;
        }

        .logo-cruzroja {
            height: 80px;
            transition: transform 0.3s;
        }

        .logo-cruzroja:hover {
            transform: scale(1.02);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .btn-voluntario {
            background: var(--azul-institucional);
            color: white;
            border: none;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0, 45, 114, 0.2);
        }

        .btn-voluntario:hover {
            background: var(--cruz-roja);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(237, 28, 36, 0.3);
        }

        .search-box input {
            border: 2px solid var(--gris-fondo);
            border-radius: 50px;
            padding: 10px 45px 10px 25px;
            width: 280px;
            font-size: 0.9rem;
            transition: all 0.3s;
        }

        .search-box input:focus {
            border-color: var(--cruz-roja);
            box-shadow: none;
            width: 320px;
        }

        .search-box button {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--cruz-roja);
            font-size: 1.1rem;
        }

        /* Navegación principal */
        .main-navbar {
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            position: fixed;
            top: 110px;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 0;
        }

        .nav-link {
            color: var(--gris-oscuro) !important;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 22px 15px !important;
            transition: all 0.3s;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--cruz-roja) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 4px;
            background: var(--cruz-roja);
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Dropdown menus - Estilo Moderno */
        .dropdown-menu {
            border: none;
            box-shadow: var(--shadow-premium);
            border-radius: 12px;
            padding: 15px 0;
            margin-top: 0;
            min-width: 280px;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (min-width: 992px) {
            .nav-item.dropdown:hover .dropdown-menu {
                display: block;
            }
        }

        .dropdown-item {
            padding: 12px 25px;
            font-weight: 500;
            font-size: 0.9rem;
            color: var(--gris-oscuro);
            transition: all 0.2s;
        }

        .dropdown-item:hover {
            background: var(--gris-fondo);
            color: var(--cruz-roja);
            padding-left: 30px;
        }

        /* Footer Moderno */
        footer {
            background: #0B111A;
            color: #E0E0E0;
            padding: 80px 0 40px;
            margin-top: 100px;
            position: relative;
        }

        footer h5 {
            color: white;
            font-size: 1.1rem;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 12px;
        }

        footer h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--cruz-roja);
        }

        .footer-links a {
            color: #E0E0E0;
            text-decoration: none;
            display: block;
            margin-bottom: 15px;
            transition: all 0.3s;
            font-size: 0.95rem;
        }

        .footer-links a:hover {
            color: var(--cruz-roja);
            transform: translateX(5px);
        }

        .footer-contact p {
            margin-bottom: 18px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 0.95rem;
        }

        .footer-contact i {
            color: var(--cruz-roja);
            margin-top: 4px;
        }

        /* Botón WhatsApp Premium */
        .whatsapp-float {
            position: fixed;
            width: 65px;
            height: 65px;
            bottom: 40px;
            right: 40px;
            background: #25D366;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.3);
            z-index: 1000;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.1) rotate(10deg);
            color: white;
            box-shadow: 0 15px 30px rgba(37, 211, 102, 0.4);
        }

    </style>

    @yield('styles')
</head>

<body>

    <!-- Header Superior -->
    <div class="top-header navbar-fixed-top bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/CruzRoja.jpg') }}" alt="Cruz Roja Huila" class="logo-cruzroja mb" style="width: 250px; height: 110px; object-fit: contain;">
                    </a>
                </div> 
                <div class="col-md-8">
                    <div class="header-actions justify-content-end">
                        <a href="{{ route('voluntariado') }}" class="btn-voluntario">
                            Se Voluntario
                        </a>
                        <div class="search-box">
                            <!-- Búsqueda -->
                            <form id="search-form" class="d-flex" role="search">
                                <input
                                    id="search-input"
                                    class="form-control me-2"
                                    type="search"
                                    placeholder="Buscar..."
                                    aria-label="Buscar"
                                    minlength="3">
                                <button id="search-button" class="btn text-danger" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navegación Principal -->
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto">

                    <!-- Sala de Prensa -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prensa') }}">Sala De Prensa</a>
                    </li>

                    <!-- Conózcanos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Conózcanos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('conocenos.principios') }}">Principios</a></li>
                            <li><a class="dropdown-item" href="{{ route('conocenos.historia') }}">Historia</a></li>
                            <li><a class="dropdown-item" href="{{ route('conocenos.mision-vision') }}">Misión y Visión</a></li>
                            <li><a class="dropdown-item" href="{{ route('conocenos.donde-estamos') }}">Dónde estamos</a></li>
                            <li><a class="dropdown-item" href="{{ route('conocenos.atencion-usuario') }}">Atención al usuario</a></li>
                        </ul>
                    </li>

                    <!-- Qué Hacemos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Qué Hacemos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('que-hacemos.gestion-riesgo') }}">Gestión del Riesgo</a></li>
                            <li><a class="dropdown-item" href="{{ route('que-hacemos.construccion-paz') }}">Construcción de Paz</a></li>
                            <li><a class="dropdown-item" href="{{ route('que-hacemos.atencion-emergencias') }}">Atención de Emergencias</a></li>
                            <li><a class="dropdown-item" href="{{ route('que-hacemos.eventos-masivos') }}">Atención Eventos Masivos</a></li>
                        </ul>
                    </li>

                    <!-- Voluntariados -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('voluntariado') }}" role="button" data-bs-toggle="dropdown">
                            Voluntariado
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('voluntariado.socorristas') }}">Socorristas</a></li>
                            <li><a class="dropdown-item" href="{{ route('voluntariado.juventudes') }}">Servicio social</a></li>
                            <li><a class="dropdown-item" href="{{ route('voluntariado.damas-grises') }}">Damas Grises</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('voluntariado.como-ser-voluntario') }}">Cómo ser Voluntario</a></li>
                        </ul>
                    </li>

                    <!-- Vacunaciones -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('vacunacion') }}" role="button" data-bs-toggle="dropdown">
                            Vacunaciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('vacunacion.ninos-gestantes') }}">Niños y Gestantes</a></li>
                            <li><a class="dropdown-item" href="{{ route('vacunacion.adultos') }}">Adultos</a></li>
                            <li><a class="dropdown-item" href="{{ route('vacunacion.adolescentes') }}">Adolescentes</a></li>
                            <li><a class="dropdown-item" href="{{ route('vacunacion.riesgos') }}">Vacunación riesgos laborales</a></li>
                        </ul>
                    </li>

                    <!-- Oferta Educativa -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('educacion') }}" role="button" data-bs-toggle="dropdown">
                            Oferta educativa
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('educacion') }}">Programas</a>
                            <a class="dropdown-item" href="{{ route('educacion.tecnicos-laborales') }}">Técnicos Laborales</a>
                            <a class="dropdown-item" href="{{ route('educacion.diplomados') }}">Diplomados</a>
                            <a class="dropdown-item" href="{{ route('educacion.cursos') }}">Cursos</a>
                            <a class="dropdown-item" href="{{ route('educacion.capacitaciones-empresariales') }}">Capacitaciones Empresariales</a>
                            <a class="dropdown-item" href="{{ route('educacion.educacion-virtual') }}">Educación Virtual</a>
                        </div>
                    </li>

                    <!-- Servicios de Salud -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('salud') }}" role="button" data-bs-toggle="dropdown">
                            Servicios de salud
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('salud') }}">Servicios</a>
                            <a class="dropdown-item" href="{{ route('salud.vacunaciones') }}">Vacunaciones</a>
                            <a class="dropdown-item" href="{{ route('salud.laboratorios-clinicos') }}">Laboratorios Clínicos</a>
                            <a class="dropdown-item" href="{{ route('salud.examenes-rutina') }}">Exámenes de rutina</a>
                            <a class="dropdown-item" href="{{ route('salud.pruebas-especiales') }}">Pruebas Especiales</a>
                            <a class="dropdown-item" href="{{ route('salud.inmunologia') }}">Inmunología</a>
                            <a class="dropdown-item" href="{{ route('salud.examenes-laboratorio-empresarial') }}">Exámenes de laboratorio clínico empresariales</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <img src="{{ asset('img/CruzRoja.jpg') }}" alt="Cruz Roja Huila" class="mb-3" style="max-width: 200px;">
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">Contáctanos</h5>
                    <div class="footer-contact">
                        <p><strong>WhatsApp:</strong> +57 317 297 1272</p>
                        <p><strong>Instagram:</strong> @cruzrojahuila</p>
                        <p><strong>Facebook:</strong> Cruz Roja Huila</p>
                        <p><strong>Correo:</strong> info@cruzrojahuila.org</p>
                        <p><strong>Dirección:</strong> Calle 26 &, Cra 5a - A, Comuna 2, Neiva, Huila</p>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">Enlaces de Interés</h5>
                    <div class="footer-links">
                        <a href="{{ route('prensa') }}">Sala de Prensa</a>
                        <a href="{{ route('voluntariado') }}">Voluntariado</a>
                        <a href="{{ route('educacion') }}">Oferta Educativa</a>
                        <a href="{{ route('salud') }}">Servicios de Salud</a>
                        <a href="{{ route('informes-gestion') }}">Informes de Gestión</a>
                        <a href="{{ route('login') }}" class="opacity-75"><i class="fas fa-lock me-2" style="font-size: 0.8rem;"></i>Portal Administrativo</a>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">Términos y Condiciones</h5>
                    <div class="footer-links">
                        <a href="{{ route('terminos') }}">Términos y condiciones</a>
                        <a href="{{ route('privacidad') }}">Política de Privacidad</a>
                        <a href="{{ route('habeas-data') }}">Habeas Data</a>
                    </div>
                </div>
            </div>

            <hr class="border-secondary mt-4 mb-3">

            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0" style="font-size: 0.9rem;">&copy; 2026 Cruz Roja Colombiana - Seccional Huila. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="https://facebook.com/cruzrojahuila" class="text-white me-3" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://instagram.com/cruzrojahuila" class="text-white me-3" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="https://twitter.com/cruzrojahuila" class="text-white me-3" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="https://youtube.com/cruzrojahuila" class="text-white" target="_blank"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Botón WhatsApp -->
    <a href="https://wa.me/573172971272" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Active nav item
        const currentPath = window.location.pathname;
        document.querySelectorAll('.nav-link').forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.style.color = 'var(--cruz-roja)';
                link.style.fontWeight = '700';
            }
        });

        // Permitir navegación al hacer clic en enlaces dropdown (solo en desktop)
        document.querySelectorAll('.dropdown-toggle').forEach(dropdownToggle => {
            dropdownToggle.addEventListener('click', function(e) {
                // Solo en desktop (pantallas grandes)
                if (window.innerWidth > 991) {
                    const href = this.getAttribute('href');
                    // Si tiene un href válido (no es #), navegar
                    if (href && href !== '#' && !href.startsWith('javascript:')) {
                        e.preventDefault();
                        e.stopPropagation();
                        window.location.href = href;
                    }
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchForm = document.getElementById('search-form');
            const searchInput = document.getElementById('search-input');

            if (searchForm && searchInput) {
                searchForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    const searchTerm = searchInput.value.trim();

                    if (searchTerm.length < 3) {
                        alert('Por favor, ingresa al menos 3 caracteres para buscar');
                        return;
                    }

                    window.location.href = `/buscar?q=${encodeURIComponent(searchTerm)}`;
                });

                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        searchForm.dispatchEvent(new Event('submit'));
                    }
                });
            }
        });
    </script>

    @yield('scripts')
</body>

</html>