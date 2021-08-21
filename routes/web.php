<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// return view('welcome');

Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');
// nome, categoria, assunto, mensagem

Route::get(
    '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
    function(
            string $nome = 'Teste',
            string $categoria = 'Informação',
            string $assunto = 'Contato',
            string $mensagem = 'mensagem não informada') {
        /* 
            Escrito com aspas simples, precisa concatenar.
            echo 'Estamos aqui: '.$nome.' - '.$categoria.' - '.$assunto.' - '.$mensagem; 
        */

        // Exemplo com aspas duplas.
        echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
    }
);

/* Verbos para controlar as requisições feitas para o servidor:

    http
    get
    post
    put
    patch
    delete
    options

*/