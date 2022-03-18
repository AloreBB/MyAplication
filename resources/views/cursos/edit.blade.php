@extends('layouts.app')

@section('titulo', 'Editar Curso')

@section('contenido')
    <h3 class="text-center">Editar Curso</h3>

    {{--se utiliza el actributo enctype para subir archivos a la base de datos--}}
    <form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nombrecurso">Modifique nombre del curso</label>
            <input value="{{$cursito->name}}" name="nombre" id="nombrecurso" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcion">Modifique descripción del curso</label>
            <input value="{{$cursito->descripcion}}" name="descripcion" id="descripcion" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcion">Cargar nueva imágen</label>
            <input name="imagen" id="imagen" type="file">
        </div>
        <button href="/cursos/{{$cursito->id}}/edit" class="btn btn-success">Actualizar</button>
        <button type="submit" class="btn btn-success">Borrar</button>
    </form>
@endsection
