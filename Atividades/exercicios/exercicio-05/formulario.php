<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cadastro - validação</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- <script src="./validacaoFormulario.js"></script> -->
</head>

<body>




    <div class="container my-3 w-75 border border-dark rounded shadow p-3 mb-5 bg-white rounded"
        style=" padding: 20px;  ">

        <form action="index.php" method="POST">

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome Completo" value="" class="form-control" required >
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" placeholder="Endereço Completo" class="form-control" >
            </div>

            <br>

            <div>
                <label>Dados pessoais:</label>
            </div>

            <br>

            <div class="row">

                <div class="form-group">
                    <div class="col-12">
                        <label for="cpf">CPF:</label>
                        <input class="form-control" type="text" name="cpf" id="cpf" placeholder="   .   .   -  "
                            minlength="11" maxlength="11" >
                    </div>
                    <div class="col-12">
                        <label for="rg">RG:</label>
                        <input class="form-control" type="text" name="rg" id="rg" placeholder="  -  .   .   "
                            minlength="8" maxlength="10" >
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-12">
                        <label for="nasc">Data de Nascimento:</label>
                        <input type="date" class="form-control" name="dataNasc" id="nasc" placeholder="  /  /    "
                            minlength="8" maxlength="8" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="nacionalidade">Nacionalidade: </label>
                <input class="form-control" type="text" name="nacionalidade" id="nacionalidade"
                    placeholder="País de nascimento"  >
            </div>

            <label for="estadoCivil">Estado Civil: </label>

            <div class="form-group form-check" id="check">

                <input class="form-check-input" type="radio" name="estadoCivil" id="solteiro" value="S">
                <label class="form-check-label" for="solteiro">Solteiro</label>
            </div>

            <div class="form-group form-check">
                <input class="form-check-input" type="radio" name="estadoCivil" id="casado" value="C">
                <label class="form-check-label" for="casado">Casado</label>
            </div>

            <div class="form-group form-check">
                <input class="form-check-input" type="radio" name="estadoCivil" id="naoInformar" value="NI">
                <label class="form-check-label"  for="naoInformar">Prefiro não informar</label>

            </div>


            <div>
                <label>Contatos: </label>
            </div>

            <br>

            <div class="row">
                <div class="form-group">
                    <div class="col-12">
                        <label for="telefone">Telefone: </label>
                        <input class="form-control" type="tel" name="telefone" id="telefone"
                            placeholder="(  )     -    " minlength="11" maxlength="11" >
                    </div>
                </div>
            </div>


            <div class="form-group mb-3">
                <label for="email">E-mail: </label>
                <input class="form-control" type="email" name="email" id="email"
                    placeholder="Informe o seu melhor e-mail" >
            </div>

            <div class="form-group">
                <label for="usuario">Usuário:</label>
                <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Informe o seu usuário" >
            </div>

            <div class="form-group">
                <label for="senha">Senha: </label>
                <input class="form-control" type="password" name="senha" id="senha" placeholder="********" minlength="6"
                    maxlength="8">
            </div>

            <br>

            <div class="form-group">
                
                <input type="submit" class="btn btn-primary" value="Cadastrar" onclick="cadastrar()">
         
                <input type="reset" class="btn btn-danger" value="Limpar">

            </div>

            <div>

            </div>



        </form>

    </div>

</body>

</html>