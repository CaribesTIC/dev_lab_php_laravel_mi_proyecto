<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear un producto</title>
    <style>
        .errors{
            background-color: #fcc;
            border: 1px solid #966;
        }
        form{
            margin-top: 20px;
            line-height: 1.5em;
        }
        label{
            display: inline-block;
            width: 120px;
        }
    </style>
</head>
<body>
    <h1>Crear un producto</h1>
    @if(count($errors) > 0)
    <div class="errors">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <form action="http://localhost/mi-proyecto-laravel/public/producto" method="post">
        <label for="nombre">Nombre:</label> <input type="text" name="nombre" value="{{old('nombre')}}">
        <br />

        <label for="descripcion">Descripción:</label> <input type="text" name="descripcion" value="{{old('descripcion')}}">
        <br />

        <label for="precio">Precio:</label> <input type="text" name="precio" value="{{old('precio')}}">
        <br />

        <input type="submit" value="Crear">
    </form>
</body>
</html>

