<?php
/**
 * Aqui vamos salvar o tema de escolha do usuario dentro de um cookie para ficar 
 * salvo no navegador do usuario 
 * !empty() recebe _Cookie com o valor nome tema 
 * Depois criamos uma variavel $tema que recebe o valor do cookie 
 * fazemos a validação condição se e escuro ou claro
 */

if(!empty($_COOKIE['tema'])){
    $tema = $_COOKIE['tema'];
        if($tema=='escuro'){
            $corTema = "#333";
        }elseif($tema =='claro'){
            $corTema = "#ffff";
        }
}
?>