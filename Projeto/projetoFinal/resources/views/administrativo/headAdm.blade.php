@extends('head')



@section('linkAdm')

<li class="nav-item active">
    <a class="nav-link" href="{{route('pedido.index')}}">Home</a>
</li>

<li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Produtos
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{route('produto.create')}}">Cadastrar</a>
        <a class="dropdown-item" href="{{route('produto.index')}}">Visualizar</a>
    </div>
</li>

<li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pedidos
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#pizza">Visualizar por data</a>
        <a class="dropdown-item" href="#hamburguer">Visualizar por produto</a>
    </div>
</li>

@endSection

@section('linkAdministrador')

@guest
<li class="nav-item active">
    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>


@else
<li class="nav-item dropdown active">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
@endguest

@endSection

@section('horario')


<p id="hora" style="font-weight: bold; color: black;" class="btn btn-light btn-outline-info my-2 mr-2 my-sm-0">


</p>

@endSection

