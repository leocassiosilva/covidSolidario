<?php
session_start();

if($_SESSION["logado"] == true){
  $nome = $_SESSION["nome"];
  $email = $_SESSION["email"];
}else{
   header("location: login.php"); 
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Language" content="pt-br">
  <title>Covid Solidario - Contato</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../resources/css/style.css" media="screen" />
</head>
<body>
  <?php include 'layout/navbar1.php';?>

  <div class="container">
    <div class="row">
      <div id="cad-alert" style="display: none;">
        <span id="mensagem"></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-xs-12 mx-auto" id="classePrincipal">
        <div class="card card-signin flex-row my-5">
         <div class="card-body">
          <h5 class="card-title text-center">Envie sua mensagem</h5>
          <form class="form-signin" method="POST">
            <div class="form-label-group col-md-12 mb-4">
              <label for="inputNome" id="label">Nome</label>
              <input type="text" class="form-control" name="txtnome" id="txtnome" required="" placeholder="Rafael">
            </div>

            <div class="form-label-group col-md-12 mb-4">
              <label for="inputEmail" id="label">E-mail</label>
              <input type="email" class="form-control" name="txtemail" placeholder="rafael@gmail.com" id="txtemail" required="">
            </div>
           <div class="form-label-group col-md-12 mb-4">
            <label for="inputMensagem" id="label">Deixe sua mensagem</label>
            <textarea rows="6" class="form-control" name="txtMensagem" id="txtMensagem" required=""></textarea>
          </div>

          <hr>
          <div class="form-label-group col-md-12">

           <button class="btn btn-success text-uppercase" id="btnEnviar" name="btnEnviar">Enviar Mensagem</button>
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
<script type="text/javascript" src="../resources/js/contato.js"></script>
<script>
  $(document).ready(function(){
   var tam = $(window).width();

   if (tam <= 1000){
    $( "#classePrincipal" ).addClass( "col-sm-12" ).removeClass( "col-md-6" );
  }
});
</script>
</html>