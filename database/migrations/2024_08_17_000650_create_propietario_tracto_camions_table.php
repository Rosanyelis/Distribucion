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
        Schema::create('propietario_tracto_camions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('propietario_id')->references('id')->on('propietarios')->onDelete('cascade');
            $table->foreignId('tracto_camion_id')->references('id')->on('tracto_camions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propietario_tracto_camions');
    }
};
