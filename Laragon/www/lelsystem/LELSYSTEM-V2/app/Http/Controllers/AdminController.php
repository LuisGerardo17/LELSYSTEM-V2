<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Administradores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['Administrador']);
        $administradores=Administradores::paginate(5);
        return view('admin.admin.admin',compact('administradores'));
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
        $campos=[
            'cedula'=>'required|string|max:10 ',
            'nombres'=>'required',
            'apellidos'=>'required',
            'correo'=>'required',
            'direccion'=>'required',
            'telefono'=>'required|max:10',
            'contrasena'=>'required|confirmed|min:2|max:8',
            'imagen'=>'required|mimes:jpeg,png,jpg'
        ];

        $request->validate($campos);
        $datosAdmin=$request->except(['_token','contrasena_confirmation']);

            if($request->hasFile('imagen')){
                $datosAdmin['imagen']=$request->file('imagen')->store('uploadsAdmin','public');
            }

            $datosAdmin['rol']='Administrador';
            User::insert($datosAdmin);
            Administradores::insert(['cedula'=>$datosAdmin['cedula']]);
            notify()->preset('registrado');
            return redirect('admin/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($datos)
    {
        $admin=User::find($datos);
        return view('admin.admin.adminEdit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datos=$request->except(["_token","_method"]);
        if($request->hasFile('imagen')){
            $datosimg=User::find($id);
            Storage::delete('public/'. $datosimg->imagen);
            $datos['imagen']=$request->file('imagen')->store('uploadsAdmin','public');
        }
        User::where('cedula','=',$id)->update($datos);
        notify()->preset('editar');
        return redirect('admin/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($cedula)
    {
        $datos=User::find($cedula);
        Storage::delete('public/'. $datos->imagen);
        //storage/app    /public/....
        User::destroy($cedula);
        notify()->preset('eliminar');
        return redirect('admin/admin');
    }
}
