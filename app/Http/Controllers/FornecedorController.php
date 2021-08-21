<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '41', // Curitiba (PR)
                'telefone' => '99805-7753'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', // Fortaleza (CE)
                'telefone' => '99563-4156'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '11', // São Paulo (SP)
                'telefone' => '99851-7452'
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}