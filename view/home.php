<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="../js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <form class="form" action="" method="post">
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="categoria">Categoria</label>
        <select name="categoria" id="categoria" class="form-control">
        </select> 
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-success btn-lg " id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
  </form>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $('document').ready(function(){
       curso();
  function curso(){
    $('#categoria').hide();
    $.getJSON(
      '../control/ControleDoacao.php?search=',
      {
        acao: "categoria",
        ajax: 'true'
      }, function(j){
        var options = '<option value="">Escolha a Categoria</option>';
        for (var i = 0; i < j.length; i++) {
          options += '<option value="' + j[i].id_categoria + '">' + j[i].nome + '</option>';
        } 
        $('#categoria').html(options).show();
        
      });
  }
 
});


  </script>
</body>
</html>