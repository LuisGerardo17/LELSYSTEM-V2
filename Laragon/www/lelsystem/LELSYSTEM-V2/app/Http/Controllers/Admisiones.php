<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admisiones extends Controller
{
     
    public function index()
    {
        return view('homepage.admisiones');
    } 
}
