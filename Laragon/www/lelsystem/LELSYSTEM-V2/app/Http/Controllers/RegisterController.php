<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Docentes;
use App\Models\Estudiantes;
use App\Models\Administradores;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $redirectTo = "/login";

    public function create() {
     return view('auth.register');

}
public function __construct ()
{
    $this->middleware('guest');
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
        return redirect('login');
    }
}




