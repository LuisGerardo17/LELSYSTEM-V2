<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\User;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.login');
}

  public function store(Request $request) {

    $campos=[

        'correo'=>'required',
         'contrasena'=>'required|confirmed|min:2|max:10',

    ];

    $request->validate($campos);
    if(auth()->attempt(request(['correo','contrasena'])) == false) {
        return back()->withErrors([
          'message' => 'El correo o contraseña esta incorrecto porfavor ingresa nuevamente'
        ]);

    } else {
        if(auth()->user()['rol'] == 'Administrador'){

            return redirect('admin/admin');

        } elseif(auth()->user()['rol'] == 'Docente'){
                return redirect('docente/docente');
        } elseif(auth()->user()->rol == 'Estudiante'){

            return redirect()->to('estudiante.estudiante');
         }

        else {
            return redirect()->to('auth.login');
        }

       }

    }

    public function destroy() {
       auth()->logout();
       return redirect()->to('homepage');

    }


}
