$(document).ready(function(e){
	$('#btnListar').on('click', function(e){
		e.preventDefault();
		//this.blur();
		var cep = $("#cep").val();
		$.ajax({
			url:'../control/ListarProdutos.php',
			type:'post',
			data:{
				cep: cep
			},
			dataType:'json',
			success :  function(response){  
				if (response == "") {
					$("table").css("display", "none");
					$("#listar-alert").css('display', 'block')
					$("#listarmensagem").html('<strong>Erro! </strong>' + "Não existe doadores do CEP digitado!").fadeIn(1000).delay(5900).fadeOut(3400);
				}if(response.codigo == 0){
					$("#listar-alert").css('display', 'block')				
					$("#listarmensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn(1000).delay(4900).fadeOut(3400);
				}else {
					$.each(response,function (key, value) {
						//alert(value.cidade);
						$("input").val("");
						$('.resultadoForm table tbody').append("<tr> <td>" + value.nome_usuario + "</td> <td>" + value.celular + "</td> <td>" + value.cidade + "</td> <td>" + value.uf + "</td> <td>" + value.nome_produto + "</td> <td>" + value.quantidade + "</td></tr> ");
						$("table").css("display", "block");
						$("footer").css({"position":"relative"});
					});
				}
			} 
		});
	});
});