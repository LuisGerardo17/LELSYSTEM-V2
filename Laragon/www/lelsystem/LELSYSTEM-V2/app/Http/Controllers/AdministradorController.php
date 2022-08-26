<?php

namespace App\Http\Controllers;
use App\Models\Actividades;
use App\Models\Cursos;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index(){

        Actividades::insert();

        return view('admin.admin.admin');

   }
}
