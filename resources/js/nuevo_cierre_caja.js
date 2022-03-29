$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})

$('#myModal2').on('shown.bs.modal', function () {
  $('#myInput').focus()
})


$("#btn-agregar-lote").click(function(){
    var qtty=$("#lote-body").children().length;
    $("#lote-body").append(
            "<tr id='l-"+qtty+"'>" + 
            "<td>"+$("#lote-fecha").val()+"</td>"+
            "<td>"+$("#lote-terminal").val()+"</td>"+
            "<td>"+$("#lote-lote").val()+"</td>"+
            "<td>"+$("#lote-total").val()+"</td>"+
            "<td><button type='button' class='btn btn-sm btn-danger btn-rmv-row' id='btnrmvl-"+qtty+"'>X</button></td>"+
            "</tr>"
            );
    $("#btnrmvl-"+qtty).click(function(){
        $("#l-"+qtty).remove();
    });
    });
$("#btn-agregar-cierre-z").click(function(){
    var qtty = $("#cierre-z-body").children().length;
    $("#cierre-z-body").append(
            "<tr id='z-"+qtty+"'>" + 
            "<td>"+$("#z-fecha").val()+"</td>"+
            "<td>"+$("#z-comprobante").val()+"</td>"+
            "<td>"+$("#z-total_factura").val()+"</td>"+
            "<td>"+$("#z-importe_iva").val()+"</td>"+
            "<td>"+$("#z-neto_gravado").val()+"</td>"+
            "<td><button type='button' class='btn btn-sm btn-danger btn-rmv-row' id='btnrmvz-"+qtty+"'>X</button></td>"+
            "</tr>"
            );
    
    $("#btnrmvz-"+qtty).click(function(){
        $("#z-"+qtty).remove();
    });
    
    });
