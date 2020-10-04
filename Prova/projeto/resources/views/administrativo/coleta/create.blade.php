@extends ('administrativo.headAdm')


@section('conteudo')

<div class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

    <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center;">Cadastrar ponto de coleta</p>

    <form method="POST" action="{{route('coleta.store')}}" onsubmit="return cadastrarLocal()">

        @csrf

        <div class="form-group">
            <label for="nome">Local para coleta:</label>
            <input type="text" name="nome" id="nome" placeholder="Informe o local para coleta. Ex. Hospital, Hemocentro" class="form-control">
        </div>

        <div class="form-group">

            <label for="estado">Estado:</label>
            <select name="estados" id="estados" class="form-control" onchange="carregarCidades()">
                <option value="">Selecione: </option>
            </select>
        </div>

        <div class="form-group">

            <label for="cidade">Cidade:</label>
            <select name="cidades" id="cidades" class="form-control">
                <option value="">Selecione: </option>
            </select>

        </div>



        <script src="./api.js"></script>


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
