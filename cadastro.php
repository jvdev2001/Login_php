<?php
require "dadosCadastro.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
    <h3>Cadastro!!</h3>
    <form action="">
        <label for="">EMAIL</label>
        <input type="text"  name = "Email" placeholder="Email">
        <label for="">Usuario</label>
        <input type="text" name = "Usuario" placeholder = "Usuario">
        <label for="">Senha</label>
        <input type="number" name = "Senha" placeholder = "Senha">
        <button type="submit">Registrar</button>
    </form>

    <p>Posuie Cadastro?: <a href="Login.php">Clique aqui</a></p>
</body>
</html>