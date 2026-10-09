<?php
require "dadosLogin.php";                                                                                                                                                                                       
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="login.php" method = "POST">
        <h2>Login</h2>
        <label for="">Login</label>
        <input type="text" name ="usuario" placeholder = "Usuario">
        <label for="">Senha</label>
        <input type="passworld" name = "senha" placeholder= "Senha">
        <button type = "submit">Entrar</button>
        <p>Não possuie cadastro ? <a href="cadastro.php">Clique aqui !!</a></p>
        <?php
            if(!empty($notificaMensagemLogin)){
            echo $notificaMensagemLogin;
        }
    ?>

    </form>
    
</body>
</html>
