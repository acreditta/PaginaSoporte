<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class administrador extends Controller
{
    public function administrador()
    {
    	return view('web.administrador');
    }
}
