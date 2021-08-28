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

        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ]);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}