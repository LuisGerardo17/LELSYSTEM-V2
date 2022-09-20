<?php

namespace Database\Seeders;
use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Rol();
        $rol->nombre = 'Administrador';
        $rol->save();
        $rol = new Rol();
        $rol->nombre = 'Docente';
        $rol->save();
        $rol = new Rol();
        $rol->nombre = 'Estudiante';
        $rol->save();
    }
 }

