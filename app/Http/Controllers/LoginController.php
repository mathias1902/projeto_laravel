<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request) {
        // Regras de validação
        $regras = [
            'usuario' => 'required|email',
            'senha' => 'required'
        ];

        // As mensagens de feedback de validação
        $feedback = [
            'usuario.required' => 'O campo usuário (email) é obrigatório.',
            'usuario.email' => 'O usuário informado não está de acordo, tente novamente.',
            'senha.required' => 'O campo senha é obrigatório.'
        ];

        // Se não passar pelo validate é feito redirect para a rota antiga
        $request->validate($regras, $feedback);

        print_r($request->all());
    }
}
