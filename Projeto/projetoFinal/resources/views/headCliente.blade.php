@extends('head')



@section('linkCardapio')

<li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Cardápio
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#pizza">Pizzas</a>
        <a class="dropdown-item" href="#hamburguer">Hamburgueres</a>
        <a class="dropdown-item" href="#porcao">Porções</a>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="#bebidas">Bebidas</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#promocao">Promoções</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#sobremesa">Sobremesas</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#combo">Combos</a>
</li>

@endSection

@section('linkSacola')

<?php

$valorTotal = 0;

if (session()->has('produto')) {
    $produtos = session()->all()['produto'];

    foreach ($produtos as $produto) {

        $valorTotal += $produto['quantidade'] * $produto['valor'];
    }
}


?>


<a style="font-weight: bold;" href="{{route('sacolaIndex')}}" class="btn btn-danger my-2 mr-2 my-sm-0" type="submit">

    R$ {{$valorTotal}},00
</a>

@endSection



</body>

</html>
