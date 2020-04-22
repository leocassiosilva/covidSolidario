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
				alert(response.codigo);
				if (response.codigo  == 1) {
					$("#mensagem").html('<strong>Obrigado! </strong>' + response.mensagem);
					$("#cad-alert").addClass( "col-md-6 mx-auto alert alert-success").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);         
				}else {
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem);
					$("#cad-alert").addClass( "col-md-6 mx-auto alert alert-danger").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);
				}
				$("#descricao").val("");
			}
		});
		return false;
	});
});