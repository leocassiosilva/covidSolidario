<html>
<head>
  <title>Covid Solidarrio</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../resources/css/style.css" media="screen" />

</head>
<body>
  <?php include 'layout/navbar.php';?>
  <div class="geral">
    <div class="content">
      <form method="GET">
       <button type="submit" class="btn btn-success btn-lg " id="btnconcluir" name="btnconcluir"> Doaçao Concluida
       </button>
     </form>
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
  </div>
</div>
<?php include 'layout/footer.php';?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
 $('document').ready(function(){ 
  $(window).on("load", function(){
   //seu script aqui
   //alert("Ola");
   jQuery.ajax({
    type: "POST",
    url: "../control/MinhasDoacoes.php",
    dataType: 'json',
    success: function(response)
    {
      $(".resultadoForm table tbody").empty();
      if (response.codigo == 0) {
        console.log(response);
        $("#listar-alert").css('display', 'block') ;
        $("table").css("display", "none");             
        $("#listarmensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn(1000).delay(4900).fadeOut(3400);
      }else {
        $.each(response,function (key, value) {
          $("input").val("");
          $('.resultadoForm table tbody').append("<tr> <td>" + value.nome_usuario + "</td> <td>" + value.celular + "</td> <td>" + value.cidade + "</td> <td>" + value.uf + "</td> <td>" + value.descricao + "</td> <td>" + value.nome_status + "</td> <td>" + value.id_usuario + "</td> </tr> ");
          $("table").css("display", "block");
        });
      }
    }
  });
   return false;
 });
});
</script>
</html>