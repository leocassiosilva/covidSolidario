$(document).on('click', '#cadProd', function() {
	this.blur();
	$("footer").css({"position":"relative"});
	$("table").css("display", "none");
	$("#apresentar").css("display", "none");
	$("#mostrar").show();
	$(this).attr("id","botao2");

	value = $("#listarPro").attr("id");
	if (value == "listarPro") {
		alert("valor do id do botão é LISTARPRO!");
		$("#listarPro").attr("id","listar");
	}

});


$(document).on('click', '#botao2', function() {
	var valor = $(this).attr('id');
	alert(valor);
	this.blur();
	$("footer").css({"position":"absolute"});
	$("#mostrar").hide();
	$(this).attr("id","cadProd");
});

$(document).on('click', '#listar', function() {
	var valor = $(this).attr('id');
	alert(valor);
	this.blur();
	$("footer").css({"position":"relative"});
	$("table").css("display", "none");
	$("#mostrar").css("display", "none");
	$("#apresentar").show();
	$(this).attr("id","listarPro");


	value = $("#botao2").attr("id");
	if (value == "botao2") {
		alert("valor do id do botão é botão2!");
		$("#botao2").attr("id","cadProd");
	}

});


$(document).on('click', '#listarPro', function() {
	var valor = $(this).attr('id');
	alert(valor);
	this.blur();
	$("#mostrar").css("display", "none");
	$("footer").css({"position":"absolute"});
	$("table").css("display", "none");
	$("#apresentar").hide();
	$(this).attr("id","listar");
});
