$('#fkProveedor').change(
        function(){
            
            let _id_proveedor = $(this).children("option:selected").val();
            
            if(_id_proveedor == '_nuevo')
            {
                window.location.href = _url_nuevo_proveedor;
            }
            else
            {
                window.location.href = _url + _id_proveedor;
            }
        }
        );
