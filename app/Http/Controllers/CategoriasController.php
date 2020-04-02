<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
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
    }
}
