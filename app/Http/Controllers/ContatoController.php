<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        $motivo_contato = MotivoContato::all();
        return view('site.contato', ['motivo_contatos' => $motivo_contato]);
    }

    public function salvar(Request $request) {
        // Realizar a validação dos dados recebidos do $request

        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres.',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres.',
            'nome.unique' => 'O nome informado já está incluso, escolha outro!',
            'email.email' => 'O email informado é inválido, informe outro!',
            'motivo_contatos_id' => 'O motivo do contato deve ser informado.',
            'mensagem.max' => 'A mensagem deve conter no máximo 2000 caracteres.',

            'required' => 'O campo :attribute deve ser preenchido!' // validação genérica - :attribute obtém o nome do campo
        ];

        $request->validate($regras, $feedback);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}