$(document).ready(function(){
	$('#btnListar').on('click', function(){
		alert("ola");
		var cep = $("#cep").val();
		var cidade = $("#cidade").val();
		var uf = $("#uf").val();
		alert(cep);
		$.ajax({
			type : 'POST',
			url  : '../control/ListarProdutos.php',
			data:{
				cep: cep,
				cidade:cidade,
				uf:uf
			},
			dataType: 'json',

			success :  function(response){
				for(var i=0;response.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#tabela').append('<tr><td>'+response[i].nome_usuario +'</td><td>'+response[i].celular+'</td><td>'+response[i].cidade+'</td></tr>');
				}
			}
		});
	});
});