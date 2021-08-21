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

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        Iteração Atual: {{ $loop->iteration }}
        <br /><br />
        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br />
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br />
        @if($loop->first)
            Primeira Iteração do Loop
        @endif

        @if($loop->last)
            Última Iteração do Loop
            <hr />
            Total de registros: {{ $loop->count }}
        @endif
        <hr />
    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset