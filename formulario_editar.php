<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Pessoa</title>
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
    </style>

    <main class="container text-center my-5">
        <h2>Editar Pessoa</h2>
        <br>

        <?php
        $id_pessoa = $_GET['id_pessoa'] ?? null;
        
        if (!$id_pessoa) {
            echo "<p class='text-danger'>ID da pessoa não informado.</p>";
            exit;
        }

        $dsn = 'mysql:dbname=login;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $banco = new PDO($dsn, $user, $password);

        $select = "SELECT * FROM tb_pessoa WHERE id = :id";

        if (!$dados) {
            echo "<p class='text-danger'>Pessoa não encontrada.</p>";
            exit;
        }
        ?>

        <form action="./pessoa_editar.php" method="POST">
            <input type="hidden" name="id" value="<?= $dados['id'] ?>">

            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" value="<?= $dados['nome'] ?>">

            <div class="row mt-2">
                <div class="col">
                    <label for="telefone_1">Telefone 1:</label>
                    <input type="text" class="form-control" name="telefone_1" value="<?= $dados['telefone_1'] ?>">
                </div>
                <div class="col">
                    <label for="telefone_2">Telefone 2:</label>
                    <input type="text" class="form-control" name="telefone_2" value="<?= $dados['telefone_2'] ?>">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="logradouro">Logradouro:</label>
                    <input type="text" class="form-control" name="logradouro" value="<?= $dados['logradouro'] ?>">
                </div>
                <div class="col">
                    <label for="n_casa">Número:</label>
                    <input type="number" class="form-control" name="n_casa" value="<?= $dados['n_casa'] ?>">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control" name="bairro" value="<?= $dados['bairro'] ?>">
                </div>
                <div class="col">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" name="cidade" value="<?= $dados['cidade'] ?>">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" name="cpf" value="<?= $dados['cpf'] ?>">
                </div>
                <div class="col">
                    <label for="ano_nascimento">Ano de Nascimento:</label>
                    <input type="number" class="form-control" name="ano_nascimento" value="<?= $dados['ano_nascimento'] ?>">
                </div>
            </div>

            <input type="submit" class="btn btn-success mt-3" value="Salvar Alterações">
        </form>
    </main>
</body>
</html>
