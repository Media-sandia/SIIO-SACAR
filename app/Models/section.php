<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    use HasFactory;

    public function subsection(){
        return $this->hasMany(subsection::class, 'id_section', 'id');
    }
}
