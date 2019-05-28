
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Tela Principal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg" alt="Los Angeles" width="1000px" height="1000px">
      </div>

      <div class="item">
        <img src="https://mdbootstrap.com/img/Photos/Others/img (27).jpg" alt="Chicago" width="1000px" height="1000px">
      </div>
    
      <div class="item">
        <img src="https://mdbootstrap.com/img/Photos/Others/img (30).jpg" alt="New york" width="1000px" height="1000px">
      </div>
    </div>
               <nav class="navbar navbar-fixed-top navbar-inverse">
               <div class="container">
               <!-- header -->
            <div class="navbar-header">

            <a href="telaprincipal.php" class="navbar-brand">
        <span class="imagem/image">MLT</span>    
        </a>
        </div>
        <div class="navbar-header">

        <!-- botao toggle -->
        <button type="button" class="navbar-toggle collapsed"
                tada-toggle="collapse" data-target="#barra-navegacao">
        <span class="sr-only">alternar navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
     </button>
</a>
     </div>

        <!-- navbar -->
    <div class="collapse navbar-collapse" id="barra-navegacao">
    <ul class="nav navbar-nav navbar-right">
    <li><a href="http://localhost/CONTROLE-DE-ESTOQUE/alterardate.php">Cadastro de Produto</a><li>
    <li><a href="http://localhost/CONTROLE-DE-ESTOQUE/index.php">Cadastro de Fornecedor</a><li>
    <li><a href="http://localhost/CONTROLE-DE-ESTOQUE/index_compra.php">Cadastro de Compra</a><li>
    <li><a href="http://localhost/CONTROLE-DE-ESTOQUE/login.php">Sair</a><li>

    

    </ul>
    </div>