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
        <input type="text" name ="usuario" placeholder = "Usuario" value = "<?=htmlspecialchars($userLogin ?? '')?>">
        <label for="">Senha</label>
        <input type="password" name = "senha" id ="senha" placeholder= "Senha" value = "<?=htmlspecialchars($userSenha ?? '')?>">
        <button type="button"  onclick="mostrarSenha(this)">Mostrar</button>
        <button type = "submit">Entrar</button>
        <select name="tema">
            <option value="escuro">Escuro</option>
            <option value="claro">Claro</option>
        </select>
        <p>Não possuie cadastro ? <a href="cadastro.php">Clique aqui !!</a></p>
        <?php
            if(!empty($notificaMensagemLogin)){
            echo $notificaMensagemLogin;
        }
    ?>
   </form>
   <script>
    /**
     * funcao usada pra mostrar e ocultar senha do usuario 
     */
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
    
</body>
</html>
