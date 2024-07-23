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
        Schema::create('propietarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->string('code_propietario');
            $table->string('name');
            $table->string('cedula');
            $table->string('url_file_cedula')->nullable();
            $table->string('nit');
            $table->string('url_file_nit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propietarios');
    }
};
