<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Historia extends Controller
{
    
    
    public function index()
    {
        return view('homepage.historia');
    }
}
