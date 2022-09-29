<?php

namespace App\Models;
use App\Models\Cursos;

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

    public function cursos()
    {
        return $this->belongsToMany(Cursos::class);
    }

}
