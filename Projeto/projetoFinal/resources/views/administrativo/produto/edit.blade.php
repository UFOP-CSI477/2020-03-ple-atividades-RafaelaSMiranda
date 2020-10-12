@extends('administrativo.headAdm')



@section('conteudo')

<p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Atualizar Produto</p>

<form method="POST" action="{{route('produto.update', $produtos->id)}}" onsubmit = "return atualizacaoProduto()">

    @csrf
    @method('PUT')




    <div class="form-group">
        <label for="nome">Nome do produto:</label>
        <input name="nome" id="nome" class="form-control" value="{{$produtos->nome}}">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input name="descricao" id="descricao" class="form-control" value="{{$produtos->descricao}}">
    </div>

    <div class="form-group">
        <label for="valor">Valor unitário em reais (R$):</label>
        <input type="number" step="any" min="0" name="valor" id="valor" class="form-control" value="{{$produtos->valor}}">
    </div>

    <div class="form-group">
        <label for="tipo">Tipo do produto</label>
        <select class="form-control" id="tipo" name="tipo">
            <option value="Promoção" @if($produtos->tipo == 'Promoção') selected @endif >
                Promoção
            </option>
            <option value="Pizza" @if($produtos->tipo == 'Pizza') selected @endif>Pizza</option>
            <option value="Hambúrguer" @if($produtos->tipo == 'Hambúrguer') selected @endif>Hambúrguer</option>
            <option value="Porção" @if($produtos->tipo == 'Porção') selected @endif>Porção</option>
            <option value="Bebida" @if($produtos->tipo == 'Bebida') selected @endif>Bebida</option>
            <option value="Sobremesa" @if($produtos->tipo == 'Sobremesa') selected @endif>Sobremesa</option>
            <option value="Combo" @if($produtos->tipo == 'Combo') selected @endif>Combo</option>
        </select>
    </div>

    <div class="form-group">
        <label for="condicao">Condição para venda</label>
        <select class="form-control" id="condicao" name="condicao">

            <option value="Disponível" @if($produtos->condicao == 'Disponível') selected @endif>Disponível</option>
            <option value="Não disponível" @if($produtos->condicao == 'Não disponível') selected @endif>Não disponível</option>
        </select>
    </div>

    <hr>

    <div class="form-group">
        <input type="submit" class="btn btn-light border-success" value="Confirmar atualização">
        <input type="reset" class="btn btn-light border-danger" value="Limpar">
    </div>

    <div>

    </div>

</form>



@endSection
