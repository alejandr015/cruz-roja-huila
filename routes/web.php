<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QueHacemosController;
use App\Http\Controllers\VoluntariadoController;
use App\Http\Controllers\VacunacionController;
use App\Http\Controllers\EducacionController;
use App\Http\Controllers\SaludController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\InscripcionTecnicoController;
use App\Http\Controllers\InscripcionDiplomadoController;
use App\Http\Controllers\InscripcionEmpresarialController;
use App\Http\Controllers\InscripcionVirtualController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Página principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rutas públicas de autenticación
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Conócenos
Route::get('/conocenos', [HomeController::class, 'conocenos'])->name('conocenos');
Route::prefix('conocenos')->group(function () {
    Route::get('/principios', [HomeController::class, 'principios'])->name('conocenos.principios');
    Route::get('/historia', [HomeController::class, 'historia'])->name('conocenos.historia');
    Route::get('/mision-vision', [HomeController::class, 'misionVision'])->name('conocenos.mision-vision');
    Route::get('/donde-estamos', [HomeController::class, 'dondeEstamos'])->name('conocenos.donde-estamos');
    Route::get('/atencion-usuario', [HomeController::class, 'atencionUsuario'])->name('conocenos.atencion-usuario');
});
Route::get('/accion-humanitaria', [HomeController::class, 'accionHumanitaria'])->name('accion-humanitaria');
Route::get('/informes-de-gestion', [HomeController::class, 'informesGestion'])->name('informes-gestion');

// Qué Hacemos
Route::prefix('que-hacemos')->group(function () {
    Route::get('/gestion-riesgo', [QueHacemosController::class, 'gestionRiesgo'])->name('que-hacemos.gestion-riesgo');
    Route::get('/construccion-paz', [QueHacemosController::class, 'construccionPaz'])->name('que-hacemos.construccion-paz');
    Route::get('/atencion-emergencias', [QueHacemosController::class, 'atencionEmergencias'])->name('que-hacemos.atencion-emergencias');
    Route::get('/eventos-masivos', [QueHacemosController::class, 'eventosMasivos'])->name('que-hacemos.eventos-masivos');
});

// Sala de Prensa
Route::get('/prensa', [HomeController::class, 'prensa'])->name('prensa');
Route::get('/prensa/{id}', [HomeController::class, 'noticiaDetalle'])->name('prensa.detalle');

// Búsqueda
Route::get('/buscar', [HomeController::class, 'buscar'])->name('buscar');

// Voluntariados
Route::prefix('voluntariado')->group(function () {
    Route::get('/', [VoluntariadoController::class, 'index'])->name('voluntariado');
    Route::get('/socorristas', [VoluntariadoController::class, 'socorristas'])->name('voluntariado.socorristas');
    Route::get('/juventudes', [VoluntariadoController::class, 'juventudes'])->name('voluntariado.juventudes');
    Route::get('/damas-grises', [VoluntariadoController::class, 'damasGrises'])->name('voluntariado.damas-grises');
    Route::get('/ninos-gestantes', [VoluntariadoController::class, 'ninosGestantes'])->name('voluntariado.ninos-gestantes');
    Route::get('/adultos', [VoluntariadoController::class, 'adultos'])->name('voluntariado.adultos');
    Route::get('/adolescentes', [VoluntariadoController::class, 'adolescentes'])->name('voluntariado.adolescentes');
    Route::get('/como-ser-voluntario', [VoluntariadoController::class, 'comoSerVoluntario'])->name('voluntariado.como-ser-voluntario');

    // Inscripción
    Route::post('/inscribirse', [VoluntariadoController::class, 'inscribirse'])->name('voluntariado.inscribirse');
});

// Vacunaciones
Route::prefix('vacunacion')->group(function () {
    Route::get('/', [VacunacionController::class, 'index'])->name('vacunacion');
    Route::get('/ninos-gestantes', [VacunacionController::class, 'ninosGestantes'])->name('vacunacion.ninos-gestantes');
    Route::get('/adultos', [VacunacionController::class, 'adultos'])->name('vacunacion.adultos');
    Route::get('/adolescentes', [VacunacionController::class, 'adolescentes'])->name('vacunacion.adolescentes');
    Route::get('/riesgos-laborales', [VacunacionController::class, 'riesgosLaborales'])->name('vacunacion.riesgos');
});

