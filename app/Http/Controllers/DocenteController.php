<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\storeDocenteRequest;
use App\Models\docente;

class DocenteController extends Controller
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

        $docentito = docente::all();
        /*El metodo compact pide un parametro el cual sera nuestro array
        llamado cursito y va acompañando la vista que estamos llamando
        */
        return view('docentes.index',compact('docentito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocenteRequest $request)
    {
       //creamos una nueva instancia del modelo
       $docentito = new docente();
       // esto me permitira manipular la tabla cursos
       $docentito->nombres = $request->input('nombres');
       $docentito->apellidos = $request->input('apellidos');
       $docentito->titulo = $request->input('titulo');
       $docentito->cursoAsociado = $request->input('cursoAsociado');
       // con esto ejecutamos el comando para guardar

       if ($request->hasFile('imagen')) {
           $docentito->foto = $request->file('imagen')->store('public');
       }

       $docentito->save();
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
        //Creo un array con informacion de registro
        // del id que viajo en la solicitud
        $docentito = docente::find($id);
        // asocio el array al view usando compact
        return view('docentes.show',compact('docentito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentito = docente::find($id);
        return view('docentes.edit',compact('docentito'));
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
        $docentito = docente::find($id);

        /*
        Con fill lleno todos los campos de la tabla cursos
        con la info que viene desde el request
        excepto lo que viene en el input llamada imagen
        */
        $docentito->fill($request->except('imagen'));
        if ($request->hasFile('imagen')) {
            $docentito->foto = $request->file('imagen')->store('public');
        }
        $docentito->save();

        return 'Docente actualizado';
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
