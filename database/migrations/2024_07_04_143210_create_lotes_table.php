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
        Schema::create('lotes', function (Blueprint $table) {
            $table->id('idLot');
            $table->unsignedBigInteger('idOrden');
            $table->unsignedBigInteger('idRecep');
            $table->unsignedBigInteger('idProd'); // Referencia al producto
            $table->string('fechaVenc');
            $table->string('nroLote');
            $table->string('loteInterno');
            $table->string('ubicacion');
            $table->decimal('costoUnit', 10, 2);
            $table->enum('status', ['Retenido','Activo'])->default('Activo');
            $table->text('nota');
            $table->unsignedBigInteger('idUserCreador');
            $table->unsignedBigInteger('idUserModif');
            $table->unsignedBigInteger('idEmpresa');
            $table->unsignedBigInteger('idSucursal');
            $table->timestamps();

             // Relación con la tabla de órdenes de compra
             $table->foreign('idProd')->references('id')->on('inventario');
             $table->foreign('idOrden')->references('idOrden')->on('compras');
             $table->foreign('idRecep')->references('idRecep')->on('recepciones');
             $table->foreign('idUserCreador')->references('id')->on('users');
             $table->foreign('idUserModif')->references('id')->on('users');
             $table->foreign('idEmpresa')->references('idEmpresa')->on('empresa');
             $table->foreign('idSucursal')->references('idSucursal')->on('sucursales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lotes');
    }
};
