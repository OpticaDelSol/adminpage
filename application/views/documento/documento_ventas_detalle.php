<div class="row">
    <div class="col-md-12">
        <div class="box box-tools   <?php echo ($documento['anulado'] ==1) ? 'box-info':'box-danger'?> ">
            <div class="box-header">
                <h3>Detalle de <?php echo ($documento['tipo']=="T" ? "Ticket" : 
                        ($documento['tipo']=="NC"? "Nota de Cr&eacute;dito" : 
                        ($documento['tipo']=="ND"? "Nota de D&eacute;bito" : "Factura Ventas" ))
                        ); ?></h3>
                <?php if($documento['anulado'] ==1){?>
                <label class="label label-danger">
                    Anulado
                </label>
                <?php } ?>
            </div>
            <div class="box-body">
                
                <div class="col-md-12">
                    <label for="_fecha" class="control-label">Fecha:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text"  name="_fecha" class="form-control datepicker" value="<?php echo $documento['fecha_formated']; ?>" readonly="true">
                    </div>
                </div>
                <?php if($documento['tipo']!='T'){ ?>
                    <div class="col-md-12">
                        <label for="_tipo_comprobante" class="control-label">Tipo de comprobante:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-info"></i></span>
                            <input type="text"  name="_tp" class="form-control" value="<?php echo $documento['tipo_comprobante']; ?>" readonly="true">

                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-12">
                    <label for="punto_venta" class="control-label">Sucursal:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-building"></i></span>
                         <input type="text"  name="_s" class="form-control datepicker" value="<?php echo $documento['sucursal']; ?>" readonly="true">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="_pto_vta" class="control-label">Pto. de venta:</label>
                    <div class="form-group">
                        <input type="text" id="_pto_vta" name="_pto_vta" class="form-control" value="<?php echo $documento['pto_vta']; ?>" readonly="true">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="_nro" class="control-label">Nro. de comprobante:</label>
                    <div class="input-group">
                        <span class="input-group-addon">#</span>
                        <input type="text" id="_nro" name="_nro" class="form-control" value="<?php echo $documento['codigo']; ?>" readonly="true">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="_razon_social" class="control-label">Raz&oacute;n social o nombre:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-info"></i></span>
                        <input type="text" id="_razon_social" name="_razon_social" class="form-control" value="<?php echo $documento['razon_social_nombre']; ?>" readonly="true" >
                    </div>
                </div>
                <?php if($documento['tipo']!='T'){ ?>
                <div class="col-md-12">
                    <label for="_cuit_dni" class="control-label">CUIT o DNI:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-info"></i></span>
                        <input type="text" id="_cuit_dni" name="_cuit_dni" class="form-control" value="<?php echo $documento['cuit_dni']; ?>" readonly="true">
                    </div>
                </div>
                <?php } ?>
                <div class="col-md-12">
                    <label for="_valor_bruto">Valor bruto:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <input type="text" id="_valor_bruto" name="_valor_bruto" class="form-control" value="<?php echo number_format($documento['monto_neto'],2,'.',''); ?>" readonly="true">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="_iva">IVA:</label>
                    <div class="input-group">
                        
                        <input type="text" id="_iva" name="_iva" class="form-control" value="<?php echo number_format($documento['iva'],2,'.',''); ?>" readonly="true">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="_valor_total">Valor total:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <input type="text" id="_valor_total"  name="_valor_total" class="form-control" value="<?php echo number_format($documento['monto_total'],2,'.',''); ?>" readonly="true">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="<?php echo site_url('/dashboard/'); ?>" class="btn btn-info">Volver</a>
                <?php if($documento['anulado'] ==0){?>
<!--                    <a href="<?php echo site_url('documento/documento_ventas_edit/').$idDocumento; ?>" class="btn btn-warning btn-flat">Editar</a>-->
                    <!--<a href="<?php echo site_url('documento/anular/').$documento['dto_id'].'/'.$documento['tipo']; ?>" class="btn btn-danger btn-flat">Anular</a>-->
                <?php } else { ?>
<!--                    <a href="<?php echo site_url('documento/restaurar/').$documento['dto_id'].'/'.$documento['tipo']; ?>" class="btn btn-default btn-sm btn-flat">Restaurar </a>-->
                <?php } ?>
            </div>
        </div>
    </div>
</div>