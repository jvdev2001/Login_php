<?php
require "dadosHome.php";
$mensagemHome = "";

$user="";
if(isset($_SESSION['usuario'])){
    $user = $_SESSION['usuario']; 
}else{
    $mensagemHome = "Usuario nao encontrado";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
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
        <?php
            if(!empty($mensagemDadosHome)){
                echo $mensagemDadosHome;
            }
        ?>
    </form>
    <P>sair do sistema: <a href="logout.php">Logout</a></P>
    
</body>
</html>