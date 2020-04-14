$('document').ready(function(){
	$('#btnCadProduto').on('click', function(){
		var nome = $("#nome").val();
		var categoria = $("#categoria").val();
		var quantidade = $ ("#quantidade").val();
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
				if(response.codigo == 1){	
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn(300).delay(1900).fadeOut( 400 );
					$("#login-alert").css('display', 'block');
					alert(response.mensagem);
				}
				else{			
					$("#login-alert").css('display', 'block')
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn( 300 ).delay( 1900 ).fadeOut( 400 );
				}
			}
		});
	});



	$("#cep").mask("99999-999");

	function limpa_formulário_cep() {
		$("#cidade").val("");
		$("#uf").val("");
	}

	//Aqui é quando o campo cep perde o foco ai chama essa função.
	$("#cep").blur(function() {

		var cep = $(this).val().replace(/\D/g, '');

		if (cep != "") {

			var validacep = /^[0-9]{8}$/;

			if(validacep.test(cep)) {

				$("#cidade").val("...");
				$("#uf").val("...");
                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                        	if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } 
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } 
                    else {
                    	limpa_formulário_cep();
                    	alert("Formato de CEP inválido.");
                    }
                } 
                else {
                	limpa_formulário_cep();
                }

            });

});