// Oferta Educativa
Route::prefix('educacion')->group(function () {
    Route::get('/', [EducacionController::class, 'index'])->name('educacion');
    Route::get('/tecnicos-laborales', [EducacionController::class, 'tecnicosLaborales'])->name('educacion.tecnicos-laborales');
    Route::get('/diplomados', [EducacionController::class, 'diplomados'])->name('educacion.diplomados');
    Route::get('/cursos', [EducacionController::class, 'cursos'])->name('educacion.cursos');
    Route::get('/capacitaciones-empresariales', [EducacionController::class, 'capacitacionesEmpresariales'])->name('educacion.capacitaciones-empresariales');
    Route::get('/virtual', [EducacionController::class, 'educacionVirtual'])->name('educacion.educacion-virtual');

    // Inscripción a cursos
    Route::post('/inscripcion', [EducacionController::class, 'inscripcion'])->name('educacion.inscripcion');
    Route::post('/educacion/tecnicos-laborales/inscribir', [InscripcionTecnicoController::class, 'store'])
        ->name('tecnicos.inscribir');
    Route::post('/educacion/diplomados/inscribir', [InscripcionDiplomadoController::class, 'store'])
        ->name('diplomados.inscribir');
    Route::post('/educacion/capacitaciones-empresariales/solicitar', [InscripcionEmpresarialController::class, 'store'])
        ->name('empresariales.solicitar');
    Route::post('/educacion/virtual/inscribir', [InscripcionVirtualController::class, 'store'])
        ->name('virtual.inscribir');
});

// Servicios de Salud
Route::prefix('salud')->group(function () {
    Route::get('/', [SaludController::class, 'index'])->name('salud');
    Route::get('/vacunaciones', [SaludController::class, 'vacunaciones'])->name('salud.vacunaciones');
    Route::get('/pruebas-especiales', [SaludController::class, 'pruebasEspeciales'])->name('salud.pruebas-especiales');
    Route::get('/inmunologia', [SaludController::class, 'inmunologia'])->name('salud.inmunologia');
    Route::get('/laboratorios-clinicos', [SaludController::class, 'laboratoriosClinicos'])->name('salud.laboratorios-clinicos');
    Route::get('/examenes-rutina', [SaludController::class, 'examenesRutina'])->name('salud.examenes-rutina');
    Route::get('/examenes-laboratorio-empresarial', [SaludController::class, 'examenesLaboratorioEmpresarial'])->name('salud.examenes-laboratorio-empresarial');

    // Agendar cita
    Route::post('/agendar-cita', [SaludController::class, 'agendarCita'])->name('salud.agendar-cita');
});

// Donaciones (mantener página de donaciones monetarias)
// Route::post('/donar', [DonacionController::class, 'donar'])
//     ->name('donar');

// Contacto
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');

// Páginas legales
Route::get('/terminos', function () {
    return view('legal.terminos');
})->name('terminos');

Route::get('/privacidad', function () {
    return view('legal.privacidad');
})->name('privacidad');

Route::get('/habeas-data', function () {
    return view('legal.habeas-data');
})->name('habeas-data');

// ============================================
// FORMULARIOS PÚBLICOS CON PROTECCIÓN ANTI-SPAM
// Límite: 3 envíos por hora por IP
// ============================================
Route::middleware('throttle.form:3,60')->group(function () {

    // Inscripciones a Cursos
    //Route::post('/inscripciones/cursos', [EducacionController::class, 'store'])
    // ->name('inscripciones.cursos.store');

    // Técnicos Laborales
    Route::post('/inscripciones/tecnicos', [InscripcionTecnicoController::class, 'store'])
        ->name('inscripciones.tecnicos.store');

    // Diplomados
    Route::post('/inscripciones/diplomados', [InscripcionDiplomadoController::class, 'store'])
        ->name('inscripciones.diplomados.store');

    // Empresariales
    Route::post('/inscripciones/empresariales', [InscripcionEmpresarialController::class, 'store'])
        ->name('inscripciones.empresariales.store');

    // Virtuales
    Route::post('/inscripciones/virtuales', [InscripcionVirtualController::class, 'store'])
        ->name('inscripciones.virtuales.store');

    // Voluntariado
    Route::post('/voluntariado', [VoluntariadoController::class, 'store'])
        ->name('voluntariado.store');

    // Contacto
    Route::post('/contacto', [ContactoController::class, 'store'])
        ->name('contacto.store');
});

// ============================================
// PANEL DE ADMINISTRACIÓN (PRIVADO)
// ============================================
// Acceso: https://tudominio.com/admin/dashboard
// Sin botones públicos - solo por URL directa

