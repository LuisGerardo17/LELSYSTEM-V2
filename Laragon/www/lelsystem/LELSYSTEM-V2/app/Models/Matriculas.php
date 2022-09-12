<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Estudiantes;
use App\Models\Cursos;

class Matriculas extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'codigo_curso',
        'estado'

    ];


    protected $primaryKey = 'cedula';
    protected $keyType = 'string';

    protected $table = 'matriculas';


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

}
