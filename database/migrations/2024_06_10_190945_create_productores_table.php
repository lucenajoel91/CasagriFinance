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
        Schema::create('productores', function (Blueprint $table) {
            $table->id('idProd');
            $table->string('nombre');
            $table->string('razonSocial');
            $table->string('rif');
            $table->string('telefono');
            $table->string('email');
            $table->string('direccion1');
            $table->string('direccion2');
            $table->string('sector');
            $table->string('municipio');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('pais');
            $table->string('runoppa');
            $table->string('status');
            $table->decimal('BalanceUSD', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productores');
    }
};
