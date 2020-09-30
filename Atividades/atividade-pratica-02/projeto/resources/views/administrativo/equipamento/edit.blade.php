@extends ('administrativo.headerAdm')


@section('conteudo')

<div  class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Atualizar Equipamento</p>

    <form method="POST" action="{{route('equipamento.update', $equipamento->id)}}">

    @csrf
    @method('PUT')

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome do equipamento" class="form-control" value="{{$equipamento->nome}}">
        </div>

        <hr>

        <div class="form-group">
            <input type="submit" class="btn btn-light border-success" value="Atualizar">
            <!-- <input type="reset" class="btn btn-light border-danger" value="Limpar"> -->

        </div>

        <div>

        </div>



    </form>

</div>


@endSection
