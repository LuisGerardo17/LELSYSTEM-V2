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

          $user1 = new User();
          $user1->cedula = '1720545678';
          $user1->nombres ='Luis';
          $user1->apellidos ='Pozo';
          $user1->correo = 'admin@gmail.com';
          $user1->direccion='Cdla.Ibarra';
          $user1->contrasena = Hash::make('admin');
          $user1->telefono= '0987295066';
          $user1->imagen='uploadsEstudiante/216qrrGe2epvD0qIOOELOqUCCuSuuSAZsJkmuBCW.jpg';
          $user1->rol ='Administrador';
          $user1->save();

          $user2 = new User();
          $user2->cedula = '1724567890';
          $user2->nombres ='Jose';
          $user2->apellidos ='Paez';
          $user2->correo = 'docente@gmail.com';
          $user2->direccion='Cdla.Ibarra';
          $user2->contrasena = Hash::make('123');
          $user2->telefono= '0987295066';
          $user2->imagen='uploadsEstudiante/216qrrGe2epvD0qIOOELOqUCCuSuuSAZsJkmuBCW.jpg';
          $user2->rol ='Docente';
          $user2->save();

          $user3 = new User();
          $user3->cedula = '1755567823';
          $user3->nombres ='Andres';
          $user3->apellidos ='Acosta';
          $user3->correo = 'andres@gmail.com';
          $user3->direccion='Cdla.Ibarra';
          $user3->contrasena = Hash::make('1234');
          $user3->telefono= '0987295034';
          $user3->imagen='uploadsEstudiante/216qrrGe2epvD0qIOOELOqUCCuSuuSAZsJkmuBCW.jpg';
          $user3->rol ='Estudiante';
          $user3->save();


    }
}
