<html>
<head>
  <title>Cadastro Doação</title>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../resources/css/home.css" media="screen" />


  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar  navbar-expand-lg navbar-dark " style="background-color: #5abba7; width: 100%;
  ">
  <div class="container">
    <a class="navbar-brand" href="#">Covid Solidário</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../control/loggoff.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<table border="1" width="500">
  <thead>
    <tr>
      <th>Nome Usuario</th>
      <th>Celular</th>
      <th>Nome Produto</th>
    </tr>
  </thead>
  <tbody id="tabela">
  </tbody>
</table>

<!-- Footer -->
<footer class="py-4" style="background-color: #bdbfc1; 
">

<div class="footer-copyright text-center py-3">© 2020 Copyright:</div>

</footer>
<!-- Footer -->
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../resources/js/home.js"> </script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    var cep = "59980-000";
    var cidade = "José da Penha";
    var uf = "RN";
    function curso(){
    $('#tabela').empty(); //Limpando a tabela
    $.getJSON(
      '../control/ListarProdutos.php',
      {
        data:{
          cep: cep,
          cidade:cidade,
          uf:uf
        },
        ajax: 'true'
      }, function(j){
        for(var i=0;j.length>i;i++){
        //Adicionando registros retornados na tabela
        $('#tabela').append('<tr><td>'+j[i].nome_usuario +'</td><td>'+j[i].celular+'</td><td>'+j[i].cidade+'</td></tr>');
        }

      });
  }
  curso();
});
</script>
</html>