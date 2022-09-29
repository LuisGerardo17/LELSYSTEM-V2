<?php

namespace App\Http\Controllers;

use App\Models\Recursos;
use App\Models\TipoArchivos;
use Illuminate\Http\Request;

class RecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms=TipoArchivos::all();
        $recursos=Recursos::paginate(8);
        return view('docente.materias.recursos',compact('forms','recursos'));
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
     * @param  \App\Models\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function show(Recursos $recursos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos=Recursos::find($id);
        $forms=TipoArchivos::all();
        return view('docente.materias.recursosEdit',compact('datos','forms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=$request->except(['_token','_method']);
        Recursos::where('codigo_recurso','=',$id)->update($datos);
        notify()->preset('editartodo');
        return redirect('Rec');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recursos::destroy($id);
        notify()->preset('eliminartodo');
        return redirect('Rec');
    }
}
