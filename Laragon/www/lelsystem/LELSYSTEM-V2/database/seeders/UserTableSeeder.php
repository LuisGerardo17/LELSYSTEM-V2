<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Crearemos un Administrador.
       $user = User::create([

        'cedula' => '1720545678',
        'nombres' =>'Luis',
        'apellidos'=>'Pozo',
        'correo'=> 'dmin@gmail.com',
        'direccion'=>'Cdla.Ibarra',
        'contrasena' => Hash::make('admin'),
        'telefono'=>'0987295066',
        'imagen'=>'uploadsEstudiante/216qrrGe2epvD0qIOOELOqUCCuSuuSAZsJkmuBCW.jpg',
        'rol' => 'Administrador',
       ]);

    $user = User::create([
        'cedula' => '1734563452',
        'nombres' =>'Jose',
        'apellidos'=>'Paez',
        'correo'=> 'jose@gmail.com',
        'direccion'=>'La Mena Dos',
        'contrasena' => Hash::make('123'),
        'telefono'=>'0987223452',
        'imagen'=>'uploadsEstudiante/216qrrGe2epvD0qIOOELOqUCCuSuuSAZsJkmuBCW.jpg',
        'rol' => 'Docente',
    ]);

    $user = User::create([
        'cedula' => '1720234562',
        'nombres' =>'David',
        'apellidos'=>'Erazo',
        'correo'=> 'david@gmail.com',
        'direccion'=>'Cdla.Ibarra',
        'contrasena' => Hash::make('1234'),
        'telefono'=>'0843563333',
        'imagen'=>'uploadsEstudiante/OOXxoeIfjfbnpJLKmw4rFo3fqPoPoKdsqUa9rSwh.jpg',
        'rol' => 'Estudiante',
       ]);
    }
}
