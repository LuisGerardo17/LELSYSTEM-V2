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
    public function create() {
     return view('auth.register');

}


    public function store(Request $request){

        $user = User::create(request(['cedula','nombres','apellidos','correo','direccion','telefono','contrasena','contrasena_verified_at','imagen','rol']));
        auth()->login($user);
        return redirect()->to('auth.login');
    }
}




