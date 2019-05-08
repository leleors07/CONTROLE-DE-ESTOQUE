
<html>
<head>
	<link href="tablestyle.css" rel="stylesheet" type="text/css" />
	<link href="cssbarra.css" rel="stylesheet" type="text/css" />
</head>
<body>
<img src="logo.jpg" alt="some text" width=60 height=40>
<br>
<br>
<nav id="menu">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Fornecedores</a></li>
        <li><a href="#">Compra de Produtos</a></li>
    </ul>
</nav>

</body>
</html>


</body>
<?php
include_once "conectadaDB.php";

$query = "SELECT codigopd, nome, preco_custo, preco_venda, tamanhopd, qtd_pd, tipo, cor FROM bd_addprodutos WHERE 1";

if($result = mysqli_query($con, $query)){
  if(mysqli_num_rows($result) > 0){
 ?>   
	<table class="responstable">
			<tr>
                <th>Codigo Produto</th>
                <th>Descrição</th>
				<th>Preço custo</th>
                <th>Preço Venda</th>
                <th>Tamanho</th>
				<th>Quantidade</th>
				<th>Tipo(Modelo) </th>
				<th>Cor</th>
				<th colspan=2 >Açoes </th>
            </tr>
			<?php
        while($row = mysqli_fetch_array($result)){
			?>
			
			<tr>
                <td><?php echo $row['codigopd']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['preco_custo'];?></td>
                <td><?php echo $row['preco_venda'];?></td>
				<td><?php echo $row['tamanhopd'];?></td>
				<td><?php echo $row['qtd_pd'];?></td>
				<td><?php echo $row['tipo'];?></td>
				<td><?php echo $row['cor']; ?></td>
            
				<td><a href="alterardate.php?id='. $row["codigopd"] .'>Alterar</a></td>
				 
				<td><a href="excluir.php?id='. $row["codigopd"] . '">Excluir</a></td>
			
            
			
			
			</tr>
        <?php
		}
		
		
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
} else{
 
}
?>
 <br>
 <a href="cadastrarconsulta.php"> <button style="
  width: 10%!important;
  cursor: pointer;  
   width: 10%!important;
  cursor: pointer;  
  background: #3d9db3;
  padding: 1px 1px;
  color: #FFF;
  font-size: 15px;  
  border: 1px solid #fff;   
  margin-bottom:50px;  
  text-shadow: 0 1px 1px #333;
  
  -webkit-border-radius: 5px;
  border-radius: 5px;
  
  transition: all 0.2s linear;
}
input[type="submit"]:hover{
  background: #4ab3c6;
  padding: 1px 1px;
  font-size: 15px;  
  border: 1px solid #fff;   
  margin-bottom:50px;  
  text-shadow: 0 1px 1px ;
  
  -webkit-border-radius: 5px;
  border-radius: 5px;
  
  transition: all 0.2s linear;
}
input[type="submit"]:hover{

}>CADASTRAR NOVO</a> </button>


