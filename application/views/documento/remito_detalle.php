<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Detalle de Remito</h3>
                 <?php if($documento['anulado']==1){ ?>
                <label class="label-danger">ANULADO</label>
                 <?php } ?>
            </div>
            <div class="box-body">
                <div class="row clearfix">
                        <div class="col-md-6">
                                <label for="monto_neto" class="control-label">Nro. Remito</label>
                                <div class="form-group">
                                        <input type="text" readonly="true" name="nro-remito" value="<?php echo ($documento['codigo']); ?>" class="form-control" id="nro-remito" />
                                </div>
                        </div>
                        <div class="col-md-6">
                                <label for="monto_neto" class="control-label">Proveedor</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-group"></i></span>
                                    <input type="text" readonly="true"   name="proveedor" value="<?php echo ($documento['proveedor']); ?>" class="form-control" />
                                </div>
                        </div>
                    </div>
                <div class="row clearfix">
                        <div class="col-md-6">
                                <label for="monto_total" class="control-label">Monto</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input type="number" readonly="true"  name="monto_total" value="<?php echo ($documento['monto_total']); ?>" class="form-control" id="monto_total" />
                                </div>
                        </div>
                </div>
                
            </div>
	</div>
    </div>
</div>
<div class="row"> 
    <div class="box" > 
        <div class="box-footer"> 
            <?php if($documento['anulado']==0){ ?>
           <a href="<?php echo site_url("documento/anular_remito_c").'/'.$documento['id']; ?>" class="btn btn-danger btn-sm">Anular</a>       
            <?php }else{
                ?>
           <a href="<?php echo site_url("documento/restaurar_remito_c").'/'.$documento['id']; ?>" class="btn btn-info btn-sm">Restaurar</a>  
            <?php
            } ?>
           <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-default btn-sm">Volver</a>       
        </div> 
    </div> 
</div>
