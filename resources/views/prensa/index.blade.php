@extends('layouts.app')

@section('title', 'Sala de Prensa - Cruz Roja Huila')

@section('content')

<!-- Banner Sala de Prensa -->
<section class="page-header" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Sala De Prensa</h1>
        <p class="lead">Mantente informado sobre nuestras últimas noticias y eventos</p>
    </div>
</section>

<div class="container my-5">
    
    <!-- Esta Semana -->
    <section class="mb-5">
        <h2 class="section-heading mb-4">Esta Semana</h2>
        
        <div class="row g-4">
            @php
            // Obtiene noticias del config y rota según la semana del año
            $todasSemanales = config('noticias.semanales');
            $semanaAño = now()->weekOfYear;
            
            // Rota las noticias cada semana (muestra 2 diferentes cada semana)
            $inicio = ($semanaAño * 2) % count($todasSemanales);
            $noticiasSemanales = array_slice($todasSemanales, $inicio, 2);
            
            // Si no hay suficientes, agrega desde el inicio
            if (count($noticiasSemanales) < 2) {
                $noticiasSemanales = array_merge(
                    $noticiasSemanales, 
                    array_slice($todasSemanales, 0, 2 - count($noticiasSemanales))
                );
            }
            @endphp

            @foreach($noticiasSemanales as $index => $noticia)
            <div class="col-md-6">
                <div class="noticia-card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div class="noticia-imagen" style="background-image: url('{{ asset($noticia['imagen']) }}');"></div>
                        </div>
                        <div class="col-md-7">
                            <div class="noticia-contenido">
                                <h3 class="noticia-titulo">{{ $noticia['titulo'] }}</h3>
                                <p class="noticia-descripcion">{{ $noticia['descripcion'] }}</p>
                                <p class="noticia-fecha">
                                    <i class="far fa-calendar-alt me-2"></i>
                                    Fecha: {{ now()->subDays(($index + 1) * 2)->format('d/m/Y H:i') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Este Mes -->
    <section class="mb-5">
        <h2 class="section-heading mb-4">Este Mes</h2>
        
        <div class="row g-4">
            @php
            // Obtiene noticias del config y rota según el mes
            $todasMensuales = config('noticias.mensuales');
            $mes = now()->month;
            
            // Rota las noticias cada mes (muestra 2 diferentes cada mes)
            $inicio = ($mes * 2) % count($todasMensuales);
            $noticiasMensuales = array_slice($todasMensuales, $inicio, 2);
            
            // Si no hay suficientes, agrega desde el inicio
            if (count($noticiasMensuales) < 2) {
                $noticiasMensuales = array_merge(
                    $noticiasMensuales, 
                    array_slice($todasMensuales, 0, 2 - count($noticiasMensuales))
                );
            }
            @endphp

            @foreach($noticiasMensuales as $index => $noticia)
            <div class="col-md-6">
                <div class="noticia-card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div class="noticia-imagen" style="background-image: url('{{ asset($noticia['imagen']) }}');"></div>
                        </div>
                        <div class="col-md-7">
                            <div class="noticia-contenido">
                                <h3 class="noticia-titulo">{{ $noticia['titulo'] }}</h3>
                                <p class="noticia-descripcion">{{ $noticia['descripcion'] }}</p>
                                <p class="noticia-fecha">
                                    <i class="far fa-calendar-alt me-2"></i>
                                    Fecha: {{ now()->subDays(($index + 1) * 7)->format('d/m/Y H:i') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</div>

@endsection

@section('styles')
<style>
    .section-heading {
        font-size: 2rem;
        font-weight: 700;
        color: #1a2332;
        position: relative;
        padding-bottom: 10px;
    }

    .section-heading::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 80px;
        height: 4px;
        background: #ED1C24;
    }

    .noticia-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
        cursor: pointer;
    }

    .noticia-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(237, 28, 36, 0.15);
    }

    .noticia-imagen {
        height: 220px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .noticia-imagen-placeholder {
        background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);
    }

    .noticia-contenido {
        padding: 25px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .noticia-titulo {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1a2332;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .noticia-descripcion {
        color: #666;
        font-size: 0.95rem;
        margin-bottom: 15px;
        flex-grow: 1;
    }

    .noticia-fecha {
        color: #999;
        font-size: 0.85rem;
        margin-bottom: 0;
        display: flex;
        align-items: center;
    }

    .noticia-fecha i {
        color: #ED1C24;
    }

    @media (max-width: 768px) {
        .noticia-imagen {
            height: 180px;
        }

        .noticia-contenido {
            padding: 20px;
        }

        .section-heading {
            font-size: 1.5rem;
        }
    }
</style>
@endsection