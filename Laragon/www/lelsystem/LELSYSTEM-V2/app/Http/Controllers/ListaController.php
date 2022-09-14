<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Cursos;
use Illuminate\Http\Request;


class ListaController extends Controller
{

    public function index()
    {     $cursos =Cursos::all();
          //$estudiantes=User::select('cedula','nombres','apellidos','correo')->where('rol','Estudiante')->get();
         $estudiantes = DB::table('users')->select('cedula','nombres','apellidos','correo')->where('rol','Estudiante')->get();
         return view('docente.listaestudiante.listaEstudiantes', compact('estudiantes','cursos'));
    }
}
