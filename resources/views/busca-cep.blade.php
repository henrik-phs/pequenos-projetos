<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar CEP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container" style="margin-top: 5em">
        <div class="card card-body">
            <h1>Buscador de endereços por cep</h1>

            <div class="row">
                <div class="col-md-7">
                    <form action="buscar" method="get">
                        @csrf

                        <label for="cep">Informe o CEP:</label>
                        <input type="text" name="cep" id="cep" class="form-control">

                        <br>
                        <button type="submit" id="buscar" class="btn btn-outline-primary">Buscar</button>
                    </form>
                </div>
            </div>

            <div class="row" style="margin-top: 20px; display: none" id="mostrar-endereco">
                <div class="col-md-7">
                    <div class="alert alert-info">
                        Logradouro: <span id="logradouro"></span><br>
                        Bairro: <span id="bairro"></span><br>
                        Cidade: <span id="cidade"></span><br>
                        Estado: <span id="uf"></span><br>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $("#buscar").click((e) => {
            e.preventDefault();

            $("#mostrar-endereco").show('slow');

            $.ajax({
                url: "https://viacep.com.br/ws/" + $("#cep").val() + "/json",
                type: "GET",
                success: (retorno) => {
                    $("#logradouro").html(retorno.logradouro)
                    $("#bairro").html(retorno.bairro)
                    $("#cidade").html(retorno.localidade)
                    $("#uf").html(retorno.uf)
                }
            })
        })
    </script>
</body>

</html>
