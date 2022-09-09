<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Estudiantes;
use App\Models\Matriculas;
use Illuminate\Http\Request;
class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    { 
        //$matricula = matriculas::paginate(7);
        //$matricula = DB::table('users')->select('cedula','nombres','apellidos','correo')->where('rol','Estudiante')->get();
       //return view('docente.matricula.matricula', compact('matricula')); 



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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function show(matriculas $matriculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function edit($datos)
    {
        $matri=matriculas::find($datos);
        return view();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $dato=$request->except(['_token','_method']);
        Estudiantes::where('cedula','=',$id)->update($dato);
        notify()->preset('Docente actualizado');
        return redirect('Teacher/Teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$datos=matriculas::find($id);
        matriculas::destroy($id);
        return redirect('matricula');
    }
}
