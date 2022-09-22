<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => 'index']);
    }
     public function index(){

        return view('administrador');
    }
}
