<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Docentes extends Model
{
    use HasFactory;

    protected $table = 'docentes';
     public function user(){
        return $this->belongsTo(User::class,'cedula','cedula');
        //belongsto ->pertenese ('a la tabla','con id_usuarios','es igual a id_administrador')
    }
}
