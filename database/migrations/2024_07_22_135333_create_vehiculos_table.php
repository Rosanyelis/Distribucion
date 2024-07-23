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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa');
            $table->string('color');
            $table->string('marca');
            $table->string('tipo_vehiculo');
            $table->string('modelo')->nullable();
            $table->string('anio');
            $table->string('chasis');
            $table->string('motor')->nullable();
            $table->string('ejes');
            $table->string('serie')->nullable();
            $table->string('cilindraje')->nullable();
            $table->string('asientos')->nullable();
            $table->string('capacidad_arrastre')->nullable();
            $table->string('traccion')->nullable();
            $table->string('transmision')->nullable();
            $table->string('tipo_carroceria')->nullable();
            $table->string('capacidad_total')->nullable();
            $table->string('capacidad_compartimiento1')->nullable();
            $table->string('capacidad_compartimiento2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
