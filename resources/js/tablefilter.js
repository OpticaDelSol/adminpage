$("#myInput").on("keyup", function() {
var value = $(this).val().toLowerCase();
$("#tabla-proveedores tr").filter(function() {
  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
});
});
$('.datatable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });