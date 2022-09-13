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
        $cursos = Cursos::all();
        $matriculas=Matriculas::paginate(7);
        return view('docente.listados.listado', compact('matriculas','estudiantes','cursos'));
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
    public function edit(ListadoEstudiantes $listadoEstudiantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListadoEstudiantes  $listadoEstudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListadoEstudiantes $listadoEstudiantes)
    {
        //
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
