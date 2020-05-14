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


    <form class="form-horizontal  justify-content-center">
      <fieldset>
        <legend>Um exemplo de formulário</legend>

        <div class="form-group">
          <label class="col-md-4 control-label" for="nome">Nome</label>  
          <div class="col-md-8">
            <input id="nome" name="nome" type="text" placeholder="Antônio Vinícius" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="email">E-mail</label>  
          <div class="col-md-8">
            <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="senha">Senha</label>
          <div class="col-md-8">
            <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="">
            <span class="help-block">Mínimo de 6 caracteres</span>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="botao_enviar"></label>
          <div class="col-md-8">
            <button id="botao_enviar" name="botao_enviar" class="btn btn-primary">Enviar</button>
          </div>
        </div>

      </fieldset>
    </form>


    <div class="row  d-flex justify-content-center">
      <div class="col-lg-7 col-sm-12 mb-4 text-rigth">
        <div class="card rounded-0" id="login-form">
          <div class="card-header">
            <h3 class="mb-0" style="text-align: center;">Cadastrar Usuário</h3>
          </div>
          <div class="card-body">
           <form class="form" role="form" novalidate="" method="POST">
            <div class="form-group" id="formulario">
              <div class="form-row">
                <div class="form-group col-md-12-xs-12 mb-4 mb-4">
                 <label for="inputNome" id="label">Nome</label>
                 <input type="text" class="form-control" name="nome" id="nome" required="">
               </div>
               <div class="form-group col-md-12 col-xs-12 mb-4 mb-4">
                <label for="inputCelular" id="label">Whatsapp</label>
                <input type="tel" class="form-control" name="celular" id="celular" required=""
                placeholder="(84)9999-99999">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12-xs-12 mb-4">
                <label for="inputEmail" id="label">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" required="">
              </div>
            </div>

            <div class="form-row">
             <div class="form-group col-md-5 col-sm-12 mb-4">
               <label for="inputCep" id="label">CEP</label>
               <input type="text" class="form-control" name="cep" id="cep" required=""
               placeholder="99999-999">
             </div>
             <div class="form-group col-md-5 col-sm-12 mb-4">
              <label for="inputCidade" id="label">Cidade</label>
              <input type="text" class="form-control" id="cidade" name= "cidade"required="" placeholder="Pau dos Ferros">
            </div>
            <div class="form-group col-md-2 col-sm-12 mb-4">
              <label for="inputUf" id="label">UF</label>
              <input type="text" class="form-control" id="uf" name= "uf"required="" placeholder="RN">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6 col-sm-12 mb-4">
              <div class="form-group">
                <label id="label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required="">
              </div>
            </div>
            <div class="form-group col-md-6 col-sm-12 mb-4">
              <div class="form-group">
                <label id="label">Confirmar Senha</label>
                <input type="password" class="form-control" id="senha2" name="senha2" required="">
              </div>
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
<?php include 'layout/footer.php';?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../resources/js/jquery.maskedinput-1.3.1.min.js"></script> 
<script type="text/javascript" src="../resources/js/valida_usuario.js"> </script>
<script type="text/javascript" src="../resources/js/cadUsuarios.js"> </script>

</html>