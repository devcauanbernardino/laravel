<h3>Fornecedor</h3>

{{-- {{ 'Texto de teste' }} = <?= 'Texto de teste' ?> --}}

{{-- Comentario em blade --}}

{{-- Codigos PHP puro --}}
@php
    // if () {

    // } else if() {

    // } else {

    // };

    //if(!condicao) executa se o retorno for true

    //if(isset($variavel)) retornar true se a variavel estiver definida

    /*
    if(empty($variavel)) retornar true se a variavel estiver vazia
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array() (um array sem elementos)
    - $var (uma variável declarada, mas sem valor)
    */

@endphp

{{-- @dd($fornecedores); --}}

{{-- ---------------------------------------------------------------------------- --}}

{{-- @isset --}} <!--verifica se a variavel existe ou nao, se nao existir, o bloco e desconsiderado-->
@isset($fornecedores) 
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @endisset
@endisset

{{-- ---------------------------------------------------------------------------- --}}

{{-- @if If sintaxe blade --}}
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados</h3>
@else
     <h3>Ainda nao existem fornecedores cadastrados</h3>
@endif

{{-- ---------------------------------------------------------------------------- --}}

{{-- @unless --}}
@if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif
<br>

@unless ($fornecedores[0]['status'] == 'S') <!--se o retorno da condicao for false -->
    Fornecedor inativo
@endunless

{{-- ---------------------------------------------------------------------------- --}}

{{-- @empty --}}
@isset($fornecedores) 
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }} 
        @empty($fornecedores[0]['cnpj'])
            <p>O campo CNPJ esta vazio</p>
        @endempty
    @endisset
@endisset

{{-- ---------------------------------------------------------------------------- --}}