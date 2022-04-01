@extends('layouts.app')

@section('titulo', 'Detalle curso')

@section('contenido')

<div class=" text-center">
    <img style="height: 400px; width: 500px; margin: 20px;" src="{{Storage::url($docentito->foto) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <h4 class="card-title">Docente</h4>
        <p class="card-text"><p><b>Nombres: </b>{{$docentito->nombres}}</p>
        <p class="card-text"><p><b>Apellidos: </b>{{$docentito->apellidos}}</p>
        <p class="card-text"><p><b>Título: </b>{{$docentito->titulo}}</p>
        <p class="card-text"><p><b>Curso asociado: </b>{{$docentito->cursoAsociado}}</p>
        {{--En el href solicita el id para ver un registro en particular--}}

    </div>
    <a href="/docentes/{{$docentito->id}}/edit" class="btn btn-primary">Editar docente</a>
    {{--En este caso no se escribe 'destroy en la ruta como lo hacemos en editar.
        Creamos el formulario solo para agreagar el boton de eliminar'--}}
    <br>
    <br>
    <form class="form-group" action="/docentes/{{$docentito->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>

@endsection
