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


$('#form_remito').submit(function(e){
    if($('#codigo').val()==="")
    {
        e.preventDefault();
        show_error("C&oacute;digo no v&aacute;lido","");
        return false;
    }
    if($('#select-fecha').val()==="")
    {
        e.preventDefault();
        show_error("Fecha no v&aacute;lida","");
        return false;
    }
    
    
    if($('#monto_total').val()==="")
    {
        e.preventDefault();
        show_error("campo monto vacio","");
        return false;
    }
    
});


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
                         show_notice(responseText.mensaje,"Error");
                         //avoid user to submit form
                         $('#btn-guardar').attr('disabled','disabled');
                     }
                     else
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