Route::prefix('admin')->name('admin.')->middleware('admin.auth')->group(function () {

    // Dashboard principal
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // API Routes para el panel
    Route::prefix('api')->name('api.')->group(function () {

        // Estadísticas generales
        Route::get('/estadisticas', [AdminController::class, 'getEstadisticas'])->name('estadisticas');

        // === INSCRIPCIONES A CURSOS ===
        Route::get('/inscripciones', [AdminController::class, 'getInscripciones'])->name('inscripciones');
        Route::get('/inscripciones/{id}', [AdminController::class, 'getInscripcionDetalle'])->name('inscripciones.detalle');
        Route::delete('/inscripciones/{id}', [AdminController::class, 'deleteInscripcion'])->name('inscripciones.delete');
        Route::patch('/inscripciones/{id}/estado', [AdminController::class, 'updateEstadoCurso'])->name('inscripciones.update-estado');
        Route::get('/inscripciones/confirmados', [AdminController::class, 'getConfirmados'])->name('inscripciones.confirmados');
        Route::get('/inscripciones/exportar', [AdminController::class, 'exportarCursos'])->name('inscripciones.exportar');

        // === TÉCNICOS ===
        Route::get('/tecnicos', [AdminController::class, 'getTecnicos'])->name('tecnicos');
        Route::get('/tecnicos/{id}', [AdminController::class, 'getTecnicoDetalle'])->name('tecnicos.detalle');
        Route::delete('/tecnicos/{id}', [AdminController::class, 'deleteTecnico'])->name('tecnicos.delete');
        Route::patch('/tecnicos/{id}/estado', [AdminController::class, 'updateEstadoTecnico'])->name('tecnicos.update-estado');

        // === DIPLOMADOS ===
        Route::get('/diplomados', [AdminController::class, 'getDiplomados'])->name('diplomados');
        Route::get('/diplomados/{id}', [AdminController::class, 'getDiplomadoDetalle'])->name('diplomados.detalle');
        Route::delete('/diplomados/{id}', [AdminController::class, 'deleteDiplomado'])->name('diplomados.delete');
        Route::patch('/diplomados/{id}/estado', [AdminController::class, 'updateEstadoDiplomado'])->name('diplomados.update-estado');

        // === EMPRESARIALES ===
        Route::get('/empresariales', [AdminController::class, 'getEmpresariales'])->name('empresariales');
        Route::get('/empresariales/{id}', [AdminController::class, 'getEmpresarialDetalle'])->name('empresariales.detalle');
        Route::delete('/empresariales/{id}', [AdminController::class, 'deleteEmpresarial'])->name('empresariales.delete');
        Route::patch('/empresariales/{id}/estado', [AdminController::class, 'updateEstadoEmpresarial'])->name('empresariales.update-estado');

        // === VIRTUALES ===
        Route::get('/virtuales', [AdminController::class, 'getVirtuales'])->name('virtuales');
        Route::get('/virtuales/{id}', [AdminController::class, 'getVirtualDetalle'])->name('virtuales.detalle');
        Route::delete('/virtuales/{id}', [AdminController::class, 'deleteVirtual'])->name('virtuales.delete');
        Route::patch('/virtuales/{id}/estado', [AdminController::class, 'updateEstadoVirtual'])->name('virtuales.update-estado');

        // === VOLUNTARIOS ===
        Route::get('/voluntarios', [AdminController::class, 'getVoluntarios'])->name('voluntarios');
        Route::get('/voluntarios/{id}', [AdminController::class, 'getVoluntarioDetalle'])->name('voluntarios.detalle');
        Route::delete('/voluntarios/{id}', [AdminController::class, 'deleteVoluntario'])->name('voluntarios.delete');

        // === MENSAJES DE CONTACTO ===
        Route::get('/mensajes', [AdminController::class, 'getMensajes'])->name('mensajes');
        Route::get('/mensajes/{id}', [AdminController::class, 'getMensajeDetalle'])->name('mensajes.detalle');
        Route::delete('/mensajes/{id}', [AdminController::class, 'deleteMensaje'])->name('mensajes.delete');

        // === TODOS LOS INSCRITOS ===
        Route::get('/inscritos', [AdminController::class, 'getTodosInscritos'])->name('inscritos');
        Route::get('/inscritos/programas', [AdminController::class, 'getProgramasPorCategoria'])->name('inscritos.programas');
        Route::get('/inscritos/exportar', [AdminController::class, 'exportarTodosInscritos'])->name('inscritos.exportar');

        // Exportar datos (legacy)
        Route::get('/exportar', [AdminController::class, 'exportar'])->name('exportar');
    });

    // Rutas de vistas admin (si las usas)
    Route::get('/inscripciones-tecnicos', [InscripcionTecnicoController::class, 'admin'])
        ->name('inscripciones-tecnicos');

    Route::patch('/inscripciones-tecnicos/{inscripcion}', [InscripcionTecnicoController::class, 'updateEstado'])
        ->name('inscripciones-tecnicos.update');

    Route::delete('/inscripciones-tecnicos/{inscripcion}', [InscripcionTecnicoController::class, 'destroy'])
        ->name('inscripciones-tecnicos.destroy');

    Route::get('/inscripciones-diplomados', [InscripcionDiplomadoController::class, 'admin'])
        ->name('inscripciones-diplomados');

    Route::patch('/inscripciones-diplomados/{inscripcion}', [InscripcionDiplomadoController::class, 'updateEstado'])
        ->name('inscripciones-diplomados.update');

    Route::delete('/inscripciones-diplomados/{inscripcion}', [InscripcionDiplomadoController::class, 'destroy'])
        ->name('inscripciones-diplomados.destroy');

    Route::get('/inscripciones-empresariales', [InscripcionEmpresarialController::class, 'admin'])
        ->name('inscripciones-empresariales');

    Route::patch('/inscripciones-empresariales/{inscripcion}', [InscripcionEmpresarialController::class, 'updateEstado'])
        ->name('inscripciones-empresariales.update');

    Route::delete('/inscripciones-empresariales/{inscripcion}', [InscripcionEmpresarialController::class, 'destroy'])
        ->name('inscripciones-empresariales.destroy');

    Route::get('/inscripciones-virtuales', [InscripcionVirtualController::class, 'admin'])
        ->name('inscripciones-virtuales');

    Route::patch('/inscripciones-virtuales/{inscripcion}', [InscripcionVirtualController::class, 'updateEstado'])
        ->name('inscripciones-virtuales.update');

    Route::delete('/inscripciones-virtuales/{inscripcion}', [InscripcionVirtualController::class, 'destroy'])
        ->name('inscripciones-virtuales.destroy');
    // ============================================
    // GESTIÓN DE ADMINISTRADORES (AL FINAL) ⭐
    // ============================================
    Route::get('/usuarios', [AdminUserController::class, 'index'])->name('usuarios'); // ⭐ CAMBIADO

    Route::prefix('api/usuarios')->name('api.usuarios.')->group(function () {
        Route::get('/', [AdminUserController::class, 'getAdmins'])->name('index');
        Route::post('/', [AdminUserController::class, 'store'])->name('store');
        Route::delete('/{id}', [AdminUserController::class, 'destroy'])->name('destroy');
        Route::put('/{id}/password', [AdminUserController::class, 'updatePassword'])->name('password');
    });
});


