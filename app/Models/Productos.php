<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'inventario'; // Nombre de la tabla en la base de datos
    protected $fillable = [
        'inventId',
        'nombre',
        'descripcion',
        'presentacion',
        'unidadNeg',
        'linea',
        'sublinea',
        'categoria',
        'componente',
        'marca',
        'manejalote',
        'costo1',
        'costo2',
        'costo3',
        'prcMayor',
        'prcDetal',
        'prcPrepagado',
        'prcApartado',
        'prcPiso',
        'cantHa',
        'codigoBar',
        'comision',
        'tipo',
        'origen',
        'status', // Agrega los demás campos aquí
    ];
    public $timestamps = false; // Si deseas mantener los timestamps
}
