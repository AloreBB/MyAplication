@extends('layouts.app')

@section('titulo', 'Detalle curso')

@section('contenido')

<div class=" text-center">
    <img style="height: 400px; width: 500px; margin: 20px;" src="{{Storage::url($cursito->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <h5 class="card-title">Información del curso</h5>

        <p class="card-text"><p><b>Nombre: </b>{{$cursito->name}}</p>
        <p class="card-text"><p><b>Descripción: </b>{{$cursito->descripcion}}</p>
        <p class="card-text"><p><b>Duración: </b>{{$cursito->horas}} Horas</p>
        {{--En el href solicita el id para ver un registro en particular--}}

    </div>
    <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-primary">Editar curso</a>
    {{--En este caso no se escribe 'destroy en la ruta como lo hacemos en editar.
        Creamos el formulario solo para agreagar el boton de eliminar'--}}
        <br>
        <br>
        <form class="<div class="form-group" action="/cursos/{{$cursito->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
</div>

@endsection
