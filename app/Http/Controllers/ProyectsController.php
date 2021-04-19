<?php

namespace App\Http\Controllers;

use App\Models\mdatosempresa;
use Illuminate\Http\Request;

class ProyectsController extends Controller
{
    public function proyects(){

        $datos = mdatosempresa::all();
        
        return view('proyects', compact('datos'));
    }
}
