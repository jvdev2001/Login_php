<?php


function validaEmail($email):string{

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return "Email valido";
    }else{
        return "Email invalido : exemplo@gmail.com";
    }
}


function validaSenha($senha):string{

}

?>