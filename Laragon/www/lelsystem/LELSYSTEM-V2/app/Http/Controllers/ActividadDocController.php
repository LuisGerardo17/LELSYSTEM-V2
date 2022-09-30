<?php

namespace App\Http\Controllers;
use App\Models\TipoArchivos;
use App\Models\Recursos;
use App\Models\Actividades;
use App\Models\Examen;
use Illuminate\Http\Request;

class ActividadDocController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms=TipoArchivos::all();
        $recursos=Recursos::paginate(10);
        $actividad=Actividades::all();
        $examen=Examen::all();
        return view('docente.materias.materias', compact('actividad','recursos','forms','examen'));
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
        
        $datosActividades=Request()->except('_token');
        Actividades::insert($datosActividades);
        return redirect('ActividadDoc');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function show(Actividades $actividades)
    {
        // 
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function edit($actividades)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
