<?php
session_start();

if($_SESSION["logado"] == true){
  $nome = $_SESSION["nome"];
  $email = $_SESSION["email"];
}else{
  header("location: ../login.php"); 
}
?>

<html>
<head>
  <title>Covid Solidarrio</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../resources/css/style.css" media="screen" />

</head>
<body>
 <nav class="navbar  navbar-expand-lg navbar-dark maximo" style="background-color: #5abba7;width: 110%;" >
  <div class="container">
    <a class="navbar-brand" href="#">Covid Solidário</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Pagina inicial</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">Nome do usuario:</i> <?=$nome ?> <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../control/logoff.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="geral">
  <div class="content">
    <div class="row" style="padding-top: 50px;">
      <div class="col-md-6 mx-auto">
        <h1>Minhas doações</h1>
      </div>
    </div>
    <div class="row" style="padding-top: 50px;">
      <div class="col-10 mx-auto">
        <div class="resultadoForm">
          <table class="table" id="idTabela" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;table-layout:fixed">
            
          </table>
        </div>
      </div>
    </div>
    <div class="row align-items-start">
      <div id="cad-alert" class="col-md-6">
        <span id="mensagem"></span>
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