<div class="row">
    <div class="col-md-12">
        <div class="box box-tools">
            <div class="box-header">
                <h3>Edici&oacute;n de <?php echo ($tipo_documento=="T" ? "Ticket" : 
                        ($tipo_documento=="NC"? "Nota de Cr&eacute;dito" : 
                        ($tipo_documento=="ND"? "Nota de D&eacute;bito" : "Factura Ventas" ))
                        ); ?></h3>
            </div>
            <div class="box-body">
                <?php echo form_open('documento/documento_ventas_edit/'.$idDocumento); ?>
                <div class="col-md-12">
                    <label for="_fecha" class="control-label">Fecha:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" id="datepicker" name="_fecha" class="form-control datepicker" value="<?php echo $documento['fecha_formated']; ?>">
                    </div>
                </div>
                <?php if($tipo_documento!='T'){ ?>
                    <div class="col-md-12">
                        <label for="_tipo_comprobante" class="control-label">Tipo de comprobante:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-info"></i></span>
                            <select class="form-control pull-right" name="_tipo_comprobante" id="_tipo_comprobante">
                                <option value="">Seleccione...</option>
                                <option value="A" <?php echo ($documento['tipo_comprobante'] == 'A' ? "selected='selected'":'') ?>>A</option>
                                <option value="B" <?php echo ($documento['tipo_comprobante'] == 'B' ? "selected='selected'":'') ?>>B</option>
                            </select>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-12">
                    <label for="punto_venta" class="control-label">Sucursal:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-building"></i></span>
                        <select class="form-control" name="punto_venta" id="punto_venta">
                        <option value="">Seleccione...</option>
                            <?php foreach($sucursales as $a){  ?>
                        <option value="<?php  echo $a['id']; ?>" <?php  echo ($documento['fk_sucursal'] == $a['id'] ? "selected='selected'":'') ?>><?php echo $a['alias'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="_pto_vta" class="control-label">Pto. de venta:</label>
                    <div class="form-group">
                        <input type="text" id="_pto_vta" name="_pto_vta" class="form-control" value="<?php echo $documento['pto_vta']; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="_nro" class="control-label">Nro. de comprobante:</label>
                    <div class="input-group">
                        <span class="input-group-addon">#</span>
                        <input type="text" id="_nro" name="_nro" class="form-control" value="<?php echo $documento['codigo']; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="_razon_social" class="control-label">Raz&oacute;n social o nombre:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-info"></i></span>
                        <input type="text" id="_razon_social" name="_razon_social" class="form-control" value="<?php echo $documento['razon_social_nombre']; ?>">
                    </div>
                </div>
                <?php if($tipo_documento!='T'){ ?>
                <div class="col-md-12">
                    <label for="_cuit_dni" class="control-label">CUIT o DNI:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-info"></i></span>
                        <input type="text" id="_cuit_dni" name="_cuit_dni" class="form-control" value="<?php echo $documento['cuit_dni']; ?>">
                    </div>
                </div>
                <?php } ?>
                <div class="col-md-12">
                    <label for="_valor_bruto">Valor bruto:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <input type="number" id="_valor_bruto" step=".01" name="_valor_bruto" class="form-control" value="<?php echo number_format( $documento['monto_neto'],2,'.','' ); ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="_iva">IVA:</label>
                    <div class="input-group">
                        
                        <input type="number" id="_iva" step=".01" name="_iva" class="form-control" value="<?php echo number_format( $documento['iva'],2,'.','' ); ?>">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="_valor_total">Valor total:</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <input type="number" id="_valor_total" step=".01" name="_valor_total" class="form-control" value="<?php echo number_format( $documento['monto_total'],2,'.','' ); ?>" readonly="true">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="col-md-12" class="control-label">
                    <input type="submit" class="btn btn-success" value="Guardar">
                    <?php 
                     echo form_close(); 
                    ?>
                    <a href="<?php echo site_url('dashboard/'); ?>" class="btn btn-warning">Cancelar</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>