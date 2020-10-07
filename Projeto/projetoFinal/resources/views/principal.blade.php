@extends('headCliente')



@section('conteudo')


<div class="itens">

    <div id="pizza">
        @yield('conteudoPizza')
    </div>

    <div id="hamburguer">
        @yield('conteudoHamburguer')
    </div>

    <div id="porcao">
        @yield('conteudoPorcao')
    </div>

    <div id="adicionais">
        @yield('conteudoAdicionais')
    </div>

    <div id="bebidas">
        @yield('conteudoBebidas')
    </div>

    <div id="montagem">
        @yield('conteudoMontagem')
    </div>

    @yield('conteudoBotao')

    @yield('conteudoPerfil')




    @endSection
