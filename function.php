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
    if(mb_strlen($senha)<=5){
        return "Senha precisa ter pelo menos 6 caracteres ou mais ";
    }else{
        return "Senha valida";
    }
}

?>