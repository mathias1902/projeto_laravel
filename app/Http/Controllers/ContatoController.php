<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        // $contato = new SiteContato();
        // $contato->create($request->all());
        //$contato->save();

        $motivo_contato = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];

        return view('site.contato', ['motivo_contatos' => $motivo_contato]);
    }

    public function salvar(Request $request) {
        // Realizar a validação dos dados recebidos do $request

        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);


        // SiteContato::create($request->all());
    }
}