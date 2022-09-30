<?php

namespace App\Http\Controllers;
use App\Models\Cursos;
use App\Models\Docentes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        if(session()->has('datos') == true){
            $docentes  = Docentes::all();
            $cursos=Cursos::paginate(8);
            return view('admin.courses.curse',compact('cursos','docentes'));
        }else{
            return view('Error');
        }
        
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
            'cedula'=>'required|max:10',
            'imagen'=>'required|mimes:jpeg,png,jpg'
        ];

        $request->validate($campos);
       if($request->hasFile('imagen')){
            $datos['imagen']=$request->file('imagen')->store('uploadCursos','public');
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
        if($request->hasFile('imagen')){
            $datosimg=Cursos::find($id);
            Storage::delete('public/'. $datosimg->imagen);
            $datos['imagen']=$request->file('imagen')->store('uploadCursos','public');
        }
        Cursos::where('nombre_curso','=',$id)->update($datos);
        notify()->preset('editartodo');
        return redirect('admin/cursos');
    }

    public function destroy($id)
    {
        $datos=Cursos::find($id);
        Cursos::destroy($id);
        Storage::delete('public/'.$datos->imagen);
        notify()->preset('eliminartodo');
        return redirect('admin/cursos');

    }


}
