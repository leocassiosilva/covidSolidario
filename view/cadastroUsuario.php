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

  <div class="container">
    <div class="row">
      <div id="cad-alert" style="display: none;">
        <span id="mensagem"></span>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-xs-8 mx-auto" id="classePrincipal">
        <div class="card card-signin flex-row my-5">
         <div class="card-body">
          <h5 class="card-title text-center">Cadastra-se</h5>
          <form class="form-signin">
            <div class="form-label-group col-md-12 mb-4">
              <label for="inputNome" id="label">Nome</label>
              <input type="text" class="form-control" name="nome" id="nome" required="">
            </div>

            <div class="form-label-group col-md-12 mb-4">
              <label for="inputCelular" id="label">Whatsapp</label>
              <input type="tel" class="form-control" name="celular" id="celular" required="" placeholder="(84)9999-99999">
            </div>

            <div class="form-label-group col-md-12 mb-4">
              <label for="inputEmail" id="label">E-mail</label>
              <input type="email" class="form-control" name="email" id="email" required="">
            </div>

            <div class="form-label-group col-md-12 mb-4">
             <label for="inputCep" id="label">CEP</label>
             <input type="text" class="form-control" name="cep" id="cep" required=""
             placeholder="99999-999">
           </div>
           <div class="form-label-group col-md-12 mb-4">
            <label for="inputCidade" id="label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name= "cidade"required="" placeholder="Pau dos Ferros">
          </div>
          <div class="form-label-group col-md-12 mb-4">
            <label for="inputUf" id="label">UF</label>
            <input type="text" class="form-control" id="uf" name= "uf"required="" placeholder="RN">
          </div>

          <div class="form-label-group col-md-12 mb-4">
            <div class="form-group">
              <label id="label">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" required="">
            </div>
          </div>
          <div class="form-label-group col-md-12 mb-4">
            <div class="form-group">
              <label id="label">Confirmar Senha</label>
              <input type="password" class="form-control" id="senha2" name="senha2" required="">
            </div>
          </div>

          <hr>
          <div class="form-label-group col-md-12">

           <button class="btn btn-success text-uppercase" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
         </div>
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
<script>
  $(document).ready(function(){
   var tam = $(window).width();

   if (tam <= 1000){
    $( "#classePrincipal" ).addClass( "col-sm-12" ).removeClass( "col-sm-6" );
  }
});
</script>
</html>