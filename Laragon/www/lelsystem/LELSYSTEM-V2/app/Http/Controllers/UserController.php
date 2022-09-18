<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Docentes;
use App\Models\Estudiantes;
use App\Models\Matriculas;
use App\Models\Administradores;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function create() {
        return view('auth.register');
    }
    public function store(Request $request){


        $campos=[
            'cedula'=>'required|string|max:10 ',
            'nombres'=>'required',
            'apellidos'=>'required',
            'correo'=>'required',
            'direccion'=>'required',
            'telefono'=>'required|max:10',
            'contrasena'=>'required|confirmed|min:2|max:10',
            'imagen'=>'required|mimes:jpeg,png,jpg'
        ];

        $request->validate($campos);

        $datosUser=Request()->except('_token','contrasena_confirmation');


            if($request->hasFile('imagen')){
                $datosUser['imagen']=$request->file('imagen')->store('uploadsEstudiante','public');
            }
             if($datosUser['rol']=='Estudiante'){
                User::insert($datosUser);
                Estudiantes::insert(['cedula'=>$datosUser['cedula']]);
                 Matriculas::insert(['cedula'=>$datosUser['cedula']]);

             }else if ( $datosUser['rol']=='Docente'){
                User::insert($datosUser);
                Docentes::insert(['cedula'=>$datosUser['cedula']]);


              }else if($datosUser['rol']=='Administrador'){
                User::insert($datosUser);
                Administradores::insert(['cedula'=>$datosUser['cedula']]);
              }

        notify()->preset('registrado');
        return view('auth.login');
    }

    public function show($nombres){
       $user =User::where('nombres', $nombres)->firstOrFail();
       dd($user);

    }

}
