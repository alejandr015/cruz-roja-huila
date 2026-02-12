<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscripciones_empresariales', function (Blueprint $table) {
            $table->id();
            
            // Información del Programa
            $table->string('curso');
            $table->string('duracion');
            $table->string('modalidad');
            
            // Información de la Empresa
            $table->string('empresa');
            $table->string('nit');
            $table->string('sector')->nullable();
            $table->integer('numero_participantes');
            
            // Información del Contacto
            $table->string('nombre_contacto');
            $table->string('cargo');
            $table->string('email');
            $table->string('telefono');
            $table->string('ciudad')->default('Neiva');
            
            // Detalles de la Capacitación
            $table->date('fecha_preferida')->nullable();
            $table->text('mensaje')->nullable();
            
            // Estado
            $table->enum('estado', ['pendiente', 'contactado', 'cotizado', 'confirmado', 'rechazado'])->default('pendiente');
            $table->text('observaciones')->nullable();
            
            $table->timestamps();
            
            // Índices
            $table->index('empresa');
            $table->index('curso');
            $table->index('estado');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscripciones_empresariales');
    }
};