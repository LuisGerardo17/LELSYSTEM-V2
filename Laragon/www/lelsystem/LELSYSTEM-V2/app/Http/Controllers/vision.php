<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vision extends Controller
{
     
    public function index()
    {
        return view('homepage.vision');
    }
}
