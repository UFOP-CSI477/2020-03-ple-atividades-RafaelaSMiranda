@extends ('administrativo.headerAdm')


@section('conteudo')

<div class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Atualizar Manutenção</p>

    <form method="POST" action="{{route('registro.update', $registro->id)}}" onsubmit="return atualizarManutencao()">

        @csrf
        @method('PUT')


        <div class="form-group">
            <label for="equipamento_id">Equipamento</label>
            <select class="form-control" id="equipamento_id" name="equipamento_id">
                @foreach($equipamentos as $equipamento)

                <option value="{{$equipamento->id}}" @if($registro->equipamento_id == $equipamento->id)
                    selected
                    @endif

                    >{{$equipamento->nome}}</option>

                @endforeach
            </select>
        </div>



        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input value="{{$registro->descricao}}" type="textArea" name="descricao" id="descricao" placeholder="Informe a descrição da manutenção" class="form-control">
        </div>

        <div class="form-group">
            <label for="dataLimite">Data:</label>
            <input value="{{$registro->dataLimite}}" type="date" name="dataLimite" id="dataLimite" class="form-control">
        </div>

        <div class="form-group">
            <label for="tipo">Tipo de manutenção</label>
            <select class="form-control" id="tipo" name="tipo">
                <option value="selecione" hidden>Selecione</option>


                <option value="1" @if($registro->tipo == "1")
                    selected
                    @endif>
                    Preventiva</option>
                <option value="2" @if($registro->tipo == "2")
                    selected
                    @endif>Corretiva</option>
                <option value="3" @if($registro->tipo == "3")
                    selected
                    @endif>Urgente</option>
            </select>
        </div>

        <hr>

        <div class="form-group">
            <input type="submit" class="btn btn-light border-success" value="Atualizar">
            <!-- <input type="reset" class="btn btn-light btn-danger" value="Limpar"> -->
        </div>

        <div>

        </div>



    </form>

</div>


@endSection
