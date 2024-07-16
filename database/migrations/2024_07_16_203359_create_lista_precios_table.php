<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaPreciosTable extends Migration
{
    public function up()
    {
        Schema::create('listaPrecios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idProd'); // ID foráneo de la tabla inventario
            $table->string('invtid')->unique(); // Código único interno del producto

            $table->decimal('prepaG', 10, 2); // Precio prepago grande
            $table->decimal('prepaM', 10, 2); // Precio prepago mediano
            $table->decimal('prepaP', 10, 2); // Precio prepago pequeño

            $table->decimal('apartG', 10, 2); // Precio apartado grande
            $table->decimal('apartM', 10, 2); // Precio apartado mediano
            $table->decimal('apartP', 10, 2); // Precio apartado pequeño

            $table->decimal('pisoG', 10, 2); // Precio piso grande
            $table->decimal('pisoM', 10, 2); // Precio piso mediano
            $table->decimal('pisoP', 10, 2); // Precio piso pequeño
            
            $table->unsignedBigInteger('idUserCreador');
            $table->unsignedBigInteger('idUserModif');
            $table->date('fechaCreacion');
            $table->date('fechaModif');
            $table->timestamps();
            
            // Relaciones
            $table->foreign('idProd')->references('id')->on('inventario');
            $table->foreign('idUserCreador')->references('id')->on('users');
            $table->foreign('idUserModif')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('listaPrecios');
    }
};
