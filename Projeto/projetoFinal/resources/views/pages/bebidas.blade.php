@extends('pages.master')


@section('conteudoBebidas')

<dl>
    <dt>Suco</dt>
    <dd>- Laranja, uva, acabaxi, manga, acerola e limão</dd>

    <div class="quantidade">


        <div class="valor">
            <p>R$4,00</p>
        </div>

        <div class="unidades">
            <input type="button" id="subtrair" value='-' onclick="process(-1)" />
            <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
            <input type="button" id="adicionar" value='+' onclick="process(1)">
        </div>

    </div>

</dl>




@endsection
