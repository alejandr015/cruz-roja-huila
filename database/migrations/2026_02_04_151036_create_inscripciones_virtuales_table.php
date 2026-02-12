<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscripciones_virtuales', function (Blueprint $table) {
            $table->id();
            
            // Información del Curso
            $table->string('curso');
            $table->string('duracion');
            $table->string('modalidad');
            
            // Información del Estudiante
            $table->string('nombre');
            $table->string('documento');
            $table->string('email');
            $table->string('telefono');
            $table->date('fecha_nacimiento');
            $table->string('ciudad')->default('Neiva');
            $table->string('pais')->default('Colombia');
            
            // Preferencias
            $table->enum('nivel_conocimiento', ['ninguno', 'basico', 'intermedio', 'avanzado'])->default('ninguno');
            $table->text('motivacion')->nullable();
            
            // Estado
            $table->enum('estado', ['pendiente', 'aprobado', 'activo', 'completado', 'rechazado'])->default('pendiente');
            $table->text('observaciones')->nullable();
            
            $table->timestamps();
            
            // Índices
            $table->index('curso');
            $table->index('estado');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscripciones_virtuales');
    }
};