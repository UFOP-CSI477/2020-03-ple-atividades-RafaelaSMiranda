@extends('administrativo.headAdm')



@section('conteudo')

<div class="container w-75" id="pedidos">


    <p style="padding: 10px; font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Pedido de número {{$pedidos->id}}</p>


    <div style="display: flex;">
        <p style="font-weight: bold; margin-right: 5px; font-size: 20px;">Produtos: </p>
    </div>

    <div style="display: flex;">
        <ul class="list-group list-group-flush">
            @foreach($pedidoProdutos as $pedidoProduto)
            <li class="list-group-item">
                {{$pedidoProduto->quantidade}} -
                {{$pedidoProduto->produto->nome}} -
                {{$pedidoProduto->produto->descricao}} -
                R$ {{$pedidoProduto->produto->valor}}</li>
            @endforeach
        </ul>

    </div>

    <br>

    <div style="display: flex;">
        <p style="font-weight: bold; margin-right: 5px; font-size: 20px;">Observação:
            {{$pedidos->observacao}}</p>
    </div>

    <div style="display: flex;">
        <p style="font-weight: bold; margin-right: 5px; font-size: 20px;">Valor total:
            R$ {{$pedidos->valorTotal}}</p>
    </div>

    <div style="display: flex;">
        <p style="font-weight: bold; margin-right: 5px; font-size: 20px;">Status:

            @if(is_null($pedidos->status))
            Em aberto
            @endif

            @if(!is_null($pedidos->status))
            {{$pedidos->status}}
            @endif
        </p>
    </div>

    <hr>

    <p style="font-weight: bold; margin-right: 5px; font-size: 20px;">Dados do cliente

        <div style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Nome do cliente: </p>
            <p>{{$pedidos->cliente->nome}}</p>
        </div>

        <div style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Endereço: </p>
            <p>{{$pedidos->cliente->endereco}}</p>
        </div>

        <div style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Ponto de referência: </p>
            <p>{{$pedidos->cliente->referencia}}</p>
        </div>

        <div style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Pagamento: </p>
            <p>{{$pedidos->cliente->pagamento}}</p>
        </div>

        <div style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Contato: </p>
            <p>{{$pedidos->cliente->contato}}</p>
        </div>

        <hr>

        <div style="display: flex; justify-content: center;" class="card-body">
            <form method="POST" action="{{route('pedido.update', $pedidos->id)}}">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label style="font-weight: bold; margin-right: 5px;" for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option hidden>Selecione</option>
                        <option value="Em aberto">Em aberto</option>
                        <option value="Finalizado">Finalizado</option>

                    </select>
                </div>

                <br>

                <input type="submit" class="btn btn-light border-success" value="Atualizar">

                <a href="{{route('pedido.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 100%;" type="button" class="btn btn-light border-info">Voltar</a>
            </form>
        </div>

</div>

@endSection
