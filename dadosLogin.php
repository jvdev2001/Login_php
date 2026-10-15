<?php
session_start();

$notificaMensagemLogin = "";

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
            $notificaMensagemLogin = "Login com sucesso";
            header('Location:home.php');
            exit();
        }else{
            $notificaMensagemLogin = "Senha ou usuarios incorretos";
        }
    }else{
        $notificaMensagemLogin = "Preencha todos os  campos";
    }
}else{
    $notificaMensagemLogin = "Formulario nao enviado";
}

?>