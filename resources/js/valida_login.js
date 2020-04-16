$('document').ready(function(){
	$('#btnLogin').on('click', function(){
		var email = $("#email").val();
		var senha = $("#senha").val();
		$.ajax({
			type : 'POST',
			url  : '../control/ControleLogin.php',
			data:{
				email: email,
				senha:senha
			},
			dataType: 'json',

			success :  function(response){	
				if(response.codigo == 1){	
					$("#mensagem").html(response.mensagem).fadeIn(1000).delay(5900).fadeOut(3400);
					window.location.href = "../view/home.php";
				}
				else{			
					$("#login-alert").css('display', 'block')
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn(1000).delay(5900).fadeOut(3400);
				}
			}
		});
	});
});

