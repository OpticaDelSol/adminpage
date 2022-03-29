$('#form-pago').submit(
        function(e)
        {
            if($.trim( $('.dtp-fecha').val() ) === '')
            {
                alert("Fecha no valida.");
                e.preventDefault();
                return false;
            }
            if($.trim( $('.monto-total').val() ) === '')
            {
                alert("El monto es 0.");
                e.preventDefault();
                return false;
            }
        }
        );

function _validate_numeric_only(input)
{
    //replace comma decimal separator by dot...
    input = input.replace(',','.');
    return /^[0-9.]$/.test(input);
}

function calcularTotal()
{
    var total = 0;
    if($('.modo-pago-monto').length > 1)
    {
        $('.modo-pago-monto').each(
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
                        total += parseFloat(__monto);
                    }
                }
                );
        $('.monto-total').val(total.toFixed(2));
    }
}

$(document).on('focusout', '[type=number]',
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

$(document).on('keyup','[type=number]',

function()
{
    if($(this).hasClass('monto-type'))
    {
        calcularTotal();
    }
}

);
$('#agregar-modo-pago').click
(
function()
    {
        $('#modos-parent').append($('#modo-pago-content').html());
    }
);
