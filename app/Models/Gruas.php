<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gruas extends Model
{
    use HasFactory; 

    protected $fillable = [
        'id_cliente',
        'MarcaGrua',
        'NSGrua',
        'MarcaPolipasto',
        'ModeloPoli',
        'NSPoli',
        'Claro',
        'Altura',
        'Capacidad',
        'Voltaje',
        'Recorrido',
        'TipoAlim',
        'UbicacionAli',
        'Area',
    ];
}
