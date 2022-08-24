<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $roles['roles']=[['id'=>1,'name'=>'hola'],['id'=>3,'name'=>'hola2']];

        return view('auth.register',$roles);

}


    public function store(){

        $this->validate(request(),[
          'name'=>'required',
          'username'=>'required',
          'email'=>'required|email',
          'password'=>'required|confirmed',
        ]);

        $user = User::create(request(['name','username','email','password']));
        auth()->login($user);
        return redirect()->to('administrador.admin');
    }
}




