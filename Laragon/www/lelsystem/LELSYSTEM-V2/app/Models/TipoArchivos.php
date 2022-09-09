<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoArchivos extends Model
{
    use HasFactory;

    protected $table = 'tipo_archivos';
    
    public function recursos(){
        return $this->hasMany(Recursos::class,'id_tipo_archivo','id_tipo_archivo');

    }
}
