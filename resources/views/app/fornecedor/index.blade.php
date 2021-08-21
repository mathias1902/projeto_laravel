<h3>Fornecedor</h3>

@php
    /*
    if(!<condicao>) { } //enquanto o if executa se o retorno for true
    */
@endphp

{{-- @unless executa se o retorno for false --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br />
Status: {{ $fornecedores[0]['status'] }}
<br />

@if( !($fornecedores[0]['status'] == 'S') )
    Fornecedor inativo
@endif

<br />

@unless($fornecedores[0]['status'] == 'S') <!-- se o retorno da condição for false -->
    Fornecedor inativo
@endunless