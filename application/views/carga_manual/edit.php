<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Carga Manual Edit</h3>
            </div>
			<?php echo form_open('carga_manual/edit/'.$carga_manual['id']); ?>
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
									$selected = ($proveedor_cuentum['id'] == $carga_manual['proveedor_cuenta_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$proveedor_cuentum['id'].'" '.$selected.'>'.$proveedor_cuentum['proveedor_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto" class="control-label"><span class="text-danger">*</span>Monto</label>
						<div class="form-group">
							<input type="text" name="monto" value="<?php echo ($this->input->post('monto') ? $this->input->post('monto') : $carga_manual['monto']); ?>" class="form-control" id="monto" />
							<span class="text-danger"><?php echo form_error('monto');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_alta" class="control-label">Fecha Alta</label>
						<div class="form-group">
							<input type="text" name="fecha_alta" value="<?php echo ($this->input->post('fecha_alta') ? $this->input->post('fecha_alta') : $carga_manual['fecha_alta']); ?>" class="has-datetimepicker form-control" id="fecha_alta" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_modif" class="control-label">Fecha Modif</label>
						<div class="form-group">
							<input type="text" name="fecha_modif" value="<?php echo ($this->input->post('fecha_modif') ? $this->input->post('fecha_modif') : $carga_manual['fecha_modif']); ?>" class="has-datetimepicker form-control" id="fecha_modif" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="comentario" class="control-label">Comentario</label>
						<div class="form-group">
							<input type="text" name="comentario" value="<?php echo ($this->input->post('comentario') ? $this->input->post('comentario') : $carga_manual['comentario']); ?>" class="form-control" id="comentario" />
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