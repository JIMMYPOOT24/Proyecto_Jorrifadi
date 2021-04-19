<?php

namespace App\Http\Controllers;

use App\Models\mdatosempresa;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $datos = mdatosempresa::all();
        return view('about', compact('datos'));

    }
}
