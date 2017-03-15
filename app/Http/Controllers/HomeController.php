<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function inicio($nombre=null){
    	// dd(compact("nombre",$nombre));
    	return view('prueba',compact('nombre',$nombre));
    }
}
