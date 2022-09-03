<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CepController extends Controller
{
    public function buscaCep()
    {
        return view('busca-cep.busca-cep');
    }

    public function buscarCepDigitado(Request $request)
    {
        $retorno = $this->executa($request->cep);
        
        return view('busca-cep.busca-cep', [
            'retorno' => $retorno
        ]);
    }

    public function executa($cep)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://viacep.com.br/ws/$cep/json",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }
}
