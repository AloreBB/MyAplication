@extends('layouts.app')

@section('titulo', 'Detalle curso')

@section('contenido')

<div class=" text-center">
    <img style="height: 400px; width: 500px; margin: 20px;" src="{{Storage::url($cursito->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$cursito['name']}}</h5>
        <p class="card-text"><p>{{$cursito->descripcion}}</p></p>
        {{--En el href solicita el id para ver un registro en particular--}}

    </div>
    <a href="/cursos/{{$cursito->id}}//edit" class="btn btn-primary">Editar curso</a>
</div>

@endsection
