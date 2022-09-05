<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Docentes;
use App\Models\Estudiantes;
use App\Models\Administradores;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function create() {
        return view('auth.register');
    }
    public function store(Request $request){

        $datosUser=Request()->except('_token');

        if($datosUser['contrasena']==$datosUser['contrasena_verified_at']){
            if($request->hasFile('imagen')){
                $datosUser['imagen']=$request->file('imagen')->store('uploadsUsers','public');
            }
             if($datosUser['rol']=='Estudiante'){
                User::insert($datosUser);
                Estudiantes::insert(['cedula'=>$datosUser['cedula']]);

             }else if ( $datosUser['rol']=='Docente'){
                User::insert($datosUser);
                Docentes::insert(['cedula'=>$datosUser['cedula']]);


              }else if($datosUser['rol']=='Administrador'){
                User::insert($datosUser);
                Administradores::insert(['cedula'=>$datosUser['cedula']]);
              }

        }else{
            notify()->preset('error');
            return redirect('auth.login');
        }
        notify()->preset('registrado');
        return view('auth.login');
    }


}
