<?php
session_start();
require "function.php";
$mensagemCadastro ="";
 
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['Email']) && !empty($_POST['Usuario']) && !empty($_POST['Senha'])){
        $userEmail = htmlspecialchars($_POST['Email']);
        $user = htmlspecialchars($_POST['Usuario']);
        $senhaUser = htmlspecialchars($_POST['Senha']);
        // chama a função 
        $emailValidacao = validaEmail($userEmail);
        $senhavalidacao = validaSenha($senhaUser);
        // verifica se o email e valido se nao for para aqui //
        if($emailValidacao!=="Email valido"){
            $mensagemCadastro = $emailValidacao;
        // verifica se a senha e valida dentro do formulario usando a função //
        }elseif($senhavalidacao!=='Senha valida'){
            $mensagemCadastro = $senhavalidacao;
        }else{
            $_SESSION['Email'] = $userEmail;
            $_SESSION['Usuario'] = $user;
            $_SESSION['Senha'] = $senhaUser;
            header('Location:login.php');
            exit();
        }
        
    }else{
        $mensagemCadastro = "Preencha todos os campos de cadastro";
    }
}


?>