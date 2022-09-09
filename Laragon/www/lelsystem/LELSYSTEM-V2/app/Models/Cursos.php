<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Docentes;
use App\Models\Matriculas;

class Cursos extends Model
{
    use HasFactory;

    protected $table = 'cursos';


    public function cedula(){
        return $this->belongsTo(Docentes::class,'cedula','cedula');

    }
    protected $primaryKey = 'codigo_curso';

    protected $keyType = 'string';

    public function matriculas(){
        return $this->hasMany(Matriculas::class,'codigo_curso','codigo_curso');

    }

}
