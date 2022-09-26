<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Middleware\EstudianteAuth;
use Illuminate\Support\Facades\Auth;
class EstudiantesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('estudiante', ['only' => 'index']);
    }
     public function index(){

        return view('estudiante');
    }
}
