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
        Schema::create('predios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idProductor'); // Campo llave de la tabla productores
            $table->string('nombre');
            $table->string('direccion');
            $table->string('sector');
            $table->string('municipio');
            $table->string('parroquia');
            $table->string('ciudad');
            $table->string('estado');
            $table->decimal('superficieTotal', 10, 2); // Ajusta la precisión según tus necesidades
            $table->string('cultivoPred')->nullable(); // Puedes cambiar el tipo según el contenido
            $table->decimal('ultSuperficieFin', 10, 2)->nullable(); // Ajusta la precisión según tus necesidades
            $table->string('ultCultivoFin')->nullable(); // Puedes cambiar el tipo según el contenido
            $table->timestamps();

            $table->foreign('idProductor')->references('idProd')->on('productores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predios');
    }
};