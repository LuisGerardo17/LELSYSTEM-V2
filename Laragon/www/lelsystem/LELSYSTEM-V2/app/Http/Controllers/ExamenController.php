<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use Illuminate\Http\Request;

class ExamenController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exa=Examen::all(); 
        notify()->preset('Actividad registrada');
        return view('docente.materias.examen', compact('exa'));
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
        $examen=Request()->except('_token');
        Examen::insert($examen);
        return redirect('ActividadDoc');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show(Examen $examen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function edit($examen)
    {
        $exam=Examen::find($examen);
        return view('docente.materias.examenEdit', compact('exam'));
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $exa=$request->except(['_token','_method']);
        Examen::where('codigo_examen','=', $id)->update($exa);
        return redirect('Examen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Examen::destroy($id);
        notify()->preset('Actividad eliminada'); 
        return redirect('Examen'); 
    }
}
