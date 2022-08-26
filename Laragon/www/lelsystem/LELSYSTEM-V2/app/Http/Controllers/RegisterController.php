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

       // $roles['roles']=[['id'=>1,'name'=>'hola'],['id'=>3,'name'=>'hola2']];

        return view('auth.register');

}


    public function store(){

        $this->validate(request(),[
          'cedula'=>'required',
          'nombres'=>'required',
          'apellidos'=>'required',
          'correo'=>'required',
          'direccion'=>'required',
          'telefono'=>'required',
          'contrasena'=>'required',
          'imagen'=>'required',
          'rol'=>'required',
        ]);

        $user = User::create(request(['cedula','nombres','apellidos','correo','direccion','telefono','contrasena','imagen','rol']));
        auth()->login($user);
        return redirect()->to('admin.admin.admin');
    }
}




