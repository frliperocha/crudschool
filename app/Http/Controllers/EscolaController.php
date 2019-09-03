<?php

namespace App\Http\Controllers;

use App\Escola;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return Escola::where('user_id', auth()->id())->get();
    }


    public function store(Request $request)
    {
        $escola = new Escola();
        $escola->nome_aluno = $request->nome_aluno;
        $escola->data_nascimento = $request->data_nascimento;
        $escola->serie_ingresso = $request->serie_ingresso;
        $escola->rua = $request->rua;
        $escola->bairro = $request->bairro;
        $escola->numero = $request->numero;
        $escola->complemento = $request->complemento;
        $escola->cidade = $request->cidade;
        $escola->estado = $request->estado;
        $escola->cep = $request->cep;
        $escola->nome_mae = $request->nome_mae;
        $escola->cpf_mae = $request->cpf_mae;
        $escola->data_pagamento = $request->data_pagamento;
        $escola->user_id = auth()->id();
        $escola->save();

        return $escola;
    }


    public function show($id)
    {
        
    }



    public function update(Request $request, $id)
    {
        $escola = Escola::find($id);
        $escola->nome_aluno = $request->nome_aluno;
        $escola->data_nascimento = $request->data_nascimento;
        $escola->serie_ingresso = $request->serie_ingresso;
        $escola->rua = $request->rua;
        $escola->bairro = $request->bairro;
        $escola->numero = $request->numero;
        $escola->complemento = $request->complemento;
        $escola->cidade = $request->cidade;
        $escola->estado = $request->estado;
        $escola->cep = $request->cep;
        $escola->nome_mae = $request->nome_mae;
        $escola->cpf_mae = $request->cpf_mae;
        $escola->data_pagamento = $request->data_pagamento;
        $escola->save();

        return $escola;
    }


    public function destroy($id)
    {
        $escola = Escola::find($id);
        $escola->delete();
    }
}
