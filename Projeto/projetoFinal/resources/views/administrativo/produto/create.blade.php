@extends('administrativo.headAdm')



@section('conteudo')

<p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Cadastrar Produto</p>

<form method="POST" action="{{route('produto.store')}}"  onsubmit = "return validacaoProduto()">

    @csrf



    <div class="form-group">
        <label for="nome">Nome do produto:</label>
        <input name="nome" id="nome" class="form-control">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input name="descricao" id="descricao" class="form-control">
    </div>

    <div class="form-group">
        <label for="valor">Valor unitário em reais (R$):</label>
        <input type="number" step="any" min="0" name="valor" id="valor" class="form-control">
    </div>

    <div class="form-group">
        <label for="tipo">Tipo do produto</label>
        <select class="form-control" id="tipo" name="tipo">
            <option hidden>Selecione</option>
            <option value="Promoção">Promoção</option>
            <option value="Pizza">Pizza</option>
            <option value="Hambúrguer">Hambúrguer</option>
            <option value="Porção">Porção</option>
            <option value="Bebida">Bebida</option>
            <option value="Sobremesa">Sobremesa</option>
            <option value="Combo">Combo</option>
        </select>
    </div>

    <div class="form-group">
        <label for="condicao">Condição para venda</label>
        <select class="form-control" id="condicao" name="condicao">
            <option hidden>Selecione</option>
            <option value="Disponível">Disponível</option>
            <option value="Não disponível">Não disponível</option>
        </select>
    </div>

    <hr>

    <div class="form-group">
        <input type="submit" class="btn btn-light border-success" value="Cadastrar">
        <input type="reset" class="btn btn-light border-danger" value="Limpar">
    </div>

    <div>

    </div>

</form>



@endSection
