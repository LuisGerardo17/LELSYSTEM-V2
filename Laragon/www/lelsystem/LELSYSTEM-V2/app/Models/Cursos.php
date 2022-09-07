<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;

    protected $table = 'cursos';


    public function cedula(){
        return $this->belongsTo(Docentes::class,'cedula','cedula');

    }
    protected $primaryKey = 'codigo_curso';

    protected $keyType = 'string';
}
