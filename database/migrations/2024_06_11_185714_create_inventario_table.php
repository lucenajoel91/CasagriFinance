<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioTable extends Migration
{
    public function up(): void
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->id();
            $table->string('inventId')->unique();
            $table->string('nombre');
            $table->text('descrip');
            $table->string('present');
            $table->string('unidadNeg');
            $table->string('linea');
            $table->string('sublinea');
            $table->string('categoria');
            $table->string('component');
            $table->string('marca');
            $table->boolean('manejalot');
            $table->decimal('costo1', 10, 2);
            $table->decimal('costo2', 10, 2);
            $table->decimal('costo3', 10, 2);
            $table->decimal('prcMayor', 10, 2);
            $table->decimal('prcDetal', 10, 2);
            $table->decimal('prcPrepa', 10, 2);
            $table->decimal('prcApart', 10, 2);
            $table->decimal('prcPiso', 10, 2);
            $table->decimal('comision', 5, 2);
            $table->decimal('cantHa', 10, 2);
            $table->string('codigoBar');
            $table->string('tipo');
            $table->string('origen');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventario');
    }
}
