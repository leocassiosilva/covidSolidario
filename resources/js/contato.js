 $('document').ready(function(){ 
  $('#btnEnviar').on('click', function(){
    var nome = $("#txtnome").val();
    var email = $("#txtemail").val();
    var mensagem = $("#txtMensagem").val();
    //alert(mensagem);
    jQuery.ajax({
      type: "POST",
      url: "../control/Contato.php",
      data:{
       nome: nome, 
       email: email,
     mensagem: mensagem,
     },
     dataType: 'json',
     success: function(response)
     {
      //alert(data);
      if (response.codigo == 1) {
        $("#mensagem").html('<strong>Obrigado! </strong>' + response.mensagem);
        $("#cad-alert").addClass( "col-md-6 mx-auto alert alert-success").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);          
        window.location.href = "../view/contato.php";
      }else {
        $("#mensagem").html('<strong>Erro! </strong>' + response.mensagem);
        $("#cad-alert").addClass( "col-md-6 mx-auto alert alert-danger").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);
      }
    }
  });
    return false;
  });
});