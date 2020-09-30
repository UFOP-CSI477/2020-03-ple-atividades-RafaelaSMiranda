@extends ('header')

@section('link')

<li class="nav-item ">
    <a class="nav-link" href="{{route('adm')}}" style="font-size: 20px; padding-right: 50px;">Área Administrativa<span class="sr-only">(current)</span></a>
</li>

<li class="nav-item ">
    <a class="nav-link" href="{{route('adm')}}" style="font-size: 20px; padding-right: 50px;">Acessar<span class="sr-only">(current)</span></a>
</li>

@endSection

@section('conteudo')

<div  class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Cadastro</p>

    <form method="POST" action="{{route('user.store')}}">

    @csrf

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" placeholder="Nome Completo" class="form-control">
        </div>

        <br>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" placeholder="examplo@exemplo.com" class="form-control">
        </div>

        <br>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" placeholder="Insira a sua senha. Para a sua segurança, informe números, letras e caracteres" class="form-control">
        </div>

        <hr>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Cadastrar">
            <input type="reset" class="btn btn-danger" value="Limpar">
        </div>

        <div>

        </div>



    </form>

</div>


@endSection
