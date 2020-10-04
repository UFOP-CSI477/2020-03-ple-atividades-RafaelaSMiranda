@extends ('administrativo.headAdm')


@section('conteudo')

<div class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

    <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center;">Cadastrar agendamento</p>

    <form method="POST" action="{{route('agendamento.store')}}" onsubmit=" return cadastrarAgendamento()">

        @csrf

        <div class="form-group">
            <label for="nome">Doador</label>

            <select name="pessoa_id" id="pessoa_id" class="form-control" required>
                <option value="0" hidden>Selecione: </option>

                @foreach($pessoas as $pessoa)
                <option value="{{$pessoa->id}}">{{$pessoa->nome}} </option>

                @endforeach
            </select>

        </div>


        <div class="form-group">
            <label for="nome">Local para coleta:</label>
            <select name="coleta_id" id="coleta_id" class="form-control" required>
                <option value="0" hidden>Selecione: </option>

                @foreach($coletas as $coleta)
                <option value="{{$coleta->id}}">{{$coleta->nome}} - {{$coleta->cidade}} </option>
                @endforeach

            </select>
        </div>


        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" name="data" id="data" class="form-control">
        </div>

        <hr>

        <div class="form-group">
            <input type="submit" class="btn btn-light border-success" value="Cadastrar">
            <input type="reset" class="btn btn-light border-danger" value="Limpar">
        </div>

        <div>

        </div>



    </form>

</div>


@endSection
