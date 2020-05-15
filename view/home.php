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
  <title>Home</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../resources/css/style.css" media="screen" />
</head>

<body>
 <?php include 'layout/navbar1.php';?>


 <div class="container" style="margin-top: 100px;">
  <div class="row">
    <div id="cad-alert" style="display: none;">
      <span id="mensagem"></span>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6 col-xs-8 mx-auto" id="classePrincipal">
      <div class="card card-signin flex-row my-5">
       <div class="card-body">
        <h5 class="card-title text-center">Cadastra seu pedido de doação</h5>
        <form class="form-signin">
          <div id="formulario">
            <div class="form-row">
              <div class="form-label-group col-md-6 mb-4" id="classeSecundaria">
                <label for="inputNome" id="label">Nome</label>
                <input type="text" class="form-control" name="nome[]" id="nome" placeholder="Nome">
              </div>

              <div class="form-label-group col-md-3 mb-4" id="classeTerciaria">
                <label for="inputQuantidade" id="label">Quantidade</label>
                <input type="text" class="form-control" name="quantidade[]" placeholder="Quantidade" id="quantidade">
              </div>
            </div>
          </div>
          <hr>
          <div class="form-label-group col-md-12">

           <button type="button" class="btn btn-primary" id="add-campo"> Adicionar Item </button>

           <button name="cad" id="cad" class="btn btn-success">Cadastrar Pedido</button>
         </div>
       </form>
     </div>
   </div>
 </div>
</div>

</div>
<?php include 'layout/footer.php';?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../resources/js/home.js"></script>
<script>
  $(document).ready(function(){
   var tam = $(window).width();

   if (tam <= 1000){
    $( "#classePrincipal").addClass( "col-sm-6" ).removeClass( "col-lg-7" );
    $( "#classeSecundaria").addClass( "col-sm-12" ).removeClass( "col-md-3" );
    $( "#classeTerciaria").addClass( "col-sm-12" ).removeClass( "col-md-3" );
  }
});
</script>
</body>
</html>