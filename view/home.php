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
  <title>Cadastro Doação</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../resources/css/style.css" media="screen" />
</head>
<body>
  <nav class="navbar  navbar-expand-lg navbar-dark maximo" style="background-color: #5abba7; width: 100%;" >
    <div class="container">
      <a class="navbar-brand" href="#">Covid Solidário</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="minhasdoacoes.php">Minhas doações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nome do usuario:</i> <?=$nome ?> <span class="sr-only">(Página atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../control/logoff.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container" id="geral">
    <div class="row">
      <div id="cad-alert" style="display: none;">
        <span id="mensagem"></span>
      </div>
    </div>

    <div class="row align-items-start" style="padding-top: 20px;">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Cadastrar Doações</h5>
            <form method="POST"> 
              <div class="form-row">
               <div class="form-group col-md-12">
                <label for="descricaoTexto">Descreva sua doação</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="4"></textarea>
              </div>
            </div>
            <div class="form-row">
             <div class="form-group col-md-12">
              <button id="btnCadDoacao" name="btnCadDoacao" class="btn btn-success btn-lg ">Cadastrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<?php include 'layout/footer.php';?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../resources/js/cadastrar_doacao.js"> 
</script>

</body>

</html>