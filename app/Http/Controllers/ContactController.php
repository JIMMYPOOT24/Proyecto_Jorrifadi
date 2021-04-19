<?php

namespace App\Http\Controllers;

use App\Models\mdatosempresa;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function  contact(){

        $datos = mdatosempresa::all();

        return view('contact', compact('datos'));

    }
}
