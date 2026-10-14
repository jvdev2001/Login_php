<?php
/**
 * Aqui vamos salvar o tema de escolha do usuario dentro de um cookie para ficar 
 * salvo no navegador do usuario 
 */

$corTema = "";
if(!empty($tema)){
    $tema = $_COOKIE['tema'];
        if($tema=='escuro'){
            $corTema = "#0000";
        }elseif($tema =='claro'){
            $corTema = "#fff";
        }
}
?>