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
            <?php echo form_open('documento/add_factura/'.$id_proveedor); ?>
          	<div class="box-body">
          		<div class="row clearfix">
                            <div class="col-md-6">
                                    <label for="codigo" class="control-label"><span class="text-danger">*</span>Nro. Factura</label>
                                    <div class="form-group">
                                            <input type="text" name="codigo" value="<?php echo $this->input->post('codigo'); ?>" class="form-control documento-codigo" id="codigo" />
                                            <span class="text-danger"><?php echo form_error('codigo');?></span>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <label for="monto_neto" class="control-label">Monto Neto</label>
                                    <div class="form-group">
                                            <input type="number" name="monto_neto" value="<?php echo $this->input->post('monto_neto'); ?>" class="form-control  monto-type" id="monto_neto" />
                                    </div>
                            </div>
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
                            <div class="col-md-6">
                                    <label for="monto_total" class="control-label monto-type">Monto Total</label>
                                    <div class="form-group">
                                            <input type="number" name="monto_total" value="<?php echo $this->input->post('monto_total'); ?>" class="form-control  monto-type" id="monto_total" />
                                    </div>
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
<div class="row"> 
    <div class="box" > 
        <div class="box-footer"> 
            <button class="btn btn-warning" id="agregar-iva" >
                    Agregar IVA
            </button>
            <button class="btn btn-warning" id="agregar-percepcion">
                    Agregar Percepcion
            </button>
            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-danger btn-sm">Cancelar</a>       
        </div> 
    </div> 
</div>
<div id="iva_content" style="visibility: hidden">
    <div class="hidden-iva-row iva-row">
        <div class='col-md-12'>
            <div class="form-check">
                     <input type="checkbox" class="form-check-input"  id="cb_del_iva[0]">
                     <label class="form-check-label" for="exampleCheck1">Eliminar</label>
            </div>
        </div>
	<div class='col-md-6'>
            <label for='monto' class='control-label'>Monto</label>
            <div class='form-group'>
                    <input type='number' name='iva_monto[]' id="0" value='' class='form-control  monto-type' id='monto' />
            </div>
	</div>
	<div class='col-md-6'>
            <label for='porcentaje' class='control-label'>Porcentaje </label>
            <div class='form-group'>
                    <input type='number' name='iva_porcentaje[]' id="0" value='' class='form-control' id='porcentaje' />
                    <label class='control-label'>%</label>
            </div>
	</div>
        <div class='col-md-12'><hr class='style1'></div>
    </div>
</div>


<div id="percepcion_content" style="visibility: hidden">
    <div class="hidden-percepcion-row percepcion-row">
        <div class='col-md-12'>
            <div class="form-check">
                     <input type="checkbox" class="form-check-input"  id="cb_del_iva[0]">
                     <label class="form-check-label" for="exampleCheck1">Eliminar</label>
            </div>
        </div>
        <div class='col-md-12'>
            <label for='monto' class='control-label'>Detalle</label>
            <div class='form-group'>
                <input type='text' name='detalle_percepcion' value='' class='form-control' id='monto' />
            </div>
        </div>
        <div class='col-md-12'>
            <label for='porcentaje' class='control-label'>Monto</label>
            <div class='form-group'>
                <input type='number' name='porcentaje' value='' class='form-control monto-type' id='porcentaje' />
            </div>
        </div>
        <div class='col-md-12'><hr class='style1'></div>
    </div>    
</div>