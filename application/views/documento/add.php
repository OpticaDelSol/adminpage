<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Documento Add</h3>
            </div>
            <?php echo form_open('documento/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="tipo" class="control-label"><span class="text-danger">*</span>Tipo</label>
						<div class="form-group">
							<select name="tipo" class="form-control">
								<option value="">select</option>
								<?php 
								$tipo_values = array(
									'FACTURA'=>'FACTURA',
									'REMITO'=>'REMITO',
								);

								foreach($tipo_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('tipo')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('tipo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="proveedor_cuenta_id1" class="control-label"><span class="text-danger">*</span>Proveedor Cuentum</label>
						<div class="form-group">
							<select name="proveedor_cuenta_id1" class="form-control">
								<option value="">select proveedor_cuentum</option>
								<?php 
								foreach($all_proveedor_cuenta as $proveedor_cuentum)
								{
									$selected = ($proveedor_cuentum['id'] == $this->input->post('proveedor_cuenta_id1')) ? ' selected="selected"' : "";

									echo '<option value="'.$proveedor_cuentum['id'].'" '.$selected.'>'.$proveedor_cuentum['proveedor_id'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('proveedor_cuenta_id1');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="codigo" class="control-label"><span class="text-danger">*</span>Codigo</label>
						<div class="form-group">
							<input type="text" name="codigo" value="<?php echo $this->input->post('codigo'); ?>" class="form-control" id="codigo" />
							<span class="text-danger"><?php echo form_error('codigo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_neto" class="control-label">Monto Neto</label>
						<div class="form-group">
							<input type="text" name="monto_neto" value="<?php echo $this->input->post('monto_neto'); ?>" class="form-control" id="monto_neto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_total" class="control-label">Monto Total</label>
						<div class="form-group">
							<input type="text" name="monto_total" value="<?php echo $this->input->post('monto_total'); ?>" class="form-control" id="monto_total" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_carga" class="control-label">Fecha Carga</label>
						<div class="form-group">
							<input type="text" name="fecha_carga" value="<?php echo $this->input->post('fecha_carga'); ?>" class="has-datetimepicker form-control" id="fecha_carga" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_modif" class="control-label">Fecha Modif</label>
						<div class="form-group">
							<input type="text" name="fecha_modif" value="<?php echo $this->input->post('fecha_modif'); ?>" class="has-datetimepicker form-control" id="fecha_modif" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>