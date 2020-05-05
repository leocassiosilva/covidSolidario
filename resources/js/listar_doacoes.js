 $('document').ready(function(){ 
    $('#btnListar').on('click', function(){
        var cep = $("#cep").val();
        $("#btnListar").blur()
        jQuery.ajax({
            type: "POST",
            url: "../control/ListarDoacao.php",
            data:{
                cep: cep
            },
            dataType: 'json',
            success: function(response)
            {
                if (response.codigo == 0) {
                    $("table").css("display", "none");  
                    $("#listarmensagem").html('<strong>Erro! </strong>' + response.mensagem);
                    $("#listar-alert").addClass( "col-md-6 mx-auto alert alert-danger").css('display', 'block').fadeIn(300).delay(1900).fadeOut(400);
                   
                }else {
                    $("input").val("");
                    $('table').append("<tr class='row'><th id='id_nome' class='col-4'>Nome</th> <th class='col-6'>Descrição</th> </tr> ");
                    for(var i=0;response.length>i;i++){
                        $('table').append("<tr class='row'><td id='id_nome' class='col-4'>" + response[i].nome_usuario + "</td> <td class='col-6'>" + response[i].descricao + "</td> </tr> ");
                    } 
                    $("table").css("display", "block");

                }
            }
        });
        return false;
    });
});