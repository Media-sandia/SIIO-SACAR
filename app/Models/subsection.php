<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subsection extends Model
{
    use HasFactory;

    public function items(){
        return $this->hasMany(items::class, 'id_subsection', 'id');
    }
}
