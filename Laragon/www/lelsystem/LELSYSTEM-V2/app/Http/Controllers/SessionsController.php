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
    if(auth()->attempt(request(['email','password'])) == false) {
        return back()->withErrors([
          'message' => 'The mail or password is incorrect please try again'
        ]);

    } else {
        if(auth()->user()->role == 'admin'){

            return redirect()->to('administrador.admin');
            
        } elseif(auth()->user()->role == 'docente'){

            return redirect()->to('docente.docente');
        } elseif(auth()->user()->role == 'estudiante'){

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
