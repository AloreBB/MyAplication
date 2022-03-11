<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Creamos un array para poder manipular informacion de la tabla cursos
        // a su vez, el array actuará como un objeto

        $cursito = curso::all();
        /*El metodo compact pide un parametro el cual sera nuestro array
        llamado cursito y va acompañando la vista que estamos llamando
        */
        return view('cursos.index',compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //con el metodo all() veo toda la informacion
        //return $request->all();

        /*
            obvtuvumios el dato que el usuario envia
            por el input cuyo nombre es 'name'
        */
        //return $request->input('nombre');

        //creamos una nueva instancia del modelo
        $cursito = new curso();
        // esto me permitira manipular la tabla cursos
        $cursito->name = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');
        // con esto ejecutamos el comando para guardar

        if ($request->hasFile('imagen')) {
            $cursito->imagen = $request->file('imagen')->store('public');
        }
        $cursito->save();
        return 'Se guardo satisfatoriamente';

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
