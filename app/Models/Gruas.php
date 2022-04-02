<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gruas extends Model
{
    use HasFactory; 

    protected $fillable = [
        'id_cliente',
        'Marca',
        'Modelo',
        'N_serie',
        'Area',
        'Recorrido',
        'Claro',
        'Altura',
        'Capacidad',
        'Voltaje',
        'Responsable',
    ];
}
