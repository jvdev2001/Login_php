<?php

/**
 * Funcao usada para validacao de Email usando a funcao filter_var()
 * essa funcao recebe um parametro $email e retorna se o email e valido ou nao 
 * @param  string $email do usuario 
 * @return string retorna mensagem de validacao de email valido ou invalido
 */
function validaEmail(string $email):string{

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return "Email valido";
    }else{
        return "Email invalido : exemplo@gmail.com";
    }
}


/**
 * Funcao usada para validacao do input do usuario 
 * essa funcao recebe parametro $senha e retorna se a senha e valida ou invalida
 * @param int $senha do usuario
 * @return string retorna mensagem de validacao da senha  
 */

function validaSenha(int $senha):string{
    if(mb_strlen($senha)!==6){
        return "Senha precisa ter pelo menos 6 caracteres ou mais ";
    }else{
        return "Senha valida";
    }
}


/**
 * Funcao para validacao de cpf do usuario 
 * Funcao recebe parametro $cpf do tipo int e retorna se a valido ou nao os 11 digitos do cpf
 * @param int $cpf
 * @return string mensagem de validacao 
 */

function validaCpf(int $cpf):string{
    if(mb_strlen($cpf)!==11){
        return "Cpf invalido , necessario possuir 11 digitos";
    }else{
        return "cpf valido";
    }
}

/**
 * Funcao usada para notificarMensagem de erro para usuario dentro do formulario 
 * funcao recebe  apenas um parametro $notificaErro e retorna true ou false com base na condição 
 * @param  string $notificaErro
 * @return true  se  a notifiação de erro nao estiver vazia e se metodo da requisição for post
 * @return false se a notificação estiver vazia e a requisição nao for post 
 */

function notificaMensagemFormulario( string $notificaErro):bool{
    if(!empty($notificaErro) && $_SERVER['REQUEST_METHOD']=='POST' ){
        return true;
    }else{
        return false;
    }
}
?>