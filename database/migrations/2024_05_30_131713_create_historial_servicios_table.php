<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historial_servicios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->string('rol');
            $table->string('ubicacion_destino');
            $table->string('ubicacion_llegada');
            $table->decimal('peso_paquete', 8, 2); // 8 dígitos en total, 2 después del punto decimal
            $table->decimal('valor_paquete', 10, 2); // 10 dígitos en total, 2 después del punto decimal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_servicios');
    }
};
