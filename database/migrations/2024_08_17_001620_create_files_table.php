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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('propietario_id')->nullable()->references('id')->on('propietarios')->onDelete('cascade');
            $table->foreignId('conductor_id')->nullable()->references('id')->on('conductors')->onDelete('cascade');
            $table->foreignId('tracto_camion_id')->nullable()->references('id')->on('tracto_camions')->onDelete('cascade');
            $table->foreignId('semi_remolque_id')->nullable()->references('id')->on('semi_remolques')->onDelete('cascade');
            $table->string('name');
            $table->string('type');
            $table->string('filename');
            $table->string('path');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
