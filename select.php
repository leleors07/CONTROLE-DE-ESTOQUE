<?php
session_start();
include_once("conexao.php");
?>
    <h1>LISTAR FORNECEDORES</h1>
    <?php
           $sql = "SELECT * FROM cadastro_f";
$result = mysqli_query($conexao, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row_cadastro_f = mysqli_fetch_assoc($result)) {
        echo "codigo:" . $row_cadastro_f ['codigo'] . "<br>"; 
        echo "nome_da_empresa:" . $row_cadastro_f ['nome_da_empresa'] . "<br>";
        echo "cnpj:" . $row_cadastro_f ['cnpj'] . "<br>";
        echo "email:" . $row_cadastro_f ['email'] . "<br>";
        echo "endereco:" . $row_cadastro_f ['endereco'] . "<br>";
        echo "comercial:" . $row_cadastro_f ['comercial'] . "<br>";
        echo "celular:" . $row_cadastro_f ['celular'] . "<br><hr>";
    }
} else {
    echo "0 results";
}
     
    ?>