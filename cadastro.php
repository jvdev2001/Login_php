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
    <form action="cadastro.php" method="POST">
        <label for="">Email</label>
        <input type="text"  name = "Email" placeholder="Email">
        <label for="">Usuario</label>
        <input type="text" name = "Usuario" placeholder = "Usuario">
        <label for="">Senha</label>
        <input type="number" name = "Senha" placeholder = "Senha">
        <button type="submit">Registrar</button>
    </form>
    <?php
        if(isset($mensagemCadastro)){
            echo $mensagemCadastro;
        }
    ?>

    <p>Posuie Cadastro?: <a href="Login.php">Clique aqui</a></p>
</body>
</html>