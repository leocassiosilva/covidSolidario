$(document).ready(function() {

 $.mask.definitions['~']='[+-]';
    $('input[type=tel]').focusout(function(){
        var phone, element;
        element = $(this);
        element.unmask();
        phone = element.val().replace(/\D/g, '');
        if(phone.length > 10) {
            element.mask("(99) 99999-999?9");
        } else {
            element.mask("(99) 9999-9999?9");
        }
    }).trigger('focusout');
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
$('#btnCadastrar').on('click', function(){
        var nome = $("#nome").val();
        var celular = $("#celular").val();
        var email = $("#email").val();
        var cep = $("#cep").val();
        var cidade = $("#cidade").val();
        var uf = $("#uf").val();
        var senha = $("#senha").val();
         alert(cep);
        $.ajax({
            type : 'POST',
            url  : 'src/valida_cadastro.php',
            data:{
                nome: nome, 
                celular: celular,
                email: email,
                cep: cep,
                cidade:cidade,
                uf:uf,
                senha:senha
            },
            dataType: 'json',

            success :  function(response){
                console.log(response.codigo);   
                if(response.codigo == 1){
                    $('#mensagem').append(response.mensagem);
                    window.location.href = "index.php";
                }
                else{           
                    $("#cad-alert").css('display', 'block');
                    $("#mensagem").html('<strong>Erro! </strong>' + response.mensagem).fadeIn( 300 ).delay( 1900 ).fadeOut( 400 );
                }
            }
        });
    });   
});