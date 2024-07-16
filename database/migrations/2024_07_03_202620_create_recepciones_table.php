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
        Schema::create('recepciones', function (Blueprint $table) {
            $table->id('idRecep');
            $table->unsignedBigInteger('idOrden'); // Referencia al ID de la orden de compra
            $table->unsignedBigInteger('idProv');
            $table->date('fechaRecepcion');
            $table->date('fechaCreacion');
            $table->date('fechaModif');
            $table->unsignedBigInteger('idEmpresa');
            $table->unsignedBigInteger('idSucursal');
            $table->enum('status', ['Abierta','Retenida','Cerrada'])->default('Abierta');
            $table->decimal('totalBase', 10, 2);
            $table->decimal('totalIva', 10, 2);
            $table->decimal('totalDscto', 10, 2)->default(0);
            $table->decimal('total', 10, 2);
            $table->unsignedBigInteger('idUserCreador');
            $table->unsignedBigInteger('idUserModif');
            $table->timestamps();

            // Relación con la tabla de órdenes de compra
            $table->foreign('idOrden')->references('idOrden')->on('compras');
            $table->foreign('idProv')->references('idProv')->on('proveedores');
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
        Schema::dropIfExists('recepciones');
    }
};
