<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Language" content="pt-br">
  <title>Login</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../resources/css/style.css" media="screen" />
</head>
<body>
    <?php include 'layout/navbar.php';?>
    <div id="geral">
        <div class="content">
           <div class="container py-5">
            <div class="row">
                <div class="col-md-6 mx-auto" id="login-alert">
                    <span id="mensagem"></span>
                </div>
            </div>

            <div class="row  d-flex justify-content-center">
                <div class="col-lg-7 col-sm-12 mb-4 text-rigth">
                  <div class="card rounded-0" id="login-form">
                    <div class="card-header">
                        <h3 class="mb-0" style="text-align: center;">Login</h3>
                    </div>
                    <div class="card-body">
                     <form class="form" role="form"  id="login-form" novalidate="" method="POST">
                      <div class="form-group" id="formulario">
                        <div class="form-row">
                          <div class="form-group col-md-12">
                           <label for="inputEmail" id="label">E-mail</label>
                           <input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" required="">
                       </div>
                   </div>
                   <div class="form-row">
                    <div class="form-group col-md-12">
      s                    <label for="inputSenha" id="label">Senha</label>
                          <input type="password" class="form-control form-control-lg rounded-0" id="senha" name="senha" required="">
                      </div>
                  </div>
              </div>

              <div>
                <label class="custom-control custom-checkbox float-right">
                    <a href="cadastroUsuario.php" class="register-form-link">Cadastre-se</a>
                </label>
            </div>
            <button type="submit" class="btn btn-success btn-lg " id="btnLogin" name="btnLogin">Login</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div> 
<?php include 'layout/footer.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../resources/js/valida_login.js"></script>
</html>