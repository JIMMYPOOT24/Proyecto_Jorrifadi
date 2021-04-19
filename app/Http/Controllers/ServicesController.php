<?php

namespace App\Http\Controllers;

use App\Models\mdatosempresa;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services(){

        $datos = mdatosempresa::all();
        return view('services', compact('datos'));
    }
}
