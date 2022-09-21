<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
   protected $guarded = [];
   
   public function users()
   {
       return $this->belongsToMany(User::class)->withTimestamps();
   }

}
