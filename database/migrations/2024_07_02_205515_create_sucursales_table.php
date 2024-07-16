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
        Schema::create('sucursales', function (Blueprint $table) {
            $table->id('idSucursal');
            $table->unsignedBigInteger('idEmpresa'); // Referencia al ID de la empresa
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('pais');
            $table->string('zip');
            $table->string('horaApertura');
            $table->string('horaCierre');
            $table->string('personaContacto');
            $table->string('telefonoContacto');
            $table->string('correoContacto');
            $table->string('manejaStock');
            $table->string('volumenStockmax');
            $table->string('aceptadev');
            // Otros campos relevantes para una sucursal
            $table->timestamps();

            // Relación con la tabla de empresas
            $table->foreign('idEmpresa')->references('idEmpresa')->on('empresa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucursales');
    }
};
