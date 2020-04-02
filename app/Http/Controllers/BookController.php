<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $libros = Book::all();
        return view('libro.todos', ['libros' => $libros->toArray()]);
    }

    public function show($id)
    {
        $libro = Book::find($id);
        if (!is_null($libro))
            return view('libro.mostrar', ['libro' => $libro->toArray()]);
        else
            return response('no encontrado', 404);
    }

    public function create()
    {
        return view('libro.formlibro');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'author' => 'required|min:8',
            'isbn' => 'required'
        ]);

        Book::create($request->all());
        return redirect('/libros');
    }
}
