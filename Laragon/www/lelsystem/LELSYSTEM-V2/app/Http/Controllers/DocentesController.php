<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('docente', ['only' => 'index']);
    }
     public function index(){

        return view('docente');
    }
}
