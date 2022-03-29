<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
		<div class="box-header with-border">
			<h3>Edici&oacute;n de factura</h3>
		</div>
            <?php echo form_open('documento/edit_factura/'.$factura['id']); ?>
          	<div class="box-body">
          		<div class="row clearfix">
                            <div class="col-md-12">
                                <span><?php echo validation_errors(); ?></span>
                            </div>
                            <div class="col-md-6">
                                    <label for="codigo" class="control-label"><span class="text-danger">*</span>Nro. Factura</label>
                                    <div class="form-group">
                                            <input type="text" name="codigo" value="<?php echo ($this->input->post('codigo')? $this->input->post('codigo') : $factura['codigo'])  ; ?>" class="form-control documento-codigo" id="codigo" />
                                            <span class="text-danger"><?php echo form_error('codigo');?></span>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <label for="fecha" class="control-label">Fecha</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right datepicker" id="datepicker" name="fecha" value=" <?php echo $factura['fecha_carga']; ?>">
                                    <span class="text-danger"><?php echo form_error('factura');?></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="periodo" class="control-label">Periodo</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right monthpicker" id="" name="periodo" value=" <?php echo $factura['periodo']; ?>">
                                    <span class="text-danger"><?php echo form_error('periodo');?></span>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <label for="tipo-comprobante" class="control-label">Tipo de Comprobante</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-info"></i></span>
                                    <select class="form-control" value=" <?php echo $factura['tipo_documento']; ?>" name="tipo_documento">
                                        <?php 
                                        $tipos =[
                                            'A',
                                            'B',
                                            'C',
                                            'A-ND',
                                            'A-NC',
                                            ];
                                            foreach ($tipos as $t){
                                                ?>
                                        <option value="<?php echo $t ?>" <?php echo ($t == $factura['tipo_documento'] ? "selected='selected'" : ""); ?>><?php echo $t ?></option>
                                        <?php
                                            }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="pto-vta">Punto de Venta</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-info"></i></span>
                                    <input type="text" name="pto_vta" id="pto-vta" class="form-control" value="<?php echo $factura['pto_vta']; ?>">
                                </div>
                            </div>
                            
                            
<!--                            <div class="col-md-12">
                                    <label for="monto_neto" class="control-label">Monto Neto</label>
                                    <div class="form-group">
                                            <input type="number" step=".01" name="monto_neto" value="<?php //echo ($this->input->post('monto_neto')? $this->input->post('monto_neto') : $factura['monto_neto']); ?>" class="form-control  monto-type monto-type-neto" id="monto_neto" />
                                    </div>
                            </div>-->
                            <div class="col-md-12">
                                
                                    <div class="box-header with-border"  id="iva-label"  style="visibility: hidden">
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
                                                    <input type='number' step=".01" name='iva_monto_neto[]' value='<?php echo $iva['monto_neto']; ?>' class='form-control monto-type monto-type-iva' />

                                                </div>
                                            </div>                                                        
                                                <div class='col-md-4'>
                                                    <label for='monto' class='control-label'>Monto IVA</label>
                                                    <div class='form-group'>
                                                        <input type='number' step=".01" name='iva_monto[]'value='<?php echo $iva['monto']; ?>' class='form-control monto-type monto-type-iva' />
                                                    </div>
                                                </div>
                                            <div class='col-md-4'>
                                                            <label for='porcentaje' class='control-label'>Porcentaje (%)</label>
                                                            <div class='form-group'>
                                                                <select name="iva_porcentaje[]" class="form-control">
                                                                    <option value="21">21%</option>
                                                                    <option value="10.5">10.5%</option>
                                                                    <option value="27">27%</option>
                                                                    <option value="2.5">2.5%</option>
                                                                </select>
                                                                            <!--<input type='number' step=".01" name='iva_porcentaje[]' id="0" value='<?php echo $iva['porcentaje']; ?>' class='form-control' id='porcentaje' />-->

                                                            </div>
                                            </div>
                                            <div class='col-md-4'>
                                                            <div class="form-check">
                                                                             <!--<input type="checkbox" class="form-check-input"  id="cb_del_iva[0]">-->
                                                                             <label class="form-check-label" for="exampleCheck1">Eliminar</label>
                                                                             <input type="button" class="btn btn-danger form-check-input" value="X" >
                                                            </div>
                                            </div>
                                        </div>


                                        <?php
                                        }

                                        ?>
                                    </div>
                            </div>   
                            <div class="col-md-12">
                                <div class="box-header with-border" id="percepcion-label"  style="visibility: hidden">
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
                                                            <div class='form-group'>
                                                                    <input type='number' step=".01" name='monto' value='<?php echo $p['monto']; ?>' class='form-control monto-type monto-type-percepcion' id='monto' />
                                                            </div>
                                                    </div>
                                                    <div class='col-md-4'>
                                                            <label  class='control-label'>Detalle</label>
                                                            <div class='form-group'>
                                                                    <input type='text' name='detalle_percepcion' value='<?php echo $p['detalle']; ?>' class='form-control' />
                                                            </div>
                                                    </div>
                                                    
                                                    <div class='col-md-4'>
                                                            <div class="form-check">
                                                                             <!--<input type="checkbox" class="form-check-input"  >-->
                                                                             <label class="form-check-label" for="exampleCheck1">Eliminar</label>
                                                                             <input type="button" class="btn btn-danger form-check-input" value="X" >
                                                            </div>
                                                    </div>
                                            </div>
                                    <?php
                                    }

                                    ?>
								
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="box-header with-border" id="retencion-label"  style="visibility: hidden">
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
                                                <div class='form-group'>
                                                    <input type='number' step=".01" name='monto_retencion[]' value='<?php echo $r['monto']; ?>' class='form-control monto-type monto-type-retencion' id='monto' />
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <label for='porcentaje' class='control-label'>Detalle</label>
                                                <div class='form-group'>
                                                        <select name="detalle_retencion[]"  class='form-control' value="<?php echo $r['detalle']; ?>">
                                                            <option value="RETENCIONES_IVA">RETENCIONES IVA</option>
                                                            <option value="RETENCIONES_GANANCIAS">RETENCIONES GANANCIAS</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class='col-md-1'>
                                                <div class="form-check">
                                                         <!--<input type="checkbox" class="form-check form-check-input"  >-->
                                                         <label class="form-check-label" for="exampleCheck1">Eliminar</label>
                                                         <input type="button" class="btn btn-danger form-check-input" value="X" >
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
                                <div class="form-group">
                                    <input type="number" step=".01" id="_c_no_gravados" name="_c_no_gravados" class="form-control monto-type" value="<?php echo $factura['conceptos_no_gravados']; ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="_imp_internos">Impuestos Internos:</label>
                                <div class="form-group">
                                    <input type="number" step=".01" id="_imp_internos" name="_imp_internos" class="form-control monto-type" value="<?php echo $factura['impuestos_internos']; ?>">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                    <label for="monto_total" class="control-label monto-type">Monto Total</label>
                                    <div class="form-group">
                                        <input readonly="true" style="pointer-events: none;"   type="number" step=".01" name="monto_total" id="monto_total" value="<?php echo $factura['monto_total']; ?>" class="form-control  monto-type monto-total "  />
                                    </div>
                            </div>
			
			</div>
          	<div class="box-footer">
                    <button type="submit" class="btn btn-success">
                            <i class="fa fa-check"></i> Guardar
                    </button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
            
    </div>
