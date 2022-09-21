<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Estudiantes;
use App\Models\ListadoEstudiantes;
use App\Models\Matriculas;
use Illuminate\Support\Facades\DB;
use App\Models\Cursos;

use Illuminate\Http\Request;
class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
          $estudiantes = Estudiantes::all();
          $cursos = Cursos::all();
          $matriculas = Matriculas::paginate(8);
         // $registrados = User::select('cedula','nombres','apellidos','correo')->where('rol','Estudiante')->get();
          $registrados = DB::table('users')->select('cedula','nombres','apellidos','correo')->where('rol','Estudiante')->get();
          return view('docente.matricula.listamatricula', compact('matriculas','estudiantes','cursos','registrados'));
     }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=$request->except(['_token']);
        $campos=[
             'cedula'=>'required|string|max:10 ',
             'nombre_curso'=>'required|max:50 ',
             'estado'=>'required',

          ];

           $request->validate($campos);


            Matriculas::insert($datos);
            //ListadoEstudiantes::insert(['cedula'=>$datos['cedula']]);
            notify()->preset('registrado');
            return redirect('matricula');
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
        $matricula=Matriculas::find($datos);
        $estudiantes=Estudiantes::all();
        $cursos=Cursos::all();
        return view('docente.matricula.matriculaEdit',compact('matricula','estudiantes','cursos'));
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
        $matricula=$request->except(['_token','_method']);
        Matriculas::where('cedula','=',$id)->update($matricula);
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
