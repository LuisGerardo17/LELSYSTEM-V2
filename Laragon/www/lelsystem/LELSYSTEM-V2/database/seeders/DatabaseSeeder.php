<?php

namespace Database\Seeders;

use App\Models\TipoArchivos;
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
          $user->save();

          //tipo archivos
          $archivos=new TipoArchivos();
          $archivos->tipo='pdf';
          $archivos->save();

          $archivos1=new TipoArchivos();
          $archivos1->tipo='excel';
          $archivos1->save();

          $archivos2=new TipoArchivos();
          $archivos2->tipo='word';
          $archivos2->save();


    }


}
