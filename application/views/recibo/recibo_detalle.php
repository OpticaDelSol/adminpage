<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3>Detalle Recibo</h3>
            </div>
            <div class="box-body">
                
                <div class="col-md-12">
                    <label for="nro_recibo" class="control-label">Nro. Recibo</label>
                    <input type="text" readonly="true" value="<?php echo $recibo['nro_recibo']; ?>" class="form-control" style="text-align: left;" id="nro_recibo">
                </div>
                <div class="col-md-3">
                    <label for="monto" class="control-label">Monto</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" readonly="true" value="<?php echo number_format($recibo['monto'],2,'.','');  ?>" class="form-control" style="text-align: right;" id="monto">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="fecha" class="control-label">Fecha</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <input type="text" readonly="true" value="<?php echo ($recibo['fecha']);  ?>" class="form-control" style="text-align: left;" id="fecha">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="proveedor" class="control-label">Proveedor</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-group"></i></span>
                        <input type="text" readonly="true" value="<?php echo $recibo['proveedor'] ?>" class="form-control" style="text-align: left" id="proveedor" >
                    </div>
                </div>
                <div class="col-md-12">
                    <?php if($recibo['anulado'] == 1) {?><label class="control-label label-danger "> Anulado </label><?php } ?>
                </div>
            </div>
            <div class="box-footer">
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-default">Volver</a>
                <?php if($recibo['anulado'] == 0) {?>
                    <a href="<?php ?>" class="btn btn-default" id="anular_btn">Anular Recibo</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
    var _url= "<?php echo (site_url("recibo/anular_recibo/").$recibo['id']); ?>";
</script>