<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seccion9 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_equipo',
        'Folio',
        'Fecha',
        'data',
    ];

    protected $casts = [
        'data' => 'json',
    ];
}
