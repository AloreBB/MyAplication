@extends('layouts.app')

@section('titulo', 'Editar Curso')

@section('contenido')
    <h3 class="text-center">Editar Docente</h3>

    {{--se utiliza el actributo enctype para subir archivos a la base de datos--}}
    <form action="/docentes/{{$docentito->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input value="{{$docentito->nombres}}" name="nombre" id="nombres" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input value="{{$docentito->apellidos}}" name="apellidos" id="apellidos" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input value="{{$docentito->titulo}}" name="titulo" id="titulo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcion">Curso asociado</label>
            <input value="{{$docentito->cursoAsociado}}" name="descripcion" id="descripcion" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcion">Cargar nueva imágen</label>
            <input name="imagen" id="imagen" type="file">
        </div>
        <button class="btn btn-success">Actualizar</button>
        <button type="submit" class="btn btn-success">Borrar</button>
    </form>
@endsection
