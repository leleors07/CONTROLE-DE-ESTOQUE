<?php

$hostname = "localhost";
$user = "root";
$passoword = "";
$database = "bd_cadastro";
$conexao = mysqli_connect($hostname,$user,$passoword,$database);

if(!$conexao){
    print "falha na conexão com o Banco de Dados";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="charset" content="utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
         <title>login da pagina</title>
		 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		 <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
         <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
           <form method="post" action="valida_login.php">     
               <div class="container">
               <div class="page-header">
               <h1>Login</h1>
               </div>
               <div class="row">
               <div class="col-sm-8">
               <h3>Logar</h3>
               <form>

                  <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                  </div>
                  <div class="form-group">
                  <h3>Senha</h3>

                  <div class="form-group">
                  <input type="password" class="form-control" id="cnpj" placeholder="Digite sua senha">
                  </div>
              
                  <button type="submit" class="btn btn-primary">Logar</button>
              </form>
              <div class="form-group mb-3">
           