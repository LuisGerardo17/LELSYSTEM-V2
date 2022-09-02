<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;

    protected $table = 'actividades';
    protected $primaryKey='codigo_actividad';
    protected $fillable=[
        'nombre_actividad','descripcion'
    ];
}
