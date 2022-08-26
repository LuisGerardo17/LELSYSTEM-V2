<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuarios;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
          $usuarios = new Usuarios;
          $usuarios->nombres = 'Luis Gerardo';
          $usuarios->correo = 'gerardo17@gmail.com';
          $usuarios->contrasena = 'potosi1988';


         $usuarios ->save();


    }


}
