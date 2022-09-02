<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Estudiantes;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index(){
        $estudiantes = Estudiantes::paginate(2);
       return view('admin.estudiante.estudiante',compact('estudiantes')); 
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
        $datosEstudiante=Request()->except('_token');

        if($datosEstudiante['contrasena']==$datosEstudiante['contrasena_verified_at']){
            if($request->hasFile('imagen')){
                $datosEstudiante['imagen']=$request->file('imagen')->store('uploadsEstudiante','public');
            }
            $datosEstudiante['rol']='Estudiante';
            User::insert($datosEstudiante);
            Estudiantes::insert(['cedula'=>$datosEstudiante['cedula']]);
            notify()->preset('registrado');
            return redirect('estudiante.estudiante');
        }else{
            notify()->preset('error');
            return redirect('estudiante.estudiante');
        }
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
    public function edit(User $datos)
    {


        /*
         return view('admin.estudiante.estudiante', compact('datos'));
         $post=Post::find($id);
        $this->cedula=$post->cedula;
        $this->nombres=$post->nombres;
        $this->view=''*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($cedula)
    {


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
        $datos->delete();
        return redirect('admin.estudiante.estudiante');

    }
}
