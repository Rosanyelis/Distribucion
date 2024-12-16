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
        Schema::create('entregas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_conciliacion');
            $table->string('mes');
            $table->foreignId('propietario_id')->nullable()->references('id')->on('propietarios')->onDelete('cascade');
            $table->foreignId('tracto_camion_id')->nullable()->references('id')->on('tracto_camions')->onDelete('cascade');
            $table->foreignId('tramo_id')->nullable()->references('id')->on('tramos')->onDelete('cascade');
            $table->foreignId('product_id')->nullable()->references('id')->on('products')->onDelete('cascade');
            $table->date('fecha_carga');
            $table->decimal('carguio', 10, 2);
            $table->date('fecha_llegada');
            $table->decimal('volumen_descarguio', 10, 2);
            $table->decimal('merma', 10, 2); // carguio - volumen_descarguio
            $table->decimal('cobros_merma', 10, 2); // cobros al 100% de la merma = carguio - volumen_descarguio
            $table->decimal('volumen_descarguio_2', 10, 2);
            $table->decimal('merma_2', 10, 2); // descarguio - volumen_descarguio_2
            $table->decimal('merma_permisible', 10, 2); // porcentaje de tolerancia del producto * carguio - Redondear a 2 decimales
            $table->decimal('merma_limite_excedible', 10, 2); // = merma permisible
            $table->decimal('merma_cobrable', 10, 2); // merma - merma_permisible
            $table->decimal('precio_merma', 10, 2); // indicado por el usuario
            $table->decimal('merma_por_cobrar', 10, 2); // merma_cobrable * precio_merma
            $table->decimal('merma_cobrada', 10, 2); // merma_cobrable * precio_merma
            $table->string('flete'); // indicado por el usuario
            $table->decimal('liquido_basico', 10, 2); // volumen_descarguio * flete Redondear a 2 decimales
            $table->decimal('derecho_empresa_porcentaje', 10, 2); // porcentaje
            $table->decimal('derecho_empresa', 10, 2); // monto
            $table->decimal('liquido_facturado', 10, 2); // liquido_basico - derecho_empresa
            $table->decimal('retenciones', 10, 2)->nullable(); // indicado por el usuario
            $table->decimal('liquido_pagable', 10, 2); // liquido_facturado - descuento
            $table->date('fecha_pago')->nullable(); // indicado por el usuario
            $table->date('fecha_pago_limite')->nullable(); // indicado por el usuario
            $table->decimal('total', 10, 2); // Total (Anticipos, Gastos Operativos y Saldo)
            $table->decimal('total_deuda', 10, 2);
            $table->string('factura_n');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregas');
    }
};
