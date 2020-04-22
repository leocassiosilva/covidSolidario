 $('document').ready(function(){ 
  $('#btnCadastrar').on('click', function(){
    var nome = $("#nome").val();
    var celular = $("#celular").val();
    var email = $("#email").val();
    var cep = $("#cep").val();
    var cidade = $("#cidade").val();
    var uf = $("#uf").val();
    var senha = $("#senha").val();
    var senha2 = $("#senha2").val();
      //alert(senha2);
      jQuery.ajax({
        type: "POST",
        url: "../control/ControleUsuarios.php",
        data:{
         nome: nome, 
         celular: celular,
         email: email,
         cep: cep,
         cidade:cidade,
         uf:uf,
         senha:senha,
         senha2:senha2
       },
       dataType: 'json',
       success: function(response)
       {
        if (response.codigo == 1) {
          $("#mensagem").html('<strong>Obrigado! </strong>' + response.mensagem);
          $("#cad-alert").addClass( "col-md-6 mx-auto alert alert-success").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);          window.location.href = "../view/login.php";
        }else {
          $("#mensagem").html('<strong>Erro! </strong>' + response.mensagem);
          $("#cad-alert").addClass( "col-md-6 mx-auto alert alert-danger").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);
        }
      }
    });
      return false;
    });
});