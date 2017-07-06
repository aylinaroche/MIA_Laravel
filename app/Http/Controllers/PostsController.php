<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use App\Post;
use DB;
use Illuminate\Database\QueryException;
use PDO;

class PostsController extends Controller
{
     public function index()
     {
     	//return view('posts.index');
        return view('cloud.inicio');
     }


     //////////////////

     public function store(Request $request)
     {
     	//Validar
     	/*$this->validate($request, [
    			'nombre' => 'required|max:255',
    			'apellidos' => 'required'
    			//'apellidos' => 'required | Url'
    		]);
     	//Mostrar
     	//dd($request->all());
*/
     	$post = new Post;
     	$post->nombre = $request->get('nombre');
     	$post->apellidos = $request->get('apellidos');

     	$post->save();

     	//return redirect()->route('cloud.inicio');
     	return "BIEEEEEEEEEEEEEEEEEN";
     }




     public function insert(Request $request) {
      //$name = $request->get('nombre') ;
      //$ape = $request->get('apellidos') ;
      //DB::insert('insert into posts (nombre,apellidos) values(?) ',[$name],[$ape]);
        DB::setDateFormat('MM/DD/YYYY');
        DB::insert('insert into post (nombre,apellidos) values(\'Luis\',\'Azurdia\') ');
     return "BIEEEEEEEEEEEEEEEEEN";
   }
}


