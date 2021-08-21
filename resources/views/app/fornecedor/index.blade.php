<h3>Fornecedor</h3>

@php
    /*
    if(empty($variavel)) { } //retorna true se a variável estiver vazia
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var
    */
@endphp

{{- teste -}}
@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br />
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr />
    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset