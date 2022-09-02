<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

 

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'correo',
        'direccion',
        'telefono',
        'contrasena',
        'imagen',
        'rol',

    ];

    protected $primaryKey = 'cedula';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'contrasena',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
  //Funcion para encriptar la contraseña
    public function setPasswordAttribute($contrasena){
       $this->attributes['contrasena'] = bcrypt($contrasena);
    }
    //funcion rol admin
    public function admin(){
        return $this->hasMany(Administradores::class,'cedula','cedula');
        //hasMany ->tiene muchos ('en este caso administradores','con id_admin','es igual a id_usuario')
    }

    public function estudiante(){
        return $this->hasMany(Estudiantes::class,'cedula','cedula');
    }
}
