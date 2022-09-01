<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Docentes;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docentes::paginate(2);
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
        $datosDocente=Request()->except('_token');

        if($datosDocente['contrasena']==$datosDocente['contrasena_verified_at']){
            if($request->hasFile('imagen')){
                $datosDocente['imagen']=$request->file('imagen')->store('uploadsTeacher','public');
            }
            $datosDocente['rol']='Docente';
            User::insert($datosDocente);
            Docentes::insert(['cedula'=>$datosDocente['cedula']]);
            notify()->preset('registrado');
            return redirect('Teacher/Teacher');
        }else{
            notify()->preset('error');
            return redirect('Teacher/Teacher');
        }
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
    public function edit(User $datos)
    {
        return view('admin.teacher.teacher', compact('datos'));

        /*$post=Post::find($id);
        $this->cedula=$post->cedula;
        $this->nombres=$post->nombres;
        $this->view=''*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {


        $datos=$request->only('cedula','nombres','apellidos','correo','direccion','telefono','imagen');
        if(trim($request->contrasena)=='')
        {
            $datos=$request->except('contrasena');
        }

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
        $datos->delete();
        return redirect('Teacher/Teacher');
        //return view('admin.teacher.teacher', compact('datos'));
    }
}
