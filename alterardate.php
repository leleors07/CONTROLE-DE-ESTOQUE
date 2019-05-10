<!DOCTYPE html>
<html>
    <head>
        <meta name="charset" content="utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
         <title>Cad_Fornecedores</title>
		 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		 <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
         <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
		
               <div class="container">
              <div class="form-group mb-3">
 </head>
  <body>
	<h1> Alterar Produto </h1>
  	<form action="alterar.php" method="GET">
		<div class="form-group mb-3">

	<div class="box3">	
			<label>Codigo Produto</label>
			<input type="NUMBER"  class="form-control" name="codigopd" placeholder="Codigo produto" required="" value="<?php echo $codigopd ['codigopd']; ?>"<br>

	</div>
	<div class="box2">	
			<label>Descrição</label>
			<input type="text"  class="form-control" name="descricao" placeholder="Descrição do produto" required="" 

	</div>
	<div class="box">
			<label>Preço custo</label>
			<input id="preco_custo" type="NUMBER"  class="form-control" name="preco_custo" placeholder="Preço custo" required=""><br>

	</div>	
	<div class="box2">	
			<label>Preço Venda</label>
			<input id="preco_venda" type="NUMBER"  class="form-control" name="preco_venda" placeholder="Preço venda" required=""><br>

	</div>	

	</div>
	<div class="box2">	
			<label>Quantidade</label>
			<input id="qtd_pd" type="NUMBER" class="form-control" name="qtd_pd" placeholder="Quantidade" required=""><br>
	</div>	
	<div class="box">
			<label>Tipo(Modelo)</label>  
			<input type="tetx" class="form-control" name="tipo" placeholder="Preço venda" required=""><br>
			<div class="box2">
		<br>
			<label> Tamanho Peça </label>
			<select name="tamanhopd">
			<option id="tamanhopd"  name="tamanhopd" value="P">	P<br>
			<option id="tamanhopd"  name="tamanhopd" value="M">	M<br>
			<option id="tamanhopd"  name="tamanhopd" value="G">	G<br>
			<option id="tamanhopd"  name="tamanhopd" value="GG">GG<br>
			</select>
	</div>

	<div class="box2">
			<label>Cor</label>
			<input type="tetx" class="form-control" name="cor" placeholder="Cor" required=""><br>

			<br>
	</div>
	</div>
    <input type="submit" name="cadastrar"> 

</form>
 </body>
</html>



