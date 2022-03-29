<div class="row">
    <div class="col-md-12">
      	<div  class="box box-info" style="border: 1px solid;">
            <div class="box-header with-border">
              	<h3 class="box-title">Agregar factura para el proveedor: <?php echo $proveedor['nombre']; ?></h3>
            </div>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="cuit" class="control-label">CUIT</label>
						<label class="control-label"><?php echo $proveedor['cuit']; ?></label>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label">Nombre:</label>
						<label class="control-label"><?php echo ($proveedor['nombre']); ?></label>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <?php 
            $attributes = array('id' => 'form_factura');
            echo form_open('documento/add_factura/'.$id_proveedor,$attributes); 
            ?>
          	<div class="box-body">
          		<div class="row clearfix">
                            <div class="col-md-3">
                                    <label for="codigo" class="control-label"><span class="text-danger">*</span>Nro. Factura</label>
                                    <div class="form-group">
                                        <input type="text" autocomplete="off" name="codigo" value="<?php echo $this->input->post('codigo'); ?>" class="form-control documento-codigo" id="codigo" />
                                            <span class="text-danger"><?php echo form_error('codigo');?></span>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                <label for="fecha" class="control-label">Fecha</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right select-fecha datepicker" name="fecha">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="periodo" class="control-label">Peri&oacute;do</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right  select-periodo monthpicker"  name="periodo">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="tipo-comprobante" class="control-label">Tipo de Comprobante</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-info"></i></span>
                                    <select class="form-control" value="A" name="tipo_documento">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="ND">ND</option>
                                        <option value="NC">NC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="pto-vta">Punto de Venta</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-info"></i></span>
                                    <input type="text" name="pto_vta" id="pto-vta" class="form-control">
                                </div>
                            </div>
<!--                            <div class="col-md-12">
                                    <label for="monto_neto" class="control-label">Monto Neto</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input type="number" step=".01" name="monto_neto" value="<?php //echo $this->input->post('monto_neto'); ?>" class="form-control  monto-type monto-type-neto" id="monto_neto" />
                                    </div>
                            </div>-->
                            <div class="col-md-12">
                                
                                    <div class="box-header with-border"  id="iva-label"  style="visibility: hidden">
                                            <h4 class="box-title">IVA</h4>
                                    </div>
                                    <div class="col-md-12" id="iva-parent" name="ivas">
                                    </div>
                            </div>   
                            <div class="col-md-12">
                                <div class="box-header with-border" id="percepcion-label"  style="visibility: hidden">
                                        <h4 class="box-title">Percepciones</h4>
                                </div>
                                <div class="col-md-12" id="percepcion-parent" name="percepciones">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="box-header with-border" id="retencion-label"  style="visibility: hidden">
                                        <h4 class="box-title">Retenciones</h4>
                                </div>
                                <div class="col-md-12" id="retencion-parent" name="retenciones">
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <label for="_c_no_gravados">Conceptos no Gravados:</label>
                                <div class="form-group">
                                    <input type="number" step=".01" id="_c_no_gravados" name="_c_no_gravados" class="form-control monto-type" value="0">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="_imp_internos">Impuestos Internos:</label>
                                <div class="form-group">
                                    <input type="number" step=".01" id="_imp_internos" name="_imp_internos" class="form-control monto-type" value="0">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                    <label for="monto_total" class="control-label monto-type">Monto Total</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input  style="pointer-events: none;"   type="number" name="monto_total" value="<?php echo $this->input->post('monto_total'); ?>" class="form-control  monto-type monto-total " step=".01" />
                                    </div>
                            </div>
			
			</div>
          	<div class="box-footer">
                    <button type="submit" class="btn btn-success" id="btn-guardar">
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
                Agregar Percepci&oacute;n
            </button>
            <button class="btn btn-warning" id="agregar-retencion">
                    Agregar Retenci&oacute;n
            </button>
            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-danger btn-sm">Cancelar</a>       
        </div> 
    </div> 
</div>
<div id="iva_content" style="visibility: hidden">
    <div class="hidden-iva-row iva-row col-md-12" style="background-color: #CBF0FC;">
        <div class="col-md-4">
            <label for="monto-neto" class="control-label">Neto</label>
            <div class='input-group'>
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                <input type='number' step=".01" name='iva_monto_neto[]' id="0" value='' class='form-control monto-type monto-type-iva' id='monto' />
        
            </div>
        </div>
        
	<div class='col-md-4'>
            <label for='monto' class='control-label'>Monto IVA</label>
            <div class='input-group'>
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type='number' step=".01" name='iva_monto[]' id="0" value='' class='form-control monto-type monto-type-iva' id='monto' />
            </div>
	</div>
	<div class='col-md-4'>
            <label for='porcentaje' class='control-label'>Porcentaje </label>
            <div class='input-group'>
<!--                    <input type='number' step=".01" name='iva_porcentaje[]' id="0" value='' class='form-control' id='porcentaje' />
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>-->
                <select name="iva_porcentaje[]" class="form-control">
                    <option value="21">21%</option>
                    <option value="10.5">10.5%</option>
                    <option value="27">27%</option>
                    <option value="2.5">2.5%</option>
                </select>
            </div>
	</div>
        <div class='col-md-1'>
            <label class="form-check-label" for="exampleCheck1">Borrar</label>
            <div class="form-group">
                <input type="button" class="btn btn-danger form-check-input" value="X" >
            </div>
        </div>
    </div>
</div>


<div id="percepcion_content" style="visibility: hidden">
    <div class="hidden-percepcion-row percepcion-row col-md-12" style="background-color: #FFF9D3;">
        <div class='col-md-4'>
            <label for='porcentaje' class='control-label'>Monto</label>
            <div class='input-group'>
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
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
            <label class="form-check-label" for="exampleCheck1">Borrar</label>
            <div class="form-group">
                <input type="button" class="btn btn-danger form-check-input" value="X" >
            </div>
        </div>
    </div>    
</div>

<div id="retencion_content" style="visibility: hidden">
    <div class="hidden-retencion-row retencion-row col-md-12"  style="background-color: #DEFFDE;">
        <div class='col-md-8'>
            <label for='porcentaje' class='control-label'>Monto</label>
            <div class='input-group'>
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
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
            <label class="form-check-label" for="exampleCheck1">Borrar</label>
            <div class="form-group">
                <input type="button" class="btn btn-danger form-check-input" value="X" >
            </div>
        </div>
    </div>    
</div>
<script>
    var _url_codigo_validation = "<?php echo site_url("documento/validar_codigo/".$id_proveedor."/");?>";
</script>