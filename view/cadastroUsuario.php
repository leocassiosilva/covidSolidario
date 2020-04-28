<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Language" content="pt-br">
  <title>Cadastro de Usuario</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../resources/css/style.css" media="screen" />
</head>
<body>
  <?php include 'layout/navbar.php';?>
  <div class="container py-5">
    <div class="row">
      <div id="cad-alert" style="display: none;">
        <span id="mensagem"></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12 text-center mb-2">
        </div>
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="card rounded-0" id="login-form">
              <div class="card-header">
                <h3 class="mb-0">Cadastro</h3>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                     <label for="inputNome">Nome</label>
                     <input type="text" class="form-control" name="nome" id="nome" required="">
                   </div>
                   <div class="form-group col-md-6">
                    <label for="inputCelular">Whatsapp</label>
                    <input type="tel" class="form-control" name="celular" id="celular" required=""
                    placeholder="(84)9999-99999">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail">E-mail</label>
                  <input type="email" class="form-control" name="email" id="email" required="">
                </div>
                <div class="form-row">
                 <div class="form-group col-md-5">
                   <label for="inputCep">CEP</label>
                   <input type="text" class="form-control" name="cep" id="cep" required=""
                   placeholder="99999-999">
                 </div>
                 <div class="form-group col-md-5">
                  <label for="inputCidade">Cidade</label>
                  <input type="text" class="form-control" id="cidade" name= "cidade"required="" placeholder="Pau dos Ferros">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputUf">UF</label>
                  <input type="text" class="form-control" id="uf" name= "uf"required="" placeholder="RN">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required="">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" id="senha2" name="senha2" required="">
                  </div>
                </div>
              </div>
              
              <button class="btn btn-success" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include 'layout/footer.php';?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../resources/js/jquery.maskedinput-1.3.1.min.js"></script> 
<script type="text/javascript" src="../resources/js/valida_usuario.js"> </script>
<script type="text/javascript" src="../resources/js/cadUsuarios.js"> </script>

</html>