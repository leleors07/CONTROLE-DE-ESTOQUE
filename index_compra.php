<!DOCTYPE html>
<html>
    <head>
        <meta name="charset" content="utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
         <title>Compras</title>
		 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		 <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
         <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
                
               <div class="container">
               <div class="page-header">
               <h1>Cadastro de compra</h1>
               </div>
               <div class="row">
               <div class="col-sm-8">
               <h3>Cadastra-se</h3>
               <<form action="p_compra.php" method="POST">

               <div class="form-group">
                  <label for="fornecedor">FORNECEDOR</label>
                  <input type="text" class="form-control" id="fornecedor" name="fornecedor">
                  </div>

                  <div class="form-group">
                  <label for="produto">PRODUTO</label>
                  <input type="text" class="form-control" id="produto" name="produto">
                  </div>

                  <div class="form-group">
                  <label for="valor">VALOR</label>
                  <input type="real" class="form-control" id="valor" name="valor">
                  </div>

                  <div class="form-group">
                  <label for="tamanho">TAMANHO</label>
                  <input type="text" class="form-control" id="tamanho" name="tamanho">
                  </div>

                  <div class="form-group">
                  <label for="cor">COR</label>
                  <input type="text" class="form-control" id="cor" name="cor">
                  </div>

                  <div class="form-group">
                  <label for="quantidade">QUANTIDADE</label>
                  <input type="number" class="form-control" id="quantidade" name="quantidade">
                  </div>
                  <div class="checkbox">
                      <label>
                    <input type="checkbox"> Aceito os termos do serviço.
                    </label>
                  </div>

                  <button type="submit" class="btn btn-default">Cadastrar</button>
              </form>
              <div class="form-group mb-3">
           