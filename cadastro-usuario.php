<?php
var_dump($_POST);

$usuario_form= $_POST['usuario'];
$senha_form=$_POST['senha'];


$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$insert='INSERT INTO tb_usuario (usuario,senha) VALUE (:usuario , :senha)';

$box = $banco->prepare($insert);

$box->execute([
    ':nome' => $usuario_form,
    ':senha'=> $senha_form
]);



$telefone_form1 = $_POST['telefone1'];
$telefone_form2 = $_POST['telefone2'];
$email_form = $_POST['email'];
$nascimento_form = $_POST['nasc'];
$frequente_form = $_POST['frequente'];

$img_form = $_POST['img'];

$inserte = 'INSERT INTO tb_info_alunos (telefone, email, nascimento, frequente, id_alunos, img) VALUE (:telefone, :email, :nascimento, :frequente, :id_alunos, :img)';

$boxe = $banco->prepare($inserte);

$boxe->execute([
    ':telefone1' => $telefone_form1,
    ':telefone2' => $telefone_form2,
    ':email' => $email_form,
    ':nascimento' => $nascimento_form,
    ':frequente' => $frequente_form,
    ':id_alunos' => $id_aluno,
    'img' => $img_form,
]);
