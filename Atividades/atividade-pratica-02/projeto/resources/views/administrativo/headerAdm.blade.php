@extends('header')


@section('link')

<li class="nav-item dropdown">
    <a style="font-size: 20px; padding-right: 50px;" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
        Equipamentos
    </a>
    <div class="dropdown-menu border-info border rounded shadow bg-white rounded">
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item"  href="{{route('equipamento.create')}}">Cadastrar</a>
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{route('equipamento.index')}}">Visualizar</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a style="font-size: 20px; padding-right: 50px;" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Manutenções
    </a>
    <div class="dropdown-menu border-info border rounded shadow bg-white rounded">
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{route('registro.create')}}">Cadastrar</a>
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{route('registro.index')}}">Visualizar</a>
    </div>
</li>

<li class="nav-item ">
    <a class="nav-link" href="{{route('user.index')}}" style="font-size: 20px; padding-right: 50px;">Relatório de Usuários<span class="sr-only">(current)</span></a>
</li>


<li class="nav-item ">
    <a class="nav-link" href="{{route('relatorioRegistro.index')}}" style="font-size: 20px; padding-right: 50px;">Relatório de Manutenções<span class="sr-only">(current)</span></a>
</li>

@guest
<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}" style="font-size: 20px; padding-right: 50px;">{{ __('Login') }}</a>
</li>
@if (Route::has('register'))
<li class="nav-item">
    <a class="nav-link" href="{{ route('register') }}" style="font-size: 20px; padding-right: 50px;">{{ __('Register') }}</a>
</li>
@endif
@else
<li class="nav-item dropdown">
    <a id="navbarDropdown" style="font-size: 20px; padding-right: 50px;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu border-info border rounded shadow bg-white rounded">
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
