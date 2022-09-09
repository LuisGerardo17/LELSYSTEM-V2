<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades=Actividades::all(); 
        notify()->preset('Actividad registrada');
        return view('admin.activities.activities', compact('actividades'));
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
        return redirect('activities/activities');
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
        $act=Actividades::find($actividades);
        //return $act;
        return view('admin.activities.activitiesEdit', compact('act'));
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
        $datos1=$request->except(['_token','_method']);
        Actividades::where('codigo_actividad','=',$id)->update($datos1);
        return redirect('activities/activities');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        Actividades::destroy($id);
        notify()->preset('Actividad eliminada'); 
        return redirect('activities/activities'); 
        
      
    }
}
