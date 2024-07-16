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
        Schema::create('compras', function (Blueprint $table) {
            $table->id('idOrden');
            $table->unsignedBigInteger('idProv');
            $table->enum('tipoOrden', ['Compra','Devolución'])->default('Compra');
            $table->date('fechaCreacion');
            $table->date('fechaModif');
            $table->date('fechaEstimada');
            $table->string('condicion')->default('credito');
            $table->string('moneda')->default('USD');
            $table->decimal('tasaCompra', 10, 2)->default(1);
            $table->decimal('totalBase', 10, 2);
            $table->decimal('totalIva', 10, 2);
            $table->decimal('totalDscto', 10, 2)->default(0);
            $table->decimal('total', 10, 2);
            $table->decimal('saldo', 10, 2);
            $table->enum('status', ['Pendiente','Abierta','Retenida','Cerrada'])->default('Pendiente');
            $table->text('nota')->nullable();
            $table->unsignedBigInteger('idUserCreador');
            $table->unsignedBigInteger('idUserModif');
            $table->string('cancelada')->nullable();
            $table->string('ciclo')->nullable();
            $table->unsignedBigInteger('idEmpresa');
            $table->unsignedBigInteger('idSucursal');
            $table->enum('prioridad', ['alta', 'media', 'baja'])->default('media');
            $table->timestamps();

            // Foreign key relationships
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
        Schema::dropIfExists('compras');
    }
};
