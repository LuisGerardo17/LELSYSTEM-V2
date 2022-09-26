<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    use HasFactory;
    protected $table = 'configuracions';

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'logo',
        'slogan',
        'frase1',
        'frase2',
        'frase3',
        'razonsocial',
        'celular',
        'telefono',
        'direccion',
        'email',
        'facebook',
        'youtube'

    ];
}
