<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h5>Informe IVA Ventas</h5>
                <h3>Seleccione el Periodo</h3>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <label for="_mes" class="control-label">Mes:</label>
                    <!--<input type="number" min="1" max="12" class="form-control" name="_mes" id="_mes">-->
                    <select class="form-control" name="_mes" id="_mes">
                        <?php for($i=1;$i<13;$i++){ ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="_anio" class="control-label">A&ntilde;o:</label>
                    <input type="number" min="2019" max="20000" class="form-control" name="_anio" id="_anio" value="2019" step="1">
                </div>
            </div>
            <div class="box-footer">
                <button type="button" class="btn btn-success" id="ver-informe">Ver Informe IVA Ventas</button>
            </div>
        </div>
    </div>
</div>
<script>
    var _url="<?php echo site_url("documento/informe_iva_ventas/"); ?>"
</script>