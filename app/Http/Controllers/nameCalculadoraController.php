<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nameCalculadoraController extends Controller
{
    public function show(Request $request){
    	return view('calculadora', [
    		'nombre'=>$request->input('nombre')
    	]);
    }
}
