$(document).on('click', '#cadProd', function() {
	this.blur();
	alert("ola");
	$("table").css("display", "none");
	$("#apresentar").css("display", "none");
	$("#mostrar").toggle();
});

$(document).on('click', '#listar', function() {
	this.blur();
	$("table").css("display", "none");
	$("#mostrar").css("display", "none");
	$("#apresentar").toggle();
});