$("#ver-informe").click(function(){
     
    var dia=$("#_dia").val();
     var mes=$("#_mes").val();
     var anio=$("#_anio").val();
     
    var diah=$("#_diah").val();
     var mesh=$("#_mesh").val();
     var anioh=$("#_anioh").val();
     
     window.location.href = _url+dia+"/"+mes+"/"+anio+"/"+diah+"/"+mesh+"/"+anioh;
     
});
$("#btn-sel-periodo").click(function(){
     
    var periodo=$("#periodo").val();
    
    if(periodo === ""){
        alert("Debe seleccionar el periodo.");
    }
     
     window.location.href = _url2+periodo;
     
     
});