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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --cruz-roja: #ED1C24;
            --cruz-roja-dark: #C41419;
            --gris-oscuro: #1a2332;
            --gris-medio: #2C3E50;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-top: 140px;
        }

        /* Header superior */
        .top-header {
            background: white;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .logo-cruzroja {
            height: 80px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .btn-donar {
            background: var(--cruz-roja);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-donar:hover {
            background: var(--cruz-roja-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(237, 28, 36, 0.3);
        }

        .btn-voluntario {
            background: white;
            color: var(--gris-oscuro);
            border: 2px solid var(--gris-oscuro);
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
        }

        .btn-voluntario:hover {
            background: var(--gris-oscuro);
            color: white;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            border: 1px solid #ddd;
            border-radius: 25px;
            padding: 8px 40px 8px 20px;
            width: 250px;
        }

        .search-box button {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--cruz-roja);
        }

        /* Navegación principal */
        .main-navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 90px;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .navbar-fixed-top {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1001;
        }

        .nav-link {
            color: var(--gris-oscuro) !important;
            font-weight: 500;
            padding: 15px 10px !important;
            transition: all 0.3s;
            position: relative;
        }

        .nav-link:hover {
            color: var(--cruz-roja) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: var(--cruz-roja);
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 80%;
        }

        /* Dropdown menus - HOVER activado */
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            padding: 15px 0;
            margin-top: 0;
            min-width: 250px;
            display: none;
        }

        /* Mostrar dropdown al pasar el cursor (SOLO EN DESKTOP) */
        @media (min-width: 992px) {
            .nav-item.dropdown:hover .dropdown-menu {
                display: block;
            }
        }

        .dropdown-item {
            padding: 10px 25px;
            transition: all 0.3s;
            color: var(--gris-oscuro);
        }

        .dropdown-item:hover {
            background: #f8f9fa;
            color: var(--cruz-roja);
            padding-left: 30px;
        }

        .dropdown-toggle::after {
            margin-left: 5px;
        }

        /* Mega menu para dropdowns grandes */
        .mega-menu {
            width: 100%;
            max-width: 900px;
            padding: 20px;
        }

        .mega-menu-column {
            padding: 15px;
        }

        .mega-menu-title {
            font-weight: 700;
            color: var(--cruz-roja);
            margin-bottom: 15px;
            font-size: 0.95rem;
            text-transform: uppercase;
        }

        /* Footer */
        footer {
            background: var(--gris-oscuro);
            color: white;
            padding: 40px 0 20px;
            margin-top: 60px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--cruz-roja);
        }

        .footer-contact p {
            margin-bottom: 10px;
        }

        .footer-contact i {
            width: 20px;
            color: var(--cruz-roja);
        }

        @media (max-width: 991px) {
            body {
                padding-top: 120px;
            }

            .main-navbar {
                top: 70px;
            }

            .search-box input {
                width: 100%;
            }

            .header-actions {
                flex-direction: column;
                align-items: stretch;
            }
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
                        <img src="{{ asset('img/CruzRoja.jpg') }}" alt="Cruz Roja Huila" class="mb" style="width: 190px; height: 90px;">
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
                                <button id="search-button" class="btn btn-outline-light" type="submit">
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

                    <!-- Conócenos -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Conócenos</a>
                    </li>

                    <!-- Sala de Prensa -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prensa') }}">Sala De Prensa</a>
                    </li>

                    <!-- Voluntariados -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('voluntariado') }}" role="button" data-bs-toggle="dropdown">
                            Voluntariados
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('voluntariado.socorristas') }}">Socorristas</a></li>
                            <li><a class="dropdown-item" href="{{ route('voluntariado.juventudes') }}">Servicio social</a></li>
                            <li><a class="dropdown-item" href="{{ route('voluntariado.damas-grises') }}">Damas Grises</a></li>
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