<?php

namespace App\Http\Controllers;
use App\Models\Administradores;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index(){

        $administradores=Administradores::paginate(5);
        return view('docente.docente.docente',compact('administradores'));
        

   }
} 
