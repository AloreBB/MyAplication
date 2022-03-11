<html>
    <head>
        <title>Alore - @yield('titulo')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        {{--Al llamar un elemento por su nombre desde otra pagina
            podremos implementear la plantilla--}}

        {{--
            @section('barralateral')
            This is the master sidebar.
        @show
        --}}


        {{--Este container es un boostrap y no se debe cambiar--}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
            <a class="navbar-brand">Brand</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Item 1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Item 2</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <br>
            @yield('contenido')

        </div>
    </body>
</html>
