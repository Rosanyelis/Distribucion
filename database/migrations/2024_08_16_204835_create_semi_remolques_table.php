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
        Schema::create('semi_remolques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tracto_camion_id')->references('id')->on('tracto_camions')->onDelete('cascade');
            $table->string('placa');
            $table->string('chasis');
            $table->string('serie');
            $table->string('anio');
            $table->string('color');
            $table->string('marca');
            $table->string('tipo_carroceria')->nullable();
            $table->string('ejes');
            $table->string('capacidad_total')->nullable();
            $table->string('capacidad_compartimiento1')->nullable();
            $table->string('capacidad_compartimiento2')->nullable();
            $table->date('fechai_tarjeta_operacion')->nullable();
            $table->date('fechaf_tarjeta_operacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semi_remolques');
    }
};
