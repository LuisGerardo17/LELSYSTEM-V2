<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administradores extends Model
{
    use HasFactory;

    protected $table = 'administradores';
    protected $primaryKey = 'cedula';
    
    public function user(){
        return $this->belongsTo(User::class,'cedula','cedula');
        //belongsto ->pertenese ('a la tabla','con id_usuarios','es igual a id_administrador')
    }
}
