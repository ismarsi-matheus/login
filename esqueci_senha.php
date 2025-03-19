<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Esqueci a senha</title>
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

        <h2>ESQUECI A SENHA</h2>
        <br>
        <form action="./esqueci_senha_novo.php" method="POST">
            <label for="cpf">CPF:</label>
            <input type="number" class="form-control" name="cpf" required>

            <label for="senha"> Alterar Senha:</label>
            <input type="password" class="form-control" name="senha" id="senha" required pattern="^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,12}$">

            <label for="confirmar_senha">Confirme a Senha:</label>
            <input type="password" class="form-control" name="confirmar_senha" id="confirmar_senha" required>

            <input type="submit" class="btn btn-success mt-3">
        </form>



</body>

</html>