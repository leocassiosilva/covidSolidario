$(document).ready(function(){
	$('#btnListar').on('click', function(){
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
				$.each(response,function (key, value) {
					alert(value.nome_usuario);
                    $('.resultadoForm table tbody').append("<tr> <td>" + value.nome_usuario + "</td> <td>" + value.celular + "</td> </tr> ").style.display = 'block';
				});
			} 
		});
	});
});