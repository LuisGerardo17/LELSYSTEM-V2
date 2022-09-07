<?php

namespace App\Http\Controllers;
use App\Models\Cursos;
use App\Models\Docentes;
use Illuminate\Http\Request;

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
            'codigo_curso'=>'required|string|max:5',
            'nombre_curso'=>'required',
            'descripcion'=>'required',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'required|date',
            'estado'=>'required',
            'cedula'=>'required|max:10',

        ];

        $request->validate($campos);
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
        Cursos::where('codigo_curso','=',$id)->update($datos);
        notify()->preset('editartodo');
        return redirect('admin/cursos');
    }

    public function destroy($id)
    {
        Cursos::destroy($id);
        notify()->preset('eliminartodo');
        return redirect('admin/cursos');

    }


}
