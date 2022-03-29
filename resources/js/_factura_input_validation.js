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
$('.monto-type').focusout
(
         function()
                    {
                        if(!_validate_numeric_only($(this).text()))
                        {
                            $(this).parent().addClass('has-error');
                        }
                    }
        );
$('.documento-codigo').focusout(
        function ()
        {
            if(_validate_codigo($('.documento-codigo').text()))
                {
                    $(this).addClass('is-invalid');
                }
        }
        );

/*function validate()
{
    $('.monto-type').each
    (
            function()
                    {
                        if(!_validate_numeric_only($(this).text()))
                        {
                            alert('Valor no válido');
                            return;
                        }
                    }
    );
 
    if(_validate_codigo($('.documento-codigo').text()))
    {
        alert('Código no válido');
        return;
    }
    
}

$('')*/