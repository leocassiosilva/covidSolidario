<?php

$email = "leocassiolsilva";
 
function validaEmail($mail){
    if(!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", $mail)) {
        return "Invalido";
    }else{
        return "Valido";
    }
}
 
$result = validaEmail($email);

echo $result;
?>