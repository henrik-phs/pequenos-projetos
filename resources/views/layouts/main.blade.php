<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/1e5ca3ab1b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="navegacao">
        {{-- BARRA DE NAVEGAÇÃO --}}
        <div class="container">
            {{-- <div class="col-1" style="display: flex; align-items: center">
                        <i class="fa-solid fa-bars menu-icon"></i>
                    </div> --}}
            <div class="col-12" style="display: flex; align-items: center">
                <h1 class="titulo-navegacao">
                    @yield('titulo')
                </h1>
            </div>
        </div>
    </div>

    <br>
    <div class="container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    @yield('scripts')

</body>

</html>
