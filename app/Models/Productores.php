<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Productores extends Model
{
    use HasFactory;

    protected $table = 'productores'; // Nombre de la tabla en la base de datos
    protected $fillable = [
        'idProd',
        'nombre', 
        'razonSocial', 
        'rif', 
        'telefono', 
        'email',
        'direccion1', 
        'direccion2', 
        'sector', 
        'municipio', 
        'ciudad',
        'estado', 
        'pais', 
        'Runoppa',
        'status', // Agrega los demás campos aquí
    ];
    public $timestamps = false; // Si deseas mantener los timestamps
}
