<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edici&oacute;n Pago Proveedor</h3>
            </div>
			<?php echo form_open('pago_proveedor/edit/'.$pago_proveedor['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="proveedor_cuenta_id" class="control-label">Proveedor Cuentum</label>
						<div class="form-group">
							<select name="proveedor_cuenta_id" class="form-control">
								<option value="">select proveedor_cuentum</option>
								<?php 
								foreach($all_proveedor_cuenta as $proveedor_cuentum)
								{
									$selected = ($proveedor_cuentum['id'] == $pago_proveedor['proveedor_cuenta_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$proveedor_cuentum['id'].'" '.$selected.'>'.$proveedor_cuentum['proveedor_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto" class="control-label"><span class="text-danger">*</span>Monto</label>
						<div class="form-group">
							<input type="text" name="monto" value="<?php echo ($this->input->post('monto') ? $this->input->post('monto') : $pago_proveedor['monto']); ?>" class="form-control" id="monto" />
							<span class="text-danger"><?php echo form_error('monto');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_alta" class="control-label">Fecha Alta</label>
						<div class="form-group">
							<input type="text" name="fecha_alta" value="<?php echo ($this->input->post('fecha_alta') ? $this->input->post('fecha_alta') : $pago_proveedor['fecha_alta']); ?>" class="has-datetimepicker form-control" id="fecha_alta" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="comentarios" class="control-label">Comentarios</label>
						<div class="form-group">
							<input type="text" name="comentarios" value="<?php echo ($this->input->post('comentarios') ? $this->input->post('comentarios') : $pago_proveedor['comentarios']); ?>" class="form-control" id="comentarios" />
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