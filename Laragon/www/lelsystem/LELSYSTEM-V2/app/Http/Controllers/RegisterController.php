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
      
        $user = User::create(request(['name','email','password']));
        auth()->login($user);
        return redirect()->to('administrador.admin');
    }
}




