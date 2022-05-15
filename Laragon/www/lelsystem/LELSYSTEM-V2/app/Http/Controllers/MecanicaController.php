<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MecanicaController extends Controller
{
  public function index()
    {
        return view('docente.mecanica');
    } 
}