// ============================================
// OPCIONAL: Proteger el panel con autenticación
// ============================================
// Si quieres agregar autenticación, descomenta estas líneas y comenta las de arriba:

/*

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::prefix('api')->name('api.')->group(function () {
        Route::get('/estadisticas', [AdminController::class, 'getEstadisticas'])->name('estadisticas');
        Route::get('/inscripciones', [AdminController::class, 'getInscripciones'])->name('inscripciones');
        Route::get('/inscripciones/{id}', [AdminController::class, 'getInscripcionDetalle'])->name('inscripciones.detalle');
        Route::delete('/inscripciones/{id}', [AdminController::class, 'deleteInscripcion'])->name('inscripciones.delete');
        Route::get('/voluntarios', [AdminController::class, 'getVoluntarios'])->name('voluntarios');
        Route::get('/voluntarios/{id}', [AdminController::class, 'getVoluntarioDetalle'])->name('voluntarios.detalle');
        Route::delete('/voluntarios/{id}', [AdminController::class, 'deleteVoluntario'])->name('voluntarios.delete');
        Route::get('/mensajes', [AdminController::class, 'getMensajes'])->name('mensajes');
        Route::get('/mensajes/{id}', [AdminController::class, 'getMensajeDetalle'])->name('mensajes.detalle');
        Route::put('/mensajes/{id}/respondido', [AdminController::class, 'marcarRespondido'])->name('mensajes.respondido');
        Route::delete('/mensajes/{id}', [AdminController::class, 'deleteMensaje'])->name('mensajes.delete');
        Route::get('/donaciones', [AdminController::class, 'getDonaciones'])->name('donaciones');
        Route::get('/donaciones/{id}', [AdminController::class, 'getDonacionDetalle'])->name('donaciones.detalle');
        Route::delete('/donaciones/{id}', [AdminController::class, 'deleteDonacion'])->name('donaciones.delete');
        Route::get('/exportar', [AdminController::class, 'exportar'])->name('exportar');
    });
});
 */
