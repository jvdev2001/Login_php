<?php
require "dadosHome.php";
require "theme.php";

$mensagemHome = "";

/**
 * Criamos uma variavel $user 
 * fazendo a validação usando a funcao iseet() com uma $_SESSION['Usuario'] 
 * para verificar se o usuario existe na sessão ela grava na variavel $user o valor da sessão
 * se nao existe ele retorna para a tela de login 
 */
$user="";
if(!empty($_SESSION['usuario'])){
    $user = $_SESSION['usuario']; 
}else{
    $mensagemHome = "Usuario nao encontrado";
    header('Location:login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body style="background-color:<?=$corTema?>">
    <h3>Seja vem vindo :<?php echo $user?></h3>

    <p><?= $mensagemHome?></p>

    <h3>Dados de cadastros:</h3>
    <form action="home.php" method="POST">
        <label for="">ClienteNome</label>
        <input type="text" name = "nomeCliente" placeholder = "cliente" value ="<?=htmlspecialchars($nomeClt ??  '')?>">
        <label for="">Endereco</label>
        <input type="text"name="enderecoCliente" placeholder = "Endereco" value ="<?=htmlspecialchars($enderecoClt ?? '')?>">
        <label for="">Telefone</label>
        <input type="text" name = "telefoneCliente" placeholder ="telefone" value="<?=htmlspecialchars($telefoneClt ?? '')?>"><br>
        <label for="">CPF</label>
        <input type="text" name ="cpfCliente" placeholder = "CPF"  value = "<?=htmlspecialchars($cpfClt ?? '')?>">
        <label for="">Email</label>
        <input type="text" name="emailCliente" placeholder = "Email" value = "<?=htmlspecialchars($emailClt ?? '')?>">
        <button type="submit">Enviar</button>
        <br>
        <?php if(notificaMensagemFormulario($mensagemErro)):?>
            <p style = "color:red">
                <?=$mensagemErro?>
            </p>
        <?php endif?>
        <?php if(notificaMensagemFormulario($mensagemSucesso)):?>
            <p style = "color:green">
                <?=$mensagemSucesso ?>
            </p>
        <?php endif?>
    </form>
    <P>sair do sistema: <a href="logout.php">Logout</a></P>
    
</body>
</html>