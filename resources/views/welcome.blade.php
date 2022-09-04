<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meus Projetos</title>

    <script src="https://kit.fontawesome.com/1e5ca3ab1b.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
        }

        a {
            text-decoration: none;
        }

        header {
            height: 5em;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .corpo {
            background: #0166cc;
            height: 100%;
        }

        .main {
            padding: 15px;
            background: #fff;
            height: 100%;
            border-radius: 30px 30px 0 0;
            z-index: 20;
            box-shadow: 0 0 10px rgba(41, 41, 41, 0.705);
        }

        .icon-app {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0px 0px 2px #aaa;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin: 0 auto;
        }

        .center {
            text-align: center;
        }
    </style>

    <div class="corpo">
        <header>
            <h1>Meus Projetos</h1>
        </header>

        <div class="main">
            <div class="container">
                <div class="row center">
                    <div class="col-3">
                        <a href="/busca-cep" title="Buscador de endereços">
                            <div class="icon-app"><i class="fa-solid fa-location-dot"></i></div>
                            <small>Cep</small>
                        </a>
                    </div>

                    <div class="col-3">
                        <a href="/calculadoras/combustivel">
                            <div class="icon-app"><i class="fa-solid fa-calculator"></i></div>
                            <small>Combustível</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
