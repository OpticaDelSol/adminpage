$(document).ready(function(){
  $("#filtro-seleccion").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#prov-tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});