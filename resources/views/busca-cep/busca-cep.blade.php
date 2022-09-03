@extends('layouts/main')

@section('titulo', 'Buscador de endereços')

@section('content')
    <div class="row">
        <div class="col-md-6">

            <form action="buscar" method="get">
                @csrf

                <div class="form-group">
                    <label class="lbl" for="cep">Informe o CEP:</label>
                    <input type="text" name="cep" id="cep" class="form-control">
                </div>

                <button id="buscar" class="btn btn-outline-primary btn-busca">Buscar com ajax</button>
                <button type="submit" class="btn btn-outline-success btn-busca">Buscar sem ajax</button>
            </form>

            <div style="margin-top: 20px; display: {{ @$retorno ? 'block' : 'none' }}" id="mostrar-endereco">
                <div class="alert alert-info">
                    <i class="fa-solid fa-map-location-dot"></i>
                    <span id="logradouro">{{ @$retorno->logradouro }}</span>,
                    <span id="bairro">{{ @$retorno->bairro }}</span><br>
                    <span id="cidade">{{ @$retorno->localidade }}</span> -
                    <span id="uf">{{ @$retorno->uf }}</span><br>
                </div>
            </div>

        </div>

    </div>
    </div>
@endsection

@section('scripts')

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
@endsection
