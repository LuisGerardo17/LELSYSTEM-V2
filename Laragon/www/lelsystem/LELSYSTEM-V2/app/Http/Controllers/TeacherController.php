<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Docentes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $docentes = Docentes::paginate(10);
         //$docentes = DB::table('users')->select('cedula','imagen','nombres','apellidos','direccion','correo','telefono')->where('rol','Docente')->get();
        return view('admin.teacher.teacher', compact('docentes'));
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
        $datosDocente=Request()->except('_token','contrasena_confirmation');


            if($request->hasFile('imagen')){
                $datosDocente['imagen']=$request->file('imagen')->store('uploadsTeacher','public');
            }
            $datosDocente['rol']='Docente';
            User::insert($datosDocente);
            Docentes::insert(['cedula'=>$datosDocente['cedula']]);
            notify()->preset('Docente registrado');
            return redirect('Teacher/Teacher');

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
        return view('admin.teacher.teacherEdit',compact('admin'));
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
        $dato=$request->except(['_token','_method']);
        User::where('cedula','=',$id)->update($dato);
        notify()->preset('Docente actualizado');
        return redirect('Teacher/Teacher');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($cedula)
    {
        $datos=User::find($cedula);
        Storage::delete('public/'. $datos->imagen);
        User::destroy($cedula);
        notify()->success('Docente eliminado exitosamente');
        return redirect('Teacher/Teacher');

    }
}
