<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Estudiantes;
use App\Models\ListadoEstudiantes;
use App\Models\Matriculas;
use App\Models\Cursos;
use Illuminate\Support\Facades\DB;
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
        $estudiantes = Estudiantes::all();
        $cursos = Cursos::all();
        $matricula=Matriculas::paginate(5);
         //$matricula = DB::table('users')->select('cedula','nombres','apellidos','correo')->where('rol','Estudiante')->get();
          return view('docente.matricula.listamatricula', compact('matricula','estudiantes','cursos'));
     }

/**
public function indexestudiante()
    {

         $estudiante = DB::table('users')->select('cedula','nombres','apellidos','correo')->where('rol','Estudiante')->get();
         return view('docente.matricula.listaEstudiantes', compact('estudiante'));
    }
**/
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
        return view('docente.matricula.matriculaEdit',compact('matricula'));
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
        return redirect('listamatricula');
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
         return redirect('listamatricula');
    }

}
