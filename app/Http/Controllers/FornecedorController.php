<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            'Fornecedor 1',
            'Fornecedor 2',
            'Fornecedor 3',
            'Fornecedor 4',
            'Fornecedor 5',
            'Fornecedor 6',
            'Fornecedor 7',
            'Fornecedor 8',
            'Fornecedor 9',
            'Fornecedor 10',
            'Fornecedor 11'
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
