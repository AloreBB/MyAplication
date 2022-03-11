@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

    <h3 class="center">Listado de cursos disponibles</h3>

    {{--foreach es un ciclo o bucle especial para trabajar con arrays--}}
    {{--Nota: existen ciclos como while, do while, for, foreach--}}
    <div class="row">{{--Ya tenemos la fila--}}
    @foreach ($cursito as $Jovy)

        <div class="col-sm">{{--Ya abrimos la columna--}}
            <div class="card text-center" style="width: 18rem;">
                <img style="height: 180px; width: 285px" src="{{Storage::url($Jovy->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$Jovy['name']}}</h5>
                  <p class="card-text"><p>{{$Jovy->descripcion}}</p></p>
                  <a href="#" class="btn btn-primary">Ver más...</a>
                </div>
            </div>
            <br>
        </div>


        {{--para darle informacion a php basta con interpolar las variables
            usando la doble llave--}}

    @endforeach
    </div>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Vista de registros</title>
    </head>

    <body>
        {{--Boostrap requiere un div container para mostrar
            los elementos centrados y ordenados--}}

        <div class="container">
            <br>
            <br>
            <br>
            <h3 class="text-center">ESTA ES LA PAGINA PRINCIPAL INDEX</h3>

        </div>

    </body>

</html>
