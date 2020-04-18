<html>
<head>
  <title>Cadastro Doação</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
          <li class="nav-item active">
            <a class="nav-link" href="#">Nome do usuario:</i>  <span class="sr-only">(Página atual)</span></a>
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
       <div class="container" style="padding-top: 50px;">
    <div class="row align-items-start">
      <div class="col">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Cadastrar Doação</h5>
            <p class="card-text">Para realizar o seu cadastro clique no botão abaixo</p>
            <button id="cadProd" name="cadProd" class="btn btn-primary">Cadastrar Doação</button>
          </div>
        </div>
      </div>
      <div class="col">
       <div class="card">
        <div class="card-body">
          <h5 class="card-title">Listar Doação</h5>
          <p class="card-text">Para pesquisar doadores clique no botão abaixo.</p>
          <button id="listar" name="listar" class="btn btn-primary">Listar</button>


        </div>
      </div>
    </div>
  </div>
  <div class="row align-items-start" style="padding-top: 20px;">
    <div class="col">
      <div class="card" id="mostrar">
        <div class="card-body">
          <h5 class="card-title">Cadastrar Doações</h5>
          <form method="POST" id="formCad"> 
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
      <form method="POST" action="../control/ListarProdutos.php">
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
</div><br/>
<div class="row">
  <div class="col-6" id="login-alert">
    <span id="mensagem"></span>
  </div>
  <div class="col-6">
    <div  id="listar-alert">
      <span id="listarmensagem"></span>
    </div>
    <div class="resultadoForm">
      <table class="table" style="display: none;">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Whatsapp</th>
            <th scope="col">Cidade</th> 
            <th scope="col">UF</th> 
            <th scope="col">Produto</th>
            <th scope="col">Quantidade</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div><br>
    </div>
  </div>
    <?php include 'layout/footer.php';?>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../resources/js/jquery.maskedinput-1.3.1.min.js"></script>
<script type="text/javascript" src="../resources/js/home.js"> </script>
<script type="text/javascript" src="../resources/js/funcao.js"> </script>
<script type="text/javascript" src="../resources/js/valida_produto.js"></script>
<script type="text/javascript" src="../resources/js/listar_produtos.js"></script>
</html>