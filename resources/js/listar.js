$('document').ready(function(){ 
  $('#btnListar').on('click', function(){
    var  cep = $("#cep").val();
    var nome = $("#nomeProduto").val();
    this.blur();
    jQuery.ajax({
      type: "POST",
      url: "../control/Doacoes.php",
      data:{
       cep:  cep, 
       nome:nome
     },
     dataType: 'json',
     success: function(response)
     {
      //alert(response.length);
        //alert(response);
        if (response.codigo == 0) {
          $("table").css("display", "none");  
          $("#listarmensagem").html('<strong>Erro! </strong>' + response.mensagem);
          $("#listar-alert").addClass( "col-md-6 mx-auto alert alert-danger").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);

        }else {
          $("input").val("");
          $('table').append("<thead><tr><th class='col-2'>Nome</th>  <th class='col-2'>Whatsapp</th> <th class='col-2'>Cidade</th><th class='col-2'>UF</th><th class='col-2'>Produto</th><th class='col-2'>Quantidade</th></tr></thead>");
          for(var i=0;response.length>i;i++){
            $('table').append("<tbody><tr><td class='col-2'>"+ response[i].nome_usuario +"</td>  <td class='col-2'>"+ response[i].celular +"</td> <td class='col-2'>"+ response[i].cidade +"</td><td class='col-2'>"+ response[i].uf +"</td><td class='col-2'>"+ response[i].nome_produto +"</td><td class='col-2'>"+ response[i].quantidade +"</td></tr></tbody>");
          } 
          $("table").css("display", "block");

        }
      }
    });
    return false;
  });
});