<?php

namespace App\Http\Controllers;
use App\Models\Cursos;
use App\Models\Docentes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ConfigcursoController extends Controller
{
    public function index()
    {

        $docentes=Docentes::all();
        $datos=Cursos::all();
        return view('docente.materias.curso',compact('datos','docentes'));

    }

    public function edit($id)
    {
        $datos=Cursos::find($id);
        $docentes=Docentes::all();
        return view('docente.materias.cursoEdit',compact('datos','docentes'));

    }

    public function update(Request $request, $id)
    {
        $datos=$request->except(['_token','_method']);
        if($request->hasFile('imagen')){
            $datosimg=Cursos::find($id);
            Storage::delete('public/'. $datosimg->imagen);
            $datos['imagen']=$request->file('imagen')->store('uploadCursos','public');
        }
        Cursos::where('nombre_curso','=',$id)->update($datos);
        notify()->preset('editartodo');
        return redirect('Cursos');
    }
    public function show($nombre_curso)
    {
        $cursos =Cursos::find($nombre_curso);
        
        return view('docente.materias.materias',compact('cursos'));
    }

    public function destroy($id)
    {
        $datos=Cursos::find($id);
        Cursos::destroy($id);
        Storage::delete('public/'.$datos->imagen);
        notify()->preset('eliminartodo');
        return redirect('Cursos');
    }

}

