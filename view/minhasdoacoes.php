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
   <nav class="navbar  navbar-expand-lg navbar-dark maximo" style="background-color: #5abba7;" >
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
        <div class="col-md-6 mx-auto">
          <div class="resultadoForm">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Whatsapp</th>
                  <th scope="col">Cidade</th> 
                  <th scope="col">UF</th> 
                  <th scope="col">Descricao</th>
                  <th scope="col">Status</th>
                  <th scope="col">Modificar Status</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
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

<script>
 $('document').ready(function(){ 

   jQuery.ajax({
    type: "POST",
    url: "../control/MinhasDoacoes.php",
    dataType: 'json',
    success: function(response)
    {
      for(var i=0;response.length>i;i++){
        $('table').append('<tr><td>'+response[i].nome_usuario+'</td><td>'+response[i].celular+'</td><td>'+response[i].cidade+'</td> <td>'+response[i].uf+'</td><td>'+response[i].descricao+'</td><td>'+ response[i].nome_status +'</td> <td> <button type="button" class="btn btn-success" id="btnStatus" name="btnStatus" value="'+ response[i].id_doacao +'">Concluir</button></td></tr>');

        if (response[i].nome_status == "Concluida") {

          $("button").attr("disabled", true);
        }
      } 

    }
  });
   $("table").on("click", "button", function(){
     if($(this).attr('id') == 'btnStatus'){
       var id_doacao = $(this).val();
       $(this).blur();
     }
     jQuery.ajax({
      type: "POST",
      url: "../control/ModificarStatus.php",
      data:{
        id_doacao: id_doacao
      },
      dataType: 'json',
      success: function(response)
      {
        //alert(response.mensagem);
        if (response.codigo == 0) {
          $("#cad-alert").css('display', 'block', 'background-color: green');
          $("#mensagem").html(response.mensagem).fadeIn(300).delay(1900).fadeOut(400);
        }else {
          $("#cad-alert").css('display', 'block');
          $("#mensagem").html(response.mensagem).fadeIn(300).delay(1900).fadeOut( 400 );
        }
      }
    });
   });
 });
</script>
</html>