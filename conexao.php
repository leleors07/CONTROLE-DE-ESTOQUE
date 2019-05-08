<?php

$hostname = "localhost";
$user = "root";
$passoword = "";
$database = "bd_cadastro";
$conexao = mysqli_connect($hostname,$user,$passoword,$database);

if(!$conexao){
    print "falha na conexão com o Banco de Dados";
}
?>