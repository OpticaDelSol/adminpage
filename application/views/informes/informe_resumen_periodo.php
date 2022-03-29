<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h1 class="box-title">Informe Resumen Periodo</h1>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <label>Fecha Hasta:</label>
                    <input type="text" class="form-control datepicker" name="periodo" id="fecha">
                </div>
                <div class="col-md-12">
                    <button type="button" class="btn btn-default" id="continuar">Ver Informe</button>
                </div>
            </div>
            <div class="box-footer">
            </div>
        </div>
    </div>
</div>
<div id="contenedor-informe"></div>
<script>
    var _url = "<?php echo site_url("informe/get_informe_periodo/"); ?>";
</script>