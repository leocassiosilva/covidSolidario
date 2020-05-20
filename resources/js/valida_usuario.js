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

});