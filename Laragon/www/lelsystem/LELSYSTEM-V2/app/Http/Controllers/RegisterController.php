<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $redirectTo = "/login";

    public function create() {
     return view('auth.register');

}
public function __construct ()
{
    $this->middleware('guest');
}

    public function store(Request $request){
        $this->validate(request(),
        [
           'cedula' =>'required',
           'nombres' =>'required',
           'apellidos'=>'required',
           'direccion'=>'required',
           'telefono'=>'required',
           'correo'=>'required',
           'telefono'=>'required',
           'contrasena'=>'required',
           'rol'=>'required',
           'imagen'=>'required',

        ]);

        $user = User::insert(request(['cedula','nombres','apellidos','correo','direccion','telefono','contrasena','contrasena_verified_at','imagen','rol']));
        auth()->login($user);
        return redirect()->to('auth.login');
    }
}




