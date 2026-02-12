<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscripciones_diplomados', function (Blueprint $table) {
            $table->id();
            
            // Información del Diplomado
            $table->string('curso');
            $table->string('duracion');
            $table->string('inversion');
            $table->string('modalidad');
            
            // Información del Estudiante
            $table->string('nombre');
            $table->string('documento');
            $table->string('email');
            $table->string('telefono');
            $table->date('fecha_nacimiento');
            $table->string('ciudad')->default('Neiva');
            $table->string('horario');
            
            // Estado
            $table->enum('estado', ['pendiente', 'contactado', 'matriculado', 'rechazado'])->default('pendiente');
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
        Schema::dropIfExists('inscripciones_diplomados');
    }
};  