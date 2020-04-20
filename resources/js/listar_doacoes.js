 $('document').ready(function(){ 
        $('#btnListar').on('click', function(){
            var cep = $("#cep").val();
            jQuery.ajax({
                type: "POST",
                url: "../control/ListarDoacao.php",
                data:{
                    cep: cep
                },
                dataType: 'json',
                success: function(response)
                {
                    $(".resultadoForm table tbody").empty();
                    if (response.codigo == 0) {
                        console.log(response);
                        $("#listar-alert").css('display', 'block') ;
                        $("table").css("display", "none");             
                        $("#listarmensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn(1000).delay(4900).fadeOut(3400);
                    }else {
                        $.each(response,function (key, value) {
                            $("input").val("");
                            $('.resultadoForm table tbody').append("<tr> <td>" + value.nome_usuario + "</td> <td>" + value.descricao + "</td> </tr> ");
                            $("table").css("display", "block");
                        });
                    }
                }
            });
            return false;
        });
    });