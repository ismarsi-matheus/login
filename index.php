<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
 
<style>
    body{
        color: #f2f2f2;
        background-color: black;
        display: flex;
        justify-content: center;
    }
 
    form{
        width: 500px;
    }
</style>
 
<body>
    <form action="auxlogin.php" method="POST" class="mt-5">
 
        <h1>Login</h1>
        <label class="form-label">Usuário: </label>
        <input type="text" class="form-control" name="user" required onkeypress="return ApenasLetras(event)" oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ\s]/g, '')">
 
        <label class="form-label">Senha: </label>
        <input type="password" class="form-control" name="password" required>  
 
        <input class="btn btn-success mt-3" type="submit" value="Entrar">
        <a href="cadastro.php" class="btn btn-primary mt-3">Cadastra-se</a>
        <a href="esqueci_senha.php" class="btn btn-primary mt-3">Esqueci a Senha</a>
    </form>
   
</body>
</html>