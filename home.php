<?php
session_start();
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
    <a href="logout.php">Logout</a>
</body>
</html>