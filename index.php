<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const params = new URLSearchParams(window.location.search);
        if (params.get("erro") === "1") {
            document.getElementById("erroUsuario").innerText = "Usuário ou senha inválido!";
            document.getElementById("erroSenha").innerText = "Usuário ou senha inválido!";
        }
    });
</script>

<style>
    body {
        color: #f2f2f2;
        background-color: black;
        display: flex;
        justify-content: center;
    }

    form {
        width: 500px;
    }

    .error-msg {
        color: red;
        font-size: 14px;
        margin-left: 10px;
    }

    .input-group {
        display: flex;
        align-items: center;
    }
</style>

<body>
    <form action="auxlogin.php" method="POST" class="mt-5">
        <h1>Login</h1>

        <div class="input-group">
            <label class="form-label">Usuário: </label>
            <span id="erroUsuario" class="error-msg"></span> <!-- Erro ao lado do label -->
        </div>
        <input type="text" class="form-control" name="user" required>

        <div class="input-group mt-2">
            <label class="form-label">Senha: </label>
            <span id="erroSenha" class="error-msg"></span> <!-- Erro ao lado do label -->
        </div>
        <input type="password" class="form-control" name="password" required>

        <input class="btn btn-success mt-3" type="submit" value="Entrar">
        <a href="cadastro.php" class="btn btn-primary mt-3">Cadastra-se</a>
        <a href="esqueci_senha.php" class="btn btn-primary mt-3">Esqueci a Senha</a>
    </form>
</body>

</html>
