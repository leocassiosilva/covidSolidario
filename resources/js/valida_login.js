$('document').ready(function(){
	$('#btnLogin').on('click', function(){
		var email = $("#email").val();
		var senha = $("#senha").val();
		alert("Ola");
		$.ajax({
			type : 'POST',
			url  : '../control/ControleLogin.php',
			data:{
				email: email,
				senha:senha
			},
			dataType: 'json',

			success :  function(response){	
				alert(response.codigo);					
				if(response.codigo == 1){	
					$("#login-alert").css('display', 'none')
					window.location.href = "../view/home.php";
				}
				else{			
					$("#login-alert").css('display', 'block')
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn(1000).delay(5900).fadeOut(3400 );
				}
			}
		});
	});
});
