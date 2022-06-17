<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create() {
         

         return view('auth.register');

}

 
    public function store(){
      
        $this->validate(request(),[
          'name'=>'required',
          'username'=>'required',
          'ci'=>'required',
          'email'=>'required|email',
          'password'=>'required|confirmed',
          'rol'=>'required',
          'imagen'=>'required',
          
        ]);
        
        $user = User::create(request(['name','username','ci','email','password','rol','imagen']));
        auth()->login($user);
        return redirect()->to('administrador.admin');
    }
}




