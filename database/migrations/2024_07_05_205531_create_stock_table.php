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
        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idSucursal'); // Referencia al ID de la sucursal
            $table->unsignedBigInteger('idProd'); // Referencia al ID del producto
            $table->unsignedBigInteger('idLot');
            $table->decimal('ultimoCosto', 10, 2);
            $table->integer('cantidadDisp'); // Cantidad de stock disponible
            $table->integer('cantidadOrd'); // Cantidad de stock en ordenes de compras abiertas
            $table->integer('cantidadNeg'); // Cantidad de stock en negociacion pendiente por facturar
            $table->integer('cantidadTransf'); // Cantidad de stock en transferencia de almacen
            $table->integer('cantidadExist'); // Cantidad de stock Total en existencia
            // Otros campos relevantes para el stock
            $table->timestamps();

            // Relaciones
            $table->foreign('idProd')->references('id')->on('inventario');
            $table->foreign('idSucursal')->references('idSucursal')->on('sucursales');
            $table->foreign('idLot')->references('idLot')->on('lotes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};
