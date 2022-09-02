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
        $docentes = Docentes::all();
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
            notify()->preset('Docente registrado'); 
            Docentes::insert(['cedula'=>$datosDocente['cedula']]);
            return redirect('Teacher/Teacher');
        }else{
            notify()->preset('Error al registrar');
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
    public function edit($datos)
    {
        $docen=User::find($datos);
        return view('admin.teacher.teacherEdit', compact('docen'));
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
        User::destroy($cedula);
        notify()->success('Docente eliminado exitosamente');
        return redirect('Teacher/Teacher'); 
        
    }
}
