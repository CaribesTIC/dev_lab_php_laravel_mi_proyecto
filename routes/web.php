<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/test', function(){
//	echo "Esto es una simple prueba!!";
//});

Route::get('/test', ['middleware' => 'domingo', function(){
    return 'Probando ruta con middleware';
}]);

Route::group(['middleware' => 'domingo'], function(){
    Route::get('/probando/ruta', function(){
        //código a ejecutar cuando se produzca esa ruta y el verbo 
        return 'get';
    });

    Route::post('/probando/ruta', function(){
        //código a ejecutar cuando se produzca esa ruta y el verbo POST
        return 'post';
    });
});

//Route::get('/probando/ruta', function(){
//	//código a ejecutar cuando se produzca esa ruta y el verbo 
//	return 'get';
//});

Route::get('algo', function () {
    if ( view()->exists('algo') )
        return view('algo');
});

Route::get('/otro', function () {
    if ( view()->exists('otro/index') )
        return view('otro.index', [
    	'mes' => 9,
    	'ano' => 2019,
    	'eventos' => 'X'
    ]);
});

//Route::get('articulos/{id}','ArticulosController@ver');


Route::get('articulos', function(){
	dd(\App\Article::all());
});


//Route::get('articulos/','ArticulosController@all');

Route::post('recibir', 'PrimerController@recibirPost');

Route::get('editar/{id}', 'PrimerController@editar');

Route::post('editar2', 'PrimerController@editar2');

Route::get('ruta/de/ejemplo', function(){
	return "Respuesta desde sistema de routing.";
});

Route::post('respuesta', function(){
	return response('Hola respuesta', 200);
});

Route::get('respuesta2', function(){
	return response('Esto es un error', 404);
});

Route::get('respuesta3', function(){
	return response("1,2,3,4\n5,6,7,8", 200)
		->header('Content-Type', 'text/csv');
});

Route::get('respuesta4', function(){
	return response("", 301)
		->header('location', 'http://desarrolloweb.com');
});

Route::get('respuesta5', function(){
	return response("Esta página se refrescará en 5 segundos hacia...", 200)
		->header('Cache-Control', 'max-age=3600')
		->header('Refresh', '5; url=http://www.desarrolloweb.com');
});

Route::get('respuesta6', function(){
	return response()
		->view('error')
		->header('status', 404)
		->header('Refresh', '5; url=/');
});

Route::match(['get', 'post'], 'input', 'TestRequestController@recibir');

Route::get('producto/crear', 'ProductoController@create');

Route::post('producto', 'ProductoController@store');

Route::get('personalizacion', 'PersonalizacionController@personalizar');

Route::post('personalizacion', 'PersonalizacionController@guardarpersonalizacion');

////////////////////////////////////////////////////////////////////////////////////////

Route::get('libros', 'BookController@index');
Route::get('libros/{id}', 'BookController@show')->where(['id' => '[0-9]+']);
Route::get('libros/crear', 'BookController@create');
Route::post('libros/crear', 'BookController@store');




/*Route::get('cualquier/ruta', function () {
    return view('una_vista');
});*/

/*
Route::post('/probando/ruta', function(){
	//código a ejecutar cuando se produzca esa rutay el verbo POST
	return 'post';
});
/*
Route::put('/probando/ruta', function(){
	//código a ejecutar cuando se produzca esa rutay el verbo PUT
	return 'put';
});

Route::delete('/probando/ruta', function(){
	//código a ejecutar cuando se produzca esa rutay el verbo DELETE
	return 'delete';
});

Route::match(['get', 'post, 'put''], '/testing', function () {
    echo  'Ruta testing para los verbos GET, POST, PUT';
});

Route::any("/cualquiercosa", function(){
	echo 'La ruta /cualquiercosa asociada a cualquier verbo';
});

*/
