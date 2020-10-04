@extends ('administrativo.headAdm')


@section('conteudo')

<div class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

    <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center;">Atualizar agendamento</p>

    <form method="POST" action="{{route('agendamento.update', $agendamento->id)}}" onsubmit="return atualizarAgendamento()">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Doador</label>

            <select name="pessoa_id" id="pessoa_id" class="form-control" required>

                @foreach($pessoas as $pessoa)
                <option value="{{$pessoa->id}}" @if($agendamento->pessoa_id == $pessoa->id)
                    selected
                    @endif >

                    {{$pessoa->nome}} </option>

                @endforeach
            </select>

        </div>


        <div class="form-group">
            <label for="nome">Local para coleta:</label>
            <select name="coleta_id" id="coleta_id" class="form-control" required>


                @foreach($coletas as $coleta)
                <option value="{{$coleta->id}}" @if($agendamento->coleta_id == $coleta->id)
                    selected
                    @endif

                    >{{$coleta->nome}} - {{$coleta->cidade}} </option>
                @endforeach

            </select>
        </div>


        <div class="form-group">
            <label for="dataLimite">Data</label>
            <input type="date" name="data" id="data" class="form-control" value="{{$agendamento->data}}">
        </div>

        <hr>

        <div class="form-group">
            <input type="submit" class="btn btn-light border-success" value="Atualizar">

        </div>

        <div>

        </div>



    </form>

</div>


@endSection
