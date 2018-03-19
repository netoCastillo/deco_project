<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Note;
use App\imagen;
use App\album;
use App\Item;
//use DB;

Route::get('/', function () {

//Cargamos el slider principal
    return view('Inicio');
});

//Detalle de la galeria
Route::get('/Gallery/GalleryDetail/{id}', function ($id) {
    //Cargamos las notas desde la base de datos
	//$imagenes = imagen::all();  
    $album = DB::table('album')->where('idAlbum',$id)->first(); 
    $sp_imagenes = 'CALL IMAGENES_ByIDAlbum('.$id.')';
	$imagenes =  DB::select($sp_imagenes);   
	return view('/Gallery/GalleryDetail',compact('imagenes','album'));	
});


//articulos : pagina a visitar 
Route::get('articulos', function () {
	//todos los articulos desde la base de datos
	$articulos = Articulo::all();
    return view('articulos', compact('articulos'));
});


/*Administrar los articulos*/
Route::get('articulos/manejador/{idArticulo}', function ($idArticulo = 0) {
    return $idArticulo;
})->where('idArticulo','[0-9]+');



Route::post('articulos/manejador/', function () {
    return 'CREANDO UN ARTICULO';
});



/*Todos los Eventos - Album*/
Route::get('eventos', function () {
	$album = Album::all();
    return view('eventos',compact($album));
});

/*Todos los Eventos - Album*/
Route::get('eventos/detalle/{idEvento}', function ($idEvento) {
	    return $idArticulo;
})->where('idArticulo','[0-9]+');




/*IMAGENES*/
Route::get('imagenes/manejador/{idImagen}', function ($idImagen = null) {
    return view('imagenes/manejador');
})->where('idImagen','[0-9]+');



Route::post('imagenes/manejador/', function () {

    return 1;
});


/*SERVICIOS*/
Route::get('Servicios', function () {    
    return view('servicios');
});

/*GALERIAS*/
Route::get('Galerias', function () {    
    return view('galerias');
});


/*DASHBOARD*/

/*Obtener todos los articulos dashboard*/
Route::get('dashboard/items','ItemController@index');
Route::get('dashboard/item/create','ItemController@create');
Route::post('dashboard/item','ItemController@store');
Route::get('dashboard/item/{id}','ItemController@show')->where('id','[0-9]+');


