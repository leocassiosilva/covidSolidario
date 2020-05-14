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


 <div class="container" id="geral" style="margin-top: 100px;">
  <div class="row">
    <div id="cad-alert" style="display: none;">
      <span id="mensagem"></span>
    </div>
  </div>

  <div class="row  d-flex justify-content-center">
    <div class="col-lg-7 col-sm-12 mb-4 text-rigth">
      <div class="card rounded-0" id="login-form">
        <div class="card-header">
          <h3 class="mb-0" style="text-align: center;">Cadastrar Pedidos de Doações</h3>
        </div>
        <div class="card-body">
         <form method="POST" action="../control/processa.php">
          <div class="form-group" id="formulario">
            <div class="form-row">
              <div class="form-group col-md-5">
               <label for="inputNome" id="label">Nome</label>
               <input type="text" class="form-control" name="nome[]" id="nome" placeholder="Digite o nome do produto">
             </div>
             <div class="form-group col-md-3">
              <label for="inputQuantidade" id="label">Quantidade</label>
              <input type="text" class="form-control" name="quantidade[]" placeholder="Quantidade" id="quantidade">
            </div>
          </div>
        </div>

        <button type="button" class="btn btn-primary" id="add-campo"> Adicionar Item </button>

        <button name="cad" id="cad" class="btn btn-success">Cadastrar Pedido</button>


      </form>
    </div>
  </div>
</div>
</div>
<?php include 'layout/footer.php';?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../resources/js/home.js"></script>
</body>
</html>