<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Formulário</title>
</head>

<body>

    <style>
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            width: 600px;
        }

        img {
            width: 200px;
            object-fit: cover;
        }
    </style>

    <main class="container text-center my-5">

        <h2>CADASTRAR PESSOA</h2>
        <br>


        <!--
        METODO DE ENVIO
            GET, através da URL. POST, através do corpo do arquivo

        ACTION
            Fala para onde deve enviar os dados
    -->


        <form action="./cadastro-usuario.php" method="POST">


            <label for="nome">Nome:</label class="form-control">
            <input type="text" class="form-control" name="nome">
            <label for="usuario">Usuário:</label>
            <input type="text" class="form-control" name="usuario">
            <div class="row mt-2 ">

                <div class="col">
                    <label for="telefone">Telefone:</label>
                    <input type="number" class="form-control" name="telefone1">
                </div>

                <div class="col">
                    <label for="telefone">Telefone:</label>
                    <input type="number" class="form-control" name="telefone2">
                </div>

                <div class="col">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email">
                </div>

            </div>


            <div class="row mt-2">
                <div>
                    <label for="logradouro">Logradouro:</label>
                    <input type="text" class="form-control" name="logradouro">
                </div>
                <div class="col">
                    <label for="numero_casa">Número da Casa:</label>
                    <input type="number" id="numero_casa" name="numero_casa" min="1" max="99999" class="form-control">
                </div>
                <div class="col">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control" name="bairro">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" name="cidade">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="ano_nascimento">Ano de Nascimento:</label>
                    <input type="number" name="ano_nascimento" min="1900" max="2025" class="form-control">

                </div>

            </div>

            <label for="senha">Senha</label>
            <input type="senha" class="form-control">

            <input type="submit" class="btn btn-success">
        </form>


</body>

</html>