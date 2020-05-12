 function carrega(){
   jQuery.ajax({
    type: "POST",
    url: "../control/MinhasDoacoes.php",
    dataType: 'json',
    success: function(response)
    {  
      $('table').append('<thead> <tr class="row"><th scope="col" class="col">Nome</th><th scope="col" class="col">Quantidade</th><th scope="col" class="col">Modificar Status</th></tr></thead>');
      for(var i=0;response.length>i;i++){
        $('table').append('<tr class="row"><td class="col">'+response[i].nome_produto +'</td><td class="col">'+ response[i].quantidade+'</td><td class="col"> <button type="button" class="btn btn-success" id="btnStatus" name="btnStatus" value="'+ response[i].id_pedido_detalhe +'">Concluir</button></td></tr>');
        if (response[i].nome_status == "Concluida") {
          $("button[value ='"+ response[i].id_pedido_detalhe + "']").attr('disabled', 'disabled').removeClass('btn btn-success').addClass('btn btn-danger').text("Encerrada");
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
     var id_pedido_detalhe = $(this).val();
     $(this).blur();
   }
   jQuery.ajax({
    type: "POST",
    url: "../control/ModificarStatus.php",
    data:{
      id_pedido_detalhe: id_pedido_detalhe
    },
    dataType: 'json',
    success: function(response)
    {
      alert(response);
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