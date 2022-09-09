<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
}
