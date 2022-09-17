<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListadoEstudiantes extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'descripcion',
        'fecha'

    ];
 

    protected $primaryKey = 'cedula';
    protected $keyType = 'string';

    protected $table = 'listado_estudiantes';


    public function estudiante(){
        return $this->belongsTo(Estudiantes::class,'cedula','cedula');
        //belongsto ->pertenese ('a la tabla','con id_usuarios','es igual a id_administrador')
    }
    public function curso(){
        return $this->belongsTo(Cursos::class,'nombre_curso','nombre_curso');
        //belongsto ->pertenese ('a la tabla','con id_usuarios','es igual a id_administrador')
    }

    public function user(){
        return $this->belongsTo(User::class,'cedula','cedula');
        //belongsto ->pertenese ('a la tabla','con id_usuarios','es igual a id_administrador')
    }

    public function matricula(){
        return $this->belongsTo(Matriculas::class,'cedula','cedula');
        //belongsto ->pertenese ('a la tabla','con id_usuarios','es igual a id_administrador')
    }
}
 