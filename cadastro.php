<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulário</title>
    <style>
        main { display: flex; flex-direction: column; align-items: center; }
        form { width: 600px; }
        img { width: 200px; object-fit: cover; }
        small { color: red; display: none; }
    </style>
</head>

<body>
    <main class="container text-center my-5">
        <h2>CADASTRAR PESSOA</h2>
        <form action="./cadastro-usuario.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" required oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ\s]/g, '')">

            <label for="usuario">Usuário:</label>
            <input type="text" class="form-control" name="usuario">

            <div class="row mt-2">
                <div class="col">
                    <label for="telefone1">Telefone 1:</label>
                    <input type="text" class="form-control" name="telefone1" oninput="mascaraTelefone(this)">
                </div>
                <div class="col">
                    <label for="telefone2">Telefone 2:</label>
                    <input type="text" class="form-control" name="telefone2" oninput="mascaraTelefone(this)">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="logradouro">Logradouro:</label>
                    <input type="text" class="form-control" name="logradouro">
                </div>
                <div class="col">
                    <label for="numero_casa">Número:</label>
                    <input type="number" name="numero_casa" min="1" class="form-control">
                </div>
                <div class="col">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control" name="bairro">
                </div>
                <div class="col">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" name="cpf" oninput="mascaraCPF(this)">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" name="cidade">
                </div>
                <div class="col">
                    <label for="ano_nascimento">Ano de Nascimento:</label>
                    <input type="number" name="ano_nascimento" min="1900" max="2025" class="form-control">
                </div>
            </div>

            <label for="senha">Senha:</label>
            <input type="password" class="form-control" name="senha" id="senha" required pattern="^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,12}$">
            <small id="erroSenhaRequisitos">A senha deve ter entre 8 e 12 caracteres, pelo menos uma letra maiúscula e um número.</small>

            <label for="confirmar_senha">Confirme a Senha:</label>
            <input type="password" class="form-control" name="confirmar_senha" id="confirmar_senha" required>
            <small id="erroSenha">As senhas não coincidem!</small>

            <input type="submit" class="btn btn-success" value="Cadastrar">
        </form>
    </main>

    <script src="./assets/script.js"></script>
</body>
</html>