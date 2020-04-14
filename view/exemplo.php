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
 <button id="btnLogin">Pesquisar</button>
  
<div class="resultadoForm">
        <table>
            <thead>
            <tr>
                <td>ID</td>
                <td>NOME</td>
                <td>ID_CATEGORIA</td>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
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
    $('#btnLogin').on('click', function(){
      alert("");
      $.ajax({
        url:'../control/ListarProdutos.php',
        type:'post',
        dataType:'json',
        success :  function(response){  
          $.each(response,function (key, value) {
            $('.resultadoForm').append("Nome: " + value.nome + '<br>');
          });
        } 
      });
    });
  });

</script>
</script>
</html>