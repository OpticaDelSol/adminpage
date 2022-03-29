$("#ver-informe").click(function(){
     var mes=$("#_mes").val();
     var anio=$("#_anio").val();
     window.location.href = _url+mes+"/"+anio;
});