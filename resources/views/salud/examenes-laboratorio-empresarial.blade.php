@extends('layouts.app')

@section('title', 'Exámenes de Laboratorio Clínico Empresariales - Cruz Roja Huila')

@section('content')

<!-- Banner Header -->
<section class="page-header-laboratorio" style="background: linear-gradient(135deg, #12284C 0%, #2C3E50 100%); padding: 80px 0;">
    <div class="container text-center text-white">
        <h1 class="display-5 fw-bold">Exámenes De Laboratorio Clínico Empresariales</h1>
        <p class="lead">Servicios especializados de laboratorio para empresas</p>
    </div>
</section>

<!-- Exámenes -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title-lab">Nuestros Exámenes</h2>
            <p class="lead text-muted">Contamos con todos los exámenes requeridos para salud ocupacional</p>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Glicemia -->
            <div class="col-md-6 col-lg-3">
                <div class="examen-card">
                    <div class="examen-contenido">
                        <h3>glicemia</h3>
                    </div>
                </div>
            </div>

            <!-- Perfil Lipídico -->
            <div class="col-md-6 col-lg-3">
                <div class="examen-card">
                    <div class="examen-contenido">
                        <h3>perfil lipídico</h3>
                        <p class="examen-detalle">(colesterol, triglicéridos, colesterol hdl)</p>
                    </div>
                </div>
            </div>

            <!-- Creatinina -->
            <div class="col-md-6 col-lg-3">
                <div class="examen-card">
                    <div class="examen-contenido">
                        <h3>creatitinina</h3>
                    </div>
                </div>
            </div>

            <!-- Cuadro Hemático -->
            <div class="col-md-6 col-lg-3">
                <div class="examen-card">
                    <div class="examen-contenido">
                        <h3>cuadro hematico</h3>
                    </div>
                </div>
            </div>

            <!-- ELISA para HIV-VIH -->
            <div class="col-md-6 col-lg-3">
                <div class="examen-card">
                    <div class="examen-contenido">
                        <h3>alisa para HIV-VIH</h3>
                    </div>
                </div>
            </div>

            <!-- Pruebas de Embarazo -->
            <div class="col-md-6 col-lg-3">
                <div class="examen-card">
                    <div class="examen-contenido">
                        <h3>pruebas de embarazo</h3>
                    </div>
                </div>
            </div>

            <!-- Parcial de Orina -->
            <div class="col-md-6 col-lg-3">
                <div class="examen-card">
                    <div class="examen-contenido">
                        <h3>parcial de orina</h3>
                    </div>
                </div>
            </div>

            <!-- Titulaciones Anticuerpos Hepatitis B -->
            <div class="col-md-6 col-lg-3">
                <div class="examen-card">
                    <div class="examen-contenido">
                        <h3>titulaciones anticuerpos hepatitis B</h3>
                    </div>
                </div>
            </div>

            <!-- Tiempos de Coagulación -->
            <div class="col-md-6 col-lg-3">
                <div class="examen-card">
                    <div class="examen-contenido">
                        <h3>tiempos coagulacion</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    :root {
        --lab-primary: #1a2332;
        --lab-secondary: #2C3E50;
        --cruz-roja: #ED1C24;
    }

    .page-header-laboratorio {
        background: linear-gradient(135deg, var(--lab-primary) 0%, var(--lab-secondary) 100%);
        padding: 80px 0;
    }

    .section-title-lab {
        color: var(--lab-primary);
        font-weight: 700;
        font-size: 2.5rem;
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 20px;
    }

    .section-title-lab::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--cruz-roja);
    }

    /* Tarjetas de Exámenes - Diseño según la imagen */
    .examen-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        height: 100%;
        min-height: 140px;
        border: 2px solid #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .examen-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(26, 35, 50, 0.2);
        border-color: var(--lab-primary);
    }

    .examen-contenido {
        padding: 25px 20px;
        text-align: center;
    }

    .examen-contenido h3 {
        color: var(--lab-primary);
        font-size: 1.1rem;
        font-weight: 700;
        margin: 0;
        transition: all 0.3s;
        line-height: 1.4;
    }

    .examen-card:hover .examen-contenido h3 {
        color: var(--cruz-roja);
    }

    .examen-detalle {
        color: #666;
        font-size: 0.85rem;
        margin: 8px 0 0 0;
        font-weight: 500;
        line-height: 1.3;
    }

    @media (max-width: 768px) {
        .page-header-laboratorio {
            padding: 60px 0;
        }

        .page-header-laboratorio h1 {
            font-size: 1.8rem;
        }

        .section-title-lab {
            font-size: 2rem;
        }

        .examen-card {
            min-height: 120px;
        }

        .examen-contenido {
            padding: 20px 15px;
        }

        .examen-contenido h3 {
            font-size: 1rem;
        }

        .examen-detalle {
            font-size: 0.8rem;
        }
    }

    @media (max-width: 576px) {
        .examen-contenido h3 {
            font-size: 0.95rem;
        }
    }
</style>
@endsection