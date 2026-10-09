<?php
Session_start();

$mensagemCadastro ="";

if($_SESSION['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['Email']) && !empty($_POST['Usuario']) && !empty($_POST['Senha'])){
        $userEmail = htmlspecialchars($_POST['Email']);
        $user = htmlspecialchars($_POST['Usuario']);
        $senhaUser = htmlspecialchars($_POST['Senha']);
        $_SESSION['Email'] = $userEmail;
        $_SESSION['Usuario'] = $user;
        $_SESSION['Senha'] = $senhaUser;
        header('Location:login.php');
        exit();
    }else{
        $mensagemCadastro = "Preencha todos os campos de cadastro";
    }
}


?>