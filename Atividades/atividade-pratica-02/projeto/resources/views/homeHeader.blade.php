@extends('header')


@section('link')


<li class="nav-item ">
    <a class="nav-link" href="{{route('equipamento.index')}}" style="font-size: 20px; padding-right: 50px;">Lista de Equipamentos<span class="sr-only">(current)</span></a>
</li>

<li class="nav-item ">
    <a class="nav-link" href="{{route('registro.index')}}" style="font-size: 20px; padding-right: 50px;">Manutenções Cadastradas<span class="sr-only">(current)</span></a>
</li>

<li class="nav-item ">
    <a class="nav-link" href="{{route('adm')}}" style="font-size: 20px; padding-right: 50px;">Área Administrativa<span class="sr-only">(current)</span></a>
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

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
