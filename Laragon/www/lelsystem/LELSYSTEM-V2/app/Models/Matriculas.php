<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriculas extends Model
{
    use HasFactory;

    protected $table = 'matriculas';


    public function estudiante(){
        return $this->belongsTo(Estudiantes::class,'cedula','cedula');
        //belongsto ->pertenese ('a la tabla','con id_usuarios','es igual a id_administrador')
    }
    public function curso(){
        return $this->belongsTo(Curso::class,'codigo_curso','codigo_curso');
        //belongsto ->pertenese ('a la tabla','con id_usuarios','es igual a id_administrador')
    }
}
