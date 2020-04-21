<html>
<head>
    <title>Doações</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="../resources/css/style.css" media="screen" />
</head>
<body>
    <?php include 'layout/navbar.php';?>
    <div class="geral">

        <div class="content">
         <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 text-center mb-2">
                        <!-- Local de colocar a logo do sistema -->
                    </div>

                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="card rounded-0" id="login-form">
                                <div class="card-header">
                                    <h3 class="mb-0" style="text-align: center;">Pesquisar doadores</h3>
                                </div>
                                <div class="card-body">
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
      </div>
  </div>

  <div class="row" style="padding-top: 50px;">
    <div class="col-md-6 mx-auto" id="listar-alert">
      <span id="listarmensagem"></span>
  </div>
</div>


<div class="row" style="padding-top: 50px;">
    <div class="col-md-6 mx-auto">
    <div class="resultadoForm">
      <table class="table" style="display: none;">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Whatsapp</th>
            <th scope="col">Cidade</th> 
            <th scope="col">UF</th> 
            <th scope="col">Descricao</th>
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
</div>
<?php include 'layout/footer.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../resources/js/jquery.maskedinput-1.3.1.min.js"></script>
<script type="text/javascript" src="../resources/js/mascara_cep_cel.js"> </script>

<script type="text/javascript" src="../resources/js/listar.js"></script>
</body>
</html>