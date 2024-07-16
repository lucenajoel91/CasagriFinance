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
        Schema::create('comprasDet', function (Blueprint $table) {
            $table->id('idOrdenlinea');
            $table->unsignedBigInteger('idOrden'); // Referencia a la tabla de cabecera
            $table->unsignedBigInteger('nroLinea');
            $table->unsignedBigInteger('idProd'); // Referencia al producto
            $table->string('fechaVenc');
            $table->string('nroLote');
            $table->string('loteInterno')->unique();
            $table->string('moneda')->default('USD');
            $table->decimal('tasaCompra', 10, 2)->default(1);
            $table->decimal('costoUnit', 10, 2);
            $table->decimal('cantidad', 10, 2);
            $table->decimal('totalBase', 10, 2);
            $table->decimal('totalIva', 10, 2);
            $table->string('descuentodscr')->default('');
            $table->decimal('descuentoPct', 10, 2)->default(0);
            $table->decimal('descuento', 10, 2)->default(0);
            $table->decimal('total', 10, 2);
            $table->date('fecha');
            $table->date('fechaMod');
            $table->timestamps();
            // Relaciones
            $table->foreign('idOrden')->references('idOrden')->on('compras');
            $table->foreign('idProd')->references('id')->on('inventario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprasDet');
    }
};
