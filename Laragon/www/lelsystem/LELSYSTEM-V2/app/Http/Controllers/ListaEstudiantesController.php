<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Estudiantes;
use App\Models\ListadoEstudiantes; 
use App\Models\Matriculas;
use App\Models\Cursos; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ListaEstudiantesController extends Controller
{
    /** 
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiantes::all();
        $cursos=Cursos::all();
        $listadoEstudiantes=ListadoEstudiantes::paginate(4);
        return view('docente.listados.listados', compact('listadoEstudiantes','estudiantes','cursos'));
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
        $datos=$request->except(['_token']);
        $campos=[
             'cedula'=>'required|string|max:10 ',
             'descripcion'=>'required',
             'fecha'=>'required|date',

          ];

           $request->validate($campos);

           ListadoEstudiantes::insert($datos);
            notify()->preset('registrado');
            return redirect('lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListadoEstudiantes  $listadoEstudiantes
     * @return \Illuminate\Http\Response
     */
    public function show(ListadoEstudiantes $listadoEstudiantes)
    {
        //
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListadoEstudiantes  $listadoEstudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit($datos)
    {
        $listadoEstudiante=ListadoEstudiantes::find($datos); 
        $estudiantes=Estudiantes::all();
        $cursos=Cursos::all();
        return view('docente.listados.listadosEdit',compact('listadoEstudiante','estudiantes','cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListadoEstudiantes  $listadoEstudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $listadoEstudiantes=$request->except(['_token','_method']);
        ListadoEstudiantes::where('cedula','=',$id)->update($listadoEstudiantes);
        notify()->preset('Docente actualizado');
        return redirect('lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListadoEstudiantes  $listadoEstudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListadoEstudiantes $listadoEstudiantes)
    {
        //
    }
}
