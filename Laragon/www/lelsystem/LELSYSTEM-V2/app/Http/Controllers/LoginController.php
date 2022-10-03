<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Estudiantes;
use App\Models\Docentes;
use App\Models\Administradores;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has('datos')){
            $type=session()->get('datos')['r'];
            if($type==1){
                return redirect('/estudiante');
            }else if($type==2){
                return redirect('/homeadmin');
            }else if($type==3){
                return redirect('/docente');
            }else{
                return view('registro.login');
            }
        }else{
            return view('registro.login');
        }


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
        $datos=$request->except(['_token']);

        $user=User::where('correo','=',$datos['correo'])->where('contrasena','=',$datos['contrasena'])->get();
        if(isset($user[0]['cedula'])){
            $cedula=$user[0]['cedula'];
            $estudiante=Estudiantes::find($cedula);
            $docente=Docentes::find($cedula);
            $admin=administradores::find($cedula);
            if(isset($estudiante['cedula']) && $cedula==$estudiante['cedula']){
                session(['datos' => ['cedula'=> $user[0]['cedula'] ,'nombres'=> $user[0]['nombres'],'apellidos'=> $user[0]['apellidos'],'img'=> $user[0]['imagen'],'r'=>1]]);
                return redirect('/estudiante');
            }else if(isset($admin['cedula']) && $cedula==$admin['cedula']){
                session(['datos' => ['cedula'=> $user[0]['cedula'] ,'nombres'=> $user[0]['nombres'],'apellidos'=> $user[0]['apellidos'],'img'=> $user[0]['imagen'],'r'=>2]]);
                return redirect('/homeadmin');
            }else if(isset($docente['cedula']) && $cedula==$docente['cedula']){
                session(['datos' => ['cedula'=> $user[0]['cedula'] ,'nombres'=> $user[0]['nombres'],'apellidos'=> $user[0]['apellidos'],'img'=> $user[0]['imagen'],'telefono'=> $user[0]['telefono'],'r'=>3]]);
                return redirect('/docente');
            }else{
                dd('no');
            }

        }else {

            notify()->preset('Errorsession');
            return redirect('/login');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
