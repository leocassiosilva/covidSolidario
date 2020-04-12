$('document').ready(function(){
	$('#btnCadProduto').on('click', function(){
		var nome = $("#nome").val();
		var categoria = $("#categoria").val();
		var quantidade = $ ("#quantidade").val();
		alert(categoria);
		$.ajax({
			type : 'POST',
			url  : '../control/ControleProduto.php',
			data:{
              nome: nome,
              categoria:categoria,
              quantidade:quantidade
            },
			dataType: 'json',

			success :  function(response){						
				if(response.codigo == "1"){	
					$("#login-alert").css('display', 'none')
					window.location.href = "../view/home.php";
				}
				else{			
					$("#login-alert").css('display', 'block')
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn( 300 ).delay( 1900 ).fadeOut( 400 );
				}
			}
		});
	});
});