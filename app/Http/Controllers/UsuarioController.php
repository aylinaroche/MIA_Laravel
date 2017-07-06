<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use App\Usuario;
use Redirect;
use Carbon\Carbon;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'nombre' => 'required',
                'correo' => 'required | email',
                'clave' => 'required'
                //'apellidos' => 'required | Url'
            ]);

        $fecha = $request->get('fecha_nac');
        $fechaNac = new Carbon($fecha);

        $correo =$request->get('correo');


        $user = new Usuario;
        $user->nombre = $request->get('nombre');
        $user->apellidos =  $request->get('apellidos');
        $user->clave = $request->get('clave');
        $user->correo = $correo;
        $user->telefono = $request->get('telefono');
        $user->genero = $request->get('genero');
        $user->fecha_nac =$fechaNac;
        $user->direccion = $request->get('direccion');
        $user->fecha_reg = Carbon::today();
       // $user->rol = '1';
        //$user->save();

        return Redirect()->route('mail',['correo'=> $correo]);
        //return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
