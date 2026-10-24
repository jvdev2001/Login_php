<?php
session_start();
require "function.php";
$mensagemSucesso ="";
$mensagemErro = "";
 
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['Email']) && !empty($_POST['Usuario']) && !empty($_POST['Senha'])){
        $userEmail = htmlspecialchars($_POST['Email']);
        $user = htmlspecialchars($_POST['Usuario']);
        $senhaUser = htmlspecialchars($_POST['Senha']);
        // chama a função 
        $emailValidacao = validaEmail($userEmail);
        $senhavalidacao = validaSenha($senhaUser);

        $user=trim($user);
        if(empty($user)){
            $mensagemErro = "Campo usuario vazio";
        }elseif($emailValidacao!=="Email valido"){
            $mensagemErro = $emailValidacao;
        }elseif($senhavalidacao!=='Senha valida'){
            $mensagemErro = $senhavalidacao;
        }else{
            $mensagemSucesso = "Cadastro realizado com sucesso";
            $_SESSION['Email'] = $userEmail;
            $_SESSION['Usuario'] = $user;
            $_SESSION['Senha'] = $senhaUser;
            header('Location:login.php');
            exit();
        }
        
    }else{
        $mensagemErro = "Preencha todos os campos de cadastro";
    }
}


?>