<?php

namespace App\Http\Controllers;
use App\Models\Estudiantes;
use App\Models\matriculas;
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
        $estudiantes = Estudiantes::paginate(10);
        //$estudiantes = DB::table('users')->select('cedula','nombres','apellidos','correo')->where('rol','Estudiante')->get();
       return view('', compact('estudiantes'));
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
    public function destroy($codigo)
    {
        $datos=matriculas::find($codigo);
        matriculas::destroy($codigo);
        return redirect();
    }
}
