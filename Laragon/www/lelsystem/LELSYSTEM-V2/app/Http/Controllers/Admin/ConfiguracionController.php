<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    public function index(){

       return view('admin.configuracion.index');

    }

    public function update(Request $request,$id){

          
    }
}
