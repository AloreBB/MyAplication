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
</div>

@endsection
