<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteGrua extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nom_empresa',
        'Direccion',
        'Contacto',
        'Telefono',
        'Sucursal',
    ];

    public function Grua(){
        return $this->hasMany(Gruas::class, 'id_cliente', 'id');
    }
}
