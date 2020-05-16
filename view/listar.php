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
          <a class="nav-link" href="listar.php">Pedidos de doação</a>
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

  <div class="row  d-flex justify-content-center">
    <div class="col-lg-6 col-sm-12 mb-4 text-center">
      <div class="card rounded-0" id="login-form">
        <div class="card-header">
          <h3 class="mb-0" style="text-align: center;">Pesquisar Produtos</h3>
        </div>
        <div class="card-body">
          <form method="POST" action="../control/ListarDoacao.php">
            <div class="form-row">
             <div class="form-group col-md-12 text-left">
               <label for="inputNome" id="label">CEP</label>
               <input type="text" class="form-control" name="cep" id="cep" required=""
               placeholder="99999-999">
             </div>
             <div class="form-group col-md-12 text-left">
              <label for="inputCidade" id="label">Cidade</label>
              <input type="text" class="form-control" id="cidade" name= "cidade"required="" placeholder="Pau dos Ferros">
            </div>
            <div class="form-group col-md-12 text-left">
              <label for="inputUf">UF</label>
              <input type="text" class="form-control" id="uf" name= "uf"required="" placeholder="RN">
            </div>
          </div>
          <button type="submit" class="btn btn-success btn-lg btn-left" id="btnListar" name="btnListar" style="float: left;">Pesquisar</button>
        </form>
      </div>
    </div>
  </div>


</div>
<div class="row" id="tabela">
  <div class="col-md-12 mx-auto" >
    <div class="table">
      <table class="table" id="idTabela" cellspacing="0" aria-describedby="example_info">

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
<script type="text/javascript">
   $('document').ready(function(){ 
  $('#btnListar').on('click', function(){
    var cep = $("#cep").val();
    alert(cep);
    $("#btnListar").blur();
    jQuery.ajax({
      type: "POST",
      url: "../control/ListarDoacao.php",
      data:{
        cep: cep
      },
      dataType: 'json',
      success: function(response)
      {
        if (response.codigo == 0) {
          $("table").css("display", "none");  
          $("#listarmensagem").html('<strong>Erro! </strong>' + response.mensagem);
          $("#listar-alert").addClass( "col-md-6 mx-auto alert alert-danger").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);

        }else {
          $("input").val("");
          $('table').append("<tr class='row'><th id='id_nome' class='col-4'>Cidade</th> <th class='col-4'>Produto</th> <th class='col-3'>Quantidade</th></tr> ");
          for(var i=0;response.length>i;i++){
            $('table').append("<tr class='row'><td id='id_nome' class='col-4'>" + response[i].nome_cidade + "</td> <td class='col-4'>" + response[i].nome_produto + "</td> <td class='col-3'>" + response[i].quantidade + "</td></tr> ");
          } 
          $("table").css("display", "block");

        }
      }
    });
    return false;
  });
 });
</script>

</html>