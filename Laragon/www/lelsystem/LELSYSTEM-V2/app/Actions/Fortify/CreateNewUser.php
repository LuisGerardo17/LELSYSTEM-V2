<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'cedula' => ['required', 'string','max:10'],
            'nombres' => ['required', 'string', 'max:225'],
            'apellidos' => ['required', 'string', 'max:225'],
            'correo' => [ 'required','string','max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'contrasena' => ['required', 'string', 'max:255'],
            'contrasena' => $this->passwordRules(),
            'contrasena_verified_at' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:10'],
            'imagen' => ['required', 'string', 'max:255'],
        ])->validate();

        return User::create([
            'cedula' => ['required', 'string', 'max:10'],
            'nombres' => ['required', 'string', 'max:225'],
            'apellidos' => ['required', 'string', 'max:225'],
            'correo' => [ 'required','string','max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'contrasena' => Hash::make($input['contrasena']),
            'contrasena_verified_at' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:10'],
            'imagen' => ['required', 'string', 'max:255'],
        ]);
    }
}
