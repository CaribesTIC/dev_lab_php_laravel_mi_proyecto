<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{

    public function __construct(){
        $this->middleware('domingo');
    }

    public function recibirPost(Request $request){
        echo $request->input('id');
	$todos_los_datos = $request->all();
        print_r($todos_los_datos); 
        var_dump($todos_los_datos);
	dd($todos_los_datos);
    }

    public function editar(Request $request, $id){
	echo "Recibo $id como parámetro de la ruta.";
	echo "Además recibimos estos datos por formulario: " . implode(', ', $request->all());
        echo $request->method();
        if($request->isMethod('get')){
            echo "Estoy recibiendo por get";
        }
    }

    public function editar2(Request $request){
	echo "Además recibimos estos datos por formulario: " . implode(', ', $request->all());
        echo $request->method();
        if($request->isMethod('post')){
            echo "Estoy recibiendo por post";
        }
        $edad = $request->input("edad", 18);
        echo $edad;
    }

}
