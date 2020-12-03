<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class acreditados extends Controller
{
    public function index()
    {
    	return view('web.acreditados');
    }
}
