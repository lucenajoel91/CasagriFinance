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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('idProv');
            $table->string('nombre');
            $table->string('razonSocial');
            $table->string('dni');
            $table->string('telefono');
            $table->string('email');
            $table->string('direccion1');
            $table->string('direccion2');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('pais');
            $table->string('status');
            $table->string('contribuyente');
            $table->decimal('BalanceUSD', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
