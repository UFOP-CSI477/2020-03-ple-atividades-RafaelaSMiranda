@extends('pages.master')

@section('conteudoPizza')
<p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Pizza</p>

<dl>
    <dt>Grand Picanha</dt>
    <dd>- Pão australiano, burger de picanha 200g grelhado na brasa, queijo emmenthal, fatias de bacon
        crocante, cebola caramelizada, alface, tomate e maionese de bacon. Acompanha fritas.</dd>

    <div class="quantidade">


        <div class="valor">
            <p>R$24,00</p>
        </div>

        <div class="unidades">
            <input type="button" id="subtrair" value='-' onclick="process(-1)" />
            <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
            <input type="button" id="adicionar" value='+' onclick="process(1)">
        </div>

    </div>

</dl>

@endsection


@section('conteudoPizza')
<p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Pizza</p>

<dl>
    <dt>Pizza a moda</dt>
    <dd>- Pão australiano, burger de picanha 200g grelhado na brasa, queijo emmenthal, fatias de bacon
        crocante, cebola caramelizada, alface, tomate e maionese de bacon. Acompanha fritas.</dd>

    <div class="quantidade">


        <div class="valor">
            <p>R$50,00</p>
        </div>

        <div class="unidades">
            <input type="button" id="subtrair" value='-' onclick="process(-1)" />
            <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
            <input type="button" id="adicionar" value='+' onclick="process(1)">
        </div>

    </div>

</dl>

<hr>

@endsection


@section('conteudoHamburguer')
<p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Hamburguer</p>

<dl>
    <dt>Grand Picanha</dt>
    <dd>- Pão australiano, burger de picanha 200g grelhado na brasa, queijo emmenthal, fatias de bacon
        crocante, cebola caramelizada, alface, tomate e maionese de bacon. Acompanha fritas.</dd>

    <div class="quantidade">


        <div class="valor">
            <p>R$24,00</p>
        </div>

        <div class="unidades">
            <input type="button" id="subtrair" value='-' onclick="process(-1)" />
            <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
            <input type="button" id="adicionar" value='+' onclick="process(1)">
        </div>

    </div>

</dl>

<hr>
@endsection

@section('conteudoPorcao')
<p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Porcao</p>

<dl>
    <dt>Fritas com bacon</dt>
    <dd>- Pão australiano, burger de picanha 200g grelhado na brasa, queijo emmenthal, fatias de bacon
        crocante, cebola caramelizada, alface, tomate e maionese de bacon. Acompanha fritas.</dd>

    <div class="quantidade">


        <div class="valor">
            <p>R$24,00</p>
        </div>

        <div class="unidades">
            <input type="button" id="subtrair" value='-' onclick="process(-1)" />
            <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
            <input type="button" id="adicionar" value='+' onclick="process(1)">
        </div>

    </div>

</dl>

<hr>
@endsection


@section('conteudoAdicionais')
<p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Porcao</p>

<dl>
    <dt>Fritas com bacon</dt>
    <dd>- Pão australiano, burger de picanha 200g grelhado na brasa, queijo emmenthal, fatias de bacon
        crocante, cebola caramelizada, alface, tomate e maionese de bacon. Acompanha fritas.</dd>

    <div class="quantidade">


        <div class="valor">
            <p>R$24,00</p>
        </div>

        <div class="unidades">
            <input type="button" id="subtrair" value='-' onclick="process(-1)" />
            <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
            <input type="button" id="adicionar" value='+' onclick="process(1)">
        </div>

    </div>

</dl>

<hr>
@endsection

@section('conteudoBebidas')
<p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Bebidas</p>
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


@section('conteudoMontagem')

<p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Monte o seu lanche</p>
<dl>

<div class="row">

    <div class="col-4" style="display: grid; justify-content: center;">

        <span style="text-align: center;">Pizza</span>

        <div class="quantidade">


            <div class="valor">
                <p style="text-align: center;">R$25,00</p>
            </div>

            <div class="unidades">
                <input type="button" id="subtrair" value='-' onclick="process(-1)" />
                <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
                <input type="button" id="adicionar" value='+' onclick="process(1)">
            </div>

        </div>

    </div>

    <div class="col-4" style="display: grid; justify-content: center;">


        <span style="text-align: center;">Hambúrguer

        </span>
        <div class="quantidade">


            <div class="valor">
                <p style="text-align: center;">R$6,00</p>
            </div>

            <div class="unidades">
                <input type="button" id="subtrair" value='-' onclick="process(-1)" />
                <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
                <input type="button" id="adicionar" value='+' onclick="process(1)">
            </div>

        </div>

    </div>

    <div class="col-4" style="display: grid; justify-content: center;">

        <span style="text-align: center;">Porção</span>

        <div class="quantidade">


            <div class="valor">
                <p style="text-align: center;">R$20,00</p>
            </div>

            <div class="unidades">
                <input type="button" id="subtrair" value='-' onclick="process(-1)" />
                <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
                <input type="button" id="adicionar" value='+' onclick="process(1)">
            </div>

        </div>

    </div>
</div>

@endsection

@section('conteudoBotao')


<div class="botaoFinalizar pt-5">
            <a href="../finalizar/finalizar.html" type="submit" class="btn btn-outline-primary">Adicionais</a>
            <a href="../finalizar/finalizar.html" type="submit" class="btn btn-outline-success">Finalizar pedido</a>
        </div>

@endSection
