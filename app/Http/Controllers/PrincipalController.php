<?php

namespace App\Http\Controllers;
use App\MotivoContato;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        // Básicamente foi criado um enumerator no banco de dados para recuperar os valores da opçoes de 'motivo_contato'
        $motivo_contato = MotivoContato::all();
        return view('site.principal', ['motivo_contatos' => $motivo_contato]);
    }
}