</div>
</div>
<div class="row"> 
    <div class="box" > 
        <div class="box-footer"> 
            <button class="btn btn-warning" id="agregar-iva" >
                    Agregar IVA
            </button>
            <button class="btn btn-warning" id="agregar-percepcion">
                    Agregar Percepcion
            </button>
            <button class="btn btn-warning" id="agregar-retencion">
                    Agregar Retenci&oacute;n
            </button>
            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-danger btn-sm">Cancelar</a>       
        </div> 
    </div> 
</div>
<div id="iva_content" style="visibility: hidden">
    <div class="hidden-iva-row iva-row col-md-12">
        <div class="col-md-12">
            <label for="monto-neto" class="control-label">Neto</label>
            <div class='input-group'>
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                <input type='number' step=".01" name='iva_monto_neto[]' id="0" value='' class='form-control monto-type monto-type-iva' id='monto' />
        
            </div>
        </div>
	<div class='col-md-4'>
            <label for='monto' class='control-label'>Monto IVA</label>
            <div class='form-group'>
                    <input type='number' step=".01" name='iva_monto[]' id="0" value='' class='form-control monto-type monto-type-iva' id='monto' />
            </div>
	</div>
	<div class='col-md-4'>
            <label for='porcentaje' class='control-label'>Porcentaje (%)</label>
            <div class='form-group'>
                    <!--<input type='number' step=".01" name='iva_porcentaje[]' id="0" value='' class='form-control' id='porcentaje' />-->
                <select name="iva_porcentaje[]" class="form-control">
                    <option value="21">21%</option>
                    <option value="10.5">10.5%</option>
                    <option value="27">27%</option>
                    <option value="2.5">2.5%</option>
                </select>
            </div>
	</div>
        
        <div class='col-md-4'>
            <label class="control-label">Eliminar</label>
            <div class="form-group">
                
                     <input type="button" class="btn btn-danger form-check-input" value="X"  id="cb_del_iva[0]">
                     <!--<label class="form-check-label" for="exampleCheck1">Eliminar</label>-->
            </div>
        </div>
    </div>
</div>


<div id="percepcion_content" style="visibility: hidden">
    <div class="hidden-percepcion-row percepcion-row col-md-12">

        <div class='col-md-4'>
            <label for='porcentaje' class='control-label'>Monto</label>
            <div class='form-group'>
                <input type='number' step=".01" name='monto_percepcion[]' value='' class='form-control monto-type monto-type-percepcion' id='monto' />
            </div>
        </div>
        <div class='col-md-4'>
            <label  class='control-label'>Detalle</label>
            <div class='form-group'>
                <input type='text' name='detalle_percepcion[]' value='' class='form-control' />
            </div>
        </div>
        <div class='col-md-4'>
            <label class="control-label">Eliminar</label>
            <div class="form-group">
                
                     <input type="button" class="btn btn-danger form-check-input" value="X"  id="cb_del_iva[0]">
                     
            </div>
        </div>
    </div>    
</div>

<div id="retencion_content" style="visibility: hidden">
    <div class="hidden-retencion-row retencion-row col-md-12">
        
        <div class='col-md-8'>
            <label for='porcentaje' class='control-label'>Monto</label>
            <div class='form-group'>
                <input type='number' step=".01" name='monto_retencion[]' value='' class='form-control monto-type monto-type-retencion' id='monto' />
            </div>
        </div>
        <div class='col-md-3'>
            <label for='porcentaje' class='control-label'>Detalle</label>
            <div class='form-group'>
                    <select name="detalle_retencion[]"  class='form-control'>
                        <option value="RETENCIONES_IVA">RETENCIONES IVA</option>
                        <option value="RETENCIONES_GANANCIAS">RETENCIONES GANANCIAS</option>
                    </select>
            </div>
        </div>
        <div class='col-md-1'>
            <label class="control-label">Eliminar</label>
            <div class="form-group">
                
                     <input type="button" class="btn btn-danger form-check-input" value="X"  >
                     
            </div>
        </div>
    </div>    
</div>