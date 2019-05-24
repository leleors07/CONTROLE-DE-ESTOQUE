<?php

function valida_email($email, $senha){

    //Validar direto em um banco de dados
    $email_bd = 'mlt@gmail.com';
    $senha_bd = '123';

    if( $email == $email_bd && $senha==$senha_bd ){
        return true;
    }

    return false;
}

?>
