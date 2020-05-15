$('document').ready(function(){
      var tam = $(window).width();
      var contadorNovo = 2;
      var cont = 1;
            //https://api.jquery.com/click/
            $('#add-campo').click(function () {
                  $("#add-campo").blur();
                  cont++;
                  if (tam <= 1000){
                       //$('#formulario').append('<hr >');
                       $('#formulario').append('<div id="campo' + cont + '"><hr ><h4>Produto '+ contadorNovo +'</h4><div class="form-row"><div class="form-label-group col-sm-12 mb-4" id="classeSecundaria"> <label>Nome </label id="label"><input type="text" name="nome[]" placeholder="Nome" id="campo' + cont + '" class="form-control"></div><div class="form-label-group col-sm-12 mb-4" id="classeTerciaria"><label id="label"> Quantidade </label><input type="text" name="quantidade[]" placeholder="20" id="quantidade' + cont + '" class="form-control"></div><br><div class="form-label-group col-sm-12"><button type="button" id="' + cont + '" class="btn-apagar btn btn-danger"> Remover </button></div></div></div>');
                       contadorNovo++;
                 }else {
                        //$('#formulario').append("<hr>");
                        $('#formulario').append('<div id="campo' + cont + '"><hr > <h4>Produto '+ contadorNovo +'</h4><div class="form-row"><div class="form-label-group col-md-8 mb-4" id="classeSecundaria"> <label>Nome </label id="label"><input type="text" name="nome[]" placeholder="Nome" id="campo' + cont + '" class="form-control"></div><div class="form-label-group col-md-3 mb-4" id="classeTerciaria"><label id="label"> Quantidade </label><input type="text" name="quantidade[]" placeholder="20" id="quantidade' + cont + '" class="form-control"></div><br><div class="form-label-group col-md-3 mb-4"><button type="button" id="' + cont + '" class="btn-apagar btn btn-danger"> Remover </button></div></div></div>');
                        contadorNovo++;
                  }

            });
            $('form').on('click', '.btn-apagar', function () {
                 var button_id = $(this).attr("id");
                 $('#campo' + button_id + '').remove();
                 contadorNovo=contadorNovo-1;
           });


            $('#cad').on('click', function () {
                 $("#cad").blur();
                 var quantidade = [];
                 var nome = [];
                 var contador = 0;
                 var contador1 = 0; 
                 var arrayCompleto = [];
                 $(this).blur();
                 $('input[name="nome[]"]').each(function() { 
                      nome[contador] = $(this).val(); 
                      contador++;
                });


                 $('input[name="quantidade[]"]').each(function() { 
                      quantidade[contador1] = $(this).val(); 
                      contador1++;
                });

                 nome.forEach(saveItem);

                 function saveItem(item) {
                      arrayCompleto.push({
                           'nome': item,
                           'qtd': quantidade[nome.indexOf(item)]
                     });
                }

            	//console.log(JSON.stringify(arrayCompleto));
            	var jsonString = JSON.stringify(arrayCompleto);

            	jQuery.ajax({
            		type: "POST",
            		url: "../control/processa.php",
            		data: {data : jsonString}, 
            		cache: false,

            		dataType: 'json',
            		success: function(response)
            		{
            			if (response.codigo  == 1) {
            				$("#mensagem").html('<strong>Obrigado! </strong>' + response.mensagem);
            				$("#cad-alert").addClass( "col-md-6 mx-auto alert alert-success").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);         
            			}else {
            				$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem);
            				$("#cad-alert").addClass( "col-md-6 mx-auto alert alert-danger").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);
            			}
            			$("#nome").val("");
            			$("#quantidade").val("");
            		}

            	});
            	return false;

            });
      });