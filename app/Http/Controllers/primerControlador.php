<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class primerControlador extends Controller
{
    function index(){
        return view('contact', ['name' => 'Carolina Perea' ]);
    }
}
