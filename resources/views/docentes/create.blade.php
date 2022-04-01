
@extends('layouts.app')

@section('titulo', 'Crear registro')

@section('contenido')


    <h3 class="text-center">Crear Nuevo Docente</h3>

    {{--se utiliza el actributo enctype para subir archivos a la base de datos--}}
    <form action="/docentes" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $alerta)
                <div class="alert alert-danger" role="alert">
                    <ul>

                        <li>{{$alerta}}</li>

                    </ul>
                </div>

            @endforeach
        @endif
        <div class="form-group">
            <label for="nombres">Nombre del docente</label>
            <input name="nombres" id="nombres" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos del docente</label>
            <input name="apellidos" id="apellidos" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input name="titulo" id="titulo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="cursoAsociado">Curso asociado</label>
            <input name="cursoAsociado" id="cursoAsociado" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="foto">Cargar imágen</label>
            <input name="foto" id="foto" type="file">
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
    </form>

@endsection

{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Vista de registros</title>
    </head>

    <body>
        --}}
        {{--Boostrap requiere un div container para mostrar
            los elementos centrados y ordenados--}}
            {{--
        <div class="container">
            <br>
            <h3 class="text-center">Crear Nuevo Curso</h3>
            <form action="/cursos" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombrecurso">Nombre del curso</label>
                    <input name="nombre" id="nombrecurso" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción del curso</label>
                    <input name="descripcion" id="descripcion" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Crear</button>
            </form>
        </div>

    </body>

</html>
--}}
