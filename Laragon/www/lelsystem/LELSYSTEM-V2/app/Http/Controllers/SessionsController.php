<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.login');
}

  public function store() {
    if(auth()->attempt(request(['correo','contrasena'])) == false) {
        return back()->withErrors([
          'message' => 'El correo or contraseña esta incorrecto porfavor ingresa nuevamente'
        ]);

    } else {
        if(auth()->user()->rol == 'Administrador'){

            return redirect()->to('admin.admin.admin');

        } elseif(auth()->user()->rol == 'Docente'){

            return redirect()->to('docente.docente');
        } elseif(auth()->user()->rol == 'Estudiante'){

            return redirect()->to('estudiante.estudiante');
         }

        else {
            return redirect()->to('/');
        }

       }

    }

    public function destroy() {
       auth()->logout();

       return redirect()->to('/');

    }


}
