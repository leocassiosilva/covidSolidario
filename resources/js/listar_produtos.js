$(document).ready(function(e){
	$('#btnListar').on('click', function(e){
		e.preventDefault();
		var cep = $("#cep").val();
		alert(cep);
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
					alert("Ok");
					$("#listar-alert").css('display', 'block')				
					$("#listarmensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn( 300 ).delay( 1900 ).fadeOut( 400 );

				}else {
					alert(response);
					$.each(response,function (key, value) {
						alert(value.cidade);
						$("input").val("");
						$('.resultadoForm table tbody').append("<tr> <td>" + value.nome_usuario + "</td> <td>" + value.celular + "</td> <td>" + value.cidade + "</td> <td>" + value.uf + "</td> <td>" + value.nome_produto + "</td> <td>" + value.quantidade + "</td></tr> ");
						$("table").css("display", "block");
					});
				}
			} 
		});
	});
});