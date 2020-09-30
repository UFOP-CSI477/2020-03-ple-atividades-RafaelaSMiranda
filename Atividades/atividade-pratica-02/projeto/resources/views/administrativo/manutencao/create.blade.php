@extends ('administrativo.headerAdm')


@section('conteudo')

<div class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Cadastrar Manutenção</p>

    <form method="POST" action="{{route('registro.store')}}">

        @csrf


        <div class="form-group">
            <label for="equipamento_id">Equipamento</label>
            <select class="form-control" id="equipamento_id" name="equipamento_id" >
                <option>Selecione</option>
                @foreach($equipamentos as $equipamento)
                <option value="{{$equipamento->id}}">{{$equipamento->nome}}</option>
                @endforeach
            </select>
        </div>



        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="textArea" name="descricao" id="descricao" placeholder="Informe a descrição da manutenção" class="form-control">
        </div>

        <div class="form-group">
            <label for="user_id">Usuário:</label>
            <input type="text" name="user_id" id="user_id" placeholder="ID do usuário" class="form-control">
        </div>

        <div class="form-group">
            <label for="dataLimite">Data:</label>
            <input type="date" name="dataLimite" id="dataLimite" class="form-control">
        </div>

        <div class="form-group">
            <label for="tipo">Tipo de manutenção</label>
            <select class="form-control" id="tipo" name="tipo">
                <option>Selecione</option>
                <option value="0">Preventiva</option>
                <option value="1">Corretiva</option>
                <option value="2">Urgente</option>
            </select>
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
