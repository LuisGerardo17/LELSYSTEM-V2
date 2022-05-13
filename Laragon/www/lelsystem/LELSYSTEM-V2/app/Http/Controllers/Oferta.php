<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Oferta extends Controller
{
   
    public function index()
    {
        return view('homepage.oferta');
    } 
}
