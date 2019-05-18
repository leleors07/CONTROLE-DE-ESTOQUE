<?php
session_start();
include_once("conexao_compra.php");
?>
    <h1>COMPRA</h1>
    <?php
           $sql = "SELECT * FROM cadastro_c";
$result = mysqli_query($conexao, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row_cadastro_c = mysqli_fetch_assoc($result)) {
 
        echo "fornecedor:" . $row_cadastro_c ['fornecedor'] . "<br>";
        echo "produto:" . $row_cadastro_c ['produto'] . "<br>";
        echo "valor:" . $row_cadastro_c ['valor'] . "<br>";
        echo "tamanho:" . $row_cadastro_c ['tamanho'] . "<br>";
        echo "cor:" . $row_cadastro_c['cor'] . "<br>";
        echo "quantidade:" . $row_cadastro_c ['quantidade'] . "<br><hr>";
    }
} else {
    echo "0 results";
}
     
    ?>