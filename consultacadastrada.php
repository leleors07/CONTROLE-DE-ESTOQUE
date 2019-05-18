<?php
$codigopd 		= $_GET["codigopd"];
$nome 		   	= $_GET["nome"];
$preco_custo 	= $_GET["preco_custo"];
$preco_venda 	= $_GET["preco_venda"];
$tamanhopd 		= $_GET["tamanhopd"];
$qtd_pd 	   	= $_GET["qtd_pd"];
$tipo 		  	= $_GET["tipo"];
$cor		 	    = $_GET["cor"];

include_once "conectadaDB.php";

   $query = "INSERT INTO bd_addprodutos ( codigopd, nome, preco_custo, preco_venda, tamanhopd, qtd_pd, tipo, cor)
   VALUES ('$codigopd', '$nome', '$preco_custo', '$preco_venda', '$tamanhopd', '$qtd_pd', '$tipo', '$cor')";
   if ($result = mysqli_query($conexao, $query)) {
	  echo "Inclusão efetuada com sucesso";
  }
  mysqli_close($conexao);
?>  
 <br>
 <br>
 <center> <a href="listapaciente.php">Lista de consultas</a> </center>
