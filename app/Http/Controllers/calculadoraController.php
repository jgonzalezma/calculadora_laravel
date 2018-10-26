<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculadoraController extends Controller
{
	public function show(Request $request){
    	return view('calculadora', [
    		'nombre'=>$request->input('nombre')
    	]);
    }

    public function operaciones(Request $request){
    	$nombre = $request->input('nombre');
    	$operacion = $request->input('operacion');
    	$num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $view = "calculadora";

        if ($num1 != null && $num2 != null) {
	        switch ($operacion) {
	        	case 'sumar':
	        			$resultado = $num1+$num2;
	        		break;
	        	case 'restar':
	        		$resultado = $num1-$num2;
	        		break;
	        	case 'multiplicar':
	        		$resultado = $num1*$num2;
	        		break;
	        	case 'dividir':
	        		$resultado = $num1/$num2;
	        		break;
	        	default:
	        		//
	        		break;
	        }
        }else{
        	echo "Introduce los dos numeros";
        }
        return view($view, ['resultado'=>$resultado,'nombre'=>$nombre]);
    }
}
