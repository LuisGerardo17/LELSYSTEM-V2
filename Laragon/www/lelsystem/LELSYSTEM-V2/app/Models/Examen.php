<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo_examen',
        'nombre_examen',
        'descripcion', 
        'parcial'
 
    ];

    protected $primaryKey = 'codigo_examen';
    protected $keyType = 'string';

}
