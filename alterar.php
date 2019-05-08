<?php
$codigopd 		= $_GET['codigopd'];
$nome 			= $_GET['nome'];
$preco_custo 	= $_GET['preco_custo'];
$preco_venda 	= $_GET['preco_venda'];
$tamanhopd 		= $_GET['tamanhopd'];
$qtd_pd 		= $_GET['qtd_pd'];
$tipo 			= $_GET['tipo'];
$cor		 	= $_GET['cor'];

include_once "conectadaDB.php";
	

 $query("UPDATE  bd_addprodutos SET qtd_pd='$qtd_pd', nome='$nome' WHERE codigopd = $codigopd;";
		$resultado = mysqli_query($con, $query);
		

          echo "<html><body>";
          echo "<p>Cadastro alterado com sucesso!</p>";
          echo "<p><a href=\"listapaciente.php\"> Voltar Lista de Consultas</a></p>";
          echo "</body></html>";
mysqli_close($con);
 ?>


	
	
	