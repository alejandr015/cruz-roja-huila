<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->id();
            $table->enum('modalidad', ['juveniles', 'damas-grises', 'socorristas']);
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('email', 150)->unique();
            $table->string('telefono', 20)->nullable();
            $table->string('documento', 20)->unique();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('direccion')->nullable();
            $table->string('ciudad', 100)->default('Neiva');
            $table->enum('estado', ['pendiente', 'aprobado', 'rechazado'])->default('pendiente');
            $table->timestamp('fecha_registro')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('voluntarios');
    }
};