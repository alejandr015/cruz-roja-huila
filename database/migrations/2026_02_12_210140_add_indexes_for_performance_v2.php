<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Agregar índices para mejorar rendimiento (verificando si no existen)
     */
    public function up(): void
    {
        // Helper para verificar si un índice existe
        $indexExists = function ($table, $indexName) {
            $indexes = DB::select("SHOW INDEX FROM {$table} WHERE Key_name = ?", [$indexName]);
            return !empty($indexes);
        };

        // Helper para agregar índice si no existe
        $addIndexIfNotExists = function ($table, $column, $indexName = null) use ($indexExists) {
            $indexName = $indexName ?? "{$table}_{$column}_index";
            
            if (!$indexExists($table, $indexName)) {
                Schema::table($table, function (Blueprint $blueprint) use ($column, $indexName) {
                    if (is_array($column)) {
                        $blueprint->index($column, $indexName);
                    } else {
                        $blueprint->index($column);
                    }
                });
                echo "✓ Índice '{$indexName}' creado en '{$table}'\n";
            } else {
                echo "○ Índice '{$indexName}' ya existe en '{$table}'\n";
            }
        };

        // ==========================================
        // INSCRIPCIONES A CURSOS
        // ==========================================
        $addIndexIfNotExists('inscripciones_cursos', 'estado');
        $addIndexIfNotExists('inscripciones_cursos', 'created_at');
        $addIndexIfNotExists('inscripciones_cursos', ['estado', 'created_at'], 'idx_cursos_estado_fecha');
        $addIndexIfNotExists('inscripciones_cursos', 'email');

        // ==========================================
        // TÉCNICOS LABORALES
        // ==========================================
        $addIndexIfNotExists('inscripciones_tecnicos', 'estado');
        $addIndexIfNotExists('inscripciones_tecnicos', 'created_at');
        $addIndexIfNotExists('inscripciones_tecnicos', ['estado', 'created_at'], 'idx_tecnicos_estado_fecha');
        $addIndexIfNotExists('inscripciones_tecnicos', 'email');

        // ==========================================
        // DIPLOMADOS
        // ==========================================
        $addIndexIfNotExists('inscripciones_diplomados', 'estado');
        $addIndexIfNotExists('inscripciones_diplomados', 'created_at');
        $addIndexIfNotExists('inscripciones_diplomados', ['estado', 'created_at'], 'idx_diplomados_estado_fecha');
        $addIndexIfNotExists('inscripciones_diplomados', 'email');

        // ==========================================
        // EMPRESARIALES
        // ==========================================
        $addIndexIfNotExists('inscripciones_empresariales', 'estado');
        $addIndexIfNotExists('inscripciones_empresariales', 'created_at');
        $addIndexIfNotExists('inscripciones_empresariales', ['estado', 'created_at'], 'idx_empresariales_estado_fecha');
        $addIndexIfNotExists('inscripciones_empresariales', 'email');

        // ==========================================
        // VIRTUALES
        // ==========================================
        $addIndexIfNotExists('inscripciones_virtuales', 'estado');
        $addIndexIfNotExists('inscripciones_virtuales', 'created_at');
        $addIndexIfNotExists('inscripciones_virtuales', ['estado', 'created_at'], 'idx_virtuales_estado_fecha');
        $addIndexIfNotExists('inscripciones_virtuales', 'email');

        // ==========================================
        // VOLUNTARIOS
        // ==========================================
        $addIndexIfNotExists('voluntarios', 'created_at');
        $addIndexIfNotExists('voluntarios', 'email');

        // ==========================================
        // ADMINS
        // ==========================================
        $addIndexIfNotExists('admins', 'username');
    }

    /**
     * Revertir índices
     */
    public function down(): void
    {
        // Helper para eliminar índice si existe
        $dropIndexIfExists = function ($table, $indexName) {
            $indexes = DB::select("SHOW INDEX FROM {$table} WHERE Key_name = ?", [$indexName]);
            
            if (!empty($indexes)) {
                Schema::table($table, function (Blueprint $blueprint) use ($indexName) {
                    $blueprint->dropIndex($indexName);
                });
                echo "✓ Índice '{$indexName}' eliminado de '{$table}'\n";
            } else {
                echo "○ Índice '{$indexName}' no existe en '{$table}'\n";
            }
        };

        // Eliminar índices de inscripciones_cursos
        $dropIndexIfExists('inscripciones_cursos', 'inscripciones_cursos_estado_index');
        $dropIndexIfExists('inscripciones_cursos', 'inscripciones_cursos_created_at_index');
        $dropIndexIfExists('inscripciones_cursos', 'idx_cursos_estado_fecha');
        $dropIndexIfExists('inscripciones_cursos', 'inscripciones_cursos_email_index');

        // Eliminar índices de inscripciones_tecnicos
        $dropIndexIfExists('inscripciones_tecnicos', 'inscripciones_tecnicos_estado_index');
        $dropIndexIfExists('inscripciones_tecnicos', 'inscripciones_tecnicos_created_at_index');
        $dropIndexIfExists('inscripciones_tecnicos', 'idx_tecnicos_estado_fecha');
        $dropIndexIfExists('inscripciones_tecnicos', 'inscripciones_tecnicos_email_index');

        // Eliminar índices de inscripciones_diplomados
        $dropIndexIfExists('inscripciones_diplomados', 'inscripciones_diplomados_estado_index');
        $dropIndexIfExists('inscripciones_diplomados', 'inscripciones_diplomados_created_at_index');
        $dropIndexIfExists('inscripciones_diplomados', 'idx_diplomados_estado_fecha');
        $dropIndexIfExists('inscripciones_diplomados', 'inscripciones_diplomados_email_index');

        // Eliminar índices de inscripciones_empresariales
        $dropIndexIfExists('inscripciones_empresariales', 'inscripciones_empresariales_estado_index');
        $dropIndexIfExists('inscripciones_empresariales', 'inscripciones_empresariales_created_at_index');
        $dropIndexIfExists('inscripciones_empresariales', 'idx_empresariales_estado_fecha');
        $dropIndexIfExists('inscripciones_empresariales', 'inscripciones_empresariales_email_index');

        // Eliminar índices de inscripciones_virtuales
        $dropIndexIfExists('inscripciones_virtuales', 'inscripciones_virtuales_estado_index');
        $dropIndexIfExists('inscripciones_virtuales', 'inscripciones_virtuales_created_at_index');
        $dropIndexIfExists('inscripciones_virtuales', 'idx_virtuales_estado_fecha');
        $dropIndexIfExists('inscripciones_virtuales', 'inscripciones_virtuales_email_index');

        // Eliminar índices de voluntarios
        $dropIndexIfExists('voluntarios', 'voluntarios_created_at_index');
        $dropIndexIfExists('voluntarios', 'voluntarios_email_index');

        // Eliminar índices de admins
        $dropIndexIfExists('admins', 'admins_username_index');
    }
};