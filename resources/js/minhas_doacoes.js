 function carrega(){
   jQuery.ajax({
    type: "POST",
    url: "../control/MinhasDoacoes.php",
    dataType: 'json',
    success: function(response)
    {  
      $('table').append('<thead> <tr class="row"><th scope="col" class="col-2">Nome</th><th scope="col" class="col-8">Descricao</th><th scope="col" class="col-2">Modificar Status</th></tr></thead>');
      for(var i=0;response.length>i;i++){
        $('table').append('<tr class="row"><td class="col-2">'+response[i].nome_usuario+'</td><td class="col-8">'+response[i].descricao+'</td><td class="col-2"> <button type="button" class="btn btn-success" id="btnStatus" name="btnStatus" value="'+ response[i].id_doacao +'">Concluir</button></td></tr>');
        if (response[i].nome_status == "Concluida") {
          $("button[value ='"+ response[i].id_doacao + "']").attr('disabled', 'disabled').removeClass('btn btn-success').addClass('btn btn-danger').text("Encerrada");
        }
      } 

    }
  });
 }
 $(document).ready(function(){
  carrega();
});

 $("table").on("click", "button", function(){
   if($(this).attr('id') == 'btnStatus'){
     var id_doacao = $(this).val();
     $(this).blur();
   }
   jQuery.ajax({
    type: "POST",
    url: "../control/ModificarStatus.php",
    data:{
      id_doacao: id_doacao
    },
    dataType: 'json',
    success: function(response)
    {

      if (response.codigo == 0) {
        $("#cad-alert").css('display', 'block', 'background-color: green');
        $("#mensagem").html(response.mensagem).fadeIn(300).delay(1900).fadeOut(400);
      }else {
        $(".table tr").remove();
        carrega();
      }
    }
  });
 });