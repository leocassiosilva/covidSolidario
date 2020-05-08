<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Language" content="pt-br">
  <title>Listar doadores</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../resources/css/style.css" media="screen" />

</head>
<body>
 <nav class="navbar  navbar-expand-lg navbar-dark maximo" style="background-color: #5abba7;" >
  <div class="container">
    <a class="navbar-brand" href="#">Covid Solidário</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Home</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="listar.php">Doadores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/cadastroUsuario.php">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/login.php">Entrar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" id="geral">
  <div class="row" id="mensagemAlerta">
    <div class="col-md-6 mx-auto" id="listar-alert">
      <span id="listarmensagem"></span>
    </div>
  </div>

   <div class="row">
      <div class="col-lg-12 col-sm-12 mb-4">
        jjs
      </div>
    </div>



</div>
<div class="row" id="tabela">
  <div class="col-md-12 mx-auto" >
    <div class="table-responsive">
      <table class="table" id="idTabela" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;table-layout:fixed;">

      </table>
    </div>
  </div>
</div>
</div>


<?php include 'layout/footer.php';?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../resources/js/jquery.maskedinput-1.3.1.min.js"></script>
<script type="text/javascript" src="../resources/js/mascara_cep_cel.js"> </script>

<script type="text/javascript" src="../resources/js/listar_doacoes.js"></script>
</html>