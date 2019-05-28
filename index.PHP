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
               <div class="page-header">
               <h1>Cadastro de Fornecedor</h1>
               </div>
               <div class="row">
               <div class="col-sm-6">
               <h3>Cadastra-se</h3>
               <form>

               <div class="form-group">
                  <label for="nomedaempresa">NOME DA EMPRESA</label>
                  <input type="text" class="form-control" id="nome_da_empresa">
                  </div>

                  <div class="form-group">
                  <label for="cnpj">CNPJ</label>
                  <input type="number" class="form-control" id="cnpj">
                  </div>

                  <div class="form-group">
                  <label for="email">E-MAIL</label>
                  <input type="text" class="form-control" id="email">
                  </div>

                  <div class="form-group">
                  <label for="endereco">ENDEREÇO</label>
                  <input type="text" class="form-control" id="endereco">
                  </div>

                  <div class="form-group">
                  <label for="comercial">TEL COMERCIAL</label>
                  <input type="number" class="form-control" id="comercial">
                  </div>

                  <div class="form-group">
                  <label for="cnpj">TEL CELULAR</label>
                  <input type="number" class="form-control" id="cnpj">
                  </div>
                  <div class="checkbox">
                      <label>
                    <input type="checkbox"> Aceito os termos do serviço.
                    </label>
                  </div>

                  <button type="submit" class="btn btn-default">Cadastrar</button>
              </form>
              <div class="form-group mb-5">
           