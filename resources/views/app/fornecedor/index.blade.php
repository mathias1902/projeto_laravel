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
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br />
    Status: {{ $fornecedores[0]['status'] }}
    <br />
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}
    <!--
        $variavel teste não estiver definida (isset)
        ou
        $variavel testada possuir o valor null
    -->
@endisset