@extends('layouts.app')

@section('title', 'Gestión de Administradores')

@section('content')
<div class="container-fluid py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-0"><i class="fas fa-users-cog me-2"></i>Administradores del Sistema</h2>
            <p class="text-muted mb-0">Gestiona los usuarios con acceso al panel de administración</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-2"></i>Volver al Dashboard
            </a>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalNuevoAdmin">
                <i class="fas fa-user-plus me-2"></i>Nuevo Administrador
            </button>
        </div>
    </div>

    <!-- Tabla de Administradores -->
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="tablaAdmins">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Nombre Completo</th>
                            <th>Fecha de Creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Se llena dinámicamente -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nuevo Administrador -->
<div class="modal fade" id="modalNuevoAdmin" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title"><i class="fas fa-user-plus me-2"></i>Nuevo Administrador</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formNuevoAdmin">
                    <div class="mb-3">
                        <label class="form-label">Usuario *</label>
                        <input type="text" class="form-control" name="username" required>
                        <small class="text-muted">Mínimo 4 caracteres</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre Completo *</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña *</label>
                        <input type="password" class="form-control" name="password" required>
                        <small class="text-muted">Mínimo 8 caracteres</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirmar Contraseña *</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" onclick="crearAdmin()">
                    <i class="fas fa-save me-2"></i>Crear Administrador
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Cambiar Contraseña -->
<div class="modal fade" id="modalCambiarPassword" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title"><i class="fas fa-key me-2"></i>Cambiar Contraseña</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formCambiarPassword">
                    <input type="hidden" id="admin_id_password" name="admin_id">
                    <div class="mb-3">
                        <label class="form-label">Nueva Contraseña *</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirmar Contraseña *</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-warning" onclick="cambiarPassword()">
                    <i class="fas fa-save me-2"></i>Cambiar Contraseña
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Confirmar Eliminación -->
<div class="modal fade" id="modalEliminarAdmin" tabindex="-1">
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
                    <i class="fas fa-user-times text-danger" style="font-size: 3rem;"></i>
                </div>
                <p class="text-center mb-0" id="mensajeEliminar">
                    <!-- Se llena dinámicamente -->
                </p>
                <p class="text-center text-muted small mt-2">
                    Esta acción no se puede deshacer.
                </p>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Cancelar
                </button>
                <button type="button" class="btn btn-danger px-4" id="btnConfirmarEliminar">
                    <i class="fas fa-trash me-2"></i>Eliminar
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    /* Estilos generales */
    .card {
        border-radius: 10px;
        border: none;
    }

    .table thead {
        background: #1a2332;
        color: white;
    }

    .table thead th {
        border: none;
        padding: 15px 10px;
        font-weight: 600;
    }

    .table tbody tr:hover {
        background: #f8f9fa;
    }

    /* Modal de eliminación */
    #modalEliminarAdmin .modal-content {
        border-radius: 15px;
        overflow: hidden;
    }

    #modalEliminarAdmin .modal-header {
        padding: 20px 25px;
    }

    #modalEliminarAdmin .modal-body {
        padding: 30px;
    }

    #modalEliminarAdmin .btn {
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s;
    }

    #modalEliminarAdmin .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
</style>
@endsection

