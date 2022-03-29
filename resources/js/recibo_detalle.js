$('#anular_btn').click(function()
{
    event.preventDefault();
    question("Anular recibo? La accion no podra ser reevertida.","Confirmar",
    _url,
    [
        "Recibo Anulado",
        "Se ha anulado el recibo"
    ],
    [
        "Error",
        ""
    ]
            );  
});

