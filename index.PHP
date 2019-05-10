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
                <center>
               <div class="container">
              <div class="form-group mb-3">
           
             <h2>"CADASTRO DE FORNECEDOR" EM DESENVOLVIMENTO.....</h2>
            <table border="1">
              <form method="post" action="processa.php">
              <div class="form-group mb-3"> 
              <img src="gfrgfr" class="img-responsive" alt="">
                  <div> 
                  <label for="nomedaempresa">NOME DA EMPRESA</label>
                    <input type="text"  class="form-control" id="nome_da_empresa" name="nomedaempresa" placeholder="Nome da empresa" required>
                  </div>

                  <div> 
                  <label for="">CNPJ</label>
                    <input type="number" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ"required>
                  </div>

                  <div> 
                  <label for="">E-MAIL</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail" required>
                  </div>

                  <div> 
                  <label for="">ENDEREÇO</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" required>
                  </div>

                  <div>   
                  <label for="">TEL COMERCIAL </label>
                    <input type="number" class="form-control" id="comercial" name="comercial" placeholder="Comercial" required>
                  </div>

                  <div> 
                <label for="">TEL CELULAR</label>
                <input type="number" class="form-control" id="celular" name="celular" placeholder="Celular" required>
                </div>
    
                </table>              
                <button type="submit" name="CADASTRAR" style="width:10%" class="btn btn-success" onclick="confirm('Cadastrado com sucesso!!')">CADASTRAR</button>   
                <input type="submit" value="EXCLUIR" style="width:10%" class="btn btn-danger" onclick="confirm('Deseja excluir o cadastro?')">               
                <input type="submit" value="ALTERAR" style="width:10%" class="btn btn-success" onclick="confirm('Deseja alterar o cadastro ?')"> 
              </center>

            </form>   

