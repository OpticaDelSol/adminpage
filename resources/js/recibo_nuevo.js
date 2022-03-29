$('#fkProveedor').change(
        function(){
            let _id_proveedor = $(this).children("option:selected").val();
            $('.monto-recibo').val( 0 );
            $.ajax(
                    {
                        url: _url + _id_proveedor,
                        success(data,textStatus,jqXHR)
                        {
                           $("#seleccion_pago").html(data);
                           $("#seleccion_pago > .form-group > .select-pago").change
                           (
                                   function()
                                    {
                                        var selected = $(this).find('option:selected');
                                        var _monto = selected.data('foo'); 
                                        $('.monto-recibo').val( _monto );
                                    }
                                   );
                        }
                    }
                    );
        }
        );