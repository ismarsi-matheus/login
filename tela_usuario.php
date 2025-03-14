<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php
$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = "SELECT * FROM tb_usuario";
$resultado = $banco->query($select)->fetchAll();
?>

<main class="container my-5">
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Usuário</th>
            <th class="text-center">Ação</th>
        </tr>

        <?php foreach ($resultado as $linha) { ?>
            <tr>
                <td><?= $linha['id'] ?></td>
                <td><?= $linha['usuario'] ?></td>
                <td class="text-center">
                    <a class="btn btn-primary" href="./usuario_detalhes.php?id=<?= $linha['id'] ?>">Abrir</a>
                    <a class="btn btn-warning" href="./formulario_editar_usuario.php?id=<?= $linha['id'] ?>">Editar</a>
                    <a class="btn btn-danger" href="./usuario_deletar.php?id=<?= $linha['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</main>
