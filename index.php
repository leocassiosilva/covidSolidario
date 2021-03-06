<?php
session_start();
if($_SESSION['logado']){
  header("location:/view/home.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Language" content="pt-br">
  <title>Covid Solidario</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="resources/css/estilo.css" media="screen" />
</head>
<body>
  <div id="main">
    <nav  id="navbar" class="navbar  navbar-expand-lg navbar-dark maximo" style="background-color: #5abba7;" >
      <div class="container">
        <a class="navbar-brand" href="#">Covid Solidário</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/listar.php">Pedidos de doação</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/contato.php">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/cadastroUsuario.php">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/login.php">Entrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-12 col-sm-12 mb-4 text-center">
         <h1 class="display-4" id="titulo1">O que é o Covid Solidário ?</h1>
         <p class="lead" id="texto1">É um site que tem como objetivo facilitar a comunicação entre doadores e receptores. </p>
       </div>
     </div>

     <div class="row d-flex justify-content-center">
      <div class="col-lg-4 col-sm-10 mb-4 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal" id="titulo">Quem pode participar?</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li><p id="texto">Qualquer pessoa que deseja doar ou receber doações. Antes é necessário fazer um cadastro simples no site.</p></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-10 mb-4 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal" id="titulo">Como me cadastrar?</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li><p id="texto">Para realizar seu cadastro você precisa clicar no link "Cadastrar" do menu acima e preencher os dados do formulário.</p></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-10 mb-4 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal" id="titulo">Como posso doar ?</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li><p id="texto">Realize login e clique no menu "Buscar solicitações de doação". Informe o CEP e entre em contato com o solicitante.</p></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php include 'view/layout/footer.php';?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>