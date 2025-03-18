<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Formulário</title>
</head>
<script>
function mascaraTelefone(input) {
    let numero = input.value.replace(/\D/g, ""); // Remove tudo que não for número

    if (numero.length > 11) {
        numero = numero.slice(0, 11); // Limita ao máximo de 11 dígitos
    }

    if (numero.length > 10) {
        input.value = `(${numero.slice(0, 2)}) ${numero.slice(2, 7)}-${numero.slice(7)}`;
    } else if (numero.length > 6) {
        input.value = `(${numero.slice(0, 2)}) ${numero.slice(2, 6)}-${numero.slice(6)}`;
    } else if (numero.length > 2) {
        input.value = `(${numero.slice(0, 2)}) ${numero.slice(2)}`;
    } else {
        input.value = numero;
    }
}



</script>

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
            <input type="text" class="form-control" name="nome" required oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ\s]/g, '')">

            <label for="usuario">Usuário:</label>
            <input type="text" class="form-control" name="usuario">
            <div class="row mt-2 ">

                <div class="col">
                    <label for="telefone">Telefone:</label>
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" name="telefone1" id="telefone1" oninput="mascaraTelefone(this)">

                </div>

                <div class="col">
                    <label for="telefone">Telefone:</label>
                    <input type="number" class="form-control" name="telefone2">
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
                <div class="col">
                    <label for="cpf">CPF:</label>
                    <input type="number" class="form-control" name="cpf">
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
            <input type="password" class="form-control" name="senha">



            <input type="submit" class="btn btn-success" value="Cadastrar">
        </form>


</body>

</html>