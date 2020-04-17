 $('document').ready(function(){ 
    $('#btnCadastrar').on('click', function(){
      alert("olaj");
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
          console.log(response.mensagem);
          $("#cad-alert").css('display', 'block');
         $("#mensagem").html('<strong>Obrigado! </strong>' + response.mensagem).fadeIn(300).delay(300).fadeOut(400);         
         window.location.href = "../view/login.php";
        }else {
          console.log(response.mensagem);
          $("#cad-alert").css('display', 'block');
         $("#mensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn(300).delay(1900).fadeOut( 400 );
        }
      }
    });
      return false;
    });
  });