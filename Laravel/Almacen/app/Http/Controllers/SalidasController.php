<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalidasController extends Controller
{
    public function index()
    {
       return view('salidas');
    }
}
