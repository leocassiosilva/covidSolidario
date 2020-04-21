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
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form"  id="login-form" novalidate="" method="POST">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" required="">

                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="senha" name="senha" required="">

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
    <div class="row">
        <div class="col-md-6 mx-auto" id="login-alert">
        <span id="mensagem"></span>
    </div>
    </div>
</div>
</div>
</div>
<?php include 'layout/footer.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>

$('document').ready(function(){ 
    $('#btnLogin').on('click', function(){
        alert("ola");
        var email = $("#email").val();
        var senha = $("#senha").val();
        jQuery.ajax({
            type: "POST",
            url: "../control/ControleLogin.php",
            data:{
                email: email,
                senha:senha
            },
            dataType: 'json',
            success: function(response)
            {
                if (response.codigo  == 1) {
                    $("#login-alert").css('display', 'block');
                    $("#mensagem").html(response.mensagem).fadeIn(300).delay(900).fadeOut(400);       
                    window.location.href = "../view/home.php";
                }else {
                    $("#login-alert").css('display', 'block');
                    $("#mensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn(300).delay(1900).fadeOut( 400 );
                }
                $("#email").val("");
                $("#senha").val("");
            }
        });
        return false;
    });
});




</script>
</html>