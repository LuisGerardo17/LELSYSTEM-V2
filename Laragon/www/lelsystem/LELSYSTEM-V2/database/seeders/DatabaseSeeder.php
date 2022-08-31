<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function up()
    {
          $user = new User;
          $user->cedula = '14567890';
          $user->nombres = 'Luis Gerardo';
          $user->apellidos = 'Pozo Potosi';
          $user->correo = 'luisgerardo@gmail.com';
          $user->direccion = 'Cdla.Ibarra';
          $user->contrasena = '2345';
          $user->contrasena_verified_at = '2345';
          $user->telefono = '09876543';
          $user->imagen = 'foto';
          $user->rol = 'Administrador';
          $user ->insert();


    }


}
