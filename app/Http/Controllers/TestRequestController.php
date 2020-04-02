<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRequestController extends Controller
{
    public function recibir(Request $request)
    {
         if($request->isMethod('post')){
             echo "Estoy recibiendo por post";
        }
        $nombre = $request->input("nombre");
        echo $nombre;
        $edad = $request->input("edad", 18);
        echo $edad;
        if ($request->has("edad")){
            echo "Encontré la edad";
        }
        $todos = $request->all();
        print_r($todos);
        $metodo = $request->method();
        return $metodo;
    }
}



