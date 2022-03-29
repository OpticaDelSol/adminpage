$(document).on('focusout','input',function(){
    
    var monto_neto = $("#_valor_bruto").val();
    monto_neto = (monto_neto) ? parseFloat( monto_neto ) : 0;

    var iva = $("#_iva").val();
    iva = (iva) ? parseFloat( iva ) : 0;
    
    $("#_valor_total").val(monto_neto + iva);
});
$(document).on('keyup','[type=number]',function(){
    
    var monto_neto = $("#_valor_bruto").val();
    monto_neto = (monto_neto) ? parseFloat( monto_neto ) : 0;

    var iva = $("#_iva").val();
    iva = (iva) ? parseFloat( iva ) : 0;
    
    $("#_valor_total").val(monto_neto + iva);
});