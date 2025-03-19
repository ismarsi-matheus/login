<?php

echo '<h1>Login</h1>';

$user_form = $_POST['user'];
$password_form = $_POST['password'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$consulta_usuario_senha = 'SELECT * FROM tb_usuario WHERE usuario = "' . $user_form . '" AND senha = "' . $password_form . '"';

$resultado = $banco->query($consulta_usuario_senha)->fetch();

$status = $resultado ['status'];


?>

<?php if ($status =='admin'){?>
<h1>Bem vindo ,avengers admin</h1>

<?php } ?>




<h1>Bem vindo ,avengers comum </h1>



<?php
die;
if (!empty($resultado) && $resultado != false) {
    header('location:tela_usuario.php');
    exit();
} else {
    // ✅ Redireciona para index.php com parâmetro de erro na URL
    header("Location: index.php?erro=1");
    exit();
}
