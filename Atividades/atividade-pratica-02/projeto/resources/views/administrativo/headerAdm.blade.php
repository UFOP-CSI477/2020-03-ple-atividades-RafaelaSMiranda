@extends('header')


@section('linkVoltar')


<li class="nav-item dropdown">
    <a href="{{route('admPrincipal')}}" class="navbar-brand d-flex align-items-center">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
    </a>
</li>

@endSection

@section('link')

<li class="nav-item dropdown">
    <a style="font-size: 20px; padding-right: 50px;" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
        Equipamentos
    </a>
    <div class="dropdown-menu border-info border rounded shadow bg-white rounded">
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{route('equipamento.create')}}">Cadastrar</a>
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

<li class="nav-item dropdown">
    <a style="font-size: 20px; padding-right: 50px;" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Usuários
    </a>
    <div class="dropdown-menu border-info border rounded shadow bg-white rounded">
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{route('register')}}">Cadastrar</a>
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{route('user.index')}}">Relatório</a>
    </div>
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
