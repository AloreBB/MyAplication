
@extends('layouts.app')

@section('titulo', 'Crear registro')

@section('contenido')


    <h3 class="text-center">Crear Nuevo Curso</h3>

    {{--se utiliza el actributo enctype para subir archivos a la base de datos--}}
    <form action="/cursos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombrecurso">Nombre del curso</label>
            <input name="nombre" id="nombrecurso" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción del curso</label>
            <input name="descripcion" id="descripcion" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcion">Cargar imágen</label>
            <input name="imagen" id="imagen" type="file">
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
