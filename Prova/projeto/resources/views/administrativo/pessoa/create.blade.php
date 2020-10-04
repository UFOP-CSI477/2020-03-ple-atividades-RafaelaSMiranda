@extends ('administrativo.headAdm')


@section('conteudo')

<div class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

<p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center;">Cadastrar Doadores</p>

    <form method="POST" action="{{route('pessoa.store')}}" onsubmit="return cadastrarDoador()">

        @csrf

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome do doador" class="form-control">
        </div>

        <div class="form-group">
            <label for="tipo">Tipo Sanguineo:</label>
            <select class="form-control" id="tipo" name="tipo" required >
                <option value="0" hidden>Selecione</option>

                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>

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

</div>


@endSection
