<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Estudiantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 

class EstudianteController extends Controller
{
    public function index(){
    
    $estudiantes=Estudiantes::paginate(10);
    return view('admin.estudiante.estudiante',compact('estudiantes'));
 
    } 



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {
      $campos=[
        'cedula'=>'required|string|max:10 ',
        'nombres'=>'required',
        'apellidos'=>'required',
        'correo'=>'required',
        'direccion'=>'required',
        'telefono'=>'required|max:10',
        'contrasena'=>'required|confirmed|min:2|max:8',
        'imagen'=>'required|mimes:jpeg,png,jpg'
      ];

      $request->validate($campos);

        $datosEstudiante=Request()->except('_token','contrasena_confirmation');


            if($request->hasFile('imagen')){
                $datosEstudiante['imagen']=$request->file('imagen')->store('uploadsEstudiante','public');
            }
            $datosEstudiante['rol']='Estudiante';
            User::insert($datosEstudiante);
            Estudiantes::insert(['cedula'=>$datosEstudiante['cedula']]);
            notify()->preset('registrado');
            return redirect('admin/estudiante');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($datos)
    {
        $admin=User::find($datos);
        return view('admin.estudiante.estudianteEdit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datos=$request->except(["_token","_method"]);
        if($request->hasFile('imagen')){
            $datosimg=User::find($id);
            Storage::delete('public/'. $datosimg->imagen);
            $datos['imagen']=$request->file('imagen')->store('uploadsUser','public');
        }
        User::where('cedula','=',$id)->update($datos);
        notify()->preset('editar');
        return redirect('admin/estudiante');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($cedula)
    {
        $datos =User::find($cedula);
        Storage::delete('public/'. $datos->imagen);
        User::destroy($cedula);
        notify()->success('Estudiante eliminado');
        return redirect('admin/estudiante');

    }
}
