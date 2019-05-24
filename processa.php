<?php
 
 include_once("conexao.php");

//$codigo = $_POST['codigo'];
$nome_da_empresa    = $_POST['nomedaempresa'];
$cnpj               = $_POST['cnpj'];
$email              = $_POST['email'];
$endereco           = $_POST['endereco'];
$comercial          = $_POST['comercial'];
$celular            = $_POST['celular'];

$sql = "INSERT INTO cadastro_f (nome_da_empresa, cnpj, email, endereco, comercial, celular)
VALUES ('$nome_da_empresa', '$cnpj', '$email', '$endereco', '$comercial', '$celular')"; 

if (mysqli_query($conexao, $sql)) {
    echo "Inserido";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

 mysqli_close($conexao);

?>
