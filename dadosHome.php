<?php
session_start();
require "function.php";

$mensagemErro = "";
$mensagemSucesso = "";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['nomeCliente']) && !empty($_POST['enderecoCliente'])&&!empty($_POST['telefoneCliente'])&&!empty($_POST['cpfCliente'])&&!empty($_POST['emailCliente'])){
        $nomeClt = htmlspecialchars($_POST['nomeCliente']);
        $enderecoClt= htmlspecialchars($_POST['enderecoCliente']);
        $telefoneClt = htmlspecialchars($_POST['telefoneCliente']);
        $cpfClt= htmlspecialchars($_POST['cpfCliente']); 
        $emailClt = htmlspecialchars($_POST['emailCliente']);
        /**
         * Aqui criamos  uma variavel para receber a funçao do arquivo function.php 
         * Funcao de validar email e cpf do usuario 
         */
        $validaCpfClt = validaCpf($cpfClt);
        $validaEmailClt = validaEmail($emailClt);

        if($validaCpfClt!=='cpf valido'){
            $mensagemErro = $validaCpfClt;
        }elseif($validaEmailClt!=='Email valido'){
            $mensagemErro = $validaEmailClt;
        }else{
            $_SESSION['nomeCliente'] = $nomeClt;
            $_SESSION['telefoneCliente'] = $telefoneClt;
            $_SESSION['cpfCliente'] = $cpfClt;
            $_SESSION['emailCliente'] = $emailClt;
            $_SESSION['enderecoCliente'] = $enderecoClt;
        } 
    }else{
        $mensagemErro = "Preencha todos os campos";
    }
    
}else{
    $mensagemErro = "Formulario nao enviado ";
}
?>