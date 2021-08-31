<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request) {
        $erro = '';
        if ($request->get('erro') == 1) {
            $erro = 'Usuário e/ou senha não existe.';
        } else if ($request->get('erro') == 2) {
            $erro = 'Necessário realizar login para ter acesso a página.';
        }
        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
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

        // Recuperamos os parâmetros do formulário
        $email = $request->get('usuario');
        $password = $request->get('senha');

        echo "Usuário: $email | Senha: $password";
        echo '<br />';

        // Recuperar o model User
        $user = new User();

        $usuario = $user->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();

        if (isset($usuario->name)) {
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;
            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function sair() {
        echo 'Sair!';
    }

}
