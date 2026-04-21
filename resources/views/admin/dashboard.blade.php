@extends('layouts.app')

@section('title', 'Panel de Administración - Cruz Roja Huila')

@section('content')

<!-- Header -->
<section class="admin-header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1 class="mb-0"><i class="fas fa-user-shield me-2"></i>Panel de Administración</h1>
                <p class="text-muted mb-0">Bienvenido, {{ session('admin_nombre') }}</p>
                <p class="text-muted mb-0">Gestión de inscripciones y contactos</p>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('admin.usuarios') }}" class="btn btn-outline-light">
                    <i class="fas fa-users-cog me-2"></i>Administradores
                </a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-sign-out-alt me-2"></i>Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Estadísticas Rápidas -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-3 col-lg-2">
                <div class="stat-card" style="border-left: 4px solid #ffc107;">
                    <div class="stat-icon" style="background: #ffc107;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-info">
                        <h3 id="total-cursos">0</h3>
                        <p>Pendientes Cursos</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-2">
                <div class="stat-card" style="border-left: 4px solid #28a745;">
                    <div class="stat-icon" style="background: #28a745;">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="stat-info">
                        <h3 id="total-confirmados">0</h3>
                        <p>Confirmados</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-2">
                <div class="stat-card" style="border-left: 4px solid #3498db;">
                    <div class="stat-icon" style="background: #3498db;">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="stat-info">
                        <h3 id="total-tecnicos">0</h3>
                        <p>Técnicos</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-2">
                <div class="stat-card" style="border-left: 4px solid #27ae60;">
                    <div class="stat-icon" style="background: #27ae60;">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="stat-info">
                        <h3 id="total-diplomados">0</h3>
                        <p>Diplomados</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-2">
                <div class="stat-card" style="border-left: 4px solid #f39c12;">
                    <div class="stat-icon" style="background: #f39c12;">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="stat-info">
                        <h3 id="total-empresariales">0</h3>
                        <p>Empresariales</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-2">
                <div class="stat-card" style="border-left: 4px solid #9b59b6;">
                    <div class="stat-icon" style="background: #9b59b6;">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="stat-info">
                        <h3 id="total-virtuales">0</h3>
                        <p>Virtuales</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-2">
                <div class="stat-card" style="border-left: 4px solid #e74c3c;">
                    <div class="stat-icon" style="background: #e74c3c;">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <div class="stat-info">
                        <h3 id="total-voluntarios">0</h3>
                        <p>Voluntarios</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tabs de Navegación -->
<section class="py-4">
    <div class="container">
        <ul class="nav nav-tabs admin-tabs" id="adminTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="inscritos-tab" data-bs-toggle="tab" data-bs-target="#inscritos" type="button">
                    <i class="fas fa-user-check me-2"></i>Todos los Inscritos
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="cursos-tab" data-bs-toggle="tab" data-bs-target="#cursos" type="button">
                    <i class="fas fa-graduation-cap me-2"></i>Cursos
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tecnicos-tab" data-bs-toggle="tab" data-bs-target="#tecnicos" type="button">
                    <i class="fas fa-user-graduate me-2"></i>Técnicos
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="diplomados-tab" data-bs-toggle="tab" data-bs-target="#diplomados" type="button">
                    <i class="fas fa-certificate me-2"></i>Diplomados
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="empresariales-tab" data-bs-toggle="tab" data-bs-target="#empresariales" type="button">
                    <i class="fas fa-building me-2"></i>Empresariales
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="virtuales-tab" data-bs-toggle="tab" data-bs-target="#virtuales" type="button">
                    <i class="fas fa-laptop me-2"></i>Virtuales
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="voluntarios-tab" data-bs-toggle="tab" data-bs-target="#voluntarios" type="button">
                    <i class="fas fa-hands-helping me-2"></i>Voluntarios
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="mensajes-tab" data-bs-toggle="tab" data-bs-target="#mensajes" type="button">
                    <i class="fas fa-envelope me-2"></i>Mensajes
                </button>
            </li>
        </ul>
    </div>
</section>



