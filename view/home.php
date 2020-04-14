<?php
session_start();

if($_SESSION["logado"] == true){
  $nome = $_SESSION["nome"];
  $email = $_SESSION["email"];
}else{
  header("location: ../index.php"); 
}
?>


<html>
<head>
  <title>Cadastro Doação</title>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../resources/css/home.css" media="screen" />


  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
          <li class="nav-item active">
            <a class="nav-link" href="#">Nome do usuario:</i> <?=$nome ?> <span class="sr-only">(Página atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../control/logoff.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container" style="padding-top: 50px;">
    <div class="row align-items-start">
      <div class="col">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Cadastrar Doação</h5>
            <p class="card-text">Para realizar o seu cadastro clique no botão abaixo</p>
            <button id="cadProd" class="btn btn-primary">Cadastrar Doação</button>
          </div>
        </div>
      </div>
      <div class="col">
       <div class="card">
        <div class="card-body">
          <h5 class="card-title">Listar Doação</h5>
          <p class="card-text">Para pesquisar doadores clique no botão abaixo.</p>
          <button id="listar" class="btn btn-primary">Listar</button>


        </div>
      </div>
    </div>
  </div>
  <div class="row align-items-start" style="padding-top: 20px;">
    <div class="col">
      <div class="card" id="mostrar">
        <div class="card-body">
          <h5 class="card-title">Cadastrar Doações</h5>
          <form method="POST" action="../control/ControleProduto.php"> 
            <div class="form-row">
              <div class="form-group col-md-12">
               <label for="inputNome">Nome</label>
               <input type="text" class="form-control" name="nome" id="nome" >
             </div>
           </div>
           <div class="form-row">
            <div class="form-group col-md-6">
             <label for="categoria">Categoria</label>
             <select name="categoria" id="categoria" class="form-control">
             </select>
           </div>
           <div class="form-group col-md-6">
            <label for="inputQuantidade">Quantidade</label>
            <input type="number" class="form-control" name="quantidade" id="quantidade" required=""
            placeholder="10">
          </div>
        </div>
        <button id="btnCadProduto" name="btnCadProduto" class="btn btn-success btn-lg ">Cadastrar</button>
      </form>

    </div>
  </div>
</div>
<div class="col">
  <div class="card" id="apresentar">
    <div class="card-body">
      <h5 class="card-title">Listar Doação</h5>
      <form method="POST">
       <div class="form-row">
         <div class="form-group col-md-5">
           <label for="inputCep">CEP</label>
           <input type="text" class="form-control" name="cep" id="cep" required=""
           placeholder="99999-999">
         </div>
         <div class="form-group col-md-5">
          <label for="inputCidade">Cidade</label>
          <input type="text" class="form-control" id="cidade" name= "cidade"required="" placeholder="Pau dos Ferros">
        </div>
        <div class="form-group col-md-2">
          <label for="inputUf">UF</label>
          <input type="text" class="form-control" id="uf" name= "uf"required="" placeholder="RN">
        </div>
      </div>
      <button type="submit" class="btn btn-success btn-lg " id="btnListar" name="btnListar">Pesquisar</button>
    </form>
  </div>
</div>
</div>
</div>
<div class="row" id="login-alert">
  <div class="col-6">
    <span id="mensagem"></span>
  </div>
</div>
<div class="row">
  <div class="col-6">
    <table border="1" width="500">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>E-mail</th>
        </tr>
      </thead>
      <tbody id="tabela">
      </tbody>
    </table>
  </div>
</div>
</div><br>

<?php include 'layout/footer.php';?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../resources/js/jquery.maskedinput-1.3.1.min.js"></script>
<script type="text/javascript" src="../resources/js/home.js"> </script>
<script type="text/javascript" src="../resources/js/funcoes.js"> </script>
<script type="text/javascript" src="../resources/js/valida_produto.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#tabela').empty();
    $('#btnListar').on('click', function(){
      var cep = $("#cep").val();
      var cidade = $("#cidade").val();
      var uf = $("#uf").val();
      alert(cep);
      $.ajax({
        type : 'POST',
        url  : '../control/ListarProdutos.php',
        data:{
          cep: cep,
          cidade:cidade,
          uf:uf
        },
        
        dataType: 'json',
        success: function(dados){
          for(var i=0;dados.length>i;i++){
        //Adicionando registros retornados na tabela
        $('#tabela').append('<tr><td>'+dados[i].nome_usuario+'</td><td>'+dados[i].celular+'</td><td>'+dados[i].cidade+'</td></tr>');
      }
    }
  })
    });
  });



</script>
</html>