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
