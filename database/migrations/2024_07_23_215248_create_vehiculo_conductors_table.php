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
        Schema::create('vehiculo_conductors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->foreignId('conductor_id')->references('id')->on('conductors')->onDelete('cascade');
            $table->date('fecha_ingreso');
            $table->date('fecha_salida')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculo_conductors');
    }
};
