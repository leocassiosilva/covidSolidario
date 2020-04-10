<html>
<head>
  <title>Cadastro Doação</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar  navbar-expand-lg navbar-dark " style="background-color: #5abba7;">
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
          <a class="nav-link" href="#">Doadores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../control/loggoff.php">Sair</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>




  <div class="container py-5" id="mostrar">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12 text-center mb-2">
        </div>
        <div class="row">
          <div id="cad-alert" class="col-md-6">
            <span id="mensagem"></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="card rounded-0" id="login-form">
              <div class="card-header">
                <h3 class="mb-0">Cadastro doação</h3>
              </div>
              <div class="card-body">
                <form>
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

                 <button type="submit" class="btn btn-success btn-lg " id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="../resources/js/cadastro_produto.js"> </script>
</html>