@section('scripts')
<script>
    // Variables globales para eliminación
    let adminIdEliminar = null;
    let adminUsernameEliminar = '';

    // Cargar administradores al iniciar
    document.addEventListener('DOMContentLoaded', function() {
        cargarAdministradores();
    });

    // Cargar lista de administradores
    function cargarAdministradores() {
        fetch('/admin/api/usuarios')
            .then(response => response.json())
            .then(data => {
                const tbody = document.querySelector('#tablaAdmins tbody');
                tbody.innerHTML = '';

                data.forEach(admin => {
                    const tr = document.createElement('tr');
                    const fecha = new Date(admin.created_at).toLocaleDateString('es-CO');

                    tr.innerHTML = `
                    <td>${admin.id}</td>
                    <td><strong>${admin.username}</strong></td>
                    <td>${admin.nombre}</td>
                    <td>${fecha}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="abrirModalPassword(${admin.id})" title="Cambiar contraseña">
                            <i class="fas fa-key"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="eliminarAdmin(${admin.id}, '${admin.username}')" title="Eliminar">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                `;
                    tbody.appendChild(tr);
                });
            })
            .catch(error => {
                console.error('Error:', error);
                mostrarToast('❌ Error al cargar administradores', 'error');
            });
    }

    // Crear nuevo administrador
    function crearAdmin() {
        const form = document.getElementById('formNuevoAdmin');
        const formData = new FormData(form);

        fetch('/admin/api/usuarios', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(Object.fromEntries(formData))
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    bootstrap.Modal.getInstance(document.getElementById('modalNuevoAdmin')).hide();
                    form.reset();
                    cargarAdministradores();
                    mostrarToast('✅ Administrador creado correctamente', 'success');
                } else {
                    mostrarToast('❌ Error: ' + (data.message || 'No se pudo crear el administrador'), 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                mostrarToast('❌ Error al crear administrador', 'error');
            });
    }

    // Abrir modal cambiar contraseña
    function abrirModalPassword(adminId) {
        document.getElementById('admin_id_password').value = adminId;
        new bootstrap.Modal(document.getElementById('modalCambiarPassword')).show();
    }

    // Cambiar contraseña
    function cambiarPassword() {
        const form = document.getElementById('formCambiarPassword');
        const formData = new FormData(form);
        const adminId = document.getElementById('admin_id_password').value;

        fetch(`/admin/api/usuarios/${adminId}/password`, {
                method: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(Object.fromEntries(formData))
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    bootstrap.Modal.getInstance(document.getElementById('modalCambiarPassword')).hide();
                    form.reset();
                    mostrarToast('✅ Contraseña actualizada correctamente', 'success');
                } else {
                    mostrarToast('❌ Error: ' + (data.message || 'No se pudo cambiar la contraseña'), 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                mostrarToast('❌ Error al cambiar contraseña', 'error');
            });
    }

    // Eliminar administrador
    function eliminarAdmin(id, username) {
        adminIdEliminar = id;
        adminUsernameEliminar = username;

        // Actualizar mensaje
        document.getElementById('mensajeEliminar').innerHTML =
            `¿Estás seguro de eliminar al administrador <strong>"${username}"</strong>?`;

        // Mostrar modal
        const modal = new bootstrap.Modal(document.getElementById('modalEliminarAdmin'));
        modal.show();
    }

    // Confirmar eliminación
    document.getElementById('btnConfirmarEliminar').addEventListener('click', function() {
        // Cerrar modal
        bootstrap.Modal.getInstance(document.getElementById('modalEliminarAdmin')).hide();

        // Ejecutar eliminación
        fetch(`/admin/api/usuarios/${adminIdEliminar}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    cargarAdministradores();
                    mostrarToast('✅ Administrador eliminado correctamente', 'success');
                } else {
                    mostrarToast('❌ ' + data.message, 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                mostrarToast('❌ Error al eliminar administrador', 'error');
            });
    });

    // Función para mostrar toast notifications
    function mostrarToast(mensaje, tipo = 'info') {
        let toastContainer = document.getElementById('toast-container');
        if (!toastContainer) {
            toastContainer = document.createElement('div');
            toastContainer.id = 'toast-container';
            toastContainer.style.cssText = 'position: fixed; top: 20px; right: 20px; z-index: 9999;';
            document.body.appendChild(toastContainer);
        }

        const bgColor = tipo === 'success' ? '#28a745' : tipo === 'error' ? '#dc3545' : '#17a2b8';
        const icon = tipo === 'success' ? '✅' : tipo === 'error' ? '❌' : 'ℹ️';

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
        min-width: 300px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 10px;
    `;
        toast.innerHTML = `<span style="font-size: 1.2rem;">${icon}</span> ${mensaje}`;

        toastContainer.appendChild(toast);

        setTimeout(() => {
            toast.style.animation = 'slideOutRight 0.3s ease-out';
            setTimeout(() => toast.remove(), 300);
        }, 3000);
    }

    // Agregar estilos de animación (solo una vez)
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