
<!DOCTYPE html>
<html lang="pt-br">

 
  <head>
    <title>Alteração</title>
  <style>


body{
  margin:1px;
}

a{
  text-decoration: none;
}

/* esconde as ancoras da tela */
a.links{
  display: none;
}


/* formatando o cabeçalho dos formulários */
h1{
  font-size: 48px;
  color: #066a75;
  padding: 10px 0;
  font-family: Arial,sans-serif;
  font-weight: bold;
  text-align: center;
  padding-bottom: 30px;
}
h1:after{
  content: ' ';
  display: block;
  width: 100%;
  height: 2px;
  margin-top: 10px;
  background: -webkit-linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%); 
  background: linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%); 
}

p{
  margin-bottom:1px;
}
p:first-child{
  margin: 0px;
}
label{
  color: #405c60;
  position: relative;
}
input:not([type="checkbox"]){
  width: 100%;
  margin-top: 1px;
  padding: 1px;    
  border: 1px solid #b2b2b2;
 
  
  -webkit-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
  box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;

}

/*estilo do botão submit */
input[type="submit"]{
  width: 80%!important;
  cursor: pointer;  
  background: #3d9db3;
  padding: 4px 3px;
  color: #fff;
  font-size: 20px;  
  border: 1px solid #fff;   
  margin-bottom:50px;  
  text-shadow: 0 1px 1px #333;
  
  -webkit-border-radius: 5px;
  border-radius: 5px;
  
  transition: all 0.2s linear;
}
input[type="submit"]:hover{
  background: #4ab3c6;
}

body {
			width: 550px;
			height: 50px;
			font-family: Arial;
		}
		
		.box {
			width: 300px;
			height: 50px;
			float: right;
		}
		
		.box2{
			width: 200px;
			height: 60px;
			
		}
		
		div#a-b-c {
			width: 400px;
			height: 50%;
			margin: 10px;
		}
		.box3 {
			width: 300px;
			height: 10px;
			float:right;
		}
		

</style>

 </head>
  <body>
	<h1> Alterar Produto </h1>
  	<form action="alterar.php" method="GET">
	<div class="box3">	
			<label>Codigo Produto</label>
			<input type="NUMBER" name="codigopd" required="" value="<?php echo $codigopd ['codigopd']; ?>"<br>
	</div>
	<div class="box2">	
			<label>Descrição</label>
			<input type="text" name="nome" required=""><br>
	</div>
	<div class="box">
			<label>Preço custo</label>
			<input id="preco_custo" type="NUMBER" name="preco_custo" required=""><br>
	</div>	
	<div class="box2">	
			<label>Preço Venda</label>
			<input id="preco_venda" type="NUMBER" name="preco_venda" required=""><br>
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
			<input id="qtd_pd" type="NUMBER" name="qtd_pd" required=""><br>
	</div>	
	<div class="box">
			<label>Tipo(Modelo)</label>  
			<input type="text" name="tipo" required=""><br>
	</div>
	<div class="box2">
			<label>Cor</label>
			<input type="text" name="cor" required=""><br>
			<br>
	</div>
	</div>
    <input type="submit" name="cadastrar"> 

</form>
 </body>
</html>



