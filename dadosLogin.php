<?php
session_start();

$mensagemSucesso = "";
$mensagemErro = "";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
        $userLogin = htmlspecialchars($_POST['usuario']);
        $userSenha = htmlspecialchars($_POST['senha']);
        if($userLogin=='admin' && $userSenha=="3421"){
            $_SESSION['usuario'] = $userLogin;
            $_SESSION['Senha'] = $userSenha;
            /**
             * Verifica se  o post tema nao esta vazio
             */
            if(!empty($_POST['tema'])){
                setcookie('tema',htmlspecialchars($_POST['tema']));
            }
            $mensagemSucesso = "Login com sucesso";
            header('Location:home.php');
            exit();
        }else{
            $mensagemErro = "Senha ou usuarios incorretos";
        }
    }else{
        $mensagemErro = "Preencha todos os  campos";
    }
}else{
    $mensagemErro = "Formulario nao enviado";
}

?>