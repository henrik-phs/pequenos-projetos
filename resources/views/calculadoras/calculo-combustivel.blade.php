@extends('layouts/main')

@section('titulo', 'Calculadora de combustível')

@section('content')
    <form action="#">
        <div class="row">

            @csrf
            <div class="form-group col-6">
                <label for="">Preço por litro:</label>
                <input type="text" name="preco" id="preco" class="input-control">
            </div>

            <div class="form-group col-6">
                <label for="">Litros abastecido:</label>
                <input type="text" name="litros" id="litros" class="input-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-6">
                <label for="">Valor abastecido:</label>
                <input type="text" name="valor" id="valor" class="input-control">
            </div>

            <div class="form-group col-6">
                <label for="">KM por litro:</label>
                <input type="text" name="km_litro" id="km_litro" class="input-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-6">
                <label for="">Preço da gasolina:</label>
                <input type="text" name="preco_gasolina" id="preco_gasolina" class="input-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-outline-primary btn-busca" id="calcular">Calcular</button>
            </div>
        </div>
    </form>

    <br>
    <div class="mostrar" style="display: none">
        <div class="alert alert-warning">
            <b id="alcool_gasolina"></b>
        </div>

        <div class="alert alert-success">
            <b>Valor abastecido: </b>
            R$ <span id="valor_abastecido"></span>
        </div>

        <div class="alert alert-success">
            <b>Total de litros abastecido: </b>
            <span id="litros_abastecido"></span>
        </div>

        <div class="alert alert-success">
            <b>Preço por KM: </b>
            <span id="preco_km"></span>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $("#calcular").click((e) => {
            e.preventDefault();

            var preco = $("#preco").val()
            var litros = $("#litros").val()
            var valor = $("#valor").val()
            var km_litro = $("#km_litro").val()
            var preco_gasolina = $("#preco_gasolina").val()

            $("#valor_abastecido").html(valorAbastecido(preco, litros))
            $("#litros_abastecido").html(litrosAbastecido(preco, valor))
            $("#preco_km").html(valorPorKM(preco, km_litro))
            $("#alcool_gasolina").html(alcoolOuGasolina(preco, preco_gasolina))

            $(".mostrar").show('slow')
        })

        function valorAbastecido(preco, litros = 0) {
            return litros > 0 ? numberFormat(preco * litros) : null
        }

        function litrosAbastecido(preco, valor = 0) {
            return valor > 0 ? numberFormat(valor / preco) : null
        }

        function valorPorKM(preco, km_litro = 0) {
            return km_litro > 0 ? numberFormat(preco / km_litro) : null
        }

        function alcoolOuGasolina(alcool, gasolina = 0) {
            var comparacao = gasolina > 0 ? alcool / gasolina : null
            console.log(comparacao);

            if (comparacao != null)
                return comparacao >= 0.7 ? "Abasteça com gasolina" : "Abasteça com álcool";
            else
                return false
        }
    </script>
@endsection

{{-- CALCULAR VALOR GASTO POR LITRO
    CALCULAR VALOR POR KM
    CALCULAR SE É MELHOR ÁLCOOL OU GASOLINA --}}
