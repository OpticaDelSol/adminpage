$('#localidad_id').val(1279);

$('#cuit').focusout(
        function(){
            var codigo = $('#cuit').val();
            $.ajax({
                url: _url_cuit_validation + codigo,
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
