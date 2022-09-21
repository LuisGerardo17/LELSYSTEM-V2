<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Rol;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'login';

    /**
     * Create a new controller instance.
     *
     * @return void
     * public function __construct()
    *{
        *$this->middleware('guest');
    *}
     */


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

     public function index() {

           return view('auth.register');
     }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cedula' => ['required', 'string', 'max:10'],
            'nombres' => ['required', 'string', 'max:100'],
            'correo' => ['required', 'string', 'email', 'max:50'],
            'contrasena' => ['required', 'string', 'min:3','max:10', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */



    protected function create(array $data)
    {
        $user = User::create([
            'cedula' => $data['cedula'],
            'nombres' => $data['nombres'],
            'correo' => $data['correo'],
            'contrasena' => Hash::make($data['contrasena']),

        ]);
        $user->roles()->attach(Rol::where('nombre', 'Estudiante')->first());
        return $user;
    }
}
