<?php 

echo'<h1>Aluno Editar</h1>';



var_dump($_POST);


$editar_id = $_POST['id'];
$editar_senha = $_POST['nome'];
$editarNascimento =$_POST['nasc'];
$editarTelefone =$_POST['tel'];
$editar_email=$_POST['email'];


$dsn = 'mysql:dbname=chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$update='UPDATE tb_aluno SET nome = :nome where id = :id';