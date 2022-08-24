<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ResgisterController extends Controller
{
    public function create() {
        return view('auth.register');
     }
    

     public function store () {

      $user = User::create(request(['username','email','password']));

     }
}
