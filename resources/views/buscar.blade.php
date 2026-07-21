@extends('layouts.app')

@section('title', 'Resultados de Búsqueda - Cruz Roja Huila')

@section('content')

<!-- Hero Section -->
<section class="search-hero" style="background: linear-gradient(135deg, var(--azul-institucional) 0%, #1a2332 100%); padding: 100px 0 60px; color: white;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">Resultados de Búsqueda</h1>
        <p class="lead opacity-75">Buscando: <span class="text-warning fw-bold">"{{ $query }}"</span></p>
    </div>
</section>

<div class="container my-5">
    <div class="row">
        <!-- Sidebar Filtros -->
        <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow-sm sticky-top" style="top: 180px; border-radius: 15px;">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3">Filtros</h5>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center active border-0 rounded mb-2">
                            Todo <span>{{ $noticias->total() }}</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 rounded mb-2">
                            Noticias <span>{{ $noticias->total() }}</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 rounded mb-2">
                            Programas <span>{{ count($servicios) }}</span>
                        </a>
                    </div>
                    <hr>
                    <p class="small text-muted mb-0">Mostrando resultados para noticias y servicios</p>
                </div>
            </div>
        </div>

        <!-- Resultados -->
        <div class="col-lg-9">
            
            @if(count($servicios) > 0)
                <div class="mb-5">
                    <h3 class="fw-bold mb-4"><i class="fas fa-concierge-bell text-danger me-2"></i>Servicios y Programas</h3>
                    <div class="row g-3">
                        @foreach($servicios as $servicio)
                        <div class="col-md-6">
                            <a href="{{ route($servicio->ruta_nombre) }}" class="card border-0 shadow-sm p-4 text-decoration-none text-dark hover-lift h-100" style="border-radius: 15px;">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="icon-box bg-danger-subtle text-danger rounded p-3">
                                        <i class="{{ $servicio->icono }} fa-lg"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 fw-bold">{{ $servicio->nombre }}</h5>
                                        <p class="small text-muted mb-0">{{ Str::limit($servicio->descripcion, 100) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <hr class="my-5 opacity-25">
            @endif

            @if($noticias->count() > 0)
                <h3 class="fw-bold mb-4"><i class="fas fa-newspaper text-danger me-2"></i>Noticias y Artículos</h3>
                <div class="row g-4">
                    @foreach($noticias as $noticia)
                        <div class="col-12">
                            <div class="card border-0 shadow-sm overflow-hidden result-card" style="border-radius: 15px; transition: transform 0.3s;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        @if($noticia->imagen)
                                            <img src="{{ asset('storage/' . $noticia->imagen) }}" class="img-fluid h-100 object-fit-cover" alt="{{ $noticia->titulo }}" onerror="this.src='{{ asset('reales/real-20.jpeg') }}'">
                                        @else
                                            <img src="{{ asset('reales/real-20.jpeg') }}" class="img-fluid h-100 object-fit-cover" alt="placeholder">
                                        @endif
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-4">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <span class="badge bg-danger-subtle text-danger rounded-pill px-3">{{ $noticia->categoria ?? 'Noticia' }}</span>
                                                <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> {{ $noticia->fecha_publicacion->format('d M, Y') }}</small>
                                            </div>
                                            <h4 class="card-title fw-bold mb-3">{{ $noticia->titulo }}</h4>
                                            <p class="card-text text-muted mb-4">
                                                {{ Str::limit(strip_tags($noticia->contenido), 180) }}
                                            </p>
                                            <a href="{{ route('prensa.detalle', $noticia->id) }}" class="btn btn-outline-primary rounded-pill px-4">
                                                Leer más <i class="fas fa-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Paginación -->
                <div class="d-flex justify-content-center mt-5">
                    {{ $noticias->appends(['q' => $query])->links('pagination::bootstrap-5') }}
                </div>

            @else
                <!-- No hay resultados -->
                <div class="text-center py-5">
                    <div class="mb-4">
                        <i class="fas fa-search text-muted opacity-25" style="font-size: 5rem;"></i>
                    </div>
                    <h2 class="fw-bold">No encontramos resultados</h2>
                    <p class="text-muted lead">Intenta buscar con otras palabras clave (ej: "salud", "cursos", "huila")</p>
                    <a href="{{ route('home') }}" class="btn btn-primary rounded-pill px-5 mt-3">
                        Volver al Inicio
                    </a>
                </div>

                <!-- Sugerencias -->
                <div class="mt-5">
                    <h5 class="fw-bold mb-4">Tal vez te interese:</h5>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <a href="{{ route('educacion') }}" class="card border-0 shadow-sm p-3 text-decoration-none text-dark hover-lift">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box bg-primary-subtle text-primary rounded p-2">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <h6 class="mb-0 fw-bold">Oferta Educativa</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('salud') }}" class="card border-0 shadow-sm p-3 text-decoration-none text-dark hover-lift">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box bg-success-subtle text-success rounded p-2">
                                        <i class="fas fa-heartbeat"></i>
                                    </div>
                                    <h6 class="mb-0 fw-bold">Servicios de Salud</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('voluntariado') }}" class="card border-0 shadow-sm p-3 text-decoration-none text-dark hover-lift">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box bg-warning-subtle text-warning rounded p-2">
                                        <i class="fas fa-hands-helping"></i>
                                    </div>
                                    <h6 class="mb-0 fw-bold">Voluntariado</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    .result-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
    }

    .hover-lift {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .hover-lift:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05) !important;
    }

    .pagination .page-link {
        color: var(--azul-institucional);
        border: none;
        margin: 0 5px;
        border-radius: 8px;
    }

    .pagination .active .page-link {
        background-color: var(--cruz-roja);
        color: white;
    }

    .search-hero {
        margin-top: -40px;
    }
</style>
@endsection

