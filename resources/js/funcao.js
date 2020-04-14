$(document).on('click', '#cadProd', function() {
  $("footer").css({"position":"relative"});
  $("#apresentar").css("display", "none");
    $("table").css("display", "none");
  $("#mostrar").toggle();
});

$(document).on('click', '#listar', function() {
  $("footer").css({"position":"relative"});
  $("#mostrar").css("display", "none");
  $("#apresentar").toggle();
});