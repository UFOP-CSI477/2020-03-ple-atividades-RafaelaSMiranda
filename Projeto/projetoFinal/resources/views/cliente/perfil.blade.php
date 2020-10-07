@extends('headCliente');



@section('linkCardapio')

<li class="nav-item">
    <a class="nav-link" href="{{route('cardapio')}}">Cardapio</a>
</li>

@endSection

@section('conteudo')


<form method="POST" action="validar.html">

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input disabled type="text" name="nome" id="nome" placeholder="Nome Completo" class="form-control">
    </div>

    <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input disabled type="text" name="endereco" id="endereco" placeholder="Endereço Completo" class="form-control">
    </div>
    <div class="form-group">
        <label for="endereco">Referência:</label>
        <input disabled type="text" name="endereco" id="endereco" placeholder="Endereço Completo" class="form-control">
    </div>
    <div class="form-group">
        <label for="endereco">Forma de pagamento:</label>
        <input disabled type="text" name="endereco" id="endereco" placeholder="Endereço Completo" class="form-control">
    </div>


    <br>

    <div>
        <label>Dados pessoais:</label>
    </div>

    <br>

    <div class="row">

        <div class="form-group">
            <div class="col-12">
                <label for="cpf">CPF:</label>
                <input disabled class="form-control" type="cpf" name="cpf" id="cpf" placeholder="   .   .   -  " minlength="11" maxlength="11">
            </div>
            <div class="col-12">
                <label for="rg">RG:</label>
                <input disabled class="form-control" type="text" name="rg" id="rg" placeholder="  -  .   .   " minlength="8" maxlength="10">
            </div>
        </div>

    </div>




    <div>
        <label>Contato: </label>
    </div>

    <br>

    <div class="row">
        <div class="form-group">
            <div class="col-12">
                <label for="telefone">Telefone: </label>
                <input disabled class="form-control" type="tel" name="telefone" id="telefone" placeholder="(  )     -    " minlength="11" maxlength="11">
            </div>
        </div>
    </div>


    <div class="form-group">
        <label for="usuario">Usuário:</label>
        <input disabled class="form-control" type="text" name="usuario" id="usuario" placeholder="Informe o seu usuário">
    </div>

    <div class="form-group">
        <label for="senha">Senha: </label>
        <input disabled class="form-control" type="password" name="senha" id="senha" placeholder="********" minlength="6" maxlength="8">
    </div>

    <br>

    <div class="form-group">
        <input type="submit" class="btn btn-outline-primary" value="Editar">
        <input type="submit" class="btn btn-outline-success" value="Atualizar">
        <input type="reset" class="btn btn-outline-danger" value="Limpar">
    </div>



</form>


@endSection
