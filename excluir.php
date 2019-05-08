<?php
$codigopd = $_GET ["codigopd"];


include_once "conectadaDB.php";

 $query = "DELETE FROM db_addprodutos WHERE codigopd = $codigopd;";
       if   ($resultado = mysqli_query($con, $query));
	   {
		  echo " Exclusao Efetuada";
          echo "<p><a href=\"Listapaciente.php\">Voltar Lista de consultas</a></p>";
          echo "</body></html>";


mysqli_close($con);
 ?>