<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <title>Cadastras Produtos</title>
    <meta charset="utf-8">
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0" />
	
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-3.4.0.min" > </script>
		<script type="text/javascript" src="js/bootstrap.min.js" > </script>

 <style>

</style>
</head>
  <body>
	<div class="jumbotron">
	<center>	<div class="container"> 
     
            <table border="1">
              <form method="post" action="processa.php">
            <div class="container">
            <div class="col-md-6 col-md-offset-3">
              <div class="form-group mb-3">
	
               <div class="container">
              <div class="form-group mb-3">
		<form action="consultacadastrada.php" method="GET">
				<div id="a-b-c">
						<h2>CADASTRAR PRODUTO</h2><br>
				<div class="box">	
			<label>Codigo Produto</label>
			<input type="NUMBER" class="form-control" name="codigopd" placeholder="Codigo produto" required=""><br>
      	</div>

				<div class="box2">	
			<label>Descrição</label>
			<input type="text" class="form-control" name="nome" placeholder="Descrição" required=""><br>
				</div>

				<div class="box">
			<label>Preço custo</label>
			<input id="preco_custo" type="NUMBER" class="form-control" name="preco_custo" placeholder="Preço custo" required=""><br>
				</div>	

			<div class="box2">	
			<label>Preço Venda</label>
			<input id="preco_venda" type="NUMBER" class="form-control" name="preco_venda" placeholder="Preço Venda" required=""><br>
				</div>	
			<div class="box">
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
			<label>Quantidade</label>
			<input id="qtd_pd" type="NUMBER" class="form-control" name="qtd_pd" placeholder="Quantidade" required=""><br>
	</div>

	<div class="box">
			<label>Tipo(Modelo)</label>  
			<input type="text" class="form-control" name="tipo" placeholder="Tipo (Modelo)" required=""><br>
	</div>
	<div class="box2">
			<label>Cor</label>
			<input type="text" class="form-control" name="cor" placeholder="Cor" required=""><br>
			<br>
	</div>
	</div>
    <input type="submit" name="CADASTRAR">
</form>
 </body>
</html>