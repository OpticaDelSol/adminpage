$('#form_factura').submit(function(e){
    if($('.documento-codigo').val()==="")
    {
        e.preventDefault();
        show_error("C&oacute;digo no v&aacute;lido","");
        return false;
    }
    if($('.select-fecha').val()==="")
    {
        e.preventDefault();
        show_error("Fecha no v&aacute;lida","");
        return false;
    }
    if($('.select-periodo').val()==="")
    {
        e.preventDefault();
        show_error("Periodo no v&aacute;lido","");
        return false;
    }
    
    
    if($('#pto-vta').val()==="")
    {
        e.preventDefault();
        show_error("Campo 'Punto de Venta' Vac&iacute;o","");
        return false;
    }
    
});
function showHideTitles()
{
    if( $("#iva-parent > div").length < 1)
    {
        $('#iva-label').css('visibility','hidden');
    }
    else
    {
        $('#iva-label').css('visibility','visible');
    }
    
    if( $("#percepcion-parent > div").length < 1)
    {
        $('#percepcion-label').css('visibility','hidden');
    }
    else
    {
        $('#percepcion-label').css('visibility','visible');
    }
    
    if( $("#retencion-parent > div").length < 1)
    {
        $('#retencion-label').css('visibility','hidden');
    }
    else
    {
        $('#retencion-label').css('visibility','visible');
    }
}

function calcularTotal()
{
    var __neto = 0;//.monto-type-neto').val();
    
    if(__neto === '' || __neto === null)
    {
        __neto=0;
    }
    
    var total_iva = 0;
    //iva
    if($('.monto-type-iva').length > 1)
    {
        $('.monto-type-iva').each(
                function()
                {
                    var __monto = $(this).val();
                    if(isNaN(__monto))
                    {
                        alert('El valor ingresado no es válido.');
                        $(this).val('0');
                        __monto=0;
                    }
                    if(__monto!=='')
                    {
                        total_iva += parseFloat(__monto);
                    }
                }
                );
    }
    
    var total_percepcion = 0;

    if($('.monto-type-percepcion').length > 1)
    {
        $('.monto-type-percepcion').each(
                function()
                {
                    var __monto = $(this).val();
                    if(isNaN(__monto))
                    {
                        alert('El valor ingresado no es válido.');
                        $(this).val('0');
                        __monto=0;
                    }
                    if(__monto!=='')
                    {
                        total_percepcion += parseFloat(__monto);
                    }
                }
                );
    }
    
    var total_retencion = 0;
    
    if($('.monto-type-retencion').length > 1)
    {
        $('.monto-type-retencion').each(
                function()
                {
                    var __monto = $(this).val();
                    if(isNaN(__monto))
                    {
                        alert('El valor ingresado no es válido.');
                        $(this).val('0');
                        __monto=0;
                    }
                    if(__monto!=='')
                    {
                        total_retencion += parseFloat(__monto);
                    }
                }
                );
    }    
    
    var a = ($("#_c_no_gravados").val()==="")? 0: parseFloat($("#_c_no_gravados").val());
    var b = ($("#_imp_internos").val()==="")? 0: parseFloat($("#_imp_internos").val());
    
    
    var __total = +parseFloat(total_retencion)+parseFloat(total_percepcion)+parseFloat(total_iva)+parseFloat(__neto) +a + b;
    
    $('.monto-total').val(__total.toFixed(2));
    
}





calcularTotal();
showHideTitles();



//$(document).on('change', '[type=checkbox]', function() {
//    $(this).parent().parent().parent().remove();
//    
//    showHideTitles();
//    calcularTotal();
//}); 
$(document).on('click', '.form-check-input', function() {
    $(this).parent().parent().parent().remove();
    
    showHideTitles();
    calcularTotal();
}); 


$('#agregar-retencion').click(
    function()
    {
        let retencion_count = $("#retencion-parent > div").length + 1;

        $('#retencion-parent').append($('#retencion_content').html());

        let _class_name = 'retencion_row'+retencion_count;

        $('#retencion-parent > .hidden-retencion-row').addClass(_class_name);

        $('.'+_class_name).removeClass('hidden-retencion-row');

        $('.'+_class_name).attr('name', _class_name);

        if( $("#retencion-parent > div").length > 0)
        {
            $('#retencion-label').css('visibility','visible');
        }
    }
);



$('#agregar-iva').click(function ()
{
    let iva_count = $("#iva-parent > div").length + 1;
    
    $('#iva-parent').append($('#iva_content').html());
    
    let _class_name = 'iva_row'+iva_count;
    //let _id = iva_count;
    $('#iva-parent > .hidden-iva-row').addClass(_class_name);
    
    $('.'+_class_name).removeClass('hidden-iva-row');
    
    $('.'+_class_name).attr('name', _class_name);
    
    if( $("#iva-parent > div").length > 0)
    {
        $('#iva-label').css('visibility','visible');
    }
    
});

$('#agregar-percepcion').click(function ()
{
    let percepcion_count = $("#percepcion-parent > div").length + 1;
    $('#percepcion-parent').append($('#percepcion_content').html() );
    let _class_name = 'percepcion_row_'+ percepcion_count;
    $('#percepcion-parent > .hidden-percepcion-row').addClass(_class_name);
    $('.'+_class_name).removeClass('hidden-percepcion-row');
    $('.'+_class_name).attr('name', _class_name);
    
    if( $("#percepcion-parent > div").length > 0)
    {
        $('#percepcion-label').css('visibility','visible');
    }
});

function _validate_numeric_only(input)
{
    //replace comma decimal separator by dot...
    input = input.replace(',','.');
    return /^[0-9.]$/.test(input);
}
function _validate_codigo(input)
{
    return input.length > 0 && !/([,'/\\_\.\+\*\(\)\{\}~:$])/.test(input);
}
/*
 * Loop through each 'monto-type' input fields and check if the conditions
 * for numeric type fields are met.
 * 
 */


$(document).on('focusout', '[type=text]',
         function()
                    {
                        if($(this).hasClass('monto-type'))
                        {
                            if(!_validate_numeric_only($(this).text()))
                            {
                                $(this).parent().addClass('has-error');
                            }
                        }
                    }
        );
$('.documento-codigo').focusout(
        function ()
        {
            if(!_validate_codigo($('.documento-codigo').text()))
                {
                    $(this).parent().addClass('has-error');
                }
        }
        );



$(document).on('keyup','[type=number]',
function()
{
    if($(this).hasClass('monto-type'))
    {
        calcularTotal();
    }
}
);

$('#codigo').focusout(
        function(){
            var codigo = $('#codigo').val();
            $.ajax({
                url: _url_codigo_validation + codigo,
                //dataType: "json",
                complete: function (jqXHR) {
                    if(jqXHR.readyState === 4) {
                     var responseText=JSON.parse(jqXHR.responseText);
                     if(responseText.codigo === 'error')
                     {
                         show_error(responseText.mensaje,"Error");
                         //avoid user to submit form
                         $('#btn-guardar').attr('disabled','disabled');
                     }else
                     {
                         //enable user to submit form
                         $('#btn-guardar').removeAttr('disabled');
                     }
                     
          
        
                    }
                
                },
                error: function()
                {
                    
                }
              }).done(function() {
                 
              });
        }
        );
