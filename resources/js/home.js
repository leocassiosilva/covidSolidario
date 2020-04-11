$('document').ready(function(){
  function curso(){
    $('#categoria').hide();
    $.getJSON(
      '../control/ControleProduto.php?search=',
      {
        acao: "categoria",
        ajax: 'true'
      }, function(j){
        var options = '<option value="">Escolha a Categoria</option>';
        for (var i = 0; i < j.length; i++) {
          options += '<option value="' + j[i].id_categoria + '">' + j[i].nome + '</option>';
        } 
        $('#categoria').html(options).show();

      });
  }
  curso();
});



