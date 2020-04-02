<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;

class ProductoController extends Controller
{
    public function create(Request $request)
    {
        return view('producto.create');
    }

    /*public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
        ]);

        echo 'Ahora sé que los datos están validados. Puedo insertar en la base de datos';
    }*/

    public function store(ProductoRequest $request)
    {
        echo 'Estoy usando la Request personalizada ProductoRequest. ';
        echo 'No necesito invocar explícitamente las funciones para validar. ';
        echo 'Si estoy aquí sé que los datos están validados.';
        dd($request->all());
    }

}

