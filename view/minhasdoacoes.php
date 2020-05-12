<?php
session_start();

if($_SESSION["logado"] == true){
  $nome = $_SESSION["nome"];
  $email = $_SESSION["email"];
}else{
   header("location: login.php"); 
}
?>

<html>
<head>
  <title>Minhas Doações</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../resources/css/style.css" media="screen" />

</head>
<body>
  <?php include 'layout/navbar1.php';?>


<div class="container" id="geral">
  <div class="row" style="padding-top: 50px;">
      <div class="col-12 mx-auto" style="text-align: center;">
        <h1>Minhas doações</h1>
      </div>
    </div>
    <div class="row" style="padding-top: 50px;">
      <div class="col-8 mx-auto">
        <div class="resultadoForm">
          <table class="table" id="idTabela">    
          </table>
        </div>
      </div>
    </div>
</div>


<?php include 'layout/footer.php';?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../resources/js/minhas_doacoes.js"></script>
</html>