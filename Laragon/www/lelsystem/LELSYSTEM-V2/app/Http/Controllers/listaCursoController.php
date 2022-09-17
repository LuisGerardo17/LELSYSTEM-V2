<?php

namespace App\Http\Controllers;
use App\Models\Matriculas;
use Illuminate\Http\Request;

class listaCursoController extends Controller
{
    public function index(Request $request)
    {

         $cursos = Matriculas::where('nombre_curso','Arte Culinario')->paginate(8);


          return view('docente.materias.materias', compact('cursos'));
     }
}
