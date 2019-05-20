<!DOCTYPE html>
<html>
    <head>
        <meta name="charset" content="utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
         <title>Cad_Produto</title>
		 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		 <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
         <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
	<body>
                
				<div class="container">
				<div class="page-header">
				<h1>Cadastro de Produto</h1>
				</div>
				<div class="row">
				<div class="col-sm-8">
				<h3>Cadastrar Produto</h3>
				<form>
 
				<div class="form-group">
				   <label for="codigodoproduto">CODIGO DO PRODUTO</label>
				   <input type="number" class="form-control" id="codigo_do_produto">
				   </div>
 
				   <div class="form-group">
				   <label for="descricao">DESCRIÇÃO</label>
				   <input type="text" class="form-control" id="descricao">
				   </div>
 
				   <div class="form-group">
				   <label for="precocusto">PREÇO CUSTO</label>
				   <input type="number" class="form-control" id="preco_custo">
				   </div>
 
				   <div class="form-group">
				   <label for="preco_venda">PREÇO VENDA</label>
				   <input type="number" class="form-control" id="preco_venda">
				   </div>
 
				   <div class="form-group">
				   <label for="comercial">QUANTIDADE</label>
				   <input type="number" class="form-control" id="comercial">
				   </div>
 
				   <div class="form-group">
				   <label for="tipomodelo">TIPO(MODELO)</label>
				   <input type="text" class="form-control" id="tipomodelo">
				   </div>
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

 
				   <button type="submit" class="btn btn-default">Cadastrar</button>
			   </form>
			   <div class="form-group mb-3">
		






























