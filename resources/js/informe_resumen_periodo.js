function ActualizarInforme()
{
    var _codigo =  $('#fecha').val();
    
    $.ajax(
        {
            url: _url + _codigo,
            success(data,textStatus,jqXHR)
            {

                $("#contenedor-informe").html(data);
            }
        }
        );
}

$(document).on('click','#continuar',function(){
    ActualizarInforme();
});