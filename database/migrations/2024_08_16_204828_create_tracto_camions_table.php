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
        Schema::create('tracto_camions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('propietario_id')->references('id')->on('propietarios')->onDelete('cascade');
            $table->foreignId('conductor_id')->references('id')->on('conductors')->onDelete('cascade');
            $table->string('placa');
            $table->string('chasis');
            $table->string('motor');
            $table->string('anio');
            $table->string('tipo_vehiculo');
            $table->string('color');
            $table->string('ejes');
            $table->string('marca');
            $table->string('asientos')->nullable();
            $table->string('capacidad_arrastre')->nullable();
            $table->string('modelo')->nullable();
            $table->string('cilindraje')->nullable();
            $table->string('traccion')->nullable();
            $table->date('fechai_seguro_cti')->nullable();
            $table->date('fechaf_seguro_cti')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracto_camions');
    }
};
