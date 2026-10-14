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
        <input type="text"  name = "Email" placeholder="Email" value = "<?=htmlspecialchars($userEmail ??'')?>">
        <label for="">Usuario</label>
        <input type="text" name = "Usuario" placeholder = "Usuario" value = "<?=htmlspecialchars($user ?? '')?>">
        <label for="">Senha</label>
        <input type="password" name = "Senha" id = "senha" placeholder = "Senha" value = "<?=htmlspecialchars($userSenha ?? '')?>">
        <button type="button"  onclick="mostrarSenha(this)">Mostrar</button>
        <button type="submit">Registrar</button>
    </form>
    <?php
        if(isset($mensagemCadastro)){
            echo $mensagemCadastro;
        }
    ?>
    /**
    Funcao criada para ocultar e mostrar senha 
     */
    <script>
        function mostrarSenha(botao) {
            const inputSenha = document.getElementById('senha');

            if (inputSenha.type === 'password') {
            inputSenha.type = 'text';
            botao.textContent = 'Ocultar';
            } else {
            inputSenha.type = 'password';
            botao.textContent = 'Mostrar';
            }
        }
    </script>

    <p>Posuie Cadastro?: <a href="Login.php">Clique aqui</a></p>
</body>
</html>