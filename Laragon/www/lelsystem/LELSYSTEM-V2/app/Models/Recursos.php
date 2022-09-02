<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
{
    use HasFactory;

    protected $table = 'recursos';
    
    
    public function tipo(){
        return $this->belongsTo(TipoArchivos::class,'id_tipo_archivo','id_tipo_archivo');
        
    }
    protected $primaryKey = 'codigo_recurso';
    
    protected $keyType = 'string';
}