<!-- Contenido de Tabs -->
<section class="pb-5">
    <div class="container">
        <div class="tab-content" id="adminTabsContent">

            <!-- Tab: Todos los Inscritos -->
            <div class="tab-pane fade" id="inscritos" role="tabpanel">
                <div class="admin-panel-card">
                    <div class="panel-header">
                        <h4><i class="fas fa-user-check me-2"></i>Todos los Estudiantes Inscritos</h4>
                        <div class="panel-actions">
                            <select id="filter-categoria" class="form-select form-select-sm">
                                <option value="todos">Todas las Categorías</option>
                                <option value="cursos">Cursos</option>
                                <option value="tecnicos">Técnicos Laborales</option>
                                <option value="diplomados">Diplomados</option>
                                <option value="empresariales">Empresariales</option>
                                <option value="virtuales">Virtuales</option>
                            </select>
                            <select id="filter-programa" class="form-select form-select-sm">
                                <option value="">Todos los Programas</option>
                            </select>
                            <input type="text" id="search-inscritos" class="form-control form-control-sm" placeholder="Buscar...">
                            <button class="btn btn-success btn-sm" onclick="exportarInscritos()">
                                <i class="fas fa-file-excel me-2"></i>Descargar Excel
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table admin-table">
                            <thead>
                                <tr>
                                    <th>Categoría</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Programa</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tabla-inscritos">
                                <tr>
                                    <td colspan="8" class="text-center text-muted py-4">
                                        <i class="fas fa-spinner fa-spin me-2"></i>Cargando...
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="alert alert-info mb-0">
                                    <strong>Total Inscritos:</strong> <span id="total-inscritos-count">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab: Cursos -->
            <div class="tab-pane fade show active" id="cursos" role="tabpanel">
                <div class="admin-panel-card">
                    <div class="panel-header">
                        <h4><i class="fas fa-graduation-cap me-2"></i>Inscripciones a Cursos</h4>
                        <div class="panel-actions">
                            <input type="text" id="search-cursos" class="form-control form-control-sm" placeholder="Buscar...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table admin-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Curso</th>
                                    <th>inversion</th>
                                    <th>Horario</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tabla-cursos">
                                <tr>
                                    <td colspan="8" class="text-center text-muted py-4">
                                        <i class="fas fa-spinner fa-spin me-2"></i>Cargando...
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tab: Técnicos -->
            <div class="tab-pane fade" id="tecnicos" role="tabpanel">
                <div class="admin-panel-card">
                    <div class="panel-header">
                        <h4><i class="fas fa-user-graduate me-2"></i>Técnicos Laborales</h4>
                        <div class="panel-actions">
                            <input type="text" id="search-tecnicos" class="form-control form-control-sm" placeholder="Buscar...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table admin-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Programa</th>
                                    <th>Horario</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tabla-tecnicos">
                                <tr>
                                    <td colspan="9" class="text-center text-muted py-4">
                                        <i class="fas fa-spinner fa-spin me-2"></i>Cargando...
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tab: Diplomados -->
            <div class="tab-pane fade" id="diplomados" role="tabpanel">
                <div class="admin-panel-card">
                    <div class="panel-header">
                        <h4><i class="fas fa-certificate me-2"></i>Diplomados</h4>
                        <div class="panel-actions">
                            <input type="text" id="search-diplomados" class="form-control form-control-sm" placeholder="Buscar...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table admin-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Diplomado</th>
                                    <th>Horario</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tabla-diplomados">
                                <tr>
                                    <td colspan="9" class="text-center text-muted py-4">
                                        <i class="fas fa-spinner fa-spin me-2"></i>Cargando...
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tab: Empresariales -->
            <div class="tab-pane fade" id="empresariales" role="tabpanel">
                <div class="admin-panel-card">
                    <div class="panel-header">
                        <h4><i class="fas fa-building me-2"></i>Capacitaciones Empresariales</h4>
                        <div class="panel-actions">
                            <input type="text" id="search-empresariales" class="form-control form-control-sm" placeholder="Buscar...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table admin-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Empresa</th>
                                    <th>Contacto</th>
                                    <th>Email</th>
                                    <th>Programa</th>
                                    <th>Participantes</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tabla-empresariales">
                                <tr>
                                    <td colspan="9" class="text-center text-muted py-4">
                                        <i class="fas fa-spinner fa-spin me-2"></i>Cargando...
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tab: Virtuales -->
            <div class="tab-pane fade" id="virtuales" role="tabpanel">
                <div class="admin-panel-card">
                    <div class="panel-header">
                        <h4><i class="fas fa-laptop me-2"></i>Educación Virtual</h4>
                        <div class="panel-actions">
                            <input type="text" id="search-virtuales" class="form-control form-control-sm" placeholder="Buscar...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table admin-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Curso</th>
                                    <th>Nivel</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tabla-virtuales">
                                <tr>
                                    <td colspan="9" class="text-center text-muted py-4">
                                        <i class="fas fa-spinner fa-spin me-2"></i>Cargando...
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tab: Voluntarios -->
            <div class="tab-pane fade" id="voluntarios" role="tabpanel">
                <div class="admin-panel-card">
                    <div class="panel-header">
                        <h4><i class="fas fa-hands-helping me-2"></i>Voluntarios</h4>
                        <div class="panel-actions">
                            <input type="text" id="search-voluntarios" class="form-control form-control-sm" placeholder="Buscar...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table admin-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Edad</th>
                                    <th>Disponibilidad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tabla-voluntarios">
                                <tr>
                                    <td colspan="8" class="text-center text-muted py-4">
                                        <i class="fas fa-spinner fa-spin me-2"></i>Cargando...
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <div class="tab-pane fade" id="mensajes" role="tabpanel">
                <div class="admin-panel-card">
                    <div class="panel-header">
                        <h4><i class="fas fa-envelope me-2"></i>Mensajes de Contacto</h4>
                        <div class="panel-actions">
                            <input type="text" id="search-mensajes" class="form-control form-control-sm" placeholder="Buscar...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table admin-table">
                            <thead>
                                <tr>
                                    <th>Estado</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Asunto</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tabla-mensajes">
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">
                                        <i class="fas fa-spinner fa-spin me-2"></i>Cargando...
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Modal de Detalles -->
<div class="modal fade" id="detalleModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detalleModalLabel">Detalles</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="detalleModalBody">
                <!-- Contenido dinámico -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Confirmación de Eliminación -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-danger text-white border-0">
                <h5 class="modal-title">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    Confirmar Eliminación
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="text-center mb-3">
                    <i class="fas fa-trash-alt text-danger" style="font-size: 3rem;"></i>
                </div>
                <p class="text-center mb-0" id="deleteMessage">
                    ¿Estás seguro de que deseas eliminar este registro?
                </p>
                <p class="text-center text-muted small mt-2">
                    Esta acción no se puede deshacer.
                </p>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Cancelar
                </button>
                <button type="button" class="btn btn-danger px-4" id="confirmDeleteBtn">
                    <i class="fas fa-trash me-2"></i>Eliminar
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    #deleteModal .modal-content {
        border-radius: 15px;
        overflow: hidden;
    }

    #deleteModal .modal-header {
        padding: 20px 25px;
    }

    #deleteModal .modal-body {
        padding: 30px;
    }

    #deleteModal .btn {
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s;
    }

    #deleteModal .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }


    .admin-header {
        background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);
        padding: 30px 0;
        color: white;
    }

    .stat-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.8rem;
    }

    .stat-info h3 {
        margin: 0;
        font-size: 2rem;
        font-weight: 700;
        color: #1a2332;
    }

    .stat-info p {
        margin: 0;
        font-size: 0.9rem;
        color: #666;
    }

    .admin-tabs {
        border: none;
        background: white;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .admin-tabs .nav-link {
        border: none;
        color: #666;
        padding: 12px 20px;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s;
    }

    .admin-tabs .nav-link:hover {
        background: #f8f9fa;
        color: #1a2332;
    }

    .admin-tabs .nav-link.active {
        background: #ED1C24;
        color: white;
    }

    .admin-panel-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .panel-header {
        padding: 20px;
        background: #f8f9fa;
        border-bottom: 2px solid #e9ecef;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
    }

    .panel-header h4 {
        margin: 0;
        color: #1a2332;
        font-weight: 700;
    }

    .panel-actions {
        display: flex;
        gap: 10px;
    }

    .panel-actions input,
    .panel-actions select {
        width: 200px;
    }

    .admin-table {
        margin: 0;
    }

    .admin-table thead {
        background: #1a2332;
        color: white;
    }

    .admin-table thead th {
        border: none;
        padding: 15px 10px;
        font-weight: 600;
        font-size: 0.9rem;
    }

    .admin-table tbody td {
        padding: 12px 10px;
        vertical-align: middle;
        font-size: 0.9rem;
    }

    .admin-table tbody tr:hover {
        background: #f8f9fa;
    }

    .btn-action {
        padding: 5px 10px;
        font-size: 0.85rem;
        margin: 0 2px;
    }

    .badge-status {
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.85rem;
        font-weight: 600;
    }

    .badge-pendiente {
        background: #ffc107;
        color: #000;
    }

    .badge-respondido {
        background: #28a745;
        color: white;
    }

    @media (max-width: 768px) {
        .panel-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .panel-actions {
            width: 100%;
            flex-direction: column;
        }

        .panel-actions input,
        .panel-actions select {
            width: 100%;
        }

        .admin-table {
            font-size: 0.8rem;
        }

        .stat-info h3 {
            font-size: 1.5rem;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Cargar estadísticas al inicio
        cargarEstadisticas();

        // Cargar datos de cada tab
        cargarCursos();
        cargarTecnicos();
        cargarDiplomados();
        cargarEmpresariales();
        cargarVirtuales();
        cargarVoluntarios();
        cargarInscritos();

        // Setup búsqueda
        setupBusquedaCursos();
        setupBusquedaTecnicos();
        setupBusquedaDiplomados();
        setupBusquedaEmpresariales();
        setupBusquedaVirtuales();
        setupBusquedaVoluntarios();
        setupBusquedaMensajes();
        setupFiltrosInscritos();
    });

    // =======================
    // MENSAJES DE CONTACTO
    // =======================
    function cargarMensajes(filtros = {}) {
        const tbody = document.getElementById('tabla-mensajes');
        tbody.innerHTML = '<tr><td colspan="6" class="text-center"><i class="fas fa-spinner fa-spin"></i> Cargando...</td></tr>';

        const params = new URLSearchParams(filtros);

        fetch(`/admin/api/mensajes?${params}`)
            .then(response => response.json())
            .then(data => {
                if (data.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="6" class="text-center text-muted py-4">No hay mensajes de contacto disponibles</td></tr>';
                    return;
                }

                tbody.innerHTML = data.map(mensaje => `
                    <tr class="${mensaje.leido ? '' : 'fw-bold bg-light'}">
                        <td>
                            <span class="badge bg-${mensaje.leido ? 'secondary' : 'primary'}">
                                ${mensaje.leido ? 'Leído' : 'Nuevo'}
                            </span>
                        </td>
                        <td>${new Date(mensaje.created_at).toLocaleDateString()}</td>
                        <td>${mensaje.nombre}</td>
                        <td>${mensaje.email}</td>
                        <td>${mensaje.asunto}</td>
                        <td>
                            <button class="btn btn-sm btn-info btn-action" onclick="verDetalleMensaje(${mensaje.id})" title="Ver mensaje">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-danger btn-action" onclick="confirmarEliminar('mensaje', ${mensaje.id})" title="Eliminar">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `).join('');
            });
    }

    function setupBusquedaMensajes() {
        const input = document.getElementById('search-mensajes');
        input.addEventListener('input', debounce(function() {
            cargarMensajes({ buscar: this.value });
        }, 500));
    }

    function verDetalleMensaje(id) {
        fetch(`/admin/api/mensajes/${id}`)
            .then(response => response.json())
            .then(mensaje => {
                const modalBody = document.getElementById('detalleModalBody');
                modalBody.innerHTML = `
                    <div class="p-3">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p class="text-muted small mb-1">Nombre</p>
                                <p class="fw-bold fs-5">${mensaje.nombre}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted small mb-1">Fecha</p>
                                <p class="fw-bold fs-5">${new Date(mensaje.created_at).toLocaleString()}</p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p class="text-muted small mb-1">Email</p>
                                <p class="fw-bold">${mensaje.email}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted small mb-1">Teléfono</p>
                                <p class="fw-bold">${mensaje.telefono || 'N/A'}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="mt-4">
                            <p class="text-muted small mb-2">Asunto</p>
                            <h4 class="fw-bold text-danger mb-3">${mensaje.asunto}</h4>
                            <div class="p-4 bg-light rounded-3 shadow-sm border">
                                <p class="mb-0" style="white-space: pre-wrap; line-height: 1.6;">${mensaje.mensaje}</p>
                            </div>
                        </div>
                    </div>
                `;
                document.getElementById('detalleModalLabel').textContent = 'Detalle de Mensaje';
                new bootstrap.Modal(document.getElementById('detalleModal')).show();
                
                // Recargar lista para actualizar el estado de "Leído"
                cargarMensajes();
            });
    }


    // =======================
    // TODOS LOS INSCRITOS
    // =======================
    function cargarInscritos(filtros = {}) {
        const tbody = document.getElementById('tabla-inscritos');
        tbody.innerHTML = '<tr><td colspan="8" class="text-center"><i class="fas fa-spinner fa-spin"></i> Cargando...</td></tr>';

        const params = new URLSearchParams(filtros);

        fetch(`/admin/api/inscritos?${params}`)
            .then(response => response.json())
            .then(data => {
                if (data.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="8" class="text-center text-muted py-4">No hay estudiantes inscritos con los filtros seleccionados</td></tr>';
                    document.getElementById('total-inscritos-count').textContent = '0';
                    return;
                }

                document.getElementById('total-inscritos-count').textContent = data.length;

                tbody.innerHTML = data.map(item => {
                    let cursoCorto = item.curso || 'N/A';
                    cursoCorto = cursoCorto.replace('Curso de ', '').replace('Programa de ', '');
                    if (cursoCorto.length > 30) {
                        cursoCorto = cursoCorto.substring(0, 30) + '...';
                    }

                    let categoriaColor = {
                        'Curso': 'primary',
                        'Técnico': 'info',
                        'Diplomado': 'success',
                        'Empresarial': 'warning',
                        'Virtual': 'secondary'
                    };

                    let nombreMostrar = item.nombre || item.nombre_contacto || item.empresa || 'N/A';

                    return `
                    <tr>
                        <td><span class="badge bg-${categoriaColor[item.categoria] || 'secondary'}">${item.categoria}</span></td>
                        <td>${new Date(item.created_at).toLocaleDateString()}</td>
                        <td><strong>${nombreMostrar}</strong></td>
                        <td>${item.email}</td>
                        <td>${item.telefono}</td>
                        <td><span class="badge bg-light text-dark">${cursoCorto}</span></td>
                        <td><span class="badge bg-success">${item.estado_texto || item.estado}</span></td>
                        <td>
                            <button class="btn btn-sm btn-info btn-action" onclick="verDetalleInscrito('${item.categoria.toLowerCase()}', ${item.id})" title="Ver detalles">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                `;
                }).join('');
            })
            .catch(error => {
                console.error('Error:', error);
                tbody.innerHTML = '<tr><td colspan="8" class="text-center text-danger py-4">Error al cargar datos</td></tr>';
            });
    }

    function setupFiltrosInscritos() {
        const filterCategoria = document.getElementById('filter-categoria');
        const filterPrograma = document.getElementById('filter-programa');
        const searchInput = document.getElementById('search-inscritos');

        // Cambio de categoría
        filterCategoria.addEventListener('change', function() {
            const categoria = this.value;

            // Limpiar y cargar programas según categoría
            filterPrograma.innerHTML = '<option value="">Todos los Programas</option>';

            if (categoria !== 'todos') {
                fetch(`/admin/api/inscritos/programas?categoria=${categoria}`)
                    .then(response => response.json())
                    .then(programas => {
                        programas.forEach(programa => {
                            const option = document.createElement('option');
                            option.value = programa;
                            option.textContent = programa;
                            filterPrograma.appendChild(option);
                        });
                    });
            }

            cargarInscritos({
                categoria: categoria,
                programa: filterPrograma.value,
                buscar: searchInput.value
            });
        });

        // Cambio de programa
        filterPrograma.addEventListener('change', function() {
            cargarInscritos({
                categoria: filterCategoria.value,
                programa: this.value,
                buscar: searchInput.value
            });
        });

        // Búsqueda
        let timeout;
        searchInput.addEventListener('input', function() {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                cargarInscritos({
                    categoria: filterCategoria.value,
                    programa: filterPrograma.value,
                    buscar: this.value
                });
            }, 500);
        });
    }

    function verDetalleInscrito(categoria, id) {
        let tipo = categoria === 'técnico' ? 'tecnico' : categoria;
        verDetalle(tipo, id);
    }

    function exportarInscritos() {
        const categoria = document.getElementById('filter-categoria').value;
        const programa = document.getElementById('filter-programa').value;
        const url = `/admin/api/inscritos/exportar?categoria=${categoria}&programa=${encodeURIComponent(programa)}`;
        window.location.href = url;
        mostrarToast('Descargando archivo Excel...', 'success');
    }

    // =======================
    // ESTADÍSTICAS
    // =======================
    function cargarEstadisticas() {
        fetch('/admin/api/estadisticas')
            .then(response => response.json())
            .then(data => {
                document.getElementById('total-cursos').textContent = data.cursos || 0;
                document.getElementById('total-confirmados').textContent = data.confirmados || 0;
                document.getElementById('total-tecnicos').textContent = data.tecnicos || 0;
                document.getElementById('total-diplomados').textContent = data.diplomados || 0;
                document.getElementById('total-empresariales').textContent = data.empresariales || 0;
                document.getElementById('total-virtuales').textContent = data.virtuales || 0;
                document.getElementById('total-voluntarios').textContent = data.voluntarios || 0;
            })
            .catch(error => {
                console.error('Error al cargar estadísticas:', error);
            });
    }

    // =======================
    // CURSOS
    // =======================
    function cargarCursos(filtros = {}) {
        const tbody = document.getElementById('tabla-cursos');
        tbody.innerHTML = '<tr><td colspan="9" class="text-center"><i class="fas fa-spinner fa-spin"></i> Cargando...</td></tr>';

        const params = new URLSearchParams(filtros);

        fetch(`/admin/api/inscripciones?${params}`)
            .then(response => response.json())
            .then(data => {
                if (data.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="9" class="text-center text-muted py-4">No hay inscripciones pendientes</td></tr>';
                    return;
                }

                tbody.innerHTML = data.map(item => {
                    let cursoCorto = item.curso || 'N/A';
                    cursoCorto = cursoCorto.replace('Curso de ', '');
                    if (cursoCorto.length > 25) {
                        cursoCorto = cursoCorto.substring(0, 25) + '...';
                    }

                    return `
                    <tr>
                        <td>${item.id}</td>
                        <td>${new Date(item.created_at).toLocaleDateString()}</td>
                        <td>${item.nombre}</td>
                        <td>${item.email}</td>
                        <td>${item.telefono}</td>
                        <td><strong>${cursoCorto}</strong></td>
                        <td>${item.inversion || 'N/A'}</td>
                        <td>${item.horario}</td>
                        <td>
                            <button class="btn btn-sm btn-success btn-action" onclick="confirmarInscripcion('curso', ${item.id})" title="Confirmar e Inscribir">
                                <i class="fas fa-check"></i>
                            </button>
                            <button class="btn btn-sm btn-info btn-action" onclick="verDetalle('curso', ${item.id})" title="Ver detalles">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-danger btn-action" onclick="eliminar('curso', ${item.id}, '${item.nombre}')" title="Eliminar">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `;
                }).join('');
            })
            .catch(error => {
                console.error('Error:', error);
                tbody.innerHTML = '<tr><td colspan="9" class="text-center text-danger py-4">Error al cargar datos. Verifica la consola del navegador.</td></tr>';
            });
    }

    function setupBusquedaCursos() {
        const searchInput = document.getElementById('search-cursos');
        if (!searchInput) return;

        let timeout;
        searchInput.addEventListener('input', function() {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                cargarCursos({
                    search: this.value
                });
            }, 500);
        });
    }

    function cargarTecnicos(filtros = {}) {
        const tbody = document.getElementById('tabla-tecnicos');
        tbody.innerHTML = '<tr><td colspan="9" class="text-center"><i class="fas fa-spinner fa-spin"></i> Cargando...</td></tr>';

        const params = new URLSearchParams(filtros);

        fetch(`/admin/api/tecnicos?${params}`)
            .then(response => response.json())
            .then(data => {
                if (data.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="9" class="text-center text-muted py-4">No hay inscripciones de técnicos pendientes</td></tr>';
                    return;
                }

                tbody.innerHTML = data.map(item => `
                <tr>
                    <td>${item.id}</td>
                    <td>${new Date(item.created_at).toLocaleDateString()}</td>
                    <td>${item.nombre}</td>
                    <td>${item.email}</td>
                    <td>${item.telefono}</td>
                    <td>${item.curso}</td>
                    <td>${item.horario}</td>
                    <td>${item.inversion}</td>
                    <td><span class="badge bg-${item.estado_badge_color}">${item.estado_texto}</span></td>
                    <td>
                        <button class="btn btn-sm btn-success btn-action" onclick="confirmarInscripcion('tecnico', ${item.id})" title="Matricular">
                            <i class="fas fa-check"></i>
                        </button>
                        <button class="btn btn-sm btn-info btn-action" onclick="verDetalle('tecnico', ${item.id})">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-sm btn-danger btn-action" onclick="eliminar('tecnico', ${item.id}, '${item.nombre}')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `).join('');
            })
            .catch(error => {
                console.error('Error:', error);
                tbody.innerHTML = '<tr><td colspan="9" class="text-center text-danger py-4">Error al cargar datos</td></tr>';
            });
    }

    function setupBusquedaTecnicos() {
        const searchInput = document.getElementById('search-tecnicos');
        let timeout;
        searchInput.addEventListener('input', function() {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                cargarTecnicos({
                    buscar: this.value
                });
            }, 500);
        });
    }

    // =======================
    // DIPLOMADOS
    // =======================
    function cargarDiplomados(filtros = {}) {
        const tbody = document.getElementById('tabla-diplomados');
        tbody.innerHTML = '<tr><td colspan="9" class="text-center"><i class="fas fa-spinner fa-spin"></i> Cargando...</td></tr>';

        const params = new URLSearchParams(filtros);

        fetch(`/admin/api/diplomados?${params}`)
            .then(response => response.json())
            .then(data => {
                if (data.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="9" class="text-center text-muted py-4">No hay inscripciones de diplomados pendientes</td></tr>';
                    return;
                }

                tbody.innerHTML = data.map(item => `
                <tr>
                    <td>${item.id}</td>
                    <td>${new Date(item.created_at).toLocaleDateString()}</td>
                    <td>${item.nombre}</td>
                    <td>${item.email}</td>
                    <td>${item.telefono}</td>
                    <td>${item.curso}</td>
                    <td>${item.horario}</td>
                    <td>${item.inversion}</td>
                    <td><span class="badge bg-${item.estado_badge_color}">${item.estado_texto}</span></td>
                    <td>
                        <button class="btn btn-sm btn-success btn-action" onclick="confirmarInscripcion('diplomado', ${item.id})" title="Matricular">
                            <i class="fas fa-check"></i>
                        </button>
                        <button class="btn btn-sm btn-info btn-action" onclick="verDetalle('diplomado', ${item.id})">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-sm btn-danger btn-action" onclick="eliminar('diplomado', ${item.id}, '${item.nombre}')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `).join('');
            })
            .catch(error => {
                console.error('Error:', error);
                tbody.innerHTML = '<tr><td colspan="9" class="text-center text-danger py-4">Error al cargar datos</td></tr>';
            });
    }

    function setupBusquedaDiplomados() {
        const searchInput = document.getElementById('search-diplomados');
        let timeout;
        searchInput.addEventListener('input', function() {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                cargarDiplomados({
                    buscar: this.value
                });
            }, 500);
        });
    }

    // =======================
    // EMPRESARIALES
    // =======================
    function cargarEmpresariales(filtros = {}) {
        const tbody = document.getElementById('tabla-empresariales');
        tbody.innerHTML = '<tr><td colspan="9" class="text-center"><i class="fas fa-spinner fa-spin"></i> Cargando...</td></tr>';

        const params = new URLSearchParams(filtros);

        fetch(`/admin/api/empresariales?${params}`)
            .then(response => response.json())
            .then(data => {
                if (data.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="9" class="text-center text-muted py-4">No hay solicitudes empresariales pendientes</td></tr>';
                    return;
                }

                tbody.innerHTML = data.map(item => `
                <tr>
                    <td>${item.id}</td>
                    <td>${new Date(item.created_at).toLocaleDateString()}</td>
                    <td>${item.empresa}</td>
                    <td>${item.nombre_contacto}</td>
                    <td>${item.email}</td>
                    <td>${item.curso}</td>
                    <td>${item.numero_participantes}</td>
                    <td><span class="badge bg-${item.estado_badge_color}">${item.estado_texto}</span></td>
                    <td>
                        <button class="btn btn-sm btn-success btn-action" onclick="confirmarInscripcion('empresarial', ${item.id})" title="Confirmar">
                            <i class="fas fa-check"></i>
                        </button>
                        <button class="btn btn-sm btn-info btn-action" onclick="verDetalle('empresarial', ${item.id})">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-sm btn-danger btn-action" onclick="eliminar('empresarial', ${item.id}, '${item.empresa}')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `).join('');
            })
            .catch(error => {
                console.error('Error:', error);
                tbody.innerHTML = '<tr><td colspan="9" class="text-center text-danger py-4">Error al cargar datos</td></tr>';
            });
    }

    function setupBusquedaEmpresariales() {
        const searchInput = document.getElementById('search-empresariales');
        let timeout;
        searchInput.addEventListener('input', function() {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                cargarEmpresariales({
                    buscar: this.value
                });
            }, 500);
        });
    }

    // =======================
    // VIRTUALES
    // =======================
    function cargarVirtuales(filtros = {}) {
        const tbody = document.getElementById('tabla-virtuales');
        tbody.innerHTML = '<tr><td colspan="9" class="text-center"><i class="fas fa-spinner fa-spin"></i> Cargando...</td></tr>';

        const params = new URLSearchParams(filtros);

        fetch(`/admin/api/virtuales?${params}`)
            .then(response => response.json())
            .then(data => {
                if (data.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="9" class="text-center text-muted py-4">No hay inscripciones virtuales pendientes</td></tr>';
                    return;
                }

                tbody.innerHTML = data.map(item => `
                <tr>
                    <td>${item.id}</td>
                    <td>${new Date(item.created_at).toLocaleDateString()}</td>
                    <td>${item.nombre}</td>
                    <td>${item.email}</td>
                    <td>${item.telefono}</td>
                    <td>${item.curso}</td>
                    <td>${item.nivel_conocimiento_texto || item.nivel_conocimiento}</td>
                    <td><span class="badge bg-${item.estado_badge_color}">${item.estado_texto}</span></td>
                    <td>
                        <button class="btn btn-sm btn-success btn-action" onclick="confirmarInscripcion('virtual', ${item.id})" title="Activar">
                            <i class="fas fa-check"></i>
                        </button>
                        <button class="btn btn-sm btn-info btn-action" onclick="verDetalle('virtual', ${item.id})">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-sm btn-danger btn-action" onclick="eliminar('virtual', ${item.id}, '${item.nombre}')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `).join('');
            })
            .catch(error => {
                console.error('Error:', error);
                tbody.innerHTML = '<tr><td colspan="9" class="text-center text-danger py-4">Error al cargar datos</td></tr>';
            });
    }

    function setupBusquedaVirtuales() {
        const searchInput = document.getElementById('search-virtuales');
        let timeout;
        searchInput.addEventListener('input', function() {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                cargarVirtuales({
                    buscar: this.value
                });
            }, 500);
        });
    }

    // =======================
    // VOLUNTARIOS
    // =======================
    function cargarVoluntarios(filtros = {}) {
        const tbody = document.getElementById('tabla-voluntarios');
        tbody.innerHTML = '<tr><td colspan="8" class="text-center"><i class="fas fa-spinner fa-spin"></i> Cargando...</td></tr>';

        const params = new URLSearchParams(filtros);

        fetch(`/admin/api/voluntarios?${params}`)
            .then(response => response.json())
            .then(data => {
                if (data.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="8" class="text-center text-muted py-4">No hay voluntarios</td></tr>';
                    return;
                }

                tbody.innerHTML = data.map(voluntario => `
                    <tr>
                        <td>${voluntario.id}</td>
                        <td>${new Date(voluntario.created_at).toLocaleDateString()}</td>
                        <td>${voluntario.nombre}</td>
                        <td>${voluntario.email}</td>
                        <td>${voluntario.telefono}</td>
                        <td>${voluntario.edad}</td>
                        <td>${voluntario.disponibilidad}</td>
                        <td>
                            <button class="btn btn-sm btn-info btn-action" onclick="verDetalle('voluntario', ${voluntario.id})">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-danger btn-action" onclick="eliminar('voluntario', ${voluntario.id}, '${voluntario.nombre}')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `).join('');
            })
            .catch(error => {
                console.error('Error:', error);
                tbody.innerHTML = '<tr><td colspan="8" class="text-center text-danger py-4">Error al cargar datos</td></tr>';
            });
    }

    function setupBusquedaVoluntarios() {
        const searchInput = document.getElementById('search-voluntarios');
        let timeout;
        searchInput.addEventListener('input', function() {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                cargarVoluntarios({
                    search: this.value
                });
            }, 500);
        });
    }

    // Confirmar inscripción y mover a "Inscritos"
    function confirmarInscripcion(tipo, id) {
        const mensajes = {
            'curso': '¿Confirmar e inscribir a este estudiante en el curso?',
            'tecnico': '¿Matricular a este estudiante en el programa técnico?',
            'diplomado': '¿Matricular a este estudiante en el diplomado?',
            'empresarial': '¿Confirmar esta solicitud empresarial?',
            'virtual': '¿Activar este estudiante en el curso virtual?'
        };

        const estadosObjetivo = {
            'curso': 'confirmado',
            'tecnico': 'matriculado',
            'diplomado': 'matriculado',
            'empresarial': 'confirmado',
            'virtual': 'activo'
        };

        if (!confirm(mensajes[tipo])) {
            return;
        }

        mostrarToast('Procesando...', 'info');

        const urls = {
            'curso': `/admin/api/inscripciones/${id}/estado`,
            'tecnico': `/admin/api/tecnicos/${id}/estado`,
            'diplomado': `/admin/api/diplomados/${id}/estado`,
            'empresarial': `/admin/api/empresariales/${id}/estado`,
            'virtual': `/admin/api/virtuales/${id}/estado`
        };

        fetch(urls[tipo], {
                method: 'PATCH',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({
                    estado: estadosObjetivo[tipo],
                    observaciones: ''
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    mostrarToast('✓ Estudiante inscrito correctamente', 'success');

                    // Recargar las tablas correspondientes
                    switch (tipo) {
                        case 'curso':
                            cargarCursos();
                            break;
                        case 'tecnico':
                            cargarTecnicos();
                            break;
                        case 'diplomado':
                            cargarDiplomados();
                            break;
                        case 'empresarial':
                            cargarEmpresariales();
                            break;
                        case 'virtual':
                            cargarVirtuales();
                            break;
                    }

                    // Recargar inscritos y estadísticas
                    cargarInscritos();
                    cargarEstadisticas();
                } else {
                    mostrarToast('✗ Error al confirmar inscripción', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                mostrarToast('✗ Error al confirmar inscripción', 'error');
            });
    }

    // =======================
    // FUNCIONES GENÉRICAS
    // =======================

    // Variables globales para el modal de eliminación
    let deleteType = '';
    let deleteId = 0;

    function verDetalle(tipo, id) {
        let url = '';
        let titulo = '';

        switch (tipo) {
            case 'curso':
                url = `/admin/api/inscripciones/${id}`;
                titulo = 'Detalle Inscripción Curso';
                break;
            case 'tecnico':
                url = `/admin/api/tecnicos/${id}`;
                titulo = 'Detalle Técnico Laboral';
                break;
            case 'diplomado':
                url = `/admin/api/diplomados/${id}`;
                titulo = 'Detalle Diplomado';
                break;
            case 'empresarial':
                url = `/admin/api/empresariales/${id}`;
                titulo = 'Detalle Capacitación Empresarial';
                break;
            case 'virtual':
                url = `/admin/api/virtuales/${id}`;
                titulo = 'Detalle Curso Virtual';
                break;
            case 'voluntario':
                url = `/admin/api/voluntarios/${id}`;
                titulo = 'Detalle Voluntario';
                break;
        }

        fetch(url)
            .then(response => response.json())
            .then(data => {
                let contenido = generarContenidoDetalle(tipo, data);
                mostrarModal(titulo, contenido);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error al cargar detalles');
            });
    }

    function generarContenidoDetalle(tipo, data) {
        let contenido = '<div class="row">';

        switch (tipo) {
            case 'curso':
                contenido += `
                    <div class="col-md-6"><strong>Nombre:</strong> ${data.nombre}</div>
                    <div class="col-md-6"><strong>Email:</strong> ${data.email}</div>
                    <div class="col-md-6"><strong>Teléfono:</strong> ${data.telefono}</div>
                    <div class="col-md-6"><strong>Documento:</strong> ${data.documento}</div>
                    <div class="col-md-6"><strong>Curso:</strong> ${data.curso}</div>
                    <div class="col-md-6"><strong>Horario:</strong> ${data.horario}</div>
                    <div class="col-md-6"><strong>Ciudad:</strong> ${data.ciudad}</div>
                    <div class="col-md-6"><strong>Fecha:</strong> ${new Date(data.created_at).toLocaleString()}</div>
                `;
                break;
            case 'tecnico':
            case 'diplomado':
                contenido += `
                    <div class="col-md-6"><strong>Nombre:</strong> ${data.nombre}</div>
                    <div class="col-md-6"><strong>Email:</strong> ${data.email}</div>
                    <div class="col-md-6"><strong>Teléfono:</strong> ${data.telefono}</div>
                    <div class="col-md-6"><strong>Documento:</strong> ${data.documento}</div>
                    <div class="col-md-6"><strong>Programa:</strong> ${data.curso}</div>
                    <div class="col-md-6"><strong>Horario:</strong> ${data.horario}</div>
                    <div class="col-md-6"><strong>Ciudad:</strong> ${data.ciudad}</div>
                    <div class="col-md-6"><strong>Estado:</strong> <span class="badge bg-${data.estado_badge_color}">${data.estado_texto}</span></div>
                    <div class="col-md-6"><strong>Fecha:</strong> ${new Date(data.created_at).toLocaleString()}</div>
                `;
                break;
            case 'empresarial':
                contenido += `
                    <div class="col-md-6"><strong>Empresa:</strong> ${data.empresa}</div>
                    <div class="col-md-6"><strong>NIT:</strong> ${data.nit}</div>
                    <div class="col-md-6"><strong>Sector:</strong> ${data.sector || 'N/A'}</div>
                    <div class="col-md-6"><strong>Participantes:</strong> ${data.numero_participantes}</div>
                    <div class="col-md-6"><strong>Contacto:</strong> ${data.nombre_contacto}</div>
                    <div class="col-md-6"><strong>Cargo:</strong> ${data.cargo}</div>
                    <div class="col-md-6"><strong>Email:</strong> ${data.email}</div>
                    <div class="col-md-6"><strong>Teléfono:</strong> ${data.telefono}</div>
                    <div class="col-md-6"><strong>Ciudad:</strong> ${data.ciudad}</div>
                    <div class="col-md-6"><strong>Programa:</strong> ${data.curso}</div>
                    <div class="col-md-6"><strong>Fecha Preferida:</strong> ${data.fecha_preferida ? new Date(data.fecha_preferida).toLocaleDateString() : 'N/A'}</div>
                    <div class="col-md-6"><strong>Estado:</strong> <span class="badge bg-${data.estado_badge_color}">${data.estado_texto}</span></div>
                    <div class="col-md-12 mt-3"><strong>Mensaje:</strong><br>${data.mensaje || 'N/A'}</div>
                    <div class="col-md-12 mt-2"><strong>Fecha Registro:</strong> ${new Date(data.created_at).toLocaleString()}</div>
                `;
                break;
            case 'virtual':
                contenido += `
                    <div class="col-md-6"><strong>Nombre:</strong> ${data.nombre}</div>
                    <div class="col-md-6"><strong>Email:</strong> ${data.email}</div>
                    <div class="col-md-6"><strong>Teléfono:</strong> ${data.telefono}</div>
                    <div class="col-md-6"><strong>Documento:</strong> ${data.documento}</div>
                    <div class="col-md-6"><strong>Curso:</strong> ${data.curso}</div>
                    <div class="col-md-6"><strong>Nivel:</strong> ${data.nivel_conocimiento_texto}</div>
                    <div class="col-md-6"><strong>Ciudad:</strong> ${data.ciudad}</div>
                    <div class="col-md-6"><strong>País:</strong> ${data.pais}</div>
                    <div class="col-md-6"><strong>Estado:</strong> <span class="badge bg-${data.estado_badge_color}">${data.estado_texto}</span></div>
                    <div class="col-md-12 mt-3"><strong>Motivación:</strong><br>${data.motivacion || 'No especificada'}</div>
                    <div class="col-md-12 mt-2"><strong>Fecha:</strong> ${new Date(data.created_at).toLocaleString()}</div>
                `;
                break;
            case 'voluntario':
                contenido += `
                    <div class="col-md-6"><strong>Nombre:</strong> ${data.nombre}</div>
                    <div class="col-md-6"><strong>Email:</strong> ${data.email}</div>
                    <div class="col-md-6"><strong>Teléfono:</strong> ${data.telefono}</div>
                    <div class="col-md-6"><strong>Edad:</strong> ${data.edad}</div>
                    <div class="col-md-6"><strong>Ocupación:</strong> ${data.ocupacion}</div>
                    <div class="col-md-6"><strong>Disponibilidad:</strong> ${data.disponibilidad}</div>
                    <div class="col-md-12 mt-2"><strong>Motivación:</strong> ${data.motivacion || 'No especificada'}</div>
                    <div class="col-md-6"><strong>Fecha:</strong> ${new Date(data.created_at).toLocaleString()}</div>
                `;
                break;
        }

        contenido += '</div>';
        return contenido;
    }

    function eliminar(tipo, id, nombre = '') {
        deleteType = tipo;
        deleteId = id;

        let mensaje = '';
        switch (tipo) {
            case 'curso':
                mensaje = nombre ? `¿Eliminar inscripción de <strong>${nombre}</strong>?` : '¿Eliminar esta inscripción?';
                break;
            case 'tecnico':
                mensaje = nombre ? `¿Eliminar inscripción de técnico <strong>${nombre}</strong>?` : '¿Eliminar esta inscripción?';
                break;
            case 'diplomado':
                mensaje = nombre ? `¿Eliminar inscripción de diplomado <strong>${nombre}</strong>?` : '¿Eliminar esta inscripción?';
                break;
            case 'empresarial':
                mensaje = nombre ? `¿Eliminar solicitud de <strong>${nombre}</strong>?` : '¿Eliminar esta solicitud?';
                break;
            case 'virtual':
                mensaje = nombre ? `¿Eliminar inscripción virtual de <strong>${nombre}</strong>?` : '¿Eliminar esta inscripción?';
                break;
            case 'voluntario':
                mensaje = nombre ? `¿Eliminar voluntario <strong>${nombre}</strong>?` : '¿Eliminar este voluntario?';
                break;
        }

        document.getElementById('deleteMessage').innerHTML = mensaje;
        const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
        modal.show();
    }

    // Confirmar eliminación
    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        const modal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
        modal.hide();
        ejecutarEliminacion(deleteType, deleteId);
    });

    function ejecutarEliminacion(tipo, id) {
        let url = '';
        let recargarFuncion = null;

        switch (tipo) {
            case 'curso':
                url = `/admin/api/inscripciones/${id}`;
                recargarFuncion = cargarCursos;
                break;
            case 'tecnico':
                url = `/admin/api/tecnicos/${id}`;
                recargarFuncion = cargarTecnicos;
                break;
            case 'diplomado':
                url = `/admin/api/diplomados/${id}`;
                recargarFuncion = cargarDiplomados;
                break;
            case 'empresarial':
                url = `/admin/api/empresariales/${id}`;
                recargarFuncion = cargarEmpresariales;
                break;
            case 'virtual':
                url = `/admin/api/virtuales/${id}`;
                recargarFuncion = cargarVirtuales;
                break;
            case 'voluntario':
                url = `/admin/api/voluntarios/${id}`;
                recargarFuncion = cargarVoluntarios;
                break;
        }

        mostrarToast('Eliminando...', 'info');

        fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    mostrarToast('✓ Eliminado correctamente', 'success');
                    recargarFuncion();
                    cargarEstadisticas();
                } else {
                    mostrarToast('✗ Error al eliminar', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                mostrarToast('✗ Error al eliminar', 'error');
            });
    }

    function mostrarModal(titulo, contenido) {
        document.getElementById('detalleModalLabel').textContent = titulo;
        document.getElementById('detalleModalBody').innerHTML = contenido;
        const modal = new bootstrap.Modal(document.getElementById('detalleModal'));
        modal.show();
    }

    function mostrarToast(mensaje, tipo = 'info') {
        let toastContainer = document.getElementById('toast-container');
        if (!toastContainer) {
            toastContainer = document.createElement('div');
            toastContainer.id = 'toast-container';
            toastContainer.style.cssText = 'position: fixed; top: 20px; right: 20px; z-index: 9999;';
            document.body.appendChild(toastContainer);
        }

        const bgColor = tipo === 'success' ? '#28a745' : tipo === 'error' ? '#dc3545' : '#17a2b8';

        const toast = document.createElement('div');
        toast.className = 'toast-notification';
        toast.style.cssText = `
            background: ${bgColor};
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            animation: slideInRight 0.3s ease-out;
            min-width: 250px;
            font-weight: 500;
        `;
        toast.innerHTML = mensaje;

        toastContainer.appendChild(toast);

        setTimeout(() => {
            toast.style.animation = 'slideOutRight 0.3s ease-out';
            setTimeout(() => toast.remove(), 300);
        }, 3000);
    }

    // Agregar estilos de animación
    if (!document.getElementById('toast-animations')) {
        const style = document.createElement('style');
        style.id = 'toast-animations';
        style.textContent = `
            @keyframes slideInRight {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            @keyframes slideOutRight {
                from { transform: translateX(0); opacity: 1; }
                to { transform: translateX(100%); opacity: 0; }
            }
        `;
        document.head.appendChild(style);
    }
</script>
@endsection