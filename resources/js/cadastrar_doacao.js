$('document').ready(function(){ 
	$('#btnCadDoacao').on('click', function(){
		this.blur();
		var descricao = $("#descricao").val();
		jQuery.ajax({
			type: "POST",
			url: "../control/ControleDoacao.php",
			data:{
				descricao: descricao
			},
			dataType: 'json',
			success: function(response)
			{
				if (response.codigo  == 1) {
					$("#cad-alert").css('display', 'block', 'background-color: green');
					$("#mensagem").html(response.mensagem).fadeIn(300).delay(1900).fadeOut(400);       
				}else {
					$("#cad-alert").css('display', 'block');
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn(300).delay(1900).fadeOut( 400 );
				}
				$("#descricao").val("");
			}
		});
		return false;
	});
});