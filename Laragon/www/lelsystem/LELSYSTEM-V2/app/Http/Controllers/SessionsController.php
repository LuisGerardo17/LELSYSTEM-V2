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
        } else {
            return redirect()->to('/');
        }
 

    }
          return redirect()->to('administrador.admin');
    }

    public function destroy() {
       auth()->logout();

       return redirect()->to('/');

    }


}
