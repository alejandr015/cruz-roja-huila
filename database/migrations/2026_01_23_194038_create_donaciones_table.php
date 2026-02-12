<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_donante', 150);
            $table->string('email', 150)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->decimal('monto', 10, 2);
            $table->enum('tipo_donacion', ['monetaria', 'especie'])->default('monetaria');
            $table->enum('metodo_pago', ['efectivo', 'transferencia', 'tarjeta'])->default('transferencia');
            $table->text('descripcion')->nullable();
            $table->string('comprobante')->nullable();
            $table->timestamp('fecha_donacion')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donaciones');
    }
};