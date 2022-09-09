<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Estudiantes;
use App\Models\ListadoEstudiantes;
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
        $matricula = matriculas::paginate(7);
        //$matricula = DB::table('users')->select('cedula','nombres','apellidos','correo')->where('rol','Estudiante')->get();
       return view('docente.matricula.matricula', compact('matricula'));

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
            'codigo_curso'=>'required|string|max:50 ',
            'estado'=>'required',
          ];

        $request->validate($campos);
        $datos=$request->except(['_token','nombres','apellidos','correo']);

            Matriculas::insert($datos);
            ListadoEstudiantes::insert(['cedula'=>$datos['cedula']]);
            notify()->preset('registrado');
            return redirect('admin/admin');
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
        $matri=Matriculas::find($datos);
        return view('docente.matricula.matriculaEdit',compact('matri'));
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
        Matriculas::where('cedula','=',$id)->update($dato);
        notify()->preset('Docente actualizado');
        return redirect('matricula');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function destroy($cedula)
    {

         Matriculas::destroy($cedula);
        notify()->preset('eliminar');
         return redirect('matricula');
    }
}
