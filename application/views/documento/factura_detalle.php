<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
		<div class="box-header with-border">
			<h3>Detalle de factura</h3>
                         <?php if($factura['anulado']==1){ ?>
                        <label class="label-danger">ANULADO</label>
                         <?php } ?>
		</div>
          	<div class="box-body">
          		<div class="row clearfix">
                            <div class="col-md-12">
                            </div>
                            <div class="col-md-6">
                                    <label for="codigo" class="control-label">Nro. Factura</label>
                                    <div class="form-group">
                                            <input type="text" readonly="true" name="codigo" value="<?php echo $factura['codigo']  ; ?>" class="form-control documento-codigo" id="codigo" />
                                            
                                    </div>
                            </div>
                            
                            
                            <div class="col-md-12">
                                <label for="tipo-comprobante" class="control-label">Tipo de Comprobante</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-info"></i></span>
                                    <input type="text" readonly="true" name="tc" value="<?php echo $factura['tipo_documento']  ; ?>" class="form-control" id="tc" />
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <label for="pto-vta">Punto de Venta</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-info"></i></span>
                                    <input type="text" name="pto_vta" id="pto-vta" class="form-control" value="<?php echo $factura['pto_vta']  ; ?>" readonly="true">
                                </div>
                            </div>
                                    
                            <div class="col-md-6">
                                <label for="monto_neto" class="control-label">Proveedor</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-group"></i></span>
                                    <input type="text" readonly="true"   name="proveedor" value="<?php echo ($factura['proveedor']); ?>" class="form-control" id="monto_neto" />
                                </div>
                        </div>
                            <div class="col-md-12">
                                <label for="fecha" class="control-label">Fecha</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" readonly="true" class="form-control pull-right"  value="<?php echo $factura['fecha_carga'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="fecha" class="control-label">Periodo</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" readonly="true" class="form-control pull-right"  value="<?php echo $factura['periodo'] ?>">
                                </div>
                            </div>
<!--                            <div class="col-md-2">
                                    <label for="monto_neto" class="control-label">Monto Neto</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input  type="number" step=".01" readonly="true" name="monto_neto" value="<?php //echo number_format($factura['monto_neto'] ,2,'.',''); ?>" class="form-control  monto-type monto-type-neto" style="text-align: right;" ="monto_neto" />
                                    </div>
                            </div>-->
                            <div class="col-md-12">
                                
                                    <div class="box-header with-border"  id="iva-label"  >
                                            <h4 class="box-title">IVA</h4>
                                    </div>
                                    <div class="col-md-12" id="iva-parent" name="ivas">
                                        <?php 
                                        foreach($ivas as $iva)
                                        {

                                        ?>

                                        <div class="hidden-iva-row iva-row col-md-12">
                                                        
                                            <div class="col-md-12">
                                                <label for="monto-neto" class="control-label">Neto</label>
                                                <div class='input-group'>
                                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input type='number' readonly="true" step=".01" name='iva_monto_neto[]' id="0" value='<?php echo number_format($iva['monto_neto'],2,'.',''); ?>' class='form-control monto-type monto-type-iva' id='monto' />

                                                </div>
                                            </div>
                                            <div class='col-md-4'>
                                                            <label for='monto' class='control-label'>Monto</label>
                                                            <div class='input-group'>
                                                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                                    <input type='number' step=".01" readonly="true" name='iva_monto[]' id="0" value='<?php echo number_format($iva['monto'] ,2,'.',''); ?>' class='form-control monto-type monto-type-iva' id='monto'  style="text-align: right;" />
                                                            </div>
                                            </div>
                                            <div class='col-md-4'>
                                                            <label for='porcentaje' class='control-label'>Porcentaje</label>
                                                            <div class='input-group'>
                                                                <input type='number' step=".01" readonly="true" name='iva_porcentaje[]' id="0" value='<?php echo $iva['porcentaje']; ?>' class='form-control' id='porcentaje' />
                                                                <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                                            </div>
                                            </div>
                                                
                                        </div>


                                        <?php
                                        }

                                        ?>
                                    </div>
                            </div>   
                            <div class="col-md-12">
                                <div class="box-header with-border" id="percepcion-label" >
                                        <h4 class="box-title">Percepciones</h4>
                                </div>
                                <div class="col-md-12" id="percepcion-parent" name="percepciones">
								
                                    <?php

                                    foreach($percepciones as $p)
                                    {
                                    ?>
                                    <div class="hidden-percepcion-row percepcion-row col-md-12">
                                                    <div class='col-md-4'>
                                                            <label for='porcentaje' class='control-label'>Monto</label>
                                                            <div class='input-group'>
                                                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                                    <input type='number' step=".01" readonly="true" name='monto' value='<?php echo number_format($p['monto'] ,2,'.',''); ?>' class='form-control monto-type monto-type-percepcion' id='monto'  style="text-align: right;" />
                                                            </div>
                                                    </div>
                                                    <div class='col-md-4'>
                                                            <label  class='control-label'>Detalle</label>
                                                            <div class='form-group'>
                                                                    <input type='text' name='detalle_percepcion' readonly="true" value='<?php echo $p['detalle']; ?>' class='form-control' />
                                                            </div>
                                                    </div>
                                                    
                                                    
                                            </div>
                                    <?php
                                    }

                                    ?>
								
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="box-header with-border" id="retencion-label"  >
                                        <h4 class="box-title">Retenciones</h4>
                                </div>
                                <div class="col-md-12" id="retencion-parent" name="retenciones">
                                    <?php

                                    foreach($retenciones as $r)
                                    {
                                    ?>
                                        
                                        <div class="hidden-retencion-row retencion-row col-md-12">

                                            <div class='col-md-8'>
                                                <label for='porcentaje' class='control-label'>Monto</label>
                                                <div class='input-group'>
                                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input type='number' step=".01" readonly="true" name='monto_retencion[]' value='<?php echo number_format($r['monto'] ,2,'.',''); ?>' class='form-control monto-type monto-type-retencion' id='monto' style="text-align: right;"  />
                                                </div>
                                            </div>
                                            <div class='col-md-4'>
                                                <label  class='control-label'>Detalle</label>
                                                <div class='form-group'>
                                                        <input type='text' name='detalle_retencion' readonly="true" value='<?php echo $r['detalle']; ?>' class='form-control' />
                                                </div>
                                            </div>
                                            
                                        </div>    
                                      
                                    
                                    <?php
                                    }

                                    ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="_c_no_gravados">Conceptos no Gravados:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                    <input type="text" readonly="true" id="_c_no_gravados" name="_c_no_gravados" class="form-control" value="<?php echo number_format( $factura['conceptos_no_gravados'],2,'.',''); ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="_imp_internos">Impuestos Internos:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                    <input type="text" readonly="true" id="_imp_internos" name="_imp_internos" class="form-control" value="<?php echo number_format( $factura['impuestos_internos'],2,'.',''); ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                    <label for="monto_total" class="control-label monto-type">Monto Total</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input readonly="true" style="pointer-events: none; text-align: right;"   type="number" step=".01" name="monto_total" id="monto_total" value="<?php echo number_format($factura['monto_total'] ,2,'.',''); ?>" class="form-control  monto-type monto-total "  />
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
            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-default btn-sm">Volver</a>       
                
            <?php if($factura['anulado']==0){ ?>
            <a href="<?php echo site_url("documento/edit_factura").'/'.$factura['id']; ?>" class="btn btn-warning btn-sm">Editar</a> 
            <a href="<?php echo site_url("documento/anular_factura_c").'/'.$factura['id']; ?>" class="btn btn-danger btn-sm">Anular</a>       
            <?php }else{
                ?>
            <a href="<?php echo site_url("documento/restaurar_factura_c").'/'.$factura['id']; ?>" class="btn btn-info btn-sm">Restaurar</a>
            <?php
            } ?>
        </div> 
    </div> 
</div>
