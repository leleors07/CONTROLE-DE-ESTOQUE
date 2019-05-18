<?php
 include_once("conexao_compra.php");

//$codigo = $_POST['codigo'];
$fornecedor = $_POST['fornecedor'];
$produto = $_POST['produto'];
$valor = $_POST['valor'];
$tamanho = $_POST['tamanho'];
$cor = $_POST['cor'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO cadastro_c (fornecedor, produto, valor, tamanho, cor, quantidade)
VALUES ('$fornecedor', '$produto', '$valor', '$tamanho', '$cor', '$quantidade')"; 

if (mysqli_query($conexao, $sql)) {
    echo "Inserido";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

 mysqli_close($conexao);

 header("refresh:2 url=index_compra.php");

?>