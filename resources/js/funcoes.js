$(document).on('click', '#cadProd', function() {
	$("#listar").attr("disabled", true);
	$("footer").css({"position":"relative"});
	$("#mostrar").toggle();
	$(this).attr("id","botao2");

});

$(document).on('click', '#botao2', function() {
	$("footer").css({"position":"absolute"});
	$("#listar").attr("disabled", false);
	$("#mostrar").toggle();
	$(this).attr("id","cadProd");
});

$(document).on('click', '#listar', function() {
	$("#cadProd").attr("disabled", true);
	$("footer").css({"position":"relative"});
	$("#apresentar").toggle();
	$(this).attr("id","listarPro");

});

$(document).on('click', '#listarPro', function() {
	$("#cadProd").attr("disabled", false);
	$("footer").css({"position":"absolute"});
	$("#apresentar").toggle();
	$(this).attr("id","listar");
});