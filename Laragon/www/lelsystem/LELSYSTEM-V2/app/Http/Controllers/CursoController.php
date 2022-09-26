<?php

namespace App\Http\Controllers;
use App\Models\Cursos;
use App\Models\Docentes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CursoController extends Controller
{

    public function index()
    {
        $docentes  = Docentes::all();
        $cursos=Cursos::paginate(8);
        return view('admin.courses.curse',compact('cursos','docentes'));
    }

    public function store(Request $request)
    {
        $datos=$request->except('_token');
        $campos=[
            'nombre_curso'=>'required|string|max:50',
            'descripcion'=>'required',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'required|date',
            'estado'=>'required',
            'cedula'=>'required|max:10',
            'urlfoto'=>'required|mimes:jpeg,png,jpg'

        ];

        $request->validate($campos);
        $datos=$request->except(['_token']);

        if($request->hasFile('urlfoto')){
            $datos['urlfoto']=$request->file('urlfoto')->store('uploadCusos','public');
        }
        Cursos::insert($datos);
        notify()->preset('registrado');
        return redirect('admin/cursos');

    }

    public function edit($id)
    {
        $datos=Cursos::find($id);
        $docentes=Docentes::all();
        return view('admin.courses.curseEdit',compact('datos','docentes'));

    }

    public function update(Request $request, $id)
    {
        $datos=$request->except(['_token','_method']);
        if($request->hasFile('urlfoto')){
            $datosimg=Cursos::find($id);
            Storage::delete('public/'. $datosimg->imagen);
            $datos['urlfoto']=$request->file('urlfoto')->store('uploadCursos','public');
        }
        Cursos::where('nombre_curso','=',$id)->update($datos);
        notify()->preset('editartodo');
        return redirect('admin/cursos');
    }

    public function destroy($nombre_curso)
    {
        $datos=Cursos::find($nombre_curso);
        Cursos::destroy($nombre_curso);
        Storage::delete('public/'.$datos->urlfoto);
        //storage/app    /public/....
         notify()->preset('eliminartodo');
        return redirect('admin/cursos');

    }